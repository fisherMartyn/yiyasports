<?php
	require '../../yiyaclass/ConnDB.class.php';
	session_start();
	$nickname = $_GET['nickname'];
	$email=$_GET['email'];
	$ps= $_GET['ps'];
	$sex= $_GET['sex'];
	$regcode = $_GET['regcode'];
	$qq= $_GET['qq'];
	$phone=$_GET['phone'];
	$birthday=$_GET['birthday'];
	$province=$_GET['province'];
	$city=$_GET['city'];
	$signature=$_GET['signature'];
	$rqus=$_GET['rqus'];
	$rans=$_GET['rans'];
	if ($regcode != $_SESSION['vcode']){
		echo "vcode";
		exit;
	}
	if(!get_magic_quotes_gpc()){
		$email=addslashes($email);
		$nickname=addslashes($nickname);
		$sex=addslashes($sex);
		$qq=addslashes($qq);
		$phone=addslashes($phone);
		$birthday=addslashes($birthday);
		$province=addslashes($province);
		$city=addslashes($city);
		$signature=addslashes($signature);
		$rqus=addslashes($rqus);
		$rans=addslashes($rans);
	
	}
	$ps= md5($ps);
	$connobj=new ConnDB("localhost","yiya_users");
	$conn=$connobj->GetConnId();

	$nowtime=strtotime("now");
	$q="insert into users(email,nickname,password,tel,qq,birth_day,sex,province,city,signature,question,answer,regtime) values('$email','$nickname','$ps','$phone','$qq','$birthday','$sex','$province','$city','$signature','$rqus','$rans','$nowtime')";
	if(!mysqli_query($conn,$q))
		echo "fail";
	else{
		echo "success";
		$_SESSION['name']=$nickname;
	}
	$connobj->CloseConnId();
?>
