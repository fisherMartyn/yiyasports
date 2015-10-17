<?php
	require '../../../../classes/BasicInfo.class.php';
	require '../../../../classes/ConnDB.class.php';
	session_start();
    $username = $_SESSION['name'];
	$connobj=new ConnDB("localhost","root","wecanwin1","yiya_users");
	$conn=$connobj->GetConnId();
	$a=new BasicInfoClass($conn,$username);
	echo $a->Display("");
	$connobj-> CloseConnId();
?>
