<?php
	require '../../yiyaclass/ConnDB.class.php';
	require '../../yiyaclass/ModifyPasswd.class.php';
	session_start();
    $nickname = $_SESSION['name'];
    $ps1 = $_GET['ps1'];
    $ps2 = $_GET['ps2'];
	$ops = $_GET['ops'];
		
	$connobj=new ConnDB("localhost","yiya_users");
	$conn=$connobj->GetConnId();	
	$a = new ModifyPasswdClass($conn);
	
	echo $a->Modify($nickname,$ops,$ps1,$ps2);	
	
	$connobj->CloseConnId();
?>
