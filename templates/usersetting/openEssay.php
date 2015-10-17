<?php
session_start();
$nickname=$_SESSION['name'];
$filename="../../essaydraft/".$nickname.'.html';
$titlename="../../essaydraft/".$nickname.'_title.html';
if (is_readable($filename) == false or is_readable($titlename) == false) {
        die('文件不存在或者无法读取');
} 

else{
  $text=file_get_contents ($filename);
  $title=file_get_contents($titlename);
  $result=array("text"=>$text,"title"=>$title);
  echo json_encode($result);
}


?>
