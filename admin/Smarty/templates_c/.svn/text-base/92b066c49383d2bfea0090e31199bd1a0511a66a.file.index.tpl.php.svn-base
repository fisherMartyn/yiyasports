<?php /* Smarty version Smarty-3.1.12, created on 2013-06-08 20:59:32
         compiled from "/www/yiya/trunk/admin/Smarty/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173105805851b1d5879c0088-52485246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92b066c49383d2bfea0090e31199bd1a0511a66a' => 
    array (
      0 => '/www/yiya/trunk/admin/Smarty/templates/index.tpl',
      1 => 1370696366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173105805851b1d5879c0088-52485246',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51b1d5879fa645_45726822',
  'variables' => 
  array (
    'title' => 0,
    'tplname' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b1d5879fa645_45726822')) {function content_51b1d5879fa645_45726822($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<style type="text/css" media="all">
<!--
.nav{
}

.hcontainer{
}

.banner{
  width:100%;
  height:100px;
  background-color:#00BFFF;
}

.banner span{
  font-size:50px;
}

.content{
  width:auto;
  height:auto;
  margin-top:100px;
  text-align:center;
}

.banner .title{
  width:600px;
  margin:auto;
  padding-top:20px;
  text-align:center;
}
-->
</style>


</head>

<body>
  <div class="hcontainer">

        <div class="banner">

		<div class="title">
		   <span>YIYA管理员系统</span>
		</div>
        </div>

	<div class=nav>
		<?php if ($_SESSION['name']==''){?>
		<a href="index.php?act=login">登录</a>
		<?php }else{ ?>
		管理员：<?php echo $_SESSION['name'];?>
&nbsp;&nbsp;
		<a href="/admin/Smarty/templates/logout.php">退出登录</a>
		<?php }?>
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