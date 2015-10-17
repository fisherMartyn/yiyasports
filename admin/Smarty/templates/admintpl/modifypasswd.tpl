<style type="text/css">
        @import url('../css/Sbutton.css');
	@import url('./cssforadmin/ModifyPassWd.css')
</style>
<div id = 'all_passwd'>
<div id = 'passwd_div'>
	输入原密码：
	<input id='ops' type="password" name="ops" size=16/><br/>
	输入新密码：
	<input id='ps1' type="password" name="ps1" size=16/><br/>
	请再次输入：
	<input id='ps2' type="password" name="ps2" size=16/><br/>
</div>
	
<div id = 'submit_div'>
	<a class='Sbutton' id='modify_submit' onclick="submit_passwd()"> 确认修改</a>
	<a class='Sbutton' id='cancle_submit' onclick="cancle_submit()"> 取消修改</a>
</div>
<div id='suggestion'>
</div>
</div>

<script type="text/javascript">
	function submit_passwd()
	{
		var xmlhttp;
		var t1 = $("#ops").val();
		var t2 = $("#ps1").val();
		var t3 = $("#ps2").val();
		urla = "./Smarty/templates/admintpl/modify_passwd.php";
		xmlhttp =$.ajax({url:urla, data:{ops:t1,ps1:t2,ps2:t3}, async:false});
		$("#suggestion").html(xmlhttp.responseText);
	}
	function cancle_submit()
	{
		 self.location='index.php?act=admin&adop=basicinfo&bsinfoop=modify_passwd';
	}
</script>
