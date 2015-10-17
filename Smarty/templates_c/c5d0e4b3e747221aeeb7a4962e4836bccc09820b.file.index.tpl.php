<?php /* Smarty version Smarty-3.1.12, created on 2014-09-27 19:58:32
         compiled from "/www/yiya/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207406171851c7ed15638d49-51594088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5d0e4b3e747221aeeb7a4962e4836bccc09820b' => 
    array (
      0 => '/www/yiya/templates/index.tpl',
      1 => 1410344144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207406171851c7ed15638d49-51594088',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51c7ed15724607_85802472',
  'variables' => 
  array (
    'jqueryuicss' => 0,
    'indexcss' => 0,
    'maintplcss' => 0,
    'scontent' => 0,
    'viewtpl' => 0,
    'maintpl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c7ed15724607_85802472')) {function content_51c7ed15724607_85802472($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>欢迎来到YIYA！</title>
<script type="text/javascript" src="./js/digitsonly.js"></script>
<script type="text/javascript" src="./js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="./js/jquery-ui.js"></script>
<script type="text/javascript" src="./js/jquery.cleditor.min.js"></script>
<script type="text/javascript" src="./js/jPages.min.js"></script>
<script type="text/javascript" src="./js/jquery.lazyload.js"></script>
<script type="text/javascript" src="./js/jquery.history.js"></script>
<script type="text/javascript" src="./js/yjx.js"></script>
<script type="text/javascript" src="./js/cookies.js"></script>
<script type="text/javascript" src="./js/flashembed.js"></script>
<script type="text/javascript" src="./js/comments/jquery.comments.js"></script>
<script type="text/javascript" src="./js/ydy.js"></script>
<script type="text/javascript" src="./js/gn.js"></script>
<script type="text/javascript" src="./js/jquery.cityselect.js"></script>
<script type="text/javascript" src="./js/jquery.uploadify.min.js"></script>
<script type="text/javascript" src="./js/jquery.Jcrop.js"></script>

<script type="text/javascript" src="./js/bootstrap.min.js"></script>
<link rel="stylesheet" href=<?php echo $_smarty_tpl->tpl_vars['jqueryuicss']->value;?>
>
<link rel="stylesheet" href=<?php echo $_smarty_tpl->tpl_vars['indexcss']->value;?>
>
<link rel="stylesheet" href=<?php echo $_smarty_tpl->tpl_vars['maintplcss']->value;?>
>
<link rel="stylesheet" href="./css/theme1/jPagesanimate.css">
<link rel="stylesheet" href="./css/theme1/jquery.cleditor.css">
<link rel="stylesheet" href="./css/theme1/yiyatips.css">
<link rel="stylesheet" href="./css/theme1/yiyatools.css">
<link rel="stylesheet" href="./css/theme1/hotinfo.css">
<link rel="stylesheet" href="./css/theme1/gn.css">
<link rel="stylesheet" href="./css/bootstrap-css/bootstrap.min.css">
<link rel="stylesheet" href="./css/bootstrap-css/opa-icons.css">
<link rel="stylesheet" href="./css/standard/uploadify.css">
<link rel="stylesheet" href="./css/standard/jquery.Jcrop.css">
<link rel="stylesheet" href="./js/comments/comments.css"/>
<link rel="stylesheet" href="./js/jPages.css" /> 
<link rel="stylesheet" href="./css/mlist.css" /> 
<link rel="stylesheet" href="./css/InteractArea.css"/> 
<script>
$(document).ready(function(){
  $("#caloryt").click(function(){
    $("#calorym").slideToggle(400);
  });

  $("#proteint").click(function(){
    $("#proteinm").slideToggle(400);
  });
});
</script>

<script>


$(function(){
  var cache={};
  $("#proteininput").autocomplete({
  	source: function( request, response ) {
				var term = request.term;
				if ( term in cache ) {
					response( cache[ term ] );
					return;
				}

				$.getJSON( "phpui/proteindata.php", request, function( data, status, xhr ) {
					cache[ term ] = data;
					response( data );
				});},
	minLength:1,
	select:function(event, ui){
		$("#prteininput").val(ui.item.label);

		$("#proteindesc").hide();

		$("#pro_per100g").html(ui.item.cal);
		$("#pro_level").html(ui.item.level);
		$("#pro_perunit").html(ui.item.unit);

		$("#proteindesc").fadeIn();
		$.ajax({url:"phpui/prohit.php",data:{name:ui.item.label},async:true});
		return false;
	}
 });
});
$(function(){
  var cache={};
  $("#caloryinput").autocomplete({
           source: function( request, response ) {
                                var term = request.term;
                                if ( term in cache ) {
                                        response( cache[ term ] );
                                        return;
                                }

                                $.getJSON( "phpui/calorydata.php", request, function( data, status, xhr ) {
                                        cache[ term ] = data;
                                        response( data );
                                });},
	minLength:1,
	select:function(event, ui){
		$("#caloryinput").val(ui.item.label);

		$("#calorydesc").hide();

		$("#cal_per100g").html(ui.item.cal);
		$("#cal_level").html(ui.item.level);
		$("#cal_perunit").html(ui.item.unit);

		$("#calorydesc").fadeIn();
		$.ajax({url:"phpui/calhit.php",data:{name:ui.item.label},async:true});
		return false;
	}

 });

});
</script>

<script>
function begins(){
    var ttype,tcontent;
    if($("#mediatype").data("selected")=="yes"){
    	ttype="media";
    }
    if($("#essaytype").data("selected")=="yes"){
    	ttype="essay";
    }
    if($("#plantype").data("selected")=="yes"){
    	ttype="plan";
    }

    tcontent=$("#searchbox").val();
    
    if(tcontent!=''){
	$.ajax({url:"phpui/srecord.php",data:{scontent:tcontent, stype:ttype},async:false});
    }
    switch(ttype){
      case "media":self.location='index.php?act=medialist&scontent='+tcontent;
		break;
      case "essay":self.location='index.php?act=essaylist&scontent='+tcontent;
		break;
      case "bodyplan":self.location='index.php?act=bodyplanlist&scontent='+tcontent;
		break;
    }
}

$(function(){
  $("#searchbutton").click(function(){
	begins();
  });
});
</script>

</head>

<body>

<div id="topbar" class="container">
	<div class="row">
		<div class="span6"> 	
		<?php echo $_smarty_tpl->getSubTemplate ('templates/login/loginBar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>

		<div id="search" class="span6">
			<div class="btn-group"> 				
			<button class="btn search-type type-selected" id="mediatype" data-selected="yes">视频</button>
			
			<button class="btn search-type" id="essaytype" data-selected="no">文章</button>
			<button class="btn search-type" id="plantype" data-selected="no">计划</button>
			</div>	
	  		<div class="input-append" style="margin-bottom:0">	
				
				
	  			<input id="searchbox" placeholder="Search..." type="text" value="<?php echo $_smarty_tpl->tpl_vars['scontent']->value;?>
" maxLength='15'></input>
	  			<a class="btn add-on" id="searchbutton" tabindex="0"> go </a>
	  		</div>
		</div>
	</div>
</div>

<div id="headbar">
	<div class="container">
		<img class="logo" src="css/theme1/images/logo.png">
	</div>
</div>

<div id="viewbox">
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['viewtpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<div id="bottombar">
	<div class="container">
	<div class="row">
		<div class="span6">
		</div>
		<div class="span6">
			<div id="dycessay" title="您还没登陆哦，登录即可使用文章收藏功能！^^" data-toggle="tooltip" class="yiya-collector-disabled hide">
			<i class="icon icon-black icon-book"></i>
			<span>我的文章</span>
			</div>
			<div id="dycmedia" class="hide yiya-collector-disabled" data-toggle="tooltip" title="您还没有登录哦，登录即可使用视频收藏功能！^^" >
			<i class="icon icon-black icon-video"></i>
			<span>我的视频</span>
			</div>
			<div id="dycplan" class="hide yiya-collector-disabled" data-toggle="tooltip" title="您还没有登录哦，登录即可使用我的计划功能!^^">
			<i class="icon icon-black icon-calendar"></i>
			<span>我的计划</span>
			</div>
			<div id="ycessay" class="yiya-collector yiya-collector-blue hide">
			<i class="icon icon-white icon-book"></i>
			<span>我的文章</span>
			</div>
			<div id="ycmedia" class="yiya-collector yiya-collector-purple hide">
			<i class="icon icon-white icon-video"></i>
			<span>我的视频</span>
			</div>
			<div id="ycplan" class="yiya-collector yiya-collector-green hide">
			<i class="icon icon-blue icon-calendar"></i>
			<span>我的计划</span>
			</div>
		</div>
	</div>
	</div>
</div>



	<div class="container" id='maincontent'>
       	 <?php if ($_smarty_tpl->tpl_vars['maintpl']->value!=''){?>
       	 <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['maintpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

       	 <?php }else{ ?>
       	 <?php echo $_smarty_tpl->getSubTemplate ('main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

       	 <?php }?>
	
	</div>
	<div class="container" id="yiya-footer">
		<div>
			<a>关于yiya</a>|
			<a>手机app</a>|
			<a>意见反馈</a>|
			<a>友情链接</a>|
			<a>联系我们</a>|
			<a>版权声明</a>
		</div>
	</div>

</body>
</html>








































<?php }} ?>