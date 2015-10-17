	<?php
		session_start();
		require '../../../classes/LoginCheck.Class.php';
		require '../../../classes/ConnDB.class.php';
		require '../../../classes/UserLockTimestamp.class.php';
		$username=$_GET['username'];
		$passwd=$_GET['password'];
		$passwd=md5($passwd);
		$connobj=new ConnDB("localhost","root","wecanwin1","yiya_users");
		$conn=$connobj->GetConnId();
		$mycheck= new LoginCheckClass($conn);
		$lockstate = new UserLockTimeStamp($conn,$username);
		if  ($mycheck->Check($username,$passwd))
		{
			if ($lockstate->GetTime()!='')
			{
				echo "您已经被锁定，锁定时间到：".$lockstate->GetTime();
				$connobj->CloseConnId();
				exit;
			}
			else
			{
			$_SESSION['name']=$username;
			$connobj->CloseConnId();
			//header("Location:../../index.php?act=admin");
			echo "success";
			exit;
			}
		}
		else
		{
			//header("location='../../index.php?act=loginfial'");
			$connobj->CloseConnId();
			echo "fail";
		}
	?>
