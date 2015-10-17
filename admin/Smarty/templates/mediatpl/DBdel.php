<?php
$id = $_GET['id'];
if(isset($id)&&is_numeric($id)){
  require './class.php';
  $connobj=new ConnDB("localhost","root","wecanwin1","yiya_users");
  $conn=$connobj->GetConnId();
  $q = "delete from media where id = ".$id;
  $rst = mysqli_query($conn,$q) or die(mysql_error());
  if($rst){echo "删除成功";}
  else echo "删除失败";
  $connobj->CloseConnId(); 
}
?>
