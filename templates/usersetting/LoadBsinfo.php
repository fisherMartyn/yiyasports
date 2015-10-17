<?php
	//session_start();
	//require '../../yiyaclass/ConnDB.class.php';
	$connobj=new ConnDB("localhost","yiya_users");
	$conn=$connobj->GetConnId();
	$name=$_SESSION['name'];
	$q="select * from users where nickname='$name'";
	$result=mysqli_query($conn,$q);
	$row=mysqli_fetch_assoc($result);
	if($row['nickname']!=$name){
		echo "wrong cookie!";
		exit;
	}
	$smarty->assign('y_nickname',$row['nickname']);
	$smarty->assign('y_email',$row['email']);
	$smarty->assign('y_qq',$row['qq']);
	$smarty->assign('y_name',$row['name']);
	
	if ($row['sex'] == '2'){
		$smarty->assign('man_sex',"checked");
		$smarty->assign('woman_sex',"");
	}
	else if ($row['sex'] == '1'){
		$smarty->assign('man_sex',"");
		$smarty->assign('woman_sex',"checked");
	}
	else{
		$smarty->assign('man_sex',"");
		$smarty->assign('woman_sex',"");
	}
	$aname[0]="./avatar/".$name.".jpeg";
	$aname[1]="./avatar/".$name.".jpg";
	$aname[2]="./avatar/".$name.".png";
	$aname[3]="./avatar/".$name.".gif";
	$aname[4]="./avatar/default.gif";
	if (file_exists($aname[0]))	{ 
		//echo "The file exists 0";
		$smarty->assign('apath',$aname[0]);
	}
	else if (file_exists($aname[1])){ 
		//echo "The file exists 1"; 
		$smarty->assign('apath',$aname[1]);
	}
	else if (file_exists($aname[2])){ 
		//echo "The file exists 2"; 
		$smarty->assign('apath',$aname[2]);
	}
	else if (file_exists($aname[3])){ 
		//echo "The file exists 3"; 
		$smarty->assign('apath',$aname[3]);
	}
	else{
		$smarty->assign('apath',$aname[4]);
	}
	$smarty->assign('y_province',$row['province']);
	$smarty->assign('y_city',$row['city']);
	
	$smarty->assign('y_tel',$row['tel']);
	$smarty->assign('y_birthday',$row['birth_day']);
	
	
	
	
	//echo $row[nickname]." ".$row['email']." ".$row['name']." ".$row['sex']." ".$row['province']." ".$row['city']." ".$row['qq']." ".$row['tel']." ".$row['birth_day'];
	$connobj->CloseConnId();
	mysqli_free_result($result);
?>