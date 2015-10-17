<?php
require './class.php';
function echolabel(){
    $rtn ="";
    $connobj=new ConnDB("localhost","root","wecanwin1","yiya_users");
    $conn=$connobj->GetConnId(); 
    $mycomm="select * from label;"; 
    if($result=mysqli_query($conn,$mycomm) or  die(mysql_error())){
        $rownum = mysqli_num_rows($result);
        for($i=0;$i<$rownum;$i++){
          $row=mysqli_fetch_assoc($result);    
          $rtn = $rtn.$row['value']."<input id=\"label\" type=\"checkbox\" name=\"label\" value='".$row['id']."'/>";
	 if(($i+1)%4==0)$rtn =$rtn."</br>";
        }
    }
    $connobj->CloseConnId(); 
   return $rtn;
}

$addlabel = $_GET['addlabel'];
if(isset($addlabel)&&$addlabel!=""){
    $rtn = "";
    $addlabel = addslashes($addlabel);
    $connobj=new ConnDB("localhost","root","wecanwin1","yiya_users");
    $conn=$connobj->GetConnId(); 
    $q = "insert into label(value) values ('".$addlabel."')";
    if($result=mysqli_query($conn,$q) or  die(mysql_error())){
        $rtn = '成功添加标签：'.$name;
        //mysqli_free_result($result); 
    }else $rtn = '标签添加失败';
    $connobj->CloseConnId();
    $a = echolabel();
    echo $a;
    exit();
}

$name = $_GET['name'];
$url = $_GET['url'];
$label = $_GET['label'];
if(isset($name)&&$name!=""&&isset($url)&&$url!=""){ 
    require './class.php';
    $connobj=new ConnDB("localhost","root","wecanwin1","yiya_users");
    $conn=$connobj->GetConnId(); 

    if(!(isset($label)&&$label!=""))$label="0"; 
    if(strpos($name,"\"",0) !== false || strpos($name,"'",0) !== false || strpos($name,"=",0)!==false)exit("nrror name:".$name);
    //if(strpos($url,"\"",0) !== false || strpos($url,"'",0) !==false||strpos($url,"=",0)!==false)exit("error url:".$url);
    $url = addslashes($url);
    if(strpos($label,"\"",0) !== false || strpos($label,"'",0)!==false || strpos($label,"=",0)!=false)exit("error label:".$label);

    $mycomm="insert into media(name, url, label) values('".$name."', '".$url."','".$label."');";
    if($result=mysqli_query($conn,$mycomm) or  die(mysql_error())){
        echo '成功添加视频：'.$name;
        //mysqli_free_result($result); 
    }else echo '视频添加失败';
    $connobj->CloseConnId();
 }
?>
