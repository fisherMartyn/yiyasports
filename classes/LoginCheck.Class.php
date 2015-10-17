<?php
class LoginCheckClass{
	var $conn;
	
	public function LoginCheckClass($conn)
	{
		$this->conn = $conn;
	}
	public function Check($email,$passwd)
	{
		if(!$email)
		{
			//write log files here.
			exit;
		}
		
		$q="SELECT * FROM users WHERE email='$email' or nickname='$email' or tel = '$email'";
		$result=mysqli_query($this->conn,$q);
		if(!$result)
		{
			//write log files here.
			exit;
		}
		$row=mysqli_fetch_assoc($result);
		if ((($email != $row['email']) and ($email != $row['nickname']) and ($email !=$row['tel'])) or ($passwd != $row['password']))
		{
			mysqli_free_result($result);
			return false;
		}
		else
		{
			$nowtime=strtotime("now");
			$p="update users set lastlogin='$nowtime' where email='$email' or nickname='$email' or tel = '$email'";
			$result2=mysqli_query($this->conn,$p);
                	if(!$result2)
                	{
                        	//write log files here.
                        	exit;
                	}
			@mysqli_free_result($result);
			@mysqli_free_result($result2);
			return $row['nickname'];
		}
	}
}
?>
