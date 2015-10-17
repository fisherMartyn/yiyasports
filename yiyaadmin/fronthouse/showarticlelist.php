<?php

$connobj=new ConnDB("localhost","yiya_users");
$conn=$connobj->GetConnId();
$nowtime=strtotime("now");
$q="select id,title,author,readtimes,good,bad,pubtime,bantime,banreason from essay";
 $result=mysqli_query($conn,$q) or  die(mysql_error());
 $rownum = mysqli_num_rows($result);
 
 for($i=0;$i<$rownum;$i++){
    $row=mysqli_fetch_assoc($result);	
	echo "<tr id=\"user_".$row['id']."\">";
	echo "<td>".$row['title']."</td>";	
	echo "<td>".$row['author']."</td>";	
	echo "<td>".$row['readtimes']."</td>";
	echo "<td>".$row['good']."</td>";
	echo "<td>".$row['bad']."</td>";
	echo "<td>".date("Y-m-d H:i:s",$row['pubtime']).'</td>';
	if($row['bantime']<=$nowtime)
	  echo "<td class=\"center\"><span class=\"label label-success\">正常</span></td>";
	else 
	  echo "<td class=\"center\"><span title=\"封禁原因\" data-rel=\"popover\" data-content='".$row['banreason']."' class=\"label label-important\">封禁中</span></td>";
	if($row['bantime']<=$nowtime)
	  echo "<td><a onclick=\"banarticle('".$row['id']."')\" class=\"btn btn-danger ban_button\" href=\"#\"><i class=\"icon-minus-sign icon-white\"></i>封禁</a></td>";
	else
	  echo "<td><a onclick=\"releasearticle('".$row['id']."')\" class=\"btn btn-info release_button\" href=\"#\"><i class=\"icon-ok icon-white\"></i>解封</a></td>";
	echo "<td class=\"ops center\"><a onclick=\"viewarticle('".$row['id']."')\" class=\"btn btn-success view_button\" href=\"#\"><i class=\"icon-zoom-in icon-white\"></i>查看 </a> </td>";
	echo "</tr>";
 }

$conn=$connobj->CloseConnId();
?>
