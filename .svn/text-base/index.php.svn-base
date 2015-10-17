<?php
include './config.php';
require './yiyaclass/ConnDB.class.php';
require './yiyaclass/LoginCheck.class.php';
session_start();


//-------------------------搜索内容---------------------------------------------------
@  $scontent=$_GET['scontent'];
  $smarty->assign('scontent',$scontent);

//------------------------------------------------------------------------------------




//-------------------------视频索引---------------------------------------------------
@  $mediaid=$_GET['mid'];
  $smarty->assign('mid',$mediaid);

//------------------------------------------------------------------------------------



//-----------------------文章索引-----------------------------------------------------

$essayid=$_GET['essayid'];
$smarty->assign('essayid',$essayid);

//------------------------------------------------------------------------------------





//----------------------------主模块--------------------------------
@$act=$_GET['act'];
$viewtpl='view_default.tpl';
switch($act){
//个人主页
   case 'userindex':
	$maintpl='userindex/userindex.tpl';
	include('templates/userindex/userindex.php');
	break;   
//信息模块
   case 'messagebox':
	$maintpl='messagebox/messagebox.tpl';
	break;
//个人设置
   case 'usersetting':
	$maintpl='usersetting/usersetting.tpl';
	break;
//社区
   case 'social':
	$maintpl='social/social.tpl';
	break;
//视频搜索列表
   case 'medialist':
        $smarty->clearCache('mediaList.tpl');
	$maintpl='media/mediaList.tpl';
	include('templates/media/mediaList.php');
	break;
//视频播放
   case 'media':
	$viewtpl='media/mediaPlay1.tpl';
	$maintpl='media/mediaPlay2.tpl';
	include('templates/media/mediaPlay.php');
	break;
   case 'media2':
        $smarty->clearCache('mediaPlay.tpl');
	$viewtpl='media/mediaPlay2.tpl';
	$maintpl='media/mediaPlay.tpl';
	include('templates/media/mediaPlay.php');
	break;
//文章搜索列表
   case 'essaylist':
	$maintpl='essaylist/essaylist.tpl';
	include("templates/essaylist/essaylist.php");
	break;
//文章阅读
   case 'essay':
	$maintpl='essay/essay.tpl';
	include("templates/essay/essay.php");
	break;
//健身模块
   case 'bodybuild':
	$maintpl='bodybuild/bodybuild.tpl';
	break;
//瘦身模块
   case 'bodyfit':
	$maintpl='bodyfit/bodyfit.tpl';
	break;
//健身、瘦身计划
   case 'bodyplan':
	$maintpl='bodyplan/bodyplan.tpl';
	break;
//健身、瘦身计划列表
   case 'bodyplanlist':
	$maintpl='bodyplanlist/bodyplanlist.tpl';
	break;
//展示区
  case 'display':
	$maintpl='display/display.tpl';
	break;
//网站主页
   default:
	$maintpl='main.tpl';
	$viewtpl='hotinfo/hotinfo.tpl';
}

  $smarty->assign('maintpl',$maintpl);
  $smarty->assign('viewtpl',$viewtpl);
//--------------------------需要子模块刷新的写在这下面，以这种形式分开----------------------





//--------------------------个人资料页，子模块-------------------------------------

@$bsinfo=$_GET['bsinfo'];
switch ($bsinfo){
	case 'setinfo':
		$bsinfotpl='usersetting/infolist.tpl';
		include('templates/usersetting/LoadBsinfo.php');
		break;
	case 'crtessay':
		$bsinfotpl='usersetting/crtessay.tpl';
		break;
	default:
		$bsinfotpl='usersetting/infolist.tpl';
		include('templates/usersetting/LoadBsinfo.php');
		
}
$smarty->assign('bsinfotpl',$bsinfotpl);


//------------------------------------------------------------------------------------------



//------------------------在此进行对cookie的判断，赋值session------------------------
if ($_SESSION['name']==''){
$users=$_COOKIE['name'];
if ($users!='')
{
$array_t=explode(" ",$users);
$connobj=new ConnDB("localhost","yiya_users");
$conn=$connobj->GetConnId();
$check_t= new LoginCheckClass($conn);

if (($check_t->Check($array_t[0],$array_t[1]) == true )and ($check_t->isLock() == false))
	$_SESSION['name']=$array_t[0];
else
	$_SESSION['name']='';

}
}
//-----------------------------------------------------------------------------------





//-----------------------------换肤操作------------------------------------------------

  $theme='theme1';
  $smarty->assign('jqueryuicss','./css/'.$theme.'/jquery.ui.all.css');
  $smarty->assign('indexcss','./css/'.$theme.'/index.css');
  $smarty->assign('maintplcss','./css/'.$theme.'/maintpl.css');






//-------------------------------------------------------------------------------------

//echo "<script>alert(\"".$maintpl."\");</script>";
$smarty->display('index.tpl');



?>
