

        <a class="login-name" href="index.php?act=userindex" id="userinfojump">欢迎来到 YiYa:<span id="unickn"></span></a>
	<a id="indexjump" href="index.php" class="hide mainjump mainjump-purple">
		<div class="mainjump-icon">
			<i class="icon32 icon-white icon-home"></i>
		</div>
		<div class="mainjump-footer">
        	<span>首页</span>
		</div>
	</a>
	<a id="socialjump" href="#" class="mainjump mainjump-blue">
		<div class="mainjump-icon">
			<i class="icon32 icon-white icon-messages"></i>
		</div>
		<div class="mainjump-footer">
        	<span>社区</span>
		</div>
	</a>
	<a id="loginjump" href="#login_w" data-toggle="modal" class="mainjump mainjump-green">
		<div class="mainjump-icon">
			<i class="icon32 icon-white icon-user"></i>
		</div>
		<div class="mainjump-footer">
        	<span>登录</span>
		</div>
	</a>
	<a id="regjump" href="#reg_dialog" data-toggle="modal" class="mainjump mainjump-brown">
		<div class="mainjump-icon">
			<i class="icon32 icon-white icon-contacts"></i>
		</div>
		<div class="mainjump-footer">
        	<span>注册</span>
		</div>
	</a>

	<a id="settingsjump" href="index.php?act=usersetting" class="mainjump mainjump-green">
		<div class="mainjump-icon">
			<i class="icon32 icon-white icon-gear"></i>
		</div>
		<div class="mainjump-footer">
        	<span>设置</span>
		</div>
	</a>
	<a id="logoutjump"  class="mainjump mainjump-brown" onclick="logout_yes()">
		<div class="mainjump-icon">
			<i class="icon32 icon-white icon-undo"></i>
		</div>
		<div class="mainjump-footer">
        	<span>退出</span>
		</div>
	</a>
<script type="text/javascript">

function loginedshow(){
	         $("#indexjump").show("drop",{direction:"up"});
		 setTimeout("$(\"#socialjump\").show(\"drop\",{direction:\"up\"})",100);
		 setTimeout("$(\"#settingsjump\").show(\"drop\",{direction:\"up\"})",200);
		 setTimeout("$(\"#logoutjump\").show(\"drop\",{direction:\"up\"})",300);
	         $("#userinfojump").show("drop",{direction:"left"});
	         
		 $("#ycessay").show("clip");
		 setTimeout("$(\"#ycmedia\").show(\"clip\")",100);
		 setTimeout("$(\"#ycplan\").show(\"clip\")",200);
}

function loginedhide(){
	         $("#userinfojump").hide("drop",{direction:"left"});
		 setTimeout("$(\"#settingsjump\").hide(\"drop\",{direction:\"up\"})",100);
		 setTimeout("$(\"#logoutjump\").hide(\"drop\",{direction:\"up\"})",0);
		 
		setTimeout("$(\"#ycplan\").hide(\"clip\")",0);
		 setTimeout("$(\"#ycmedia\").hide(\"clip\")",100);
		 setTimeout("$(\"#ycessay\").hide(\"clip\")",200);
}
function loginshow(){
		
	         $("#indexjump").show("drop",{direction:"up"});
		 setTimeout("$(\"#socialjump\").show(\"drop\",{direction:\"up\"})",100);
		 setTimeout("$(\"#loginjump\").show(\"drop\",{direction:\"up\"})",200);
		 setTimeout("$(\"#regjump\").show(\"drop\",{direction:\"up\"})",300);
		 setTimeout("$(\"#dycplan\").show(\"clip\")",200);
		 setTimeout("$(\"#dycmedia\").show(\"clip\")",100);
		 setTimeout("$(\"#dycessay\").show(\"clip\")",0);
}
function loginhide(){
		
		 setTimeout("$(\"#loginjump\").hide(\"drop\",{direction:\"up\"})",100);
		 setTimeout("$(\"#regjump\").hide(\"drop\",{direction:\"up\"})",0);
		 setTimeout("$(\"#dycplan\").hide(\"clip\")",0);
		 setTimeout("$(\"#dycmedia\").hide(\"clip\")",100);
		 setTimeout("$(\"#dycessay\").hide(\"clip\")",200);
}

function logout_yes(){
  $.ajax({url:"templates/login/logout.php",async:false});
  loginedhide();
  setTimeout("loginshow()",600);
}



