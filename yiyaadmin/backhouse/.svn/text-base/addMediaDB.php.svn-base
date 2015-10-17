<?php
require '../../yiyaclass/ConnDB.class.php';

$name = $_GET['name'];
$url = $_GET['url'];
$label = $_GET['label'];
if(isset($name)&&$name!=""&&isset($url)&&$url!=""){ 
    $connobj=new ConnDB("localhost","yiya_users");
    $conn=$connobj->GetConnId(); 

    if(!(isset($label)&&$label!=""))$label="0"; 
    if(strpos($name,"\"",0) !== false || strpos($name,"'",0) !== false || strpos($name,"=",0)!==false)exit("nrror name:".$name);
    //if(strpos($url,"\"",0) !== false || strpos($url,"'",0) !==false||strpos($url,"=",0)!==false)exit("error url:".$url);
    $url = addslashes($url);
    if(strpos($label,"\"",0) !== false || strpos($label,"'",0)!==false || strpos($label,"=",0)!=false)exit("error label:".$label);

    $mycomm="insert into media(name, url, label) values('".$name."', '".$url."','".$label."');";
    if($result=mysqli_query($conn,$mycomm) or  die(mysql_error())){
        echo '成功';
        //mysqli_free_result($result); 
    }else echo '视频添加失败';
    $connobj->CloseConnId();
 }
?>
