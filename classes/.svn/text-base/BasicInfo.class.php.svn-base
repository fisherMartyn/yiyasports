<?php 
class BasicInfoClass{
	var $conn;
	var $email;
	function BasicInfoClass($conn,$email)
	{
		$this->conn = $conn;
		$this->email = $email;
		if(!$email)
		{
			//add log files
			exit;
		}
		if(!get_magic_quotes_gpc())
                $this->email=addslashes($this->email);
	}
	function Display($rd)
	{
		if ($rd=="readonly")
			$rdaction=" disabled";
		else 
			$rdaction=" ";
		//connetc to mysql to fetch data
		$q="SELECT * FROM users WHERE email='".$this->email."'";
		$result=mysqli_query($this->conn,$q);
		if(!$result)
        {
                //add log file here
                exit;
        }
		$row=mysqli_fetch_assoc($result);
		
		if ($row['sex']=='2')
		{
			$sextype1="";
			$sextype2="checked";
			$sextype3="";
		}
		else if ($row['sex']=='1')
		{
			$sextype1="";
			$sextype2="";
			$sextype3="checked";
		}
		else
		{
			$sextype1="checked";
			$sextype2="";
			$sextype3="";
		}
		
		$str1 = "<div id='user_info'><div id='bsinfo_display'><div 	id='basic_info'><fieldset><table id='bsinfo_table1'><legend>基本信息：</legend>".
					"<tr><td id='left1' class='left0'>邮箱：</td><td id='right1'class='right0'><input type='text' maxLength='50' value='".$this->email."'  disabled></td>".
					"</tr><tr><td id='left2' class='left0'>昵称：</td><td id='right2'class='right0'><input type='text' maxLength='20' value='".$row['nickname']."' disabled></td>".
					"</tr><tr><td id='left3' class='left0'>姓名：</td><td id='right3' class='right0'><input id='user_name' maxLength='20' type='text' name='user_name' size='6' value = '".$row['name']."'".$rdaction." ></td>".
					"</tr><tr><td id='left4' class='left0'>性别：</td>	<td id='right4' class='right0'>	<input id='sex' type='radio' name='sex' value='0' ".$sextype1.$rdaction." style=\"display:none\"/>".
					"<input id='sex' type='radio' name='sex' value='2' ".$sextype2.$rdaction.">男&nbsp;&nbsp;</input>".
					"<input id='sex' type='radio' name='sex' value='1' ".$sextype3.$rdaction.">女</input><td>".
					"</tr><tr><td id='left5' class='left0'>出生日期：</td><td id='right5' class='right0'>	<input maxLength='10' id='birth_day' type='text' name='birth_day' size='10' onfocus=\"HS_setDate(this)\" readonly  value='".$row['birth_day']."'".$rdaction." />".
					"</tr></table></fieldset></div>".
					"<div id='contact_info'><fieldset><table id='bsinfo_table2'><legend>联系信息：</legend><tr><td id='left6' class='left0'>手机：</td><td id='right6' class='right0'><input id='telephone' maxLength='15' onkeypress=\"return digitsonly(event)\" type='text' name='telephone' size='13' value='".$row['tel']."'".$rdaction."/></td>".
					"</tr><tr><td id='left7' class='left0'>QQ：</td><td id='right7' class='right0'><input id='qq' type='text' name='qq' maxLength='13' onkeypress=\"return digitsonly(event)\" size='10' value='".$row['qq']."'".$rdaction." /></td></tr>".
					"<tr><td id='1eft10' class='left0'>省：</td><td id='right10' class='right0'><input id='province' type='text' name='province' maxLength='30' size='10' value='".$row['province']."'".$rdaction."></td></tr>".
					"<tr><td id='1eft11' class='left0'>市：</td><td id='right11' class='right0'><input id='city' type='text' name='city' maxLength='30' size='10' value='".$row['city']."'".$rdaction."></td></tr>".
					"</table></fieldset></div>".
					"<div id='persional_signature'><fieldset><table id='bsinfo_table3'><legend>个性信息：</legend><tr><td id='left8' class='left0'>头像：</td><td id='right8' class='right0'><img id='photo' name='photo'/></td></tr>".
					"<tr><td id='left9' class='left0'>个性签名：</td><td id='right9' class='right0'><textarea maxLength='110' rows='4' cols='30' name='signature' id='signature' ".$rdaction.">".$row['signature']."</textarea></td>".
					"</tr></table></fieldset></div></div>".
					//"<div id='bsinfo_submit'>".
					//"<a >确认修改</a><a>取消修改</a>".
					//"</div>".
					"</div>";
		mysqli_free_result($result);				
		return $str1;
	}
}
?>
