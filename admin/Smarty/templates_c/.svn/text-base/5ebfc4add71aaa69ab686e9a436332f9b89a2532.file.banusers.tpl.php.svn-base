<?php /* Smarty version Smarty-3.1.12, created on 2013-06-18 20:46:13
         compiled from "/www/workbench/ydy/yiya/admin/Smarty/templates/bantpl/banusers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180791133251c048124b5152-31315113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ebfc4add71aaa69ab686e9a436332f9b89a2532' => 
    array (
      0 => '/www/workbench/ydy/yiya/admin/Smarty/templates/bantpl/banusers.tpl',
      1 => 1371557856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180791133251c048124b5152-31315113',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51c048124e22f2_33454703',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c048124e22f2_33454703')) {function content_51c048124e22f2_33454703($_smarty_tpl) {?>
<div>

<style type="text/css" media="all">


@import url("../css/PageViewSample.css");
@import url("../css/UserInfoList.css");
@import url("../css/Sbutton.css");

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
  width:200px;
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

#ucontent{
margin:15px auto 15px auto;
width:900px;
}

.rec0{
display:none;
position:absolute;
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
  var onlyban;
  if($("#isonlyban:checked").val()==null)
   onlyban=false;
  else
   onlyban=true;
  $("#pageno_s").val(pageno);
  t2=$("#searchtype_s").val();
  t1=$("#searchcontent_s").val();
  xmlhttp=$.ajax({url:"Smarty/templates/bantpl/banlist.php?onlyban="+onlyban+"&pageno="+pageno+"&searchcontent="+t1+"&searchtype="+t2,async:false});
 
  $("#ucontent").html(xmlhttp.responseText);
}

function banop(email){
  $("#bandialog").dialog({
    title:email,
    modal:true,
    width:250,
    draggable:false,
    resizable:false,
    buttons:{
      '确定':function(){
	var tt=$("#bantimed").val();
	var isnum=/\d/;
	if(!(isnum.test(tt))){
	   alert("时间格式不正确！");
           return;
	}
	banuserYES(email,$("#bantimed").val(),$("#banreasond").val());
	$(this).dialog("close");
      },
      '取消':function(){
	$(this).dialog("close");
      }
    }
  });
}
function releaseop(email){
  var xmlhttp;
  xmlhttp=$.ajax({url:"Smarty/templates/bantpl/banuser.php",data:{bemail:email,btime:0,breason:""},async:false});
  getpage($("#pageno_s").val());

}

function banuserYES(email,time,reason){
  var xmlhttp;
  xmlhttp=$.ajax({url:"Smarty/templates/bantpl/banuser.php",data:{bemail:email,btime:time,breason:reason},async:false});
  getpage($("#pageno_s").val());
}
function searchbegin(){
  var c1,c2,tt,index;
  c1=$("#searchbox").val();
  $("#searchcontent_s").val(c1);
  tt=document.getElementById("searchtype");
  index=tt.selectedIndex;
  c2=tt.options[index].value;
  $("#searchtype_s").val(c2);
  getpage(1);
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

$(document).ready(function(){
  var xmlhttp;
  $("#pageno_s").val(1);
  xmlhttp=$.ajax({url:"Smarty/templates/bantpl/banlist.php?onlyban=true&pageno=1&searchtype=email",async:false});
  $("#ucontent").html(xmlhttp.responseText);  
  $(".radiob").change(function(){
	$("#searchcontent_s").val("");
	$("#searchtype_s").val("email");
	getpage(1);
   });
});

</script>

<!--这里的代码用于记录用户的操作 -->
<input class='rec0' type="text" id="searchcontent_s" readonly/> 
<input class='rec0' type="text" id="searchtype_s" value="email" readonly/>
<input class='rec0' type="text" id="pageno_s" readonly/>

<!--                             -->

<div id="usrheader">
	<div id="usroplist">
	<form>
		<input type="radio" value='1' class="radiob" name="list" id="isonlyban" checked>封禁列表</input>
		<input type="radio" value='2' class="radiob" name="list" >全部用户</input>
	</form>
	</div>
	<div id="usrsearch">
	  <select id="searchtype">
		<option id="st1" value='email'>Email</option>
		<option id="st2" value='nickname'>昵称</option>
		<option id="st3" value='qq'>QQ号</option>
          </select>
	  <input id="searchbox" type="text" value="Search user..." name="usremail" maxLength="30" onfocus="clearSearchBox(event)"onkeypress="entersearch(event)" />
	  <a class="Sbutton"  name="submit" onclick='searchbegin()'  >搜索 </a>
	</div>

</div>

<div id="usrcontent">



<div id="ucontent">
  
</div>
<style>
#bandialog{
  font-size:16px;
  line-height:20px;
}
#bantimed{
  width:40px;
  padding:1px 3px 1px 3px;
  font-size:16px;
  line-height:16px;
  text-align:center
}
#banreasond{
  width:200px;
  height:100px;
  padding:2px 3px 2px 3px;
  line-height:16px;
}
#tt1,#tt2{
  margin:auto;
  width:200px;
  text-align:left;
}

</style>

<div id="bandialog"  style="display:none">
  <div id="tt1">封禁时间：<input id="bantimed" value='1' type="text" maxLength='3' onkeypress="return digitsonly(event)"> </input> 天</div>
  <div id="tt2">封禁理由：<br/> <textarea id="banreasond" maxLength='60'></textarea>   </div>
</div>


</div>
<?php }} ?>