<head>
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
        {%if $operationtpl==''%}
        欢迎光临：{%$smarty.session.name%}
	{%else%}
	{%include file=$operationtpl%}
	{%/if%}
  </div>


</div>
