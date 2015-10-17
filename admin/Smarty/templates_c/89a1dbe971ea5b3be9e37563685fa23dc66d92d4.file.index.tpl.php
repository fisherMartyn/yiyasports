<?php /* Smarty version Smarty-3.1.12, created on 2013-06-29 20:54:20
         compiled from "/www/yiya/admin/Smarty/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84914884551b42ac02f7a34-92342661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89a1dbe971ea5b3be9e37563685fa23dc66d92d4' => 
    array (
      0 => '/www/yiya/admin/Smarty/templates/index.tpl',
      1 => 1371553161,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84914884551b42ac02f7a34-92342661',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51b42ac03518d6_01257421',
  'variables' => 
  array (
    'title' => 0,
    'tplname' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b42ac03518d6_01257421')) {function content_51b42ac03518d6_01257421($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<script type="text/javascript" src="../js/digitsonly.js"></script>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui.js"></script>


<link rel="stylesheet" href="../admin/jqthemeforadmin/jquery.ui.all.css">

<style type="text/css" media="all">
<!--
body{
font-family:Arial, Helvetica, sans-serif;

}


.nav{
}


.banner{
  width:1183px;
  height:100px;
  background-color:#FFFFFF;
  margin:auto;
  margin-top:15px; 
  border:solid 1px #E7E7E7;
}

.banner span{
  font-size:50px;
}

.content{
  width:1185px;
  height:auto;
  text-align:center;
  margin:auto;
  margin-top:15px;
}

.banner .title{
  margin:auto;
  text-align:center;
}
#h1{
  text-align:right;
  font-size:16px;
  border:solid 1px #E7E7E7;
  background-color:#FFFFFF;
  line-height:29px;
  height:29px;
  padding:0px 40px 0px 40px;
}

body{
  margin:0px 0px 0px 0px;
  font-size:16px;
  background-color:#EDF0EF;
}
-->
</style>


</head>

<body>
	<div id="h1"> 
		<?php if ($_SESSION['name']==''){?>
		<a href="index.php?act=login">登录</a>
		<?php }else{ ?>
		管理员：<?php echo $_SESSION['name'];?>
&nbsp;&nbsp;
		<a href="./Smarty/templates/logout.php">登出</a>
		<?php }?>
	<div>

        <div class="banner">

		<div class="title">
		<img src="./Smarty/templates/adminimg/title.jpg"/>
		</div>
        </div>

  <div class="content">
	<?php if ($_smarty_tpl->tpl_vars['tplname']->value!=''){?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['tplname']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }else{ ?>
	<?php echo $_smarty_tpl->getSubTemplate ('login_admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>	
  </div>



</body>



</html>
<?php }} ?>