<?php

require '../yiyaclass/ConnDB.class.php';
$connobj=new ConnDB("localhost","yiya_users");
$conn=$connobj->GetConnId();

$stype=addslashes($_GET['stype']);
$scontent=addslashes($_GET['scontent']);

$q="select scontent from srecord where scontent=\"".$scontent."\" limit 1";


$results = mysqli_query($conn,$q);
$rownum = mysqli_num_rows($results);

if($rownum==0){
$q="insert into srecord(scontent) values(\"".$scontent."\")";
mysqli_query($conn,$q);
}


$q="update srecord set total_c=total_c+1 where scontent=\"".$scontent."\"";
mysqli_query($conn,$q);

$q="update srecord set ".$stype."_c=".$stype."_c+1 where scontent=\"".$scontent."\"";
mysqli_query($conn,$q);

$connobj->CloseConnId();


?>
