<?php


require '../../yiyaclass/ConnDB.class.php';
require '../../yiyaclass/SecurityControl.class.php';

$connobj=new ConnDB("localhost","yiya_users");
$conn=$connobj->GetConnId();

$securityobj=new SecurityControl($conn,true,'');
if(!$securityobj->check()){
  exit;
}




$nickname=$_GET['nickname'];
$q="select * from users where nickname='$nickname'";
$result=mysqli_query($conn,$q) or  die(mysql_error());
$row=mysqli_fetch_assoc($result);
$transex=array("无","女","男");
$transrole=array("一般","教练","管理员");
        echo "<tr><td><h4>基本信息</h4></td></tr>";
        echo "<tr><td style='text-align:right'>昵称:</td><td style='padding-left:20px'>".$row['nickname']."</td></tr>";
        echo "<tr><td style='text-align:right'>邮箱:</td><td style='padding-left:20px'>".$row['email']."</td></tr>";
        echo "<tr><td style='text-align:right'>姓名:</td><td style='padding-left:20px'>".$row['name']."</td></tr>";	
        echo "<tr><td style='text-align:right'>性别:</td><td style='padding-left:20px'>".$transex[$row['sex']]."</td></tr>";
        echo "<tr><td style='text-align:right'>生日:</td><td style='padding-left:20px'>".$row['birth_day']."</td></tr>";

        echo "<tr><td><h4>联系信息</h4></td></tr>";
        echo "<tr><td style='text-align:right'>手机:</td><td style='padding-left:20px'>".$row['tel']."</td></tr>";
        echo "<tr><td style='text-align:right'>QQ:</td><td style='padding-left:20px'>".$row['qq']."</td></tr>";
        echo "<tr><td style='text-align:right'>地址:</td><td style='padding-left:20px'>".$row['province'].$row['city']."</td></tr>";

        echo "<tr><td><h4>个性信息</h4></td></tr>";
        echo "<tr><td style='text-align:right'>身份:</td><td style='padding-left:20px'>".$transrole[$row['role']]."</td></tr>";
        echo "<tr><td style='text-align:right'>个性签名:</td><td style='padding-left:20px'>".$row['signature']."</td></tr>";
$connobj->CloseConnId();


?>
