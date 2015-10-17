<?php
require '../yiyaclass/ConnDB.class.php';

$connobj=new ConnDB("localhost","yiya_users");
$conn=$connobj->GetConnId();
$id=$_GET['id'];

$q="select * from yiyatips where id=".$tid;
$result=mysqli_query($conn,$q) or  die(mysql_error());

$row=mysqli_fetch_assoc($result);
$nickname=$row['nickname'];
$zan=$row['zan'];

echo "<div>";
echo "<img src=\"displayimages/".$row['img1']."\"/>";
echo "</div>";

$connobj->CloseConnId();

?>
