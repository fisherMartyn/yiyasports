<?php

function outlabel($label){
  $connobj=new ConnDB("localhost","yiya_users");
  $conn=$connobj->GetConnId();
  
  $sql = "select * from label where id in (".$label.");";
  $rst = mysqli_query($conn,$sql) or  die(mysql_error());
  $num = mysqli_num_rows($rst);
  $num = $num>4?4:$num;
  for($i=0;$i<$num;$i++){
    $row = mysqli_fetch_assoc($rst);
    echo "<a class='label'\>".$row['value']."</a> ";
  } 
  $connobj->CloseConnId();
} 


$connobj=new ConnDB("localhost","yiya_users");
$conn=$connobj->GetConnId();
 $q= "select * from media"; 
 $result=mysqli_query($conn,$q) or  die(mysql_error());
 $rownum = mysqli_num_rows($result);
 for($i=0;$i<$rownum;$i++){
  $row=mysqli_fetch_assoc($result);

  echo "<tr align='center' id='media_".$row['id']."'>";
  echo "<td><a href=\"".$row['url']."\" target=_blank>".$row['name']."</a></td>";
  echo "<td>".$row['adddate']."</td>";
  echo "<td>".$row['play']."</td>";
  echo "<td class=name>".$row['good']."/".$row['bad']."</td>";
  echo "<td>";
  outlabel($row['label']);
  echo "</td>";
  echo "<td><a class=\"btn btn-danger ban_button\" onclick=\"delmedia('".$row['id']."','".$row['name']."')\"><i class=\"icon-remove-circle icon-white\"></i>删除</a></td>";
  echo "<td class=\"ops center\"><a name=\"".$row['id']."\" class=\"btn btn-success view_button\" href=\"#\"><i class=\"icon-zoom-in icon-white\"></i>查看 </a> </td>";
  echo "</tr>";
}

$conn=$connobj->CloseConnId();
?>
