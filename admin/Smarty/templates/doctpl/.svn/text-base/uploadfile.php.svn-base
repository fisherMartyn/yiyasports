<div id="content">
<?php
	session_start();
	$username=$_SESSION['name'];
	if($_POST[add]=="上传"){
	$rand1=rand(0,9);
	$rand2=rand(0,9);
	$rand3=rand(0,9);
	$filename=date("Ymdhms").$rand1.$rand2.$rand3;
//	echo"</br>$_FILES['file_name']['name']";
	if(empty($_FILES["file"]["name"])){
	echo "文件名不能为空";
	exit;
	}

	$oldfilename=$_FILES["file"]["name"];
	$filetype=substr($oldfilename,strrpos($oldfilename,"."),strlen($oldfilename)-strrpos($oldfilename,"."));
	if($_FILES["file"]["size"]>10000000){
	echo "<script>alert('文件超过10M,不能上传');</script>";
        exit;
	}
//	echo "</br>$oldfilename";
	$filename=$filename.$filetype;
	$savedir="./".$filename;
//	$savedir=$filename;
	echo "</br>$filename";
	echo"</br>$savedir";
	if(move_uploaded_file($_FILES["file"]["tmp_name"],$savedir)){
		$file=basename($savedir);
		echo"</br>文件上传成功!保存为: ".$savedir;
	}
	else{
		echo"<script language=javascript>";
		echo"alert('错误，无法上传');";
		echo"</script>";
	exit;
	}
}
?>
</div>
