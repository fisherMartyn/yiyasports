<?php
require '../../yiyaclass/ConnDB.class.php';
$id=$_GET['id'];
$time=$_GET['time'];
$reason=$_GET['reason'];
$connobj=new ConnDB("localhost","yiya_users");
$conn=$connobj->GetConnId();
$nowtime_y=strtotime("now");
$nowtime_y+=$time*24*3600;
$q="update essay set bantime='$nowtime_y',banreason='$reason' where id='$id'";
$result=mysqli_query($conn,$q) or  die(mysql_error());
$connobj->CloseConnId();
?>
