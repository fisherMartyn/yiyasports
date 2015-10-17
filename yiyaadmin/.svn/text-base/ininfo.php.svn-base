<?php include('header.php'); ?>
<?php
require '../yiyaclass/ConnDB.class.php';
require '../yiyaclass/SecurityControl.class.php';

$connobj=new ConnDB("localhost","yiya_users");
$conn=$connobj->GetConnId();

$securityobj=new SecurityControl($conn,true,'');
if(!$securityobj->check()){
  echo "<script> self.location='login.php'; </script>";
  exit;
}

?>
<?php
  include('fronthouse/inbasicinfo.php');
?>			

<script>
function savechanges(){
  var xmlhttp=$.ajax({url:"backhouse/modifybsinfo.php",async:false, data:{
	name:$("#in_name").val(),
	birth_day:$("#in_birth_day").val(),
	tel:$("#in_tel").val(),
	qq:$("#in_qq").val(),
	signature:$("#in_signature").val(),
	sex:$("input[name='sex']:checked").val(),
        province:$("#rprovince").val(),
        city:$("#rcity").val()
	}});
}
function modifypassword(){
  $("#ops").val('');
  $("#ps1").val('');
  $("#ps2").val('');
  $("#modifypassword_result").hide();
  $("#modify_dialog").modal('show');
}

function modifypassword_yes(){
                var xmlhttp;
                var t1 = $("#ops").val();
                var t2 = $("#ps1").val();
                var t3 = $("#ps2").val();
                urla = "backhouse/modifypassword.php";
                xmlhttp =$.ajax({url:urla, data:{ops:t1,ps1:t2,ps2:t3}, async:false});
                $("#modifypassword_result").html(xmlhttp.responseText);
		if(xmlhttp.responseText.indexOf("成功")>=0){
			$("#modify_dialog").modal('hide');
		        var noty_success='{"text":"修改成功","layout":"top","type":"information"}';
		        var options=$.parseJSON(noty_success);
		        noty(options);	
		}
                $("#modifypassword_result").show();
}
</script>

<div class="modal" id="modify_dialog" style="display:none">

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <h3>修改密码</h3>
   </div>
  <div class="modal-body">
<div id = 'passwd_div'>
        输入原密码：
        <input id='ops' type="password" name="ops" size=16/><br/>
        输入新密码：
        <input id='ps1' type="password" name="ps1" size=16/><br/>
        请再次输入：
        <input id='ps2' type="password" name="ps2" size=16/><br/>
<div class="alert alert-error" id="modifypassword_result" style="display:none"></div>
</div>
  </div>
  <div class="modal-footer">
    <a name = "submit" class="btn" onclick="modifypassword_yes()">确认</a>
    <a class="btn"  data-dismiss="modal">取消</a>
  </div>
</div>














			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i>个人资料</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-round" style="width:80px" onclick="modifypassword()">修改密码</a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
							<fieldset>
							  <h3 style="margin-left:40px">基本信息</h3></br>
							  <div class="control-group">
								<label class="control-label" for="in_email">邮箱</label>
								<div class="controls">
								  <input class="input-xlarge disabled" id="in_email" type="text" value="<?php echo $email ?>" readonly>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="in_nickname">昵称</label>
								<div class="controls">
								  <input class="input-xsmall disabled" id="in_nickname" type="text" value="<?php echo $nickname ?>" readonly>
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="in_name">姓名</label>
								<div class="controls">
								  <input class="input-xsmall focused" id="in_name" type="text" value="<?php echo $name ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="in_birth_day">生日</label>
								<div class="controls">
								  <input class="input-xsmall yiya_datepick" id="in_birth_day" type="text" value="<?php echo $birth_day ?>" readonly style="cursor:pointer;background-color:white;">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">性别</label>
								<div class="controls">
								  <label class="radio inline">
									<input type="radio" name="sex" id="in_male" value="2" <?php echo $male?> >
									男
								  </label>
								  <label class="radio inline">
									<input type="radio" name="sex" id="in_female" value="1" <?php echo $female?> >
									女
								  </label>
								</div>
							  </div>


							  <h3 style="margin-left:40px">联系信息</h3></br>

                                                          <div class="control-group">
                                                                <label class="control-label" for="in_tel">手机</label>
                                                                <div class="controls">
                                                                  <input class="input-xsmall focused" id="in_tel" type="text" value="<?php echo $tel ?>">
                                                                </div>
                                                          </div>

                          				<div class="control-group">
                                                                <label class="control-label" for="in_qq">QQ</label>
                                                                <div class="controls">
                                                                  <input class="input-xsmall focused" id="in_qq" type="text" value="<?php echo $qq ?>">
                                                                </div>
                                                          </div>
							<div class="control-group">
								<label class="control-label" for="pro_city">住址</label>
								<div id="pro_city" class="controls pro_city_info">
								  <select class="prov" id="rprovince" style="width:100px" data-val="<?php echo $province ?>"> </select>
                                                                  <select class="city" id="rcity" disabled="disabled" style="width:100px" data-val="<?php echo $city ?>"></select>
								</div>
							  </div>


							  <h3 style="margin-left:40px">个性信息</h3></br>
							<div class="control-group">
                                                                <label class="control-label" for="in_role">身份</label>
                                                                <div class="controls">
                                                                  <input class="input-xsmall disabled" id="in_role" type="text" value="<?php echo $role?>" readonly>
                                                                </div>
                                                          </div>							  
							 <div class="control-group">
							  <label class="control-label" for="in_signature">个性签名</label>
							  <div class="controls">
								<textarea id="in_signature" maxLength="50" rows="3" style="width:270px;resize:none;"><?php echo $signature ?></textarea>
							  </div>
							</div>







							  <div class="form-actions">
								<button class="btn btn-primary" onclick="savechanges()">保存修改</button>
								<button class="btn">取消</button>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			
    
<?php include('footer.php'); ?>
