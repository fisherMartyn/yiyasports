<?php

require '../../yiyaclass/ConnDB.class.php';


$addlabel = $_GET['name'];
if(isset($addlabel)&&$addlabel!=""){
    $addlabel = addslashes($addlabel);
    $connobj=new ConnDB("localhost","yiya_users");
    $conn=$connobj->GetConnId();
    $q = "insert into label(value,addtime) values ('".$addlabel."','".strtotime("now")."')";
    if($result=mysqli_query($conn,$q) or  die(mysql_error())){
        echo '成功';
        //mysqli_free_result($result); 
    }else echo '标签添加失败';
    $connobj->CloseConnId();
}

?>
