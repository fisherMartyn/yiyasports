<?php


require '../../yiyaclass/ConnDB.class.php';
require '../../yiyaclass/UserLockTimestamp.class.php';
//require '../yiyaclass/SecurityControl.class.php';

$nickname=$_GET['nickname'];
$time=$_GET['time'];
$reason=$_GET['reason'];
$connobj=new ConnDB("localhost","yiya_users");
$conn=$connobj->GetConnId();
/*
$securityobj=new SecurityControl($conn,true,'');
if(!$securityobj->check()){
  exit;
}
*/

$temp=new UserLockTimeStamp($conn,$nickname);
$temp->SetTime($time,0);
$temp->SetReason($reason);

$connobj->CloseConnId();


?>
