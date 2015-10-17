<?php

require '../../../../classes/BasicInfo.class.php';
require '../../../../classes/ConnDB.class.php';
require '../../../../classes/SecurityControl.class.php';

$connobj=new ConnDB("localhost","root","wecanwin1","yiya_users");
$conn=$connobj->GetConnId();
$securityobj=new SecurityControl($conn,true,'');
if(!$securityobj->check()){
  exit;
}


$email=$_GET['email'];
$a=new BasicInfoClass($conn,$email);

$hts=$a->Display("readonly");
$connobj->CloseConnId();

echo $hts;


?>
