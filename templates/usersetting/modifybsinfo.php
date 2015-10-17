<?php
	require '../../yiyaclass/ConnDB.class.php';
	session_start();
	$nickname=$_SESSION['name'];
	$nname=$_GET['nickname'];
	if ($nickname != $nname){
		echo "error in session with code 3";
		exit;
	}
	$connobj=new ConnDB("localhost","yiya_users");
	$conn=$connobj->GetConnId();
	$name=$_GET['name'];
	$sex=$_GET['sex'];
	$prov=$_GET['prov'];
	$city=$_GET['city'];
	$qq=$_GET['qq'];
	$phone=$_GET['phone'];
	$birth=$_GET['birth'];
	if(!get_magic_quotes_gpc())
    {
            $name=addslashes($name);
            $sex=addslashes($sex);
            $prov=addslashes($prov);
            $qq=addslashes($qq);
			$phone = addslashes($phone);
			$birth = addslashes($birth);
			$city = addslashes($city);
    }
	$q="update users set name='$name',sex='$sex',province='$prov',qq='$qq',tel='$phone',birth_day='$birth',city='$city' where nickname='$nickname'";
	if(!mysqli_query($conn,$q))
		echo "error in database";
	else
		echo "success";
	$connobj->CloseConnId();
	
?>