$().ready(function()
{
	var xmlhttp;
	var urla="./templates/login/GetSession.php";
	xmlhttp=$.ajax({url:urla,async:false});
	if (xmlhttp.responseText != ""){
		loginhide(); 
		$("#unickn").html(xmlhttp.responseText);
        	setTimeout("loginedshow()",300);
	}
	else{
        	loginedhide();
		setTimeout("loginshow()",300);
	}
	
$('#login_w').modal({
  keyboard: true,
  show:false
})
$('#reg_dialog').modal({
  keyboard: true,
  show:false
})
$('#fresult').modal({
  keyboard: true,
  show:false
})
$('#fpdiv').modal({
  keyboard: true,
  show:false
})
});

function login_yes(){
          var tn=$("#iname").val();
        var tp=$("#passwd").val();
        var xmlhttp;
        var tt;
        var urla="./templates/login/loginHandler.php";
        var res;
        if (document.getElementById("notime").checked == true)
        {       
                tt="1";
        }
        else
        {
                tt="0";
        }
        xmlhttp=$.ajax({url:urla,data:{tn:tn,tp:tp,tt:tt},async:false});
        //alert(xmlhttp.responseText);
        res = (xmlhttp.responseText).substr(0,1);
        if (res =="欢")
        {
         $("#suggestion").html(xmlhttp.responseText);
         $("#login_w").modal("hide");
        
         setTimeout("sjump()",300);
	}
        else
        {
        $("#suggestion").html(xmlhttp.responseText);
	$("#suggestion_box").show("drop");
        }
};

function sjump()
{
//	$("#login").css("display","none");
//	$("#logined").css("dispaly","normal");
	var urla="./templates/login/GetSession.php";
	var xmlhttp=$.ajax({url:urla,async:false});
	loginhide();
	$("#unickn").html(xmlhttp.responseText);
	setTimeout("loginedshow()",600);
	
//	self.location='index.php';
}
function inputn()
{
	$("#iname").val("");
}

function reg_yes(){
        var namesug=$("#namesug").html();
        var esug=$("#esug").text();
        var regps1=$("#regps1").html();
        var regps2=$("#regps2").html();
        var rvcode=$("#rvcode").html();
        var flag;
        //----------//
        var nickname=$("#rnickname").val();
        var email=$("#remail").val();
        var ps1=$("#ps1").val();
        var ps2=$("#ps2").val();
        var sex=$("input[name='sex']:checked").val();
        var regcode = $("#regcode").val();
        var qq= $("#rqq").val();
        var phone=$("#rphone").val();
        var birthday=$("#rbirthday").val();
        var province=$("#rprovince").val();
        var city=$("#rcity").val();
        var signature=$("#rsignature").val();
        var xmlhttp;
        var temp;
        var urla="./templates/login/regDB.php";
        var rqus=$("#rqus").val();
        var rans=$("#rans").val();
        allcheck();
        if ((namesug =="OK") &&(esug=="OK") &&(regps1=="OK") &&(regps2=="OK") &&(rvcode=="OK"))
                flag = '1';
        else
                flag = '0';     
        if (flag=='1'){
                xmlhttp=$.ajax({url:urla,async:false,data:{nickname:nickname,email:email,ps:ps1,sex:sex,regcode:regcode,qq:qq,phone:phone,birthday:birthday,province:province,city:city,signature:signature,rqus:rqus,rans:rans}});
                temp=xmlhttp.responseText;
                if (temp=="success")
                {
                        $("#reg_dialog").modal("hide");
                        setTimeout("sjump()",300);
                }
                else if (temp=="vcode"){
                        //logfile --visit php only//
                        alert();
                }
		else{
                        //logfile --error in database//
                        alert();
                }
        }
        else
                $( "#allacc" ).accordion({ active: 0 });
        
}
$(function() {
		$( "#allacc" ).accordion({
		heightStyle: "content"
});
});


