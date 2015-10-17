<?php /* Smarty version Smarty-3.1.12, created on 2013-06-14 19:52:38
         compiled from "/www/workbench/ydy/yiya/admin/Smarty/templates/admintpl/basiclayout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1561747651bb040671d461-03196252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efbc14587cc2cc46e478f6694313f7bcdb347478' => 
    array (
      0 => '/www/workbench/ydy/yiya/admin/Smarty/templates/admintpl/basiclayout.tpl',
      1 => 1371208597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1561747651bb040671d461-03196252',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bsinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51bb04067603e5_98842375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bb04067603e5_98842375')) {function content_51bb04067603e5_98842375($_smarty_tpl) {?><div>
<style type="text/css">
#infoheader{
  background-color:#F0F8FF;
  height:29px;
  border-bottom:solid 1px #E7E7E7;
  padding:0px 20px 0px 20px;
}

*{
  line-height:29px;
  font-size:16px;
}
</style>
<div id="infoheader">
<a href="index.php?act=admin&adop=basicinfo">个人信息</a>
<a href="index.php?act=admin&adop=basicinfo&bsinfoop=modify_passwd">密码修改</a>
</div>

<div>
	<?php if ($_smarty_tpl->tpl_vars['bsinfo']->value==''){?>
		<?php echo $_smarty_tpl->getSubTemplate ("admintpl/modifybsinfo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }else{ ?>
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['bsinfo']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>
</div>

</div>
<?php }} ?>