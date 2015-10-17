<div align="center">
<style type="text/css" media="all">
@import url("./style.css");
#usrsearch{
  float:right;
  text-align:right;
  margin-right:5px 40px 5px auto;
}

#searchbox{
  font-size:16px;
  line-height:16px;
  height:20px;
  width:250px;
}
</style>

<div id="usrsearch">
  <input id="searchbox" type="text" value="Search..." onFocus="if (value =='Search...'){value =''}" onBlur="if (value ==''){value='Search...'}" onkeypress="entersearch(event)" />
  <a class="Sbutton"  name="submit" onclick='searchbegin()'  >搜索 </a>
</div>


<?php

require './class.php';

function outlable($lable){
  $connobj=new ConnDB("localhost","root","wecanwin1","yiya_users");
  $conn=$connobj->GetConnId();

  $sql = "select * from lable where id in (".$lable.");";
  $rst = mysqli_query($conn,$sql) or  die(mysql_error());
  $num = mysqli_num_rows($rst);
  $num = $num>4?4:$num;
  for($i=0;$i<$num;$i++){
    $row = mysqli_fetch_assoc($rst);
    echo "<a href='showlist.php?lable=".$row['id']."'\>".$row['value']."</a> ";
  }
  $connobj->CloseConnId();
}
function is_SQLSafe($search){
  $danger = array("\"","'","=");
  foreach($danger as $value){
    if(strpos($search,$value,0) !== false)return false;
  }
  return true;
}



$connobj=new ConnDB("localhost","root","wecanwin1","yiya_users");
$conn=$connobj->GetConnId();


//获得行数的方法：
//1、根据 table status 得到行数：$query = "show table status from yiya_users like 'media'";
//2、$query = select count(*);
//3、下面的裸方法

$q1= "select * from media";

//$lable= preg_replace(".*([';]+|(--)+).*","",$_GET['lable']);
$lable = $_GET['lable'];
$search = $_GET['search'];
if(isset($lable) && $lable != "" && is_numeric($lable))$q2 = $q1." where find_in_set('".$lable."',lable)";
else if(isset($search) && is_SQLSafe($search)){
 $q2 = "select distinct(media.id),media.* from media left join lable on find_in_set(lable.id,media.lable) where lable.value like '%".$search."%' or media.name like '%".$search."%'";
}else $q2 = $q1;
echo "<span id = \"lable\" style=\"visibility:hidden\">".$lable."</span>";
echo "<span id = \"usearch\" style=\"visibility:hidden\">".$search."</span>";

$q3 = $q2." limit 0, 300";
$total=mysqli_query($conn,$q3) or  die(mysql_error());
$totalnum = mysqli_num_rows($total);

if(isset($_GET['pageno']) && $_GET['pageno'] != "" && is_numeric($_GET['pageno']))$pageno = $_GET['pageno'];
else $pageno = 1;
$noonpage = 20;

$q3 = $q2." limit ".(($pageno-1)*$noonpage).",".$noonpage;
$result=mysqli_query($conn,$q3) or  die(mysql_error());
$rownum = mysqli_num_rows($result);
echo "<table id='SU_list'>";
echo "<tr id='SU_headbar'> <th>选择</th> <th>视频名称</th> <th>添加日期</th> <th>播放次数</th> <th>顶/踩</th> <th>类别标签</th></tr>";
for($i=0;$i<$rownum;$i++){
  $row=mysqli_fetch_assoc($result);

  echo "<tr class='SU_items' align='center'><td>";
  echo "<a href=\"javascript:DBDel(".$row['id'].");\" onclick=\"return OnDel()\"\>删除</a>";
  echo "</td><td class=email>";
  echo "<a href=\"".$row['url']."\" target=_blank>".$row['name']."</a>";
  echo "</td><td class=nickname>";
  echo $row['adddate'];
  echo "</td><td class=name>";
  echo $row['play'];
  echo "</td><td class=name>";
  echo $row['good']."/".$row['bad'];
  echo "</td><td class=name>";
  outlable($row['lable']); 
  echo "</td></tr>";
}
echo "</table>";
$connobj->CloseConnId();
?>

<script type="text/javascript">
function getpage(pageno){
var lable = document.getElementById("lable").innerHTML;
var search = document.getElementById("usearch").innerHTML;
var url= location.href.replace(location.search, "") +"?";
if(lable != "")url = url + "lable="+lable+"&";
else if(search != "")url = url +"search="+search+"&";
url = url+"pageno="+pageno;
location.href=url;
//location.replace(url);
}
function writeObj(obj){
	var description = "";
	for(var i in obj){  
		var property=obj[i];  
		description+=i+" = "+property+"\n"; 
	}  
	alert(description);
}
function DBDel(field){
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
      alert(xmlhttp.responseText); 
      location.reload();
    }
  }
  xmlhttp.open("GET","./DBdel.php?id="+field,true);
  xmlhttp.send();
}

}
function OnDel(){
  if(confirm("确定要删除该信息吗？删除将不能恢复！"))return true;
  else return false;
}

function searchbegin(){
var search = document.getElementById("searchbox").value;
var url= location.href.replace(location.search, "") +"?";
url = url+"search="+search;
location.href=url;
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

<?php
$pgviewobj= new PageView($totalnum, $noonpage, $pageno ,'getpage');
if($totalnum==0)
echo "<div>无搜索结果<div>";
$pageViewString = $pgviewobj->echoPageAsDiv();
echo $pageViewString;
?>
</div>
