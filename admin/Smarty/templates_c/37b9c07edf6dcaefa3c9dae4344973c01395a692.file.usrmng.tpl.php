<?php /* Smarty version Smarty-3.1.12, created on 2013-06-16 20:08:34
         compiled from "/www/yiya/admin/Smarty/templates/usrtpl/usrmng.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12553023751bdaac2ea5e55-63967533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37b9c07edf6dcaefa3c9dae4344973c01395a692' => 
    array (
      0 => '/www/yiya/admin/Smarty/templates/usrtpl/usrmng.tpl',
      1 => 1371383777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12553023751bdaac2ea5e55-63967533',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51bdaac2ed0d81_14932714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bdaac2ed0d81_14932714')) {function content_51bdaac2ed0d81_14932714($_smarty_tpl) {?>
<div>

<style type="text/css" media="all">


@import url("../css/PageViewSample.css");
#usrheader{
  background-color:#F0F8FF;
  height:29px;
  border-bottom:solid 1px #E7E7E7;
  padding:0px 20px 0px 20px;
}

*{
  line-height:29px;
  font-size:16px;
}
#usroplist{
  float:left;
  width:100px;
  text-align:left;
}

#usrsearch{
  float:right;
  width:500px;
  text-align:right;
  margin-right:40px;
}


#usrcontent{
}

#searchbox{
  font-size:16px;
  line-height:16px;
  height:20px;
  width:250px;
}

#usrlist0{
  border-collapse:collapse;
  border:3px solid #E7E7E7;
  width:900px;
}
#usrlist0 td{

border:1px solid #E7E7E7;
padding:3px 7px 2px 7px;

}
#usrlist0 th{

border:1px solid #E7E7E7;
padding:3px 7px 2px 7px;
border-bottom:3px solid #E7E7E7;
}

#ucontent{
margin:15px auto 15px auto;
width:900px;

}
.items{
  width:80px;
}
.email{
  min-width:150px;
  cursor:pointer;
}
.email:hover
{
  background-color:#F0F8FF;  
}

.qqnum{
  min-width:100px;
}
.nickname, .name{
min-width:80px;

}


.usropbar{
  margin:15px auto 15px auto;
  width:900px;
  text-align:left;
}

.usropbar button{
  line-height:20px;
}

.rec0{
display:none;
position:absolute;
}

#banbar{
  float:left;
}

#setdftime{
  float:right;
}

#dftime{
  background-color:#E7E7E7;
  border:1px solid #708090;
  text-align:center;
  line-height:20px;
  width:30px;
}

#dftime:focus
{
  background-color:white;
}

.brbutton{
  line-height:20px;
  margin:0px 5px 0px 5px;
  padding:0px 2px 0px 2px;
}
</style>

<script type="text/javascript">
function clearSearchBox(e){
  searchbox.setAttribute("value","");
}

  function getpage(pageno){
  var xmlhttp;
  var t1;
  var t2;
  if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
    }
  else{// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

  xmlhttp.onreadystatechange=function(){
    if (xmlhttp.readyState==4 && xmlhttp.status==200){
        document.getElementById("ucontent").innerHTML=xmlhttp.responseText;
      }
  }
  document.getElementById("pageno_s").value=""+pageno;
  t2=document.getElementById("searchtype_s").value;
  t1=document.getElementById("searchcontent_s").value;
  xmlhttp.open("GET","Smarty/templates/usrtpl/showlist.php?pageno="+pageno+"&searchcontent="+t1+"&searchtype="+t2,true);
  xmlhttp.send();
}

function searchbegin(){
  var c1,c2,tt,index;
  c1=document.getElementById("searchbox").value;
  document.getElementById("searchcontent_s").value=c1;
  tt=document.getElementById("searchtype");
  index=tt.selectedIndex;
 /* for(var i=1;i<=4;i++){
    tt=document.getElementById("st"+i);
    if(tt.getAttribute("selected")==true)
	c2=tt.getAttribute("value");
  }*/
  c2=tt.options[index].value;
  document.getElementById("searchtype_s").value=c2;
  getpage(1);
}

function banu(usr){
  var xmlhttp;
  var bt;
  if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
    }
  else{// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

  xmlhttp.onreadystatechange=function(){
    if (xmlhttp.readyState==4 && xmlhttp.status==200){
         getpage(document.getElementById("pageno_s").value);
      }
  }
  bt=document.getElementById("dftime").value;
  xmlhttp.open("GET","Smarty/templates/usrtpl/setuserbantime.php?bemail="+usr+"&btime="+bt,true);
  xmlhttp.send();  
}

function releaseu(usr){
  var xmlhttp;
  var bt;
  if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
    }
  else{// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

  xmlhttp.onreadystatechange=function(){
    if (xmlhttp.readyState==4 && xmlhttp.status==200){
         getpage(document.getElementById("pageno_s").value);
      }
  }
  bt=0;
  xmlhttp.open("GET","Smarty/templates/usrtpl/setuserbantime.php?bemail="+usr+"&btime="+bt,true);
  xmlhttp.send();  
}

function entersearch(e){
var kenum;
if(window.event) // IE
  {
  keynum = e.keyCode
  }
else if(e.which) // Netscape/Firefox/Opera
  {
  keynum = e.which
  }
if(keynum==13)
 searchbegin();

}

</script>

<!--这里的代码用于记录用户的操作 -->
<input class='rec0' type="text" id="searchcontent_s" readonly/> 
<input class='rec0' type="text" id="searchtype_s" value="email" readonly/>
<input class='rec0' type="text" id="pageno_s" readonly/>

<!--                             -->

<div id="usrheader">
	<div id="usroplist">
 	 <a href="index.php?act=admin&adop=usrmng">用户列表</a>
	</div>
	<div id="usrsearch">
	  <select id="searchtype">
		<option id="st1" value='email'>Email</option>
		<option id="st2" value='nickname'>昵称</option>
		<option id="st3" value='name'>姓名</option>
		<option id="st4" value='qq'>QQ号</option>
		
          </select>
	  <input id="searchbox" type="text" value="Search user..." name="usremail" maxLength="30" onfocus="clearSearchBox(event)"onkeypress="entersearch(event)" />
	  <button class="brbutton"  name="submit" onclick='searchbegin()'  >搜索 </button>
	</div>

</div>

<div id="usrcontent">

<script type="text/javascript">
  var xmlhttp;
  if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
    }
  else{// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

  xmlhttp.onreadystatechange=function(){
    if (xmlhttp.readyState==4 && xmlhttp.status==200){
        document.getElementById("ucontent").innerHTML=xmlhttp.responseText;
      }
  }
  
  document.getElementById("pageno_s").value=""+1;
  xmlhttp.open("GET","Smarty/templates/usrtpl/showlist.php?pageno=1&searchtype=email",true);
  xmlhttp.send();
</script>

<div class="usropbar">
  <div id="banbar">
  </div>

  <div id="setdftime">
  默认封禁时间:&nbsp;
  <input id="dftime"  type="text" value="1" size=5 maxLength="3" onkeypress="return digitsonly(event)"/>
  天
  </div>
</div>

<div id="ucontent">
  
</div>




</div>
<?php }} ?>