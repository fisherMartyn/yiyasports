<div>

<style type="text/css" media="all">
@import url("../css/PageViewSample.css");
@import url("Smarty/templates/mediatpl/style.css");

#header{
  background-color:#F0F8FF;
  height:29px;
  border-bottom:solid 1px #E7E7E7;
  padding:0px 20px 0px 20px;
}

*{
  line-height:29px;
  font-size:16px;
}
ul#menu{
height:29px
float:left;
margin-left:40px
}

ul#menu li{
  width:80px;
  float:left;
  display:inline;
  list-style:none;
}

ul#menu li a:active {
text-decoration: none;
color:black;
}

ul#menu li a:link {
text-decoration: none;
color:black;
}

#menu li:hover{
  background:#40484f;
}

#menu li.current{
  background:#80888f;
}
</style>

<script type="text/javascript">
function setiframe(i)
{
  if(i==1){
    document.getElementById("menu_1").className = "current";
    document.getElementById("menu_2").className = "";
    document.all.iframe1.src="Smarty/templates/mediatpl/showlist.php";
  }else if (i==2){
    document.getElementById("menu_1").className = "";
    document.getElementById("menu_2").className = "current";
    document.all.iframe1.src="Smarty/templates/mediatpl/addMedia.php";
  }
}

</script>
<!--
<div id="header">
	<a href="javascript:setiframe(1)">视频列表</a>
	<a href="javascript:setiframe(2)">添加视频</a>
        <span id="usrsearch">
	  <input id="searchbox" type="text" value="Search user..." name="usremail" maxLength="30" onfocus="clearSearchBox(event)"onkeypress="entersearch(event)" />
	  <a class="Sbutton"  name="submit" onclick='searchbegin()'  >搜索 </a>
	</span>

</div>
-->
<div id="header">
<ul id="menu">
<li id="menu_1" class="current"><a href="javascript:setiframe(1)">视频列表</a></li>
<li id="menu_2" ><a href="javascript:setiframe(2)">添加视频</a></li>
</ul>
</div>

<iframe id="iframe1" src="Smarty/templates/mediatpl/showlist.php" width="1000" height="800" frameborder="0" scrolling="yes"></iframe>

</div>
