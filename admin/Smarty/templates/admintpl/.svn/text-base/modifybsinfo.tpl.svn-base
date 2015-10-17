<style type="text/css">
	@import url('../css/Sbutton.css');
	@import url('./cssforadmin/Bsinfo.css');
</style>
<div id='bsinfodisplay'>
<div id= 'bsinfo'>
</div>
<div id = "submit_bsinfo">
	<a class='Sbutton' id='modify_bsinfo' onclick="modify_bsinfo_func()">修改</a>
	<a class='Sbutton' id='cancle_modify' onclick="cancle_modify_func()">取消</a><br/>
	<a id='modify_suggestion'></a>
	
</div>
</div>
<script type="text/javascript" src="../js/DateSet.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
    var xmlhttp;
	var urla="Smarty/templates/admintpl/addbsinfo.php";
	xmlhttp=$.ajax({url:urla,async:false});
	$("#bsinfo").html(xmlhttp.responseText);
	});
	
	function modify_bsinfo_func()
	{
		var xmlhttp;
		var urla="Smarty/templates/admintpl/modifybsinfo.php";
		var username=$("#user_name").val();
		var sex=$("input[name='sex']:checked").val();  
		var day =$("#birth_day").val();
		var tel = $("#telephone").val();
		var qq = $("#qq").val();
		var signature = $("#signature").val();
		var city = $("#city").val();
		var province = $("#province").val();
		xmlhttp=$.ajax({url:urla,async:false,data:{username:username,sex:sex,day:day,tel:tel,qq:qq,city:city,province:province,signature:signature}});
		$("#modify_suggestion").html(xmlhttp.responseText);
	}
	function cancle_modify_func()
	{
		self.location='index.php?act=admin&adop=basicinfo';
	}

</script>
