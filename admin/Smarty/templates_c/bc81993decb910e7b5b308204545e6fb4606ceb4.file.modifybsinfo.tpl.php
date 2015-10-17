<?php /* Smarty version Smarty-3.1.12, created on 2013-06-20 23:15:27
         compiled from "/www/workbench/ydy/yiya/admin/Smarty/templates/admintpl/modifybsinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36447596451bb0406762fc5-55375095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc81993decb910e7b5b308204545e6fb4606ceb4' => 
    array (
      0 => '/www/workbench/ydy/yiya/admin/Smarty/templates/admintpl/modifybsinfo.tpl',
      1 => 1371741324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36447596451bb0406762fc5-55375095',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51bb040676c122_01503061',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bb040676c122_01503061')) {function content_51bb040676c122_01503061($_smarty_tpl) {?><style type="text/css">
	@import url('../css/Sbutton.css');
	@import url('./cssforadmin/Bsinfo.css');
</style>
<div id='bsinfodisplay'>
<div id= 'bsinfo'>
</div>
<div id = "submit_bsinfo">
	<a class='Sbutton' id='modify_bsinfo' onclick="modify_bsinfo_func()">修改</a>
	<a class='Sbutton' id='cancle_modify' onclick="cancle_modify_func()">取消</a><br/>
	<a id='modify_suggestion'></a>
	
</div>
</div>
<script type="text/javascript" src="../js/DateSet.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
    var xmlhttp;
	var urla="Smarty/templates/admintpl/addbsinfo.php";
	xmlhttp=$.ajax({url:urla,async:false});
	$("#bsinfo").html(xmlhttp.responseText);
	});
	
	function modify_bsinfo_func()
	{
		var xmlhttp;
		var urla="Smarty/templates/admintpl/modifybsinfo.php";
		var username=$("#user_name").val();
		var sex=$("input[name='sex']:checked").val();  
		var day =$("#birth_day").val();
		var tel = $("#telephone").val();
		var qq = $("#qq").val();
		var signature = $("#signature").val();
		var city = $("#city").val();
		var province = $("#province").val();
		xmlhttp=$.ajax({url:urla,async:false,data:{username:username,sex:sex,day:day,tel:tel,qq:qq,city:city,province:province,signature:signature}});
		$("#modify_suggestion").html(xmlhttp.responseText);
	}
	function cancle_modify_func()
	{
		self.location='index.php?act=admin&adop=basicinfo';
	}

</script>
<?php }} ?>