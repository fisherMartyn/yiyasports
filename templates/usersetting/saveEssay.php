<?php
session_start();
$nickname=$_SESSION['name'];
$text=$_POST['content'];
$title=$_POST['title'];

$filename="../../essaydraft/".$nickname.'.html';
$titlename="../../essaydraft/".$nickname.'_title.html';

$fp1=fopen("$filename", "w+");
$fp2=fopen("$titlename", "w+");
if ( !is_writable($filename) ){
      die("文件:" .$filename. "不可写，请检查！");
}
else{
  file_put_contents ($filename, $text);
}

if ( !is_writable($titlename) ){
      die("文件:" .$titlename. "不可写，请检查！");
}
else{
  file_put_contents($titlename, $title);
}

fclose($fp1);
fclose($fp2);


?>
