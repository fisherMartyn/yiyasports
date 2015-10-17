<?php

class SearchUser{
	var $conn;
        var $sstring;
	var $stype;
	var $isban;
	var $pageno;
	var $totalno;
	var $itemsno;
	var $q;

	public function SearchUser($conn_t,$stype_t,$sstring_t,$pageno_t,$itemsno_t){
		$this->conn=$conn_t;
		$this->stype=addslashes($stype_t);
		$this->sstring=addslashes($sstring_t);
		$this->pageno=addslashes($pageno_t);		
		$this->itemsno=$itemsno_t;
	}
	public function getbanlist($onlyban_t,$banop_t='banop',$releaseop_t='releaseop'){
		$SU_string="";
		$nowtime_t=strtotime("now");
		if($onlyban_t=="true"){
	        $q_t="select * from users where ".$this->stype." like '%".$this->sstring."%' and bantime > ".$nowtime_t." limit 0,300";
		
		$this->q="select * from users where ".$this->stype." like '%".$this->sstring."%' and bantime > ".$nowtime_t." limit ".(($this->pageno-1)*$this->itemsno).",".$this->itemsno;
		//$SU_string=$this->q;
		
		}
		else{
		$q_t="select * from users where ".$this->stype." like '%".$this->sstring."%'";
		$this->q="select * from users where ".$this->stype." like '%".$this->sstring."%' "."limit ".(($this->pageno-1)*$this->itemsno).",".$this->itemsno;
		}
		//echo $q_t;
		//echo $this->q;
		$total_t=mysqli_query($this->conn,$q_t) or  die(mysql_error());
		$this->totalno=mysqli_num_rows($total_t);
		$result_t=mysqli_query($this->conn,$this->q) or  die(mysql_error());
		$rownum_t = mysqli_num_rows($result_t);
		$SU_string=$SU_string."<div id='SU_content'>"."<table id='SU_list'>"."<tr id='SU_headbar'>";
		
		$SU_string=$SU_string.
		"<th class='SU_th' id='SU_ban'>封禁</th>
		<th class='SU_th' id='SU_banreason'>封禁理由</th>
		<th class='SU_th' id='SU_emails'>邮箱</th>
		<th class='SU_th' id='SU_nickname'>昵称</th>
		<th class='SU_th' id='SU_level'>等级</th>
		<th class='SU_th' id='SU_qq'>QQ号</th></tr>";
		

		for($i=0;$i<$rownum_t;$i++){
		  $row_t=mysqli_fetch_assoc($result_t);
		  if($row_t['level']==-1)
			$level_t='管理员';
		  else
			$level_t='Lv.'.$row_t['level'];


		  $SU_string=$SU_string."<tr class='SU_items'>";
		  if($row_t['bantime']>$nowtime_t){
		    $SU_string=$SU_string."<td id='SU_".$row_t['email']."'><a class='Sbutton' onclick=\"releaseop('".$row_t['email']."')\">解封</a>&nbsp;".date("Y-m-d H:i:s",$row_t['bantime'])."</td>";
		  }
		  else{
		    $SU_string=$SU_string."<td><a class='Sbutton' onclick=\"banop('".$row_t['email']."')\">封禁</a></td>";
		  }
                  $SU_string=$SU_string."<td>".$row_t['banreason']."</td>"."<td>".$row_t['email']."</td>"."<td>".$row_t['nickname']."</td>"."<td>".$level_t."</td>"."<td>".$row_t['qq']."</td>";
		  
		  $SU_string=$SU_string."</tr>";
		}

		$SU_string=$SU_string."</table></div>";
		
		if($rownum_t==0)
		  $SU_string=$SU_string."无结果"; 
		mysqli_free_result($result_t);
		mysqli_free_result($total_t);
		return $SU_string;
}

	public function getinfolist($jsfunction_t='jsfunction'){
	    $SU_string="";
	    $this->q="select * from users where ".$this->stype." like '%".$this->sstring."%'";
		$total_t=mysqli_query($this->conn,$this->q) or  die(mysql_error());
		$this->totalno=mysqli_num_rows($total_t);
		$this->q="select * from users where ".$this->stype." like '%".$this->sstring."%' "."limit ".(($this->pageno-1)*$this->itemsno).",".$this->itemsno;
		//$SU_string=$this->q;
		$result_t=mysqli_query($this->conn,$this->q) or  die(mysql_error());
		$rownum_t = mysqli_num_rows($result_t);
		
		$SU_string=$SU_string."<div id='SU_content'>"."<table id='SU_list'>"."<tr id='SU_headbar'>";
		
		$SU_string=$SU_string."<th class='SU_th' id='SU_emails'>邮箱</th>
		<th class='SU_th' id='SU_nickname'>昵称</th>
		<th class='SU_th' id='SU_sex'>性别</th>
		<th class='SU_th' id='SU_level'>等级</th>
		<th class='SU_th' id='SU_city'>地域</th>
		<th class='SU_th' id='SU_qq'>QQ号</th>
		<th class='SU_th' id='SU_lastlogin'>最后登录</th></tr>";
		for($i=0;$i<$rownum_t;$i++){
		  $row_t=mysqli_fetch_assoc($result_t);
		  $sex_t=null;
		  if($row_t['sex']==2)
			$sex_t='男';
		  if($row_t['sex']==1)
			$sex_t='女';
		  if($row_t['level']==-1)
			$level_t='管理员';
		  else
			$level_t='Lv.'.$row_t['level'];
		  $SU_string=$SU_string."<tr class='SU_items' onclick=\"".$jsfunction_t."('".$row_t['email']."')\">";
		  $SU_string=$SU_string."<td>".$row_t['email']."</td>"."<td>".$row_t['nickname']."</td>"."<td>".$sex_t."</td>"."<td>".$level_t."</td>"."<td>".$row_t['province'].$row_t['city']."</td>"."<td>".$row_t['qq']."</td>"."<td>".date("Y-m-d H:i:s",$row_t['lastlogin'])."</td>";
		  
		  $SU_string=$SU_string."</tr>";
		}

		$SU_string=$SU_string."</table></div>";
		
		if($rownum_t==0)
		  $SU_string=$SU_string."无结果"; 
		mysqli_free_result($result_t);
		mysqli_free_result($total_t);

		return $SU_string;
	}

}

?>
