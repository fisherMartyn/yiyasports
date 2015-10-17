<?php
class ModifyBsinfoClass
{
	var $conn;
	function ModifyBsinfoClass($conn)
	{
		$this->conn = $conn;
	}
	function SetBsinfo($email,$name,$tel,$qq,$day,$sex,$signature,$province,$city)
	{
		if ((!is_numeric($tel) and ($tel!='')) or (!is_numeric($qq) and ($qq!=''))  or ($email==''))
			return false;
		if(!get_magic_quotes_gpc())
        {
                $email=addslashes($email);
                $day=addslashes($day);
                $tel=addslashes($tel);
                $qq=addslashes($qq);
                $name=addslashes($name);
		$signature = addslashes($signature);
		$province = addslashes($province);
		$city = addslashes($city);
        }
		$mycomm="update users set name='$name', tel ='$tel',qq='$qq',birth_day='$day',sex='$sex',signature='$signature', province='$province', city='$city' where email='$email'";
		$result=mysqli_query($this->conn,$mycomm) or  die(mysql_error());
		if(!$result)
        {
               @mysqli_free_result($result);
			   return false;
         }
        else
        {
              @mysqli_free_result($result);
			  return true;
        }
        
	}
}	
?>
