<?php
class ConnDB{
	var $host;
	var $user;
	var $pwd;
	var $dbname;
	var $debug;
	var $conn;
	function ConnDB($host,$user,$pwd,$dbname,$debug=false){
		$this->host=$host;
		$this->user='root';
		$this->dbname=$dbname;
		$this->debug=$debug;
		$this->pwd='wecanwin1';
	}
	
	function GetConnId(){
		if(!$this->user || !$this->pwd)
                {
                        return "Error, no name or password.";
                }
                if(!get_magic_quotes_gpc())
                {
                        $this->user=addslashes($this->user);
                        $this->pwd=addslashes($this->pwd);
                }
                $this->conn=mysqli_connect($this->host,$this->user,$this->pwd);
                mysqli_query($this->conn,"set names utf8");
                mysqli_select_db($this->conn,$this->dbname);
		
		return $this->conn;

	}
	function CloseConnId(){
		mysqli_close($this->conn);
	}
}


?>
