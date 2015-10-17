<?php
class ModifyPasswdClass
{
	var $conn;
	function ModifyPasswdClass($conn)
	{
		$this->conn = $conn;
	}
	function Modify($email,$originpasswd,$passwd1,$passwd2)
	{
		if(($passwd1 == NULL) or ($passwd2 ==NULL))
			return "新密码不能为空";
		if($passwd1 != $passwd2)
			return "两次输入的密码不一致";
		if(!get_magic_quotes_gpc())
        {
            $email=addslashes($email);
            $passwd1=addslashes($passwd1);
            $passwd2=addslashes($passwd2);
        }
		$q1="SELECT * FROM users WHERE email='$email'";
		$result=mysqli_query($this->conn,$q1) or  die(mysql_error());
        $row=mysqli_fetch_assoc($result);
		if($originpasswd != $row['password'])
        {
            mysqli_free_result($result);
			return "原始密码输入错误";
        }
		mysqli_free_result($result);
		$q2="update users set password = '$passwd1' where email='$email'";
		$result=mysqli_query($this->conn,$q2) or  die(mysql_error());
        if (!result)
		{
			@mysqli_free_result($result);
			return "数据库原因修改失败";
		}
		else
		{
			@mysqli_free_result($result);
			return "修改成功";
		}
		
		
	}
}	
?>
