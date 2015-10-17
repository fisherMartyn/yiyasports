<?php
class SecurityControl{
    private $username;
    private $isadmin;
    private $conn;
    public function SecurityControl($conn,$isadmin,$username){
	$this->conn=$conn;
	$this->username=addslashes($username);
	$this->isadmin=$isadmin;
    }
    public function check(){

	session_start();
	if($this->isadmin){
	  $q_t="select * from users where email='".$_SESSION['name']."'";
	  $result_t=mysqli_query($this->conn,$q_t);
	  $row_t=mysqli_fetch_assoc($result_t);
	  if($row_t['level']!=-1){
		echo "<script>alert(\"欢迎光临YIYA\");</script>";
		return false;
	  }
	  return true;
	}
	else{

	  if($_SESSION['name']!=$this->username){	
		echo "<script>alert(\"欢迎光临YIYA\");</script>";
		return false;
	  }		
	  return true;
	}
    }

}





?>
