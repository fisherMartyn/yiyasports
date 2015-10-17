<?php
require_once("ConnDB.class.php");
class MediaDB{
 var $DB_conobj;
 var $DB_con;
 function __construct()
 {
   $this->DB_conobj=new ConnDB("localhost","yiya_users");
   $this->DB_con=$this->DB_conobj->GetConnId();
 }
 function showThumbnail($search,$limit)
 {
 	$query = "select distinct(media.id),media.* from media left join label on find_in_set(label.id,media.label) where label.value like '%".$search."%' or media.name like '%".$search."%' limit 0,".$limit;
  $result = mysqli_query($this->DB_con,$query) or  die(mysql_error());
   $rownum = mysqli_num_rows($result);
   echo "<div class='mlist'>";
   echo "<div class='holder'></div>";
   echo "<ul id='itemContainer'>";
   for($i=0;$i<$rownum;$i++)
   {
     $row=mysqli_fetch_assoc($result);
     echo "<li>";
     $this->showThumbnailOne($row);
     echo "</li>";
   }
	if($rownum == $limit)
		echo "<div class=\"hasMore\" style=\"display:none\"></div>";
   echo "</ul>";
   echo "</div>";
 }
 function showThumbnailOne($row)
 {
   //$url ="javascript:iframego(".$row['id'].")";
   $url = "index.php?act=media&mid=".$row['id'];
   echo "<div class='v'>";
   echo "<div class='v-thumb'><img alt='".$row['name']."' src='".$row['img1']."'></div>";
   echo "<div class='v-link'><a title='".$row['name']."' href='".$url."'/></div>";
   echo "<div class='v-title'>".$row['name']."</div>";
   echo "<div class='v-meta'>";
   echo "<div class='v-meta-title'><a href='".$url."'>".$row['name']."</a></div>";
   echo "<div class='v-meta-entry'><i class='ico-statplay' title='播放'></i><span class='v-num'>".$row['play']."</span></div>";
   echo "<div class='v-meta-entry'><a class='btn btn-small' href='".$url."'>播  放</a></div>";
   echo "</div>";
   echo "</div>";
 }
	function showPlayOne($id)
	{
		$query = "select * from media where id=".$id;
		$result = mysqli_query($this->DB_con,$query) or  die(mysql_error());
		$rownum = mysqli_num_rows($result);
		$row=mysqli_fetch_assoc($result);
		echo "<div class='media-swf' href='".$row['url']."'></div>";
		echo "<div class='interactArea' mid='".$row['id']."' up='".$row['good']."' down='".$row['bad']."'></div>";
	}
	function showMediaInLi($row,$class="")
	{
		echo "<li class='".$class."' mid='".$row['id']."' up='".$row['good']."' down='".$row['bad']."' src1='".$row['url']."' src2='".$row['url_real']."' src3='".$row['img2']."'><img src='".$row['img2']."'/></li>";
	}
	function showPlayMany($id)
	{
		$query = "select * from media where id=".$id;
		$result = mysqli_query($this->DB_con,$query) or  die(mysql_error());
		$rownum = mysqli_num_rows($result);
		$row=mysqli_fetch_assoc($result);
		$this->showMediaInLi($row,"cur");
		for($i=1;$i<6;$i++)
		{
			$this->showMediaInLi($row);
			//echo "<li mid='".$row['id']."' up='".$row['good']."' down='".$row['bad']."' src1='".$row['url']."' src2='".$row['url_real']."' src3='".$row['img2']."'><img src='".$row['img2']."'/></li>";
		}
	}
    
    function addComment($content,$pid,$name,$ip,$id,$type)
    {
        $sql = "insert into comments(content,parent_id,user_name,user_ip)values('$content','$pid','$name',$ip)";
        mysqli_query($this->DB_con,$sql) or die(mysql_error());
        $sql = "select last_insert_id()";
        $rst = mysqli_query($this->DB_con,$sql) or die(mysql_error());
        $row = mysqli_fetch_row($rst);
        if($type == 0){
            $sql = "update media set comments=concat_ws(',',comments,'".$row[0]."') where id=".$id.";";
            mysqli_query($this->DB_con,$sql) or die(mysql_error());
        }else if($type == 1){}
    }
    function showComment($id,$type,$limit=300)
    {
        $list = "";
        if($type==0){
            $sql = "select comments from media where id=$id";
            $rst = mysqli_query($this->DB_con,$sql) or die(mysql_error());
            $row = mysqli_fetch_row($rst);
            $list = $row[0];
        }else{}
        $this->showCommentList($list,$limit);
    }
    /*
    $list:
    */
    function showCommentList($list,$limit)
    {
error_reporting(E_ALL ^ E_NOTICE);
        $sql = "select * from comments where id in ($list) limit 0,$limit";
        $rst = mysqli_query($this->DB_con,$sql) or die (mysql_error());
        $num = mysqli_num_rows($rst);
        $myarray = array();
        for($i=0;$i<$num;$i++)
        {
            $row = mysqli_fetch_assoc($rst);
            $pattern='/\[em(\d+)\]/i';
            //$replace='<img vsrc="/em/${1}.gif"/>';
            $replace='<img id="em${1}"/>';
            $a1 = $row['id'];
            $a2 = preg_replace($pattern,$replace,$row['content']);
            $a3 = $row['user_name'];
            $a4 = $row['parent_id'];
            if($a3==null || $a3 == "")$a3=long2ip($row['user_ip']);
            if($a4 == null || $a4 == 0)
                $myarray["$a1"] = array($a2, $a3, $row['date'],$a1);
            else{
                $newa2 = $a2.'//@<a href="">'.$myarray[$a4][1].'</a>:'.$myarray[$a4][0];
                $myarray["$a1"] = array($newa2,$a3,$row['date'],$a1);
            }
        }
        $myarray = array_values($myarray);
        for($i= $num - 1;$i>=0;$i--)
        {
            echo '<li time="'.$myarray[$i][2].'" author="'.$myarray[$i][1].'" pid="'.$myarray[$i][3].'">'.$myarray[$i][0].'</li>';
        }
	if($num == $limit)
		echo "<div class=\"hasMore\" style=\"display:none\"></div>";
    }
    function close()
    {
        $this->DB_conobj->CloseConnId();
    }
}
?>
