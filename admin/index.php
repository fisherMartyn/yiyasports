<?php
session_start();
include './config.php';

//------------------------登录系统-----------------------
$act= $_GET['act'];
$title= '管理员系统';
$tplname= '';

switch($act){  
  case 'login':
    $tplname='login_admin.tpl';
    break;

  case 'admin':
    $tplname='admin.tpl';
    break; 
}
if($_SESSION['name']=='')
  $tplname='login_admin.tpl';
else
  $tplname='admin.tpl';
$smarty->assign('title',$title);
if($tplname !=''){
  $smarty->assign('tplname',$tplname);

}else{
  $smarty->assign('tplname','login_admin.tpl');
}

//----------------------模块选择------------------------
$operationtpl= '';
$op= $_GET['adop'];
switch($op){
  case 'basicinfo':
	$operationtpl='admintpl/basiclayout.tpl';
	break;
  case 'docmng':
	$operationtpl='doctpl/docmng.tpl';
	break;
  case 'usrmng':
	$operationtpl='usrtpl/usrmng.tpl';
	break;
  case 'mediamng':
	$operationtpl='mediatpl/mediamng.tpl';
	break;
  case 'banusers':
        $operationtpl='bantpl/banusers.tpl';
}
if($operationtpl!=''){
  $smarty->assign('operationtpl',$operationtpl);
}else{
  $smarty->assign('operationtpl','');
}


//------------------------------个人资料-----------------
$bsinfoop = $_GET['bsinfoop'];
switch($bsinfoop)
{
  case 'modify_passwd':
	$bsinfo = 'modifypasswd.tpl';
	break;
}


if($bsinfo!=''){
  $smarty->assign('bsinfo','admintpl/'.$bsinfo);
}
else{
  $smarty->assign('bsinfo','');
}

//---------------------------------------------------------------------------
$smarty->display('index.tpl');


?>
