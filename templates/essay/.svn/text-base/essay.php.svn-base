<?php
$connobj=new ConnDB("localhost","yiya_users");
$conn=$connobj->GetConnId();

$q="select * from essay where id=$essayid";
$result=mysqli_query($conn,$q) or  die(mysql_error());
$row=mysqli_fetch_assoc($result);

$smarty->assign("essaytitle",$row['title']);
$essaycontents=file_get_contents("./essays/".$essayid.".html");
$smarty->assign("essaycontents",$essaycontents)

?>
