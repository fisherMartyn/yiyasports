<?php

$connobj=new ConnDB("localhost","yiya_users");
$conn=$connobj->GetConnId();
 $nowtime=strtotime("now");

 $q="select count(*) from users";
 $result=mysqli_query($conn,$q) or  die(mysql_error());
 $row=mysqli_fetch_assoc($result);	
 $totalmember=$row['count(*)'];
 

 $q="select count(*) from media";
 $result=mysqli_query($conn,$q) or  die(mysql_error());
 $row=mysqli_fetch_assoc($result);	
 $totalmedia=$row['count(*)'];


 $q="select count(*) from media where UNIX_TIMESTAMP(adddate)>$nowtime-3600*24";
 $result=mysqli_query($conn,$q) or  die(mysql_error());
 $row=mysqli_fetch_assoc($result);	
 $newmedia=$row['count(*)'];

$conn=$connobj->CloseConnId();
?>
