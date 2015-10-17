<?php
	session_start();
	require '../../yiyaclass/ConnDB.class.php';
	$connobj=new ConnDB("localhost","yiya_users");
	$conn=$connobj->GetConnId();
	$nname=$_SESSION['name'];
	$ops=$_GET['ops'];
	$ps1=$_GET['ps1'];
	$ps1=md5($ps1);
	if(!get_magic_quotes_gpc()){
		$nname=addslashes($nname);
	}
	$q="select * from users where nickname='$nname'";
	$result=mysqli_query($conn,$q);
	$row=mysqli_fetch_assoc($result);
	
	if (md5($ops) == $row['password']){
		
		$q="update users set password='$ps1' where nickname='$nname'";
		
		if(!mysqli_query($conn,$q))
			echo "error in mysql query";
		else
			echo "success";
		
		
	}
	else
		echo "incorrect origin password";
	mysqli_free_result($result);
	$connobj->CloseConnId();
?>