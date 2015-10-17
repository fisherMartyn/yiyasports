<?php
require '../../yiyaclass/ConnDB.class.php';

$id = $_GET['id'];
if(isset($id)&&is_numeric($id)){
  $connobj=new ConnDB("localhost","yiya_users");
  $conn=$connobj->GetConnId();
  $q = "delete from label where id = ".$id;
  $rst = mysqli_query($conn,$q) or die(mysql_error());
  if($rst){echo "成功";}
  else echo "删除失败";
  $connobj->CloseConnId();
}
?>
