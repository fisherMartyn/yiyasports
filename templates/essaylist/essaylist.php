<?php
require_once('./yiyaclass/EssayCover.class.php');
$connobj=new ConnDB("localhost","yiya_users");
$conn=$connobj->GetConnId();


$q="select id from essay";
$result=mysqli_query($conn,$q) or  die(mysql_error());
$rownum = mysqli_num_rows($result);
$str="";
for($i=0;$i<$rownum;$i++){
        $row=mysqli_fetch_assoc($result);
	$essaycover=new EssayCover($conn,$row['id']);
	$str=$str."<li class=\"span3\">".$essaycover->getCover()."</li>";
}

$smarty->assign("essaylist",$str);


?>
