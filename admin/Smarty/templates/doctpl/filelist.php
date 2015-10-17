<?php
	error_reporting(0);
//	header("Content-type: text/html; charset=gb2312");
	session_start();
	$username=$_SESSION['name'];
	$basedir="/www/workbench/xjw/yiya/admin/userfile/$username";
	if(!is_dir($basedir)) $basedir = dirname(__FILE__);
	$file_name = $_GET['downfile'];
	if(!empty($file_name)){
	$file_dir = $basedir . "/" . $file_name;
	if(dirname(realpath($file_dir)) < $basedir){
		echo "Permission Denied!";
		exit;
	}
	if (!file_exists($file_dir)) {
		echo "File Not Found!";
		exit;
	} else {
		$file = fopen($file_dir,"r");
		Header("Content-type: application/octet-stream");
		Header("Accept-Ranges: bytes");
		Header("Accept-Length: ".filesize($file_dir));
		Header("Content-Disposition: attachment; filename=" . $file_name);
		echo fread($file,filesize($file_dir));
		fclose($file);
		exit;
	}
}
	$dir=opendir($basedir);
	while(($file=@readdir($dir))!=false){
		$b="$basedir/$file";
		$a=@is_dir($b);
		if($a=="0"){
		$size=@filesize("$basedir/$file");
		$size=$size/1024;
		$size=@number_format($size,3);
		$lastsave=@date("Y-n-d H:i:s",filectime("$basedir/$file"));
		echo "<ul><li style='width:350px'>$file</li>";
		echo "<li style='width:250px'>$lastsave</li>";
		echo "<li style='width:150px'>$size KB</li>";
		echo "<li style='width:150px'><a href=\"./userfile/$username/$file\">下载</a></li></ul>";
		}
	}
	@closedir($dir);
?>