function namecheck()
{
	var rname;
	var xmlhttp;
	var parm="1";
	var urla ="./templates/login/regHandler.php";
	rname = $("#rnickname").val();
	xmlhttp=$.ajax({url:urla,async:false,data:{name:rname,parm:parm}});
	$("#namesug").html(xmlhttp.responseText);
	if(xmlhttp.responseText.length>4)
		$("#rnickname").addClass("y-textbox-red");
	else	
		$("#rnickname").addClass("y-textbox-green");
	allcheck();
};
function echeck()
{
	var email;
	var xmlhttp;
	var parm="2";
	var urla ="./templates/login/regHandler.php";
	email = $("#remail").val();
	xmlhttp=$.ajax({url:urla,async:false,data:{email:email,parm:parm}});
	$("#esug").html(xmlhttp.responseText);
	if(xmlhttp.responseText.length>4)
		$("#remail").addClass("y-textbox-red");
	else	
		$("#remail").addClass("y-textbox-green");
	allcheck();
};
function chimg()
{
	$("#vimg").attr("src","");//just for ie
	$("#vimg").attr("src","templates/login/Vcode.php");
	
	
};
function fchimg()
{
	$("#fvimg").attr("src",""); //just for ie
	$("#fvimg").attr("src","templates/login/fVcode.php");
	//$("#fvimg").hide().show();
}
function regps1check()
{
	var pss1;
	pss1=$("#ps1").val();
	var jgpattern =/^[A-Za-z0-9]+$/;
	if((pss1.length<=5) || (!jgpattern.test(pss1)))
		$("#regps1").html("密码至少为6位字母和数字");
	else
		$("#regps1").html("OK");
	
	if($("#regps1").html().length>4)
		$("#ps1").addClass("y-textbox-red");
	else	
		$("#ps1").addClass("y-textbox-green");
	
	
	allcheck();
};
function regps2check()
{
	var p1;
	var p2;
	p1=$("#ps1").val();
	p2=$("#ps2").val();
	if ((p1.length >= 6) && ( p1==p2 ))
		$("#regps2").html("OK");
	else 
		$("#regps2").html("两次密码输入不一致");
	if($("#regps2").html()!="OK"){
		$("#ps1").addClass("y-textbox-red");
		$("#ps2").addClass("y-textbox-red");
	}
	else{	
		$("#ps1").addClass("y-textbox-green");
		$("#ps2").addClass("y-textbox-green");
	}
	allcheck();
}
function vcodecheck()
{
	var tvcode;
	var xmlhttp;
	var parm="3";
	var urla ="./templates/login/regHandler.php";
	tvcode = $("#regcode").val();
	xmlhttp=$.ajax({url:urla,async:false,data:{tvcode:tvcode,parm:parm}});
	if (xmlhttp.responseText.length != 2)
	chimg();
	$("#rvcode").html(xmlhttp.responseText);
	if(xmlhttp.responseText.length>4)
		$("#regcode").addClass("y-textbox-red");
	else	
		$("#regcode").addClass("y-textbox-green");
	allcheck();
}
function allcheck()
{
	var namesug=$("#namesug").html();
	var esug=$("#esug").html();
	var regps1=$("#regps1").html();
	var regps2=$("#regps2").html();
	var rvcode=$("#rvcode").html();
	if ((esug !="OK") && (esug !=""))
		$("#reg_alert").html(esug);
	else if ((namesug !="OK") && (namesug !=""))
		$("#reg_alert").html(namesug);
	else if((regps1!="OK") && (regps1 !=""))
		$("#reg_alert").html(regps1);
	else if ((regps2!="OK") && (regps2 !=""))
		$("#reg_alert").html(regps2);
	else if ((rvcode!="OK")&&(rvcode!=""))
		$("#reg_alert").html(rvcode);
		
	else
		$("#reg_alert").html("");

	if($("#reg_alert").html()!=""){	
		$("#reg_alert_box").show("blind");
	}
	else
		
		$("#reg_alert_box").hide('blind');
		
}

function fpasswd_yes(){
				 var xmlhttp;
                                var urla="./templates/login/fPasswd.php";
                                var fnickname = $("#fnickname").val();
                                var femail =$("#femail").val();
                                var fvcode = $("#fcode").val();
                                var res;
                                var parm;
                                var psans;
                                var judge = $("#fques").html();
				$("#fpasswd_alert").hide();
                                if (judge == ""){
                                xmlhttp=$.ajax({url:urla,data:{fnickname:fnickname,femail:femail,fvcode:fvcode},async:false});
                                res = xmlhttp.responseText;
                                if (res != "success"){
                                        $("#fsug").html(res);
					$("#fpasswd_alert").show("blind");
                                        fchimg();
                                }
                                else{
                                        $("#fsug").html("");
                                        urla="./templates/login/fQuestion.php";
                                        parm = "1";
                                        xmlhttp=$.ajax({url:urla,data:{fnickname:fnickname,parm:parm,psans:""},async:false});
					if (xmlhttp.responseText =="no"){
						$("#fpdiv").modal("hide");
						$("#fresult").modal("show");
						
					}	
					else{
						$("#fques").html(xmlhttp.responseText);
						$("#qs").slideDown("fast");
						}
					}
				}
				else
				{
					psans = $("#fans").val();
					urla="./templates/login/fQuestion.php";
					parm = "2";
					if(xmlhttp.responseText=="success"){
		
						$("#fpdiv").modal("hide");
						$("#fresult").modal("show");
					}	
					else{
						$("#fsug").html("密码验证问题回答错误。");
					}
				}
}
function fpasswd()
{
	$("#login_w").modal("hide");
	$("#fpdiv").modal("show");
					
}
$(function(){
	$("#allcity").citySelect({
		nodata:"none",
		required:false,
	});
});
</script>


