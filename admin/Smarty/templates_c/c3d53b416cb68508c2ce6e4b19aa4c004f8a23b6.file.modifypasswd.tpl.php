<?php /* Smarty version Smarty-3.1.12, created on 2013-06-18 20:12:03
         compiled from "/www/workbench/ydy/yiya/admin/Smarty/templates/admintpl/modifypasswd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18346176551bb12cc6010f0-26144028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3d53b416cb68508c2ce6e4b19aa4c004f8a23b6' => 
    array (
      0 => '/www/workbench/ydy/yiya/admin/Smarty/templates/admintpl/modifypasswd.tpl',
      1 => 1371555784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18346176551bb12cc6010f0-26144028',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51bb12cc63c371_01459584',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bb12cc63c371_01459584')) {function content_51bb12cc63c371_01459584($_smarty_tpl) {?>﻿<style type="text/css">
        @import url('../css/Sbutton.css');
	@import url('./cssforadmin/ModifyPassWd.css')
</style>
<div id = 'all_passwd'>
<div id = 'passwd_div'>
	输入原密码：
	<input id='ops' type="password" name="ops" size=16/><br/>
	输入新密码：
	<input id='ps1' type="password" name="ps1" size=16/><br/>
	请再次输入：
	<input id='ps2' type="password" name="ps2" size=16/><br/>
</div>
	
<div id = 'submit_div'>
	<a class='Sbutton' id='modify_submit' onclick="submit_passwd()"> 确认修改</a>
	<a class='Sbutton' id='cancle_submit' onclick="cancle_submit()"> 取消修改</a>
</div>
<div id='suggestion'>
</div>
</div>

<script type="text/javascript">
	function submit_passwd()
	{
		var xmlhttp;
		var t1 = $("#ops").val();
		var t2 = $("#ps1").val();
		var t3 = $("#ps2").val();
		urla = "./Smarty/templates/admintpl/modify_passwd.php";
		xmlhttp =$.ajax({url:urla, data:{ops:t1,ps1:t2,ps2:t3}, async:false});
		$("#suggestion").html(xmlhttp.responseText);
	}
	function cancle_submit()
	{
		 self.location='index.php?act=admin&adop=basicinfo&bsinfoop=modify_passwd';
	}
</script>
<?php }} ?>