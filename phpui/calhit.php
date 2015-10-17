<?php



require '../yiyaclass/ConnDB.class.php';

$connobj=new ConnDB("localhost","yiya_users");
$conn=$connobj->GetConnId();

$name=addslashes($_GET['name']);
$q="update calory_data set hitnum=hitnum+1 where name=\"".$name."\"";
mysqli_query($conn,$q);

$connobj->CloseConnId();
?>