<div class="modal hide fade" id = "login_w">
	
        <div class="modal-header">
		<h3>欢迎登陆yiya</h3>
	</div>
	
	<div class="modal-body">
		<form class="form-horizontal">	
		<div id="suggestion_box" class="alert alert-error hide">
			<span id="suggestion"></span></br>
		</div>

		<div class="control-group">	
		<label class="control-label" id = "dname" for="iname">登陆：</label>
		<div class="controls">
			<input id="iname" type="text" size="20" onclick="inputn()"   placeholder="昵称/邮箱/手机号"></input>
		</div>
		</div>

		<div class="control-group">
		<label class="control-label" id="dpasswd" for="passwd">密码：</label>
		<div class="controls">
			<input class="y-textbox" id="passwd" type="password" size="20">
			</input>	
		</div>
		</div>

		<div id="stime" style="margin-left:120px;">
		<label class="checkbox">
			<input type="checkbox" id="notime" name="notime">
			一个月内免登陆
		</label>
		</div>
	</div>	
	</form>
	<div class="modal-footer">
		<a class="btn" onclick="login_yes()" >确定</a>
		<a class="btn" class="close" data-dismiss="modal" aria-hidden="true">取消</a>	
		<a class="btn" id="fpasswd" onclick="fpasswd()" >忘记密码</a>
	</div>
</div>


<div id="reg_dialog"  class="modal hide fade">
<div class="modal-body" id="allacc" >
<h3>必填信息</h3>
<div id="reg" >
	<!--这是是用户邮箱和ID的区域 -->
                <div id="reg_alert_box" class="alert hide alert-error">
                        <span id="reg_alert"></span></br>
                </div>
	<form class="form-horizontal">
	<div class="control-group" id="dremail">
		<label class=control-label>邮箱：</label>
		<div class="controls">
		<input class="y-textbox" id="remail" type="text" size="20" onblur="echeck()"> <span style="display:none" id="esug"></span>
		</div>
	</div>

	<div class="control-group" id="drnickname">
		<label class="control-label">昵称：</label>
		<div class="controls"><input class="y-textbox" id="rnickname" type="text" size="20" onblur="namecheck()"><span style="display:none" id="namesug"></span></div>
	</div>

	<div class="control-group" id="rsex">
		<label class="control-label">性别：</label>
		<div class="controls">
		<input  id='sex' type='radio' name='sex' value='0'  style="display:none"  disabled>
		<label class="radio inline">
                <input  id='sex' type='radio' name='sex' value='2' >男&nbsp;&nbsp;</input>
		</label>
		<label class="radio inline">
                <input  id='sex' type='radio' name='sex' value='1' >女</input>
		</label>
		</div>
	</div>


	<div class="control-group" id="drpasswd">
		<label class="control-label">密码：</label>
		<div class="controls">
		<input class="y-textbox" id="ps1" type="password" size="20" onblur="regps1check()"><span id="regps1" style="display:none" ></span>
		</div>
	</div>

	<div class="control-group">	
		<label class="control-label">确认密码：</label>
		<div class="controls">
		<input class="y-textbox" id="ps2" type="password" size="20" onblur="regps2check()"><span  style="display:none" id="regps2"></span>
		</div>
	</div>

	<div class="control-group" id="dregcode">
		<label class="control-label">验证码：</label>
		<div class="controls">
		<input class="input-small" id="regcode" type="text" size="10" onblur="vcodecheck()"><img id='vimg' style="margin-left:10px;position:relative;top:3px;" src='templates/login/Vcode.php'> <a onclick="chimg()" class="y-btn">更换   </a><span  style="display:none" id="rvcode"></span>
		</div>
	</div>
