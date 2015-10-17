<?php

//路径可以修改为自动获取

function resizeImage( $ori , $maxwidth=2000, $maxheight=2000, $autopath="true"){
	if( preg_match('/^http:\/\/[a-zA-Z0-9]+/', $ori ) ){
		return $ori;
	}
	if($autopath){
		define( 'ROOT_PATH', realpath(dirname(__FILE__)).'/' );
		$ori= ROOT_PATH . $ori;
	}
	$info = getImageInfo( $ori );

	if( $info ){
        //上传图片后切割的最大宽度和高度
	$width = $maxwidth;
	$height = $maxheight;
	$scrimg = $ori;

        if( $info['type']=='jpg' || $info['type']=='jpeg' ){
            $im = imagecreatefromjpeg( $scrimg );
        }
		if( $info['type']=='gif' ){
			$im = imagecreatefromgif( $scrimg );
		}
		if( $info['type']=='png' ){
			$im = imagecreatefrompng( $scrimg );
		}

		if( $info['width']<=$width && $info['height']<=$height ){
			return;
		} else {
			if( $info['width']/$width > $info['height']/$height ){
				$height = intval( $info['height']/($info['width']/$width) );
			} else {
				$width = intval( $info['width']/($info['height']/$height) );
			}
		}
		$newimg = imagecreatetruecolor( $width, $height );
		imagecopyresampled( $newimg, $im, 0, 0, 0, 0, $width, $height, $info['width'], $info['height'] );
		imagejpeg( $newimg, $ori );
		imagedestroy( $im );
	}
	return;
}

function getImageInfo( $img ){
	$imageInfo = getimagesize($img);
	if( $imageInfo!== false) {
		$imageType = strtolower(substr(image_type_to_extension($imageInfo[2]),1));
		$info = array(
				"width"		=>$imageInfo[0],
				"height"	=>$imageInfo[1],
				"type"		=>$imageType,
				"mime"		=>$imageInfo['mime'],
		);
		return $info;
	}else {
		return false;
	}
}

