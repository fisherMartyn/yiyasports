<?php
	require '../../yiyaclass/AdminLoginCheck.class.php';
        require '../../yiyaclass/ConnDB.class.php'; 
	require '../../yiyaclass/UserLockTimestamp.class.php'; 
	session_start();
	$username=$_GET['tn'];
        $passwd=$_GET['tp'];
	$tt = $_GET['tt'];
        $connobj=new ConnDB("localhost","yiya_users");
	$conn=$connobj->GetConnId();
        $mycheck= new LoginCheckClass($conn);
	
	$passwd = md5($passwd);
	
	$lockstate = new UserLockTimeStamp($conn,$username);
        $result=$mycheck->Check($username,$passwd);
	if  ($result ==true)
        {
                if ($lockstate->GetTime()!='')
                {
                        echo "不小心做了什么被锁定了吧，解锁时间".$lockstate->GetTime();
                        $connobj->CloseConnId();
                        exit;
                }
                else
                {
                        if ($tt =='1'){
				setcookie("name",$mycheck->NickName()." ".$passwd, time()+3600*24*30,"/");
				$_SESSION['name']=$mycheck->NickName();
			}
			else{
				setcookie("name",$mycheck->NickName()." ".$passwd, time()+3600*24,"/");
				$_SESSION['name']=$mycheck->NickName();

			}
                        $connobj->CloseConnId();
                        echo "欢迎回来：".$mycheck->NickName();
                        exit;
                }
        }
        else
        {
                $connobj->CloseConnId();
                echo "您的登陆名和密码不匹配，请检查";
        }
?>
