<?php /* Smarty version Smarty-3.1.12, created on 2013-06-16 21:49:43
         compiled from "/www/workbench/ydy/yiya/admin/Smarty/templates/doctpl/docmng.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2442034051bb0433d79769-47552706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45f3e87f1ee5a0f23e83f1fa6d14d55ba8252f06' => 
    array (
      0 => '/www/workbench/ydy/yiya/admin/Smarty/templates/doctpl/docmng.tpl',
      1 => 1371390571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2442034051bb0433d79769-47552706',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51bb0433d7a132_35087878',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bb0433d7a132_35087878')) {function content_51bb0433d7a132_35087878($_smarty_tpl) {?><script type="text/javascript">
  function getpage1(){
    var xmlhttp;
    if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
    }
    else{// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
  
    xmlhttp.onreadystatechange=function(){
      if (xmlhttp.readyState==4 && xmlhttp.status==200){
        document.getElementById("content").innerHTML=xmlhttp.responseText;
      }
    }
    xmlhttp.open("GET","Smarty/templates/doctpl/filelist.php",true);
    xmlhttp.send();
  }
  function getpage2(){
    var xmlhttp;
    if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
    }
    else{// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
  
    xmlhttp.onreadystatechange=function(){
      if (xmlhttp.readyState==4 && xmlhttp.status==200){
        document.getElementById("content").innerHTML=xmlhttp.responseText;
      }
    }
    xmlhttp.open("GET","Smarty/templates/doctpl/uploadfile_check.tpl",true);
    xmlhttp.send();
  }
</script>
<link type="text/css" rel="stylesheet" href="./Smarty/templates/doctpl/style.css"/>
<div class="header">
	<a href="javascript:getpage1()">文件列表</a>
	<a href="javascript:getpage2()">上传文件</a>
</div>
<div class="header">
	<ul> 
		 <li style='width:350px'>文件名</li>
            	<li style='width:250px'>修改时间</li>
            	<li style='width:150px'>大小</li>
		<li style='width:150px'>操作</li>
	</ul>
</div>
<script type="text/javascript">
        getpage1();
</script>
<div id="content">
</div>
<?php }} ?>