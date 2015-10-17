
<div>

<style type="text/css" media="all">


@import url("../css/PageViewSample.css");
@import url("../css/UserInfoList.css");
@import url("../css/Sbutton.css");
@import url("./cssforadmin/Bsinfo.css");

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
  $("#pageno_s").val(pageno);
  t2=$("#searchtype_s").val();
  t1=$("#searchcontent_s").val();
  xmlhttp=$.ajax({url:"Smarty/templates/usrtpl/showlist.php?pageno="+pageno+"&searchcontent="+t1+"&searchtype="+t2,async:false});
  $("#ucontent").html(xmlhttp.responseText);
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

function showdetails(email){
var xmlhttp;
xmlhttp=$.ajax({url:"Smarty/templates/usrtpl/showdetails.php",async:false,data:{email:email}});
$("#detailsdialog").html(xmlhttp.responseText);
$("#detailsdialog").dialog({
   title:email,
   width:600,
   resizable:false,
   buttons:{'确定':function(){
	$(this).dialog("close");
   }
  }
});

}


</script>

<!--这里的代码用于记录用户的操作 -->
<input class='rec0' type="text" id="searchcontent_s" readonly/> 
<input class='rec0' type="text" id="searchtype_s" value="email" readonly/>
<input class='rec0' type="text" id="pageno_s" readonly/>

<!--                             -->

<div id="usrheader">
	<div id="usroplist">
 	 <span>用户信息列表</span>
	</div>
	<div id="usrsearch">
	  <select id="searchtype">
		<option id="st1" value='email'>Email</option>
		<option id="st2" value='nickname'>昵称</option>
		<option id="st3" value='name'>姓名</option>
		<option id="st4" value='qq'>QQ号</option>
                <option id="st5" value='city'>城市</option>		
          </select>
	  <input id="searchbox" type="text" value="Search user..." name="usremail" maxLength="30" onfocus="clearSearchBox(event)"onkeypress="entersearch(event)" />
	  <a class="Sbutton"  name="submit" onclick='searchbegin()'  >搜索 </a>
	</div>

</div>

<div id="usrcontent">

<script type="text/javascript">
$(document).ready(function(){
  var xmlhttp;
  $("#pageno_s").val(1);
  xmlhttp=$.ajax({url:"Smarty/templates/usrtpl/showlist.php?pageno=1&searchtype=email",async:false});
  $("#ucontent").html(xmlhttp.responseText);  
});
</script>


<div id="ucontent">
  
</div>


<div id="detailsdialog" style="display:none">
</div>

</div>
