<?php


require '../../../../classes/ConnDB.class.php';
require '../../../../classes/UserLockTimestamp.class.php';
require '../../../../classes/SecurityControl.class.php';

$bemail=$_GET['bemail'];
$btime=$_GET['btime'];
$breason=$_GET['breason'];
$connobj=new ConnDB("localhost","root","wecanwin1","yiya_users");
$conn=$connobj->GetConnId();

$securityobj=new SecurityControl($conn,true,'');
if(!$securityobj->check()){
  exit;
}


$temp=new UserLockTimeStamp($conn,$bemail);
$temp->SetTime($btime,0);
$temp->SetReason($breason);

$connobj->CloseConnId();


?>
