<?php
	session_start();
	require '../../../../classes/ConnDB.class.php';
	require '../../../../classes/ModifyBsinfoClass.php';
	$email = $_SESSION['name'];
	$name = $_GET['username'];
	$sex = $_GET['sex'];
	$day=$_GET['day'];
	$tel=$_GET['tel'];
	$qq=$_GET['qq'];
	$province= $_GET['province'];
	$city=$_GET['city'];
	$signature=$_GET['signature'];
	$connobj=new ConnDB("localhost","root","wecanwin1","yiya_users");
	$conn=$connobj->GetConnId();
	$a=new ModifyBsinfoClass($conn);
	if ($a->SetBsinfo($email,$name,$tel,$qq,$day,$sex,$signature,$province,$city))
	{	
		echo "修改成功！";
		$connobj->CloseConnId();
	}
	else
	{
		echo "输入信息有误，修改失败！";
		$connobj->CloseConnId();
	}
?>
