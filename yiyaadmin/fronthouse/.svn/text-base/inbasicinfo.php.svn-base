<?php
    $connobj=new ConnDB("localhost","yiya_users");
    $conn=$connobj->GetConnId();
    session_start();
    $nickname = $_SESSION['name'];
    $q="SELECT * FROM users WHERE nickname='".$nickname."'";
    $result=mysqli_query($conn,$q);
    if(!$result){
	exit;
    }
    $row=mysqli_fetch_assoc($result);
    $email = $row['email'];
    $name =$row['name'];
    $male="checked";
    $female="";
    if($row['sex']=='1'){
      $female="checked";
      $male="";
    }
    $birth_day=$row['birth_day'];
    $tel=$row['tel'];
    $qq=$row['qq'];
    $province= $row['province'];
    $city=$row['city'];
    $signature=$row['signature'];
    $rolearray=array("一般","教练","管理员");
    $role=$rolearray[$row['role']];
    $connobj->CloseConnId();
?>
