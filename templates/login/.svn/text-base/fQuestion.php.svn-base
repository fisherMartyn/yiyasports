<?php
	require '../../yiyaclass/ConnDB.class.php';
	$fnickname=$_GET['fnickname'];
	$parm=$_GET['parm'];
	$ans=$_GET['psans'];
	
	$connobj=new ConnDB("localhost","yiya_users");
	$conn=$connobj->GetConnId();
	if(!get_magic_quotes_gpc()){
		$fnickname=addslashes($fnickname);
	}
	$q="select * from users where nickname= '$fnickname'";
	
	$result=mysqli_query($conn,$q);
	$row=mysqli_fetch_assoc($result);
	
	
	if ($parm == "1"){
		if($fnickname == $row['nickname']){
			if ($row['question'] == "")
				echo "no";
			else
				echo $row['question'];
		mysqli_free_result($result);
		$connobj->CloseConnId();
		exit;
		
		}
		
	}
	
	
	if ($parm == "2")
	{
		if($ans==$row['answer'])
			echo "success";
		else
			echo "fail";
		
		mysqli_free_result($result);
		$connobj->CloseConnId();
		exit;
	}
	
	
	
	
	
	
	
	
	
	
	
	
	/*
	//create new password
	$newps = "";
	for($i=1;$i<=6;$i++){
		if(rand(1,2) == 1)
			$newps .=chr(rand(65,90));
		else
			$newps .=rand(0,9);
	}
	$temp = $newps;
	$newps =md5($newps);
	$q = "update users set password = '$newps' where nickname = '$fnickname' ";
	
	if(!mysqli_query($conn,$q))
		echo "setpasswd failed";
	else
		echo "success"." ".$temp;
		*/
?>