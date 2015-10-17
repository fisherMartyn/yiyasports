<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> {%$title%}</title>
<script type="text/javascript" src="../js/digitsonly.js"></script>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui.js"></script>


<link rel="stylesheet" href="../admin/jqthemeforadmin/jquery.ui.all.css">

<style type="text/css" media="all">
<!--
body{
font-family:Arial, Helvetica, sans-serif;

}


.nav{
}


.banner{
  width:1183px;
  height:100px;
  background-color:#FFFFFF;
  margin:auto;
  margin-top:15px; 
  border:solid 1px #E7E7E7;
}

.banner span{
  font-size:50px;
}

.content{
  width:1185px;
  height:auto;
  text-align:center;
  margin:auto;
  margin-top:15px;
}

.banner .title{
  margin:auto;
  text-align:center;
}
#h1{
  text-align:right;
  font-size:16px;
  border:solid 1px #E7E7E7;
  background-color:#FFFFFF;
  line-height:29px;
  height:29px;
  padding:0px 40px 0px 40px;
}

body{
  margin:0px 0px 0px 0px;
  font-size:16px;
  background-color:#EDF0EF;
}
-->
</style>


</head>

<body>
	<div id="h1"> 
		{%if $smarty.session.name == ''%}
		<a href="index.php?act=login">登录</a>
		{%else%}
		管理员：{%$smarty.session.name%}&nbsp;&nbsp;
		<a href="./Smarty/templates/logout.php">登出</a>
		{%/if%}
	<div>

        <div class="banner">

		<div class="title">
		<img src="./Smarty/templates/adminimg/title.jpg"/>
		</div>
        </div>

  <div class="content">
	{%if $tplname!=''%}
	{%include file=$tplname%}
	{%else%}
	{%include file='login_admin.tpl'%}
	{%/if%}	
  </div>



</body>



</html>
