<?php

require '../../yiyaclass/ConnDB.class.php';
$connobj=new ConnDB("localhost","yiya_users");
$conn=$connobj->GetConnId();

session_start();
$nickname=$_SESSION['name'];
$text=$_POST['content'];
$title=$_POST['title'];
$now=strtotime("now");
$imagesid=$_POST['imagesid'];
$images=explode(" ",$imagesid);
if($title==""){
	die("标题不能为空");
	exit;
}

if($text==""){
	die("内容不能为空");
	exit;
}

$q="insert into essay(title,author,pubtime) values('$title','$nickname',$now)";

$result=mysqli_query($conn,$q);
if(!$result){
  die("发布失败");
  exit;
}

$q="select id from essay where author='$nickname' and pubtime='$now'";
$result=mysqli_query($conn,$q);
$row=mysqli_fetch_assoc($result);

$filename="../../essays/".$row['id'].'.html';

$fp1=fopen("$filename", "w+");
if ( !is_writable($filename) ){
      die("发布失败！");
}
else{
  file_put_contents ($filename, $text);
}

for($i=0;$i<count($images);$i++){
	$q="update images set relatedtimes=relatedtimes+1 where id=".$images[$i];
	mysqli_query($conn,$q);
}
echo $row['id'];
fclose($fp1);


?>
