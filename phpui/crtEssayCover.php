<?php
require "../yiyaclass/ResizeImage.function.php";

$id=$_POST['id'];
$imageid=$_POST['imageid'];
echo $id;
echo $imageid;
$covername="../essays/cover-".$id.".html";
if($imageid==""){
	$filename="../essays/".$id.".html";
	$text=file_get_contents($filename);
	file_put_contents($covername,$text);
}
else{
	
	$imagename=glob("../allimages/$imageid.*");
	$newname="../essays/".basename($imagename[0]);
	$filesrc="./essays/".basename($imagename[0]);
	copy($imagename[0],$newname);
	resizeImage($newname,180,150,false);
	$text=file_put_contents($covername,"<div class=\"coverimg\"><img src=\"$filesrc\"></div>");
}




?>
