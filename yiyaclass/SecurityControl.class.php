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
	if($_SESSION['name']=="")
	  return false;
	if($this->isadmin){
	  $q_t="select * from users where nickname='".$_SESSION['name']."'";
	  $result_t=mysqli_query($this->conn,$q_t);
	  $row_t=mysqli_fetch_assoc($result_t);
	  if($row_t['role']!=2){
		return false;
	  }
	  return true;
	}
	else{

	  if($_SESSION['name']!=$this->username){	
		return false;
	  }		
	  return true;
	}
    }

}





?>
