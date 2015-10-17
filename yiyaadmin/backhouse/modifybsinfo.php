<?php

require '../../yiyaclass/ConnDB.class.php';
require '../../yiyaclass/SecurityControl.class.php';

$connobj=new ConnDB("localhost","yiya_users");
$conn=$connobj->GetConnId();

$securityobj=new SecurityControl($conn,true,'');
if(!$securityobj->check()){     
  exit;                                         
}                                      

//echo "1";
session_start();
$connobj=new ConnDB("localhost","yiya_users");
$conn=$connobj->GetConnId();
        $nickname = $_SESSION['name'];
	$name =addslashes($_GET['name']);
        $sex = addslashes($_GET['sex']);
        $birth_day=addslashes($_GET['birth_day']);
        $tel=addslashes($_GET['tel']);
        $qq=addslashes($_GET['qq']);
        $province= $_GET['province'];
        $city=$_GET['city'];
        $signature=addslashes($_GET['signature']);
        $mycomm="update users set province='$province', city='$city', sex='$sex', name='$name', tel ='$tel',qq='$qq',birth_day='$birth_day',signature='$signature'  where nickname='$nickname'";
        mysqli_query($conn,$mycomm) or  die(mysql_error());
        
	$connobj->CloseConnId();

?>
