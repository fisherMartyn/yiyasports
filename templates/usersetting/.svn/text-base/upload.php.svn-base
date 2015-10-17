<?php
require '../../yiyaclass/ResizeImage.function.php';
$nname = $_POST['nnameval'];

if (!empty($_FILES)) {
	/*
    $ext = pathinfo($_FILES['Filedata']['name']);
    $ext = strtolower($ext['extension']); //ת��ΪСд//
    $tempFile = $_FILES['Filedata']['tmp_name'];
	if($ext!="png" and $ext!="jpg" and $ext!="jpeg" and $ext!="gif"){
		//need to add here//
		$ret['res'] = 2;
		$ret['path']="";
	}
	else{
		$path = dirname(__FILE__);
		$path = substr($path,0,strrpos($path,'/'));
		$path = substr($path,0,strrpos($path,'/'));
		$targetFile = $path."/temp/".$nname.".".$ext;
		move_uploaded_file($tempFile,$targetFile);
		
		
		$ret['res'] = 1;
		//$ret['path']=$targetFile;
		$ret['path']="./temp/".$nname.".".$ext;
		resizeImage("../../temp/".$nname.".".$ext,400,300,false);
		}
		*/
		echo "suc";
	}
else
{
	//$ret['res'] = 0;
	//$ret['path']="";
	echo "123";
}
echo $_FILES["file"]["name"];
//exit( json_encode( $ret ));


?>