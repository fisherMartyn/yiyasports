<?php
require '../yiyaclass/ConnDB.class.php';

$connobj=new ConnDB("localhost","yiya_users");
$conn=$connobj->GetConnId();
$tipsno=$_GET['tipsno'];
//echo $tipsno;
$q="select count(*) from yiyatips";
$result=mysqli_query($conn,$q) or  die(mysql_error());

$row=mysqli_fetch_assoc($result);
$num=$row['count(*)'];

for($i=0;$i<$tipsno;$i++){
      $q="select * from yiyatips where id=".rand(1,$num);
      $result=mysqli_query($conn,$q) or  die(mysql_error());
      $row=mysqli_fetch_assoc($result);
      echo "<li class='tip'>";
      echo $row['content'];
      echo "</li>";
}


mysqli_free_result($result);
$connobj->CloseConnId();

?>