</form>
</div>
<h3>可选信息</h3>

	<div id="moreinfo">
			<form class="form-horizontal">
			<div id="drqq" class="control-group"> 
			<label class="control-label">QQ：</label>
			<div class="controls">
				<input class="y-textbox" id="rqq" type="text" size="20" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" maxLength="11"> 
			</div>
			</div>

			<div class="control-group" id="rdphone">
			<label class="control-label">电话：</label>
			<div class="controls">
				<input class="y-textbox" id="rphone" type="text" size="20" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" maxLength="12">
				</div>
			</div>

			<div class="control-group" id="dbirthday">
				<label class="control-label">生日：</label>
				<div class="controls">
					<input class="input-readonly y-datepicker" id="rbirthday" type="text" size="20" readonly >
				</div>
			</div>

			<div class="control-group">
			<label class="control-label" id="dhome">地址：</label>
<!--				省份<input id="province" type="text" size="10">城市<input id="city" type="text" size="10"> -->
				<div class="controls" id="allcity">
				  	<select class="prov" id="rprovince"  style="width:100px"></select> 
				    	<select class="city" id="rcity" disabled="disabled" style="width:100px"></select>
				</div>
			</div>
			<div class="control-group" id="dqus">
			<label class="control-label">密保问题：</label>
			<div class="controls">
				<select id="rqus">
					<option value="">请选择密保问题</option>
					<option value="你母亲的名字？">你母亲的名字？</option>
					<option value="你最好的朋友的名字？">你最好的朋友的名字？</option>
					<option value="你最喜欢的电影？">你最喜欢的电影？</option>
					<option value="你最喜欢的歌曲？">你最喜欢的歌曲？</option>
					<option value="你最喜欢的体育明星？">你最喜欢的体育明星？</option>
					<option value="你最喜欢的运动项目？">你最喜欢的运动项目？</option>
					<option value="你最喜欢的运动队名？">你最喜欢的运动队名？</option>
					
				</select>
			</div>
			</div>
			
			<div class="control-group">
				<label class="control-label">问题答案：</label>
				<div class="controls">
				<input class="y-textbox" id="rans" type="text" size="20" maxLength="20"></br>
				</div>
			</div>
			<div class="control-group">	
			<label class="control-label" id="dsignature" style="vertical-align:top" for="rsignature">个性签名：</label>
			<div class="controls"> 
				<textarea class="y-textarea" maxLength='110' rows='4' cols='25' name='rsignature' id='rsignature' ></textarea>
			</div>
			</div>
	
	</div>
</form>
</div>
<div class="modal-footer">

		<a class="btn" onclick="reg_yes()" tabindex="0">确定</a>
		<a class="btn" class="close" data-dismiss="modal" aria-hidden="true" tabindex="0">取消</a>	
</div>
</div>


	<div id="fpdiv" class="modal hide fade" >
		<div class="modal-header">
			<h3>找回密码</h3>
		</div>
		<div class="modal-body">
		<div id="fpasswd_alert" class="hide alert alert-error">
		<span id="fsug"></span>
		</div>
		<form class="form-horizontal">
		<div class="control-group">
			<label class="control-label">昵称：</label>
			<div class="controls">
			<input class="y-textbox" id="fnickname" size="20" type="text">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">邮箱：</label>
			<div class="controls">
			<input class="y-textbox" id="femail" size="20" type="text">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">验证码：</label>
			<div class="controls">
			<input class="input-small" id="fcode" size="10" type="text">
			<img id='fvimg' src='templates/login/fVcode.php'> <span id="fcimg" onclick="fchimg()">换一张</span>
			</div>
		</div>

		<div id="qs" style="display:none">
		<span id ="fques"></span>
			<div class=control-group>
		
			<label class="control-label">密保问题：</label>
			<div class="controls">
			<input class="y-textbox" id="fans" size="10" type="text">
			</div>
			</div>
		</div>
		</form>
		</div>
		<div class="modal-footer">
		<a class="btn" onclick="fpasswd_yes()">确定</a>
		<a class="btn" class="close" data-dismiss="modal" aria-hidden="true">取消</a>
		</div>	
	</div>
	
	<div class="modal hide fade" id="fresult">
		<div class="modal-header">
		<h3>成功找回密码</h3>
		</div>
		<div class="modal-body">
		<p>您的新密码已经发送到邮箱，请尽快修改。</p>
		</div>
		<div class="modal-footer">
		<a class="btn" class="close" data-dismiss="modal" aria-hidden="true">确定</a>
		</div>
	</div>
