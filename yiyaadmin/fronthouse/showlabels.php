<?php
    $rtn ="";
    $connobj=new ConnDB("localhost","yiya_users");
    $conn=$connobj->GetConnId();
    $mycomm="select * from label;";
    if($result=mysqli_query($conn,$mycomm) or  die(mysql_error())){
        $rownum = mysqli_num_rows($result);
        for($i=0;$i<$rownum;$i++){
          $row=mysqli_fetch_assoc($result);
          $rtn = $rtn."<a name='selected_labels' data-selected='0' data-id='".$row['id']."' onclick=\"selectlabel('".$row['id']."')\" class='label' style='margin:0px 3px 0px 3px' id='label_".$row['id']."'>".$row['value']."</a>";
         if(($i+1)%5==0)$rtn =$rtn."</br>";
        }
    }
    $connobj->CloseConnId();
   echo $rtn;
?>
