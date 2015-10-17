<?php
require '../yiyaclass/ConnDB.class.php';

$connobj=new ConnDB("localhost","yiya_users");
$conn=$connobj->GetConnId();

sleep(0.3);
if (empty($_GET['term'])) exit ;
$q = strtolower($_GET["term"]);
if (get_magic_quotes_gpc()) $q = stripslashes($q);


$mq="select * from protein_data order by hitnum desc";
$mresult=mysqli_query($conn,$mq) or  die(mysql_error());
$rownum = mysqli_num_rows($mresult);


$items=array();
for($i=0;$i<$rownum;$i++){
  $row=mysqli_fetch_assoc($mresult);
  $row_v=array($row['initials'],$row['pingyin'],$row['proteins'],$row['level'],$row['unitpro']);
  $items = array_merge_recursive($items, array($row['name']=>$row_v));
}


$result = array();
foreach ($items as $key=>$value) {
	if (strpos(strtolower($key), $q) !== false or strpos(strtolower($value[1]), $q)!==false or strpos(strtolower($value[0]), $q)!==false) {
	array_push($result, array("cal"=>$value[2], "label"=>$key, "level" => $value[3],"unit"=>$value[4]));
	}
	if (count($result) > 6)
		break;
}
mysqli_free_result($mresult);
echo json_encode($result);

?>
