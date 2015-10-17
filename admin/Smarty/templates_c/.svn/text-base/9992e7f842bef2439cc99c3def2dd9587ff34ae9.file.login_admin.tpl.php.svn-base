<?php /* Smarty version Smarty-3.1.12, created on 2013-06-20 18:37:14
         compiled from "/www/workbench/ydy/yiya/admin/Smarty/templates/login_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83005325651bb03f9577631-28465498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9992e7f842bef2439cc99c3def2dd9587ff34ae9' => 
    array (
      0 => '/www/workbench/ydy/yiya/admin/Smarty/templates/login_admin.tpl',
      1 => 1371717345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83005325651bb03f9577631-28465498',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51bb03f95788e2_53416219',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bb03f95788e2_53416219')) {function content_51bb03f95788e2_53416219($_smarty_tpl) {?><div>
	<h2>管理员登陆：</h2>
<style type="text/css">
@import url('../css/Sbutton.css');
#login_div{
  width:900px;  margin:15px auto 15px auto;
  padding:10px 10px 10px 10px;
  text-align:middle;
  vertical-align:baseline;
}
</style>
<div id='login_div'>
<!--
<form action="./Smarty/templates/login_handler.php" method="post">
-->
<script type="text/javascript" charset="utf-8">
(function(){
  var _w = 90 , _h = 24;
  var param = {
    url:location.href,
    type:'2',
    count:'1', /**是否显示分享数，1显示(可选)*/
    appkey:'', /**您申请的应用appkey,显示分享来源(可选)*/
    title:'', /**分享的文字内容(可选，默认为所在页面的title)*/
    pic:'', /**分享图片的路径(可选)*/
    ralateUid:'3547983177', /**关联用户的UID，分享微博会@该用户(可选)*/
    language:'zh_cn', /**设置语言，zh_cn|zh_tw(可选)*/
    dpc:1
  }
  var temp = [];
  for( var p in param ){
    temp.push(p + '=' + encodeURIComponent( param[p] || '' ) )
  }
  document.write('<iframe allowTransparency="true" frameborder="0" scrolling="no" src="http://service.weibo.com/staticjs/weiboshare.html?' + temp.join('&') + '" width="'+ _w+'" height="'+_h+'"></iframe>')
})()
</script>
</div>
	<div id=logininput>
	邮箱：
	<input id="username" name="username" type="text" size="20"/><br/>
	密码：
	<input id="password" name="password" type="password" size="20"/><br/>
	</div>
	<div>
		<span id="txtHint"></span><br/>
	</div>
	<div id='login_submit'>
	<a class='Sbutton' id='login_a' onclick="LoginTest()"> 提交</a>
	
	</div>
</form>

</div>
</div>

<script type="text/javascript">
		  
                function LoginTest()
		{
                var xmlhttp;
		var t1=$("#username").val();
		var t2=$("#password").val();
		var urla="Smarty/templates/login_handler.php?username="+t1+"&password="+t2;
	 	xmlhttp=$.ajax({url:urla,async:false});
		var result = xmlhttp.responseText;
		if (result.replace(/^\s*|\s*$/g, '') == "fail")
			$("#txtHint").html("用户名或者密码错误");
		else  if (result.replace(/^\s*|\s*$/g, '') == "success")
			self.location='index.php?act=admin';
		else
			$("#txtHint").html(result);
		}
  </script>
<?php }} ?>