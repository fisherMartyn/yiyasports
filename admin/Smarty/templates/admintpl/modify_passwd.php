<?php
	require '../../../../classes/ConnDB.class.php';
	require '../../../../classes/ModifyPasswd.class.php';
	session_start();
    $email = $_SESSION['name'];
    $ps1 = $_GET['ps1'];
    $ps2 = $_GET['ps2'];
	$ops = $_GET['ops'];
		
	$connobj=new ConnDB("localhost","root","wecanwin1","yiya_users");
	$conn=$connobj->GetConnId();	
	$a = new ModifyPasswdClass($conn);
	
	echo $a->Modify($email,$ops,$ps1,$ps2);	
	
	$connobj->CloseConnId();
?>
