<?php
class UserLockTimeStamp
{
	var $username;
	var $conn;
	function UserLockTimeStamp($connobj,$username)
	{
		$this->username = $username;
		$this->conn = $connobj;
	}
	public function GetTime()
	{
		if(!$this->username) 
		{
			echo "init error";
			exit;
		}
		if(!get_magic_quotes_gpc())
                {
                        $this->username=addslashes($this->username);
                }
		$q_y= "select *  from users where email='$this->username'";
		
		$result_y = mysqli_query($this->conn,$q_y) or die (mysql_error());
		$row_y = mysqli_fetch_assoc($result_y);
		
		$locktime_y=$row_y['bantime'];
		
		$nowtime_y=strtotime("now");
		if ($locktime_y>$nowtime_y)
			return date("Y-m-d H:i:s", $locktime_y) ; 
		else
			return '';
	}
	
	public function SetTime($day,$hour)
	{
		if(!$this->username) 
                {
                        echo "init error";
                        exit;
                }
                if(!get_magic_quotes_gpc())
                {
                        $this->username=addslashes($this->username);
                }
		
		$nowtime=strtotime("now");
		
		$locktime=$nowtime + ($day*24+$hour)*3600;
		
		$q= "update users set bantime='$locktime' where email='$this->username'";
		
		mysqli_query($this->conn,$q) or die(mysql_error());
		
		
	}
	public function SetReason($banreason){

                if(!$this->username)
                {
                        echo "init error";
                        exit;
                }
                if(!get_magic_quotes_gpc())
                {
                        $this->username=addslashes($this->username);
                }

                $nowtime=strtotime("now");

                $locktime=$nowtime + ($day*24+$hour)*3600;

                $q= "update users set banreason='$banreason' where email='$this->username'";

                mysqli_query($this->conn,$q) or die(mysql_error());



        }
}
?>
