<?php

require '../yiyaclass/ConnDB.class.php';
require '../yiyaclass/ResizeImage.function.php';

$connobj=new ConnDB("localhost","yiya_users");
$conn=$connobj->GetConnId();

if (!empty($_FILES)) {
    $now=strtotime("now");
    $uid = intval( $_REQUEST['uid'] );
    $ext = pathinfo($_FILES['Filedata']['name']);
    $ext = strtolower($ext['extension']);
    
    $fileTypes = array('jpg','jpeg','gif','png');
    $fileParts = pathinfo($_FILES['Filedata']['name']);
  
    if (!in_array($fileParts['extension'],$fileTypes)) {
                echo false;
		exit;
     }
    $q="insert into images(addtime) values($now)";
    $result=mysqli_query($conn,$q);
    if(!$result){
      echo false;
      exit;
    }
    $q="select last_insert_id()";
    $result=mysqli_query($conn,$q);
    $row=mysqli_fetch_row($result);
    $nname=$row[0];

    $tempFile = $_FILES['Filedata']['tmp_name'];
    $targetPath   ="../allimages/";
    $new_file_name = $nname.".".$ext;
    $targetFile = $targetPath . $new_file_name;
    move_uploaded_file($tempFile,$targetFile);
    resizeImage($targetFile,500,500,false);
    echo $new_file_name;
}
?>
