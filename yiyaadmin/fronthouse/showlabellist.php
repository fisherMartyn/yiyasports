<?php
    $connobj=new ConnDB("localhost","yiya_users");
    $conn=$connobj->GetConnId();
    $mycomm="select * from label;";
    if($result=mysqli_query($conn,$mycomm) or  die(mysql_error())){
        $rownum = mysqli_num_rows($result);
        for($i=0;$i<$rownum;$i++){
          $row=mysqli_fetch_assoc($result);
	  echo "<tr align='center' id='label_".$row['id']."'>";
	  echo "<td>".$row['value']."</td>";
	  echo "<td>".date("Y-m-d", $row['addtime'])."</td>";
	  echo "<td><a class=\"btn btn-danger ban_button\" onclick=\"dellabel('".$row['id']."','".$row['value']."')\"><i class=\"icon-remove-circle icon-white\"></i>删除</a></td>";
	  echo "</tr>";
          //$rtn = $rtn."<a name='selected_labels' data-selected='0' data-id='".$row['id']."' onclick=\"selectlabel('".$row['id']."')\" class='label' style='margin:0px 3px 0px 3px' id='label_".$row['id']."'>".$row['value']."</a>";
        }
    }
    $connobj->CloseConnId();
?>
