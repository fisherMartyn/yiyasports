<?php /* Smarty version Smarty-3.1.12, created on 2013-07-25 00:20:50
         compiled from "/www/yiya/admin/Smarty/templates/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123411669251b42c41370c94-97244251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b19d62b2926ba2d9be5fc0c6bd21b3a82f6d89a2' => 
    array (
      0 => '/www/yiya/admin/Smarty/templates/admin.tpl',
      1 => 1371553161,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123411669251b42c41370c94-97244251',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51b42c413a9ec4_34139794',
  'variables' => 
  array (
    'operationtpl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b42c413a9ec4_34139794')) {function content_51b42c413a9ec4_34139794($_smarty_tpl) {?><head>
  <style type="text/css" media="all">
  *{
	padding:0px;
	margin:0px;
	font-size:16px;
  }
  .admincon{
  
  }
  .operation{
	float:left;
	width:150px;
	border:solid 1px #E7E7E7;
	background-color:#FFFFFF;
	text-align:center;
	height:auto;
	min-height:400px;
	margin-right:15px;
  }

  .tplcontent{
	width:1015px;
	float:left;
	text-align:center;
	border:solid 1px #E7E7E7;
	background-color:#FFFFFF;
	float:left;
	min-height:400px;
	height:auto;
	margin-bottom:20px;
  }

  .operation li{
	list-style-type:none;

  }
  #opheader{
	line-height:29px;
	background-color:#F0F8FF;
	height:29px;
	margin-bottom:15px;
	border-bottom:solid 1px #E7E7E7;

  }
  </style>
</head>



<div class=admincon>
  <div class=operation>  
  
  <div id="opheader">
	<span>管理操作</span>
  </div> 

  <div>
  <ul>
	<li><a href="index.php?act=admin&adop=basicinfo">个人资料</a></li>
	<li><a href="index.php?act=admin&adop=usrmng">用户资料</a></li>
	<li><a href="index.php?act=admin&adop=docmng">文档管理</a></li>
	<li><a href="index.php?act=admin&adop=mediamng">视频管理</a></li>

	<li><a href="index.php?act=admin&adop=banusers">小黑屋</a></li>
    </ul>
  </div>


  </div>

  <div class=tplcontent>
        <?php if ($_smarty_tpl->tpl_vars['operationtpl']->value==''){?>
        欢迎光临：<?php echo $_SESSION['name'];?>

	<?php }else{ ?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['operationtpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>
  </div>


</div>
<?php }} ?>