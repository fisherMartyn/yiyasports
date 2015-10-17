<?php
require('../yiyaclass/MediaDB.php');

if(isset($_GET['a'])){ 
 switch($_GET['a']){
  case "up": UP();break;
  case "down":DOWN();break;
//  case "s":DisMedia();break;
  default:break;
 }
}
if(isset($_POST['a'])){
  switch($_POST['a']){
    case "c":addComment($_POST['cont'],$_POST['pid'],$_POST['mid'],$_POST['num']);break;
    case "m":getMediaList($_POST['scontent'],$_POST['num']);break;
    default:break;
  }
}
function getMediaList($search, $limit)
{
    $m = new MediaDB();
    $m->showThumbnail($search,$limit);
    $m->close();
}
/*
addComment or getComment, it's depends on whether $cont is null
*/
function addComment($cont,$pid,$mid,$limit){
  error_reporting(E_ALL ^ E_NOTICE);
  session_start();
  $name = $_SESSION["name"];
  $ip = $_SERVER["REMOTE_ADDR"];

  $c = new MediaDB();
  if($cont)$c->addComment($cont,$pid,$name,ip2long($ip),$mid,0);
  $c->showComment($mid,0,$limit); 
  $c->close();
}
function UP(){
  $connobj=new ConnDB("localhost","yiya_users");
  $conn=$connobj->GetConnId();
  $id = $_COOKIE['UD'];
  setcookie('UD','',time()-3600);
  $q = "update media set good = good + 1 where id = ".$id;
  $result = mysqli_query($conn,$q) or  die(mysql_error());
  $connobj->CloseConnId(); 
}

function DOWN(){
  $connobj=new ConnDB("localhost","yiya_users");
  $conn=$connobj->GetConnId();
  $id = $_COOKIE['UD'];
  setcookie('UD','',time()-3600);
  $q = "update media set bad = bad + 1 where id = ".$id; 
  $result = mysqli_query($conn,$q) or  die(mysql_error());
  $connobj->CloseConnId(); 
}

/*
function DisMedia(){
  $connobj=new ConnDB("localhost","yiya_users");
  $conn=$connobj->GetConnId();

  if(!isset($_GET['v']))$search = '';
  else $search = addslashes($_GET['v']);
  if(!isset($_GET['p']))$pgno = 0;
  else $pgno = $_GET['p'];
  if(!is_numeric($pgno))$pgno = 0;

  $q = "select distinct(media.id),media.* from media left join label on find_in_set(label.id,media.label) where label.value like '%".$search."%' or media.name like '%".$search."%' limit ".(5*$pgno).",5;";
  $result = mysqli_query($conn,$q) or  die(mysql_error());
  $rownum = mysqli_num_rows($result);
  echo "<div id='accordion'><dl>";
  for($i=0;$i<$rownum;$i++){
    $row=mysqli_fetch_assoc($result);
    echo "<dt>".$row['name']."</dt>";
    echo "<dd><a id='media' class='media' href='".$row['url']."'></a>";
    echo "<div class='interactArea' mid='".$row['id']."' up='".$row['good']."' down='".$row['bad']."'></div></dd>";
  }
  echo "</dl></div>";
  if($pgno > 0)echo"<div class='mless' id='true'>less</div>";
  else echo "<div class='mless' id='false'>less</div>";
  if($rownum == 5)echo"<div class='mmore' id='true'>more</div>";
  else echo "<div class='mmore' id='false'>more</div>";
  echo "<div class='saveinfo' v='".$search."' p='".$pgno."'></div>";
  $connobj->CloseConnId();
}
*/
?>
