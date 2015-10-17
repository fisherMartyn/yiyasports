<?php

function isusername($str) {
        if (preg_match('/^[0-9a-zA-Z\x00-\xff_]{3,30}$/',$str)){
                return true;
        }else {
                return false;
        }
}
function isemail($str) {
        if(preg_match("/^[0-9a-zA-Z_.]+@(([0-9a-zA-Z]+)[.])+[a-z]{2,4}$/i",$str )) {
                return true;
        }else {
                return false;
        }
}

	require '../../yiyaclass/ConnDB.class.php';
	session_start();
	$parm=$_GET['parm'];
	$name=$_GET['name'];
	$email=$_GET['email'];
	$tvcode=$_GET['tvcode'];
	//////////////////parm 3////////////////////
	if ($parm =='3')
	{
		if ($_SESSION['vcode'] == $tvcode){
			echo "OK";
			exit;
		}
		else{
			$_SESSION['vcode']= rand(1,10000);
			echo "验证码输入错误";
			exit;
		}
	}
	////////////////parm 1 and 2////////////////
	if(($parm =='1') and (!isusername($name))){
		echo "用户昵称为中文、英文字母、数字和下划线组成，长度为3-30个字符";
		exit;
	}
	else if ($parm =='1') 
		$check = "nickname";
	else if (($parm =='2') and (!isemail($email))){
		echo "不符合邮箱格式";
		exit;
	}
	else if ($parm=='2')
		$check = "email";
	addslashes($check);
	$connobj= new ConnDB("localhost","yiya_users");
	
	$conn= $connobj->GetConnId();
	if ($parm =='1')
		$q = "select * from users where $check='$name'";
	else if ($parm=='2')
		$q = "select * from users where $check='$email'";
	
	$result=mysqli_query($conn,$q);
	$row=mysqli_fetch_assoc($result);
	
	if (($row['nickname'] == $name) and ($parm=='1')){
		echo "用户已经存在";
		mysqli_free_result($result);
		exit;
	}
	else if (($row['email'] == $email) and ($parm =='2')){
		echo "该邮箱已经注册";
		mysqli_free_result($result);
		exit;
	}
	else{
		echo "OK";
		mysqli_free_result($result);
		exit;
	}
?>
