<?php /* Smarty version Smarty-3.1.12, created on 2013-06-11 12:57:04
         compiled from "/www/yiya/admin/Smarty/templates/admintpl/basicinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206971925151b6ae2025f304-34365273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e85cffc9f344f790bf6a8f8695de2fb70627ed50' => 
    array (
      0 => '/www/yiya/admin/Smarty/templates/admintpl/basicinfo.tpl',
      1 => 1370926566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206971925151b6ae2025f304-34365273',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51b6ae2029ca63_64342365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b6ae2029ca63_64342365')) {function content_51b6ae2029ca63_64342365($_smarty_tpl) {?><div>

<div>
	个人信息：<br/>
	您的用户名为:<?php echo $_SESSION['name'];?>

</div>

<div>
	<form name="modify_passwd" action="./Smarty/templates/admintpl/modify_passwd.php" method="post">
	修改密码<br/>
	请输入密码：
	<input type="text" name="passwdone" /><br/>
	请重复输入：
	<input type="text" name="passwdtwo" /><br/>
	<input type="submit" value="确认修改" />
	</form>
</div>


</div>
<?php }} ?>