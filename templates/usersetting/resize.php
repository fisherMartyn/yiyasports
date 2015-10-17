<?php
	$nname=$_GET['nname'];
	$x=$_GET['x'];
	$y=$_GET['y'];
	$w=$_GET['w'];
	$h=$_GET['h'];
	$imsrc=$_GET['imsrc'];
	$imname=substr($imsrc,strrpos($imsrc,'/')+1,strlen($imsrc));
	
	//if the file exist, delete it.
	$aname[0]="../../avatar/".$nname.".jpeg";
	$aname[1]="../../avatar/".$nname.".jpg";
	$aname[2]="../../avatar/".$nname.".png";
	$aname[3]="../../avatar/".$nname.".gif";
	/*$res="0";
	if (file_exists($aname[0]))	{ 
		if(unlink($aname[0]))
			$res="0 success";
		else
			$res="0 fail";
	}
	if (file_exists($aname[1])){ 
		if(unlink($aname[1]))
			$res="1 success";
		else
			$res="1 fail";
	}
	if (file_exists($aname[2])){ 
		if(unlink($aname[2]))
			$res="2 success";
		else
			$res="2 fail";
	}
	if (file_exists($aname[3])){ 
		if(unlink($aname[3]))
			$res="3 success";
		else
			$res="3 fail";
	}
	*/
	
	$srcimg="../../temp/".$imname;
	
	$imageInfo = getimagesize($srcimg);
    if( $imageInfo!== false) {
        $imageType = strtolower(substr(image_type_to_extension($imageInfo[2]),1));
        $info = array(
                        "width"         =>$imageInfo[0],
                        "height"        =>$imageInfo[1],
                        "type"          =>$imageType,
                        "mime"          =>$imageInfo['mime'],
        );
		if($info[type] == "jpeg" or $info[type] == "jpg")
			$im = imagecreatefromjpeg( $srcimg );
		else if ($info[type] == "gif")
			$im = imagecreatefromgif( $srcimg );
		else if ( $info['type']=='png' )
			$im = imagecreatefrompng( $srcimg );
		else{
			echo "error";
			exit;
		}
	}
	else {
        echo "error";
		exit;
    }
	
	
	$desimg="../../avatar/".$imname;
	
	$newimg = imagecreatetruecolor( $w, $h );
	imagecopyresampled( $newimg, $im, 0, 0, $x, $y, $w, $h, $w,$h );
	imagejpeg( $newimg, $desimg);
	
	imagedestroy( $im );
	
	echo $imname;
	//echo $res;
	
	
?>
