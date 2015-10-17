<?php

//header("Content-type: text/html; charset=utf8");
require '../../../../classes/ConnDB.class.php';
require '../../../../classes/PageView.class.php';
require '../../../../classes/SearchUser.class.php';
require '../../../../classes/SecurityControl.class.php';





$pageno=$_GET['pageno'];
$searchtype=$_GET['searchtype'];
$searchcontent=$_GET['searchcontent'];
$connobj=new ConnDB("localhost","root","wecanwin1","yiya_users");
$conn=$connobj->GetConnId();

$securityobj=new SecurityControl($conn,true,'');
if(!$securityobj->check()){
  exit;
}


$suobj= new SearchUser($conn,$searchtype,$searchcontent,$pageno,15);
$suString= $suobj->getinfolist('showdetails');
echo $suString;

$pgviewobj= new PageView($suobj->totalno, $suobj->itemsno, $pageno ,'getpage');
$pageViewString = $pgviewobj->echoPageAsDiv();
echo $pageViewString;
$conn=$connobj->CloseConnId();




?>
