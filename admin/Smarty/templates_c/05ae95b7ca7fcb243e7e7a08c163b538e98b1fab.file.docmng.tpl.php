<?php /* Smarty version Smarty-3.1.12, created on 2013-06-16 20:08:06
         compiled from "/www/yiya/admin/Smarty/templates/doctpl/docmng.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64279609251bdaaa6a34e55-85488821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05ae95b7ca7fcb243e7e7a08c163b538e98b1fab' => 
    array (
      0 => '/www/yiya/admin/Smarty/templates/doctpl/docmng.tpl',
      1 => 1371383777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64279609251bdaaa6a34e55-85488821',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51bdaaa6a649d8_35995366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bdaaa6a649d8_35995366')) {function content_51bdaaa6a649d8_35995366($_smarty_tpl) {?><script type="text/javascript">
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