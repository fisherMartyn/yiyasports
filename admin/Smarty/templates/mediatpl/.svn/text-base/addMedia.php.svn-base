<?php require './addMediaDB.php';?>
<script type="text/javascript">
function validate_required(field,alerttxt)
{
  with (field)
  {
    if (value==null||value=="")
      {alert(alerttxt);return false}
    else {return true}
  }
}
function adddb(thisform)
{
  var xmlhttp;
  if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  }
  else{// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function(){
    if (xmlhttp.readyState==4 && xmlhttp.status==200){
        document.getElementById("result").innerHTML=xmlhttp.responseText;
        document.getElementById("name").value = "";
        document.getElementById("url").value = "";
    }
  }

  var r=document.getElementsByName("lable"); 
  var l = new Array();
  for(var i=0;i<r.length;i++){
    if(r[i].checked)l[l.length]=r[i].value;
  }
  $lable = l.join();
  with(thisform)xmlhttp.open("GET","./addMediaDB.php?name="+name.value+"&url="+url.value+"&lable="+$lable,true);
  xmlhttp.send();
}
function validate_form(thisform)
{
    if (validate_required(thisform.name,"name must be filled out!")==false)
      {thisform.name.focus();return false;}
    else if (validate_required(thisform.url,"url must be filled out!")==false)
      {thisform.url.focus();return false;}
    else
    { adddb(thisform); return false;}
}
</script>

<div align="center">

<style type="text/css">
.Sbutton{
  padding:3px 3px 3px 3px;
  border:1px solid black;
  cursor:pointer;
  background-color:#E7E7E7;
}

.Sbutton:hover
{
  background-color:#F5F5DC;
}
ul#table{
width:600px;
}
#name,#url{
  width:450px;
}
#lab{
  width:300px;
}
#a,#b,#c,#d,#e,#result{float:left}
#f{float:center; list-style:none}
#lable{
  width:25px;
}

</style>
<form action="" onsubmit="return validate_form(this)" method="post">
    <ul id="table" align="center">
      <li id="a">视频名称：<input id="name" type="text"></li> 
      <li id="b">视频地址：<input id="url" type="text"></li>
      <li id="c">已有标签：</li>
      <li id="d"><div id="showlable" style="width:450px"><?php echo echolable();?></div></li>
      <li id="e">添加标签：<input id="lab" type="text"><input type="button" class="Sbutton" value="确定" id="add_lable" onclick="addLable_fun();" style="width:100px;margin:0 40px"></input></li>
    <li id="result"></li>
    <li id="f"><input class="Sbutton" type="submit" name = "submit" value="确认" style="width:100px;margin:0 200px 0 30px float:left">
    <input class="Sbutton" type="reset" name = "reset" value="取消" style="width:100px;margin:0 30px"></li>
    </ul>
</form>
<script type="text/javascript">
function addLable_fun(){
  $l = document.getElementById("lab").value;
  if($l==""){alert("标签不能为空");return false;}
  var xmlhttp;
  if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  }
  else{// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function(){
    if (xmlhttp.readyState==4 && xmlhttp.status==200){
        alert("添加标签成功");
        document.getElementById("showlable").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","./addMediaDB.php?addlable="+$l,true);
  xmlhttp.send();
}
</script>
</div>

