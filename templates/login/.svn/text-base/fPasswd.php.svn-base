<?php
	require '../../yiyaclass/ConnDB.class.php';
	session_start();
	$fnickname=$_GET['fnickname'];
	$femail = $_GET['femail'];
	$fvcode=$_GET['fvcode'];
	//check if the session is valid.
	if ($fvcode != $_SESSION['fvcode']){
		echo "验证码输入错误";
		$_SESSION['fvcode'] = rand(1000,9999);
		exit;
	}
	
	if(!get_magic_quotes_gpc()){
		$femail=addslashes($femail);
		$fnickname=addslashes($fnickname);
	}
	$connobj=new ConnDB("localhost","yiya_users");
	$conn=$connobj->GetConnId();
	
	$q="select * from users where nickname= '$fnickname'";
	
	$result=mysqli_query($conn,$q);
	$row=mysqli_fetch_assoc($result);
	
	if ($row['nickname'] !=$fnickname){
		echo "昵称不存在";
		mysqli_free_result($result);
		exit;
	}
	if ($row['email'] != $femail){
		echo "邮箱和昵称不匹配";
		mysqli_free_result($result);
		exit;
	}
	
	echo "success";
	mysqli_free_result($result);
		
	$connobj->CloseConnId();
	
	
?>
