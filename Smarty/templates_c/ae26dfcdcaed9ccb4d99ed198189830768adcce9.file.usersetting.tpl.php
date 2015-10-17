<?php /* Smarty version Smarty-3.1.12, created on 2013-07-25 00:21:16
         compiled from "/www/yiya/templates/usersetting/usersetting.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1210228551effefc91ac01-74269284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae26dfcdcaed9ccb4d99ed198189830768adcce9' => 
    array (
      0 => '/www/yiya/templates/usersetting/usersetting.tpl',
      1 => 1374682839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1210228551effefc91ac01-74269284',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bsinfotpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51effefc9232c5_39294652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51effefc9232c5_39294652')) {function content_51effefc9232c5_39294652($_smarty_tpl) {?><script type="text/javascript">
function setinfo()
{
	self.location="index.php?act=usersetting&bsinfo=setinfo";
}
function crtessay()
{
	self.location="index.php?act=usersetting&bsinfo=crtessay"
}

</script>


<div id="usermenu">
<ul class="nav nav-pills nav-stacked">
<li><strong>个人设定</strong></li>
<li><a><i class="icon icon-white icon-user"></i> 个人主页</a></li>
<li><a onclick="setinfo()"><i class="icon icon-white icon-gear"></i> 个人设置</a></li>

<li><strong>个性创作</strong></li>
<li><a><i class="icon icon-white icon-date"></i> 创作计划</a></li>
<li><a onclick="crtessay()"><i class="icon icon-white icon-compose"></i> 创作文章</a></li>
<li><a><i class="icon icon-white icon-heart"></i> 发布展示</a></li>

<li><strong>我的仓库</strong></li>
<li><a><i class="icon icon-white icon-video"></i> 我的视频</a></li>
<li><a><i class="icon icon-white icon-book"></i> 我的文章</a></li>
<li><a><i class="icon icon-white icon-calendar"></i> 我的计划</a></li>
<li><a><i class="icon icon-white icon-contacts"></i> 我的展示</a></li>
<li><a><i class="icon icon-white icon-users"></i> 我的关注</a></li>
</ul>
</div>
<div  id="usercontent">
        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['bsinfotpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<?php }} ?>