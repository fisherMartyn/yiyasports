<div>
	<form class="form-horizontal">
	<div id="inname" class="control-group">
		<label class="control-label">昵称：</label>
		<div class="controls"><input id="ininame" type="text" class="y-textbox" value={%$y_nickname%}></input></div>
	</div>
	
	<div id="iemail" class="control-group">
		<label class="control-label">Email：</label>
		<div class="controls"><input id="iiemail" type="text"  class="y-textbox" value={%$y_email%}></input></div>
	</div>
	
	<div id="aimgall" class="control-group">
		<label class="control-label">头像：</label>
		<div class="controls" style="width:150px"><img id="favatar" class="uavatar" src="{%$apath%}"/></div>
	</div>
	<div class="control-group">
		<label class="control-label hide">修改头像：</label>
		<div class="controls"><a onclick="mdfavatar()">点此修改</a></div>
	</div>
	
	
	
	<div id="iname" class="control-group">
		<label class="control-label">姓名：</label>
		<div class="controls"><input id="iiname" type="text" class="y-textbox" value={%$y_name%}></input></div>
	</div>
	
	<div id="isex" class="control-group">
		<label class="control-label">性别：</label>
		<div class="controls">
			<input id='sex' type='radio' name='sex' value='0'  style="display:none"/>
			<label class="radio inline">
			<input id='sex' type='radio' name='sex' value='2' {%$man_sex%}></input>男
			</label>
			<label class="radio inline">
			<input id='sex' type='radio' name='sex' value='1' {%$woman_sex%}></input>女
			</label>
		</div>
	</div>
	
	<div id="ilocation" class="control-group">
		<label class="control-label">住址：</label>
		<div class="controls iallcity" id="iiallcity">
			<select id="iiprovince" class="prov " style="width:100px" data-val={%$y_province%}></select>
			<select id="iicity" class="city " style="width:100px" disabled="disabled" data-val={%$y_city%}></select>
		</div>
	</div>
	
	
	<div id="iqq" class="control-group">
		<label class="control-label">QQ：</label>
		<div class="controls"><input id="iiqq" type="text" class="y-textbox" value={%$y_qq%}></div>
	</div>
	
	<div id="iphone" class="control-group">
		<label class="control-label">电话：</label>
		<div class="controls"><input id="iiphone" type="text" class="y-textbox" value={%$y_tel%}></input></div>
	</div>

	<div id="ibirth" class="control-group">
		<label class="control-label">生日：</label>
		<div class="controls"><input id="iibirth" type="text" class="y-textbox y-datepicker input-readonly" value={%$y_birthday%}></div>
	</div>
	
	
	<div class="control-group">
		<label class="control-label hide">提交：</label>
		<div id="isubmit" class="controls"><a onclick="mbsinfo()" class="btn">保存修改</a><a onclick="mpasswd()" class="btn">密码修改</a></div>
	</div>
	</form>
</div>
<link href="./css/theme1/yjx.css" type="text/css">
<script type="text/javascript">
/*
function upimg()
{
	$.post("./templates/usersetting/upload.php",
	{'nnameval' : $("#ininame").val()},
	function(data,status){
	//var msg=$.parseJSON(data);
    alert(data+status);
  });
}
*/
/*
$(document).ready(function(){
	$('#avatarUpload').uploadify({
		'swf'      	: './templates/usersetting/uploadimg/uploadify.swf',
		'uploader' 	: './templates/usersetting/upload.php',
		'auto'	   	: true,
		'buttonText'	: '请选择图片',
		'height'			: 30,
		'width'				: 100,
		'folder'   	: '/avatar',
		'multi'		: true,
		'fileExt'   : '*.jpg;*.jpeg;*.png;*.gif',
		'method'   : 'post',
		'formData' : { 'nnameval' : $("#ininame").val()},
		'onUploadSuccess': function(file,data,response) {
		//'onComplete': function(event,ID,file,response,data) {
			var msg = $.parseJSON(data);
			
			//alert(msg.res+" "+msg.path);
			if(msg.res == '1'){
				$("#imgcut").show(1000);
				
				$("#imgsrc").val(msg.path);
				
				$("#aimg").attr("src","");
				$("#apreview").attr("src","");
				
				if(flag==1){
					
					//alert("test");
					jcrop_api.destroy();
				}
				
				$("#aimg").attr("src",msg.path);
				$("#apreview").attr("src",msg.path);
				
				
				$('#aimg').Jcrop({
					minSize: [50,50],
					setSelect: [0,0,100,100],
					//onChange:updateCoords,
					//onSelect: updateCoords,
					onChange: showPreview,
					onSelect: showPreview,
					aspectRatio: 1
				},function(){
					// Store the API in the jcrop_api variable
					//alert("123");
					jcrop_api = this;
					flag=1;
				});
				
			}
			else if(msg.res == 2){
				alert("照片不符合格式，必须是jpeg、jpg、png、gif中的一种");
			}
			else
				alert("上传失败");
		}
		}
	);
	
});
*/
var jcrop_api,flag;
function mdfavatar()
{
	$("#mavatar").modal("show");
}
function showPreview(coords)
{
	updateCoords(coords);
	var boundx,boundy,rx,ry;
	boundx=$("#aimg").css("width").replace(/[^0-9]/ig,"");
	boundy=$("#aimg").css("height").replace(/[^0-9]/ig,"");
	rx = 150.0/coords.w;
	ry = 150.0/coords.h;
	$('#apreview').css({
		width: Math.round(rx * boundx) + 'px',
		height: Math.round(ry * boundy) + 'px',
		marginLeft: '-' + Math.round(rx * coords.x) + 'px',
		marginTop: '-' + Math.round(ry * coords.y) + 'px'
	});
}
//need to move out of this file//
function updateCoords(coords)
{
	$('#ax').val(coords.x);
	$('#ay').val(coords.y);
	$('#aw').val(coords.w);
	$('#ah').val(coords.h);
};
function asubfunc()
{
	//alert($("#ax").val()+" "+$("#ay").val()+" "+$("#aw").val()+" "+$("#ah").val()+" "+boundx+" "+boundy);
	var x=$("#ax").val();
	var y=$("#ay").val();
	var w=$("#aw").val();
	var h=$("#ah").val();
	var nname=$("#ininame").val();
	var imsrc=$("#imgsrc").val();
	var xmlhttp;
	var urla="./templates/usersetting/resize.php"
	if (imsrc ==""){
		alert("no img");
	}
	else{
		xmlhttp=$.ajax({url:urla,async:false,data:{x:x,y:y,w:w,h:h,nname:nname,imsrc:imsrc}});
		if (xmlhttp.responseText == "error")
			alert("头像上传失败");
		else{
			$("#favatar").attr("src","");
			$("#favatar").attr("src","./avatar/"+xmlhttp.responseText);
			
			}
	}
	$.ajax({ 
		type: "GET", 
		url: "static/cache.js", 
		dataType: "text", 
		cache:false, 
		ifModified :true 
	});
	
}
function afsubfunc(){
	asubfunc();
	//$("#aimg").hide(1000);
	//$("#asub").hide(1000);
	$("#mavatar").modal("hide");
	
}
function afsubcancle(){
	$("#mavatar").modal("hide");
}
function mbsinfo()
{
	
	var nname=$("#ininame").val();
	var name= $("#iiname").val();
	var sex=$("input[name='sex']:checked").val();  
	var prov= $("#iiprovince").val();
	var city = $("#iicity").val();
	var qq= $("#iiqq").val();
	var phone = $("#iiphone").val();
	var birth = $("#iibirth").val();
	var xmlhttp;
	
	var urla = "./templates/usersetting/modifybsinfo.php";
	xmlhttp=$.ajax({url:urla,async:false,data:{nickname:nname,name:name,sex:sex,prov:prov,city:city,qq:qq,phone:phone,birth:birth}});
	
	alert(xmlhttp.responseText);
};
function mpasswd()
{
   $("#mdfpasswd").modal("show");
}
function mpasswd_sure()
{
	var ops=$("#m_ops").val();
	var ps1=$("#m_ps1").val();
	var ps2=$("#m_ps2").val();
	var xmlhttp
	var urla="./templates/usersetting/modifypasswd.php";
	if ((!ops) || (!ps1) || (!ps2)){
		alert("null");
		exit;
	}
	if(ps1!=ps2){
		alert("not equal");
		exit;
	}
	xmlhttp=$.ajax({url:urla,async:false,data:{ops:ops,ps1:ps1}});
	alert(xmlhttp.responseText);
	$("#mdfpasswd").modal("hide");
}
function mpasswd_cancle()
{
	$("#mdfpasswd").modal("hide");
}
function upload_img()
{
	alert("upload here!");
}
/*
function test()
{
	alert("onclick");
    if (jcrop_api==""){
		jcrop_api.release();
		alert("jcrop_release");
	}
	else{
		alert("no jcrop_api");
	}
}
*/
</script>
<div id="mdfpasswd" class="modal hide fade">
	<div class="modal-header">
		<h3>修改密码</h3>
	</div>
	
	<div class="modal-body" >
		<form class="form-horizontal">
		<div class="control-group">
			<label class="control-label">原密码：</label>
			<div class="controls">
				<input class="y-textbox" type="password" id="m_ops"/>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label">新密码：</label>
			<div class="controls">
				<input class="y-textbox" type="password" id="m_ps1"/>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label">重复新密码：</label>
			<div class="controls">
				<input class="y-textbox" type="password" id="m_ps2"/>
			</div>
		</div>
		</form>
		
	</div>
	
	<div class="modal-footer">
		<a class="btn" onclick="mpasswd_sure()">确定</a>
		<a class="btn" onclick="mpasswd_cancle()">取消</a>
	</div>
</div>

<div id="mavatar" class="modal hide fade" style="width:400px;">
	
	<input type="hidden" id="imgsrc" value=""/>
	<input type="hidden" id="ax" name="ax" />
	<input type="hidden" id="ay" name="ay" />
	<input type="hidden" id="aw" name="aw" />
	<input type="hidden" id="ah" name="ah" />
	<div   style="width:200px;float:left;">
		<label >上传图片：</label>
		<div >	
			<!--
                       <form action="./templates/usersetting/upload.php" method="post" enctype="multipart/form-data">
					   <input type="text" id="avatarUpload" value=""></input> 
					   <input type="file" id="selfavatar" name="selfavatar" value="">浏览...</input>
					   <input type="submit" name="submit" value="Submit" />
					   <button class="btn" onclick="upimg()">开始上传</button>
					   </form>
			-->
			
			<form enctype="multipart/form-data" action="./templates/usersetting/upload.php" method="post">
				<label for="file">请选择上传的文件</label>
				<input type="file" name="file" size="40" />
				<br />
				<input type="submit" name="submit" value="确定" />
			</form>
			
		</div>
	</div>
	
	<div  style="width:200px;float:left;">
		<label >图片预览：</label>
		<div  style="height:150px;width:150px;overflow:hidden;">
			
                        <img id="apreview" class="jcrop-preview" src="./avatar/back.png">

				
		</div>
	</div>
	
	
	

	<div class=" hide" id="imgcut"  style="width:400px;float:left;">
		<label >图片裁剪：</label>
		<div  style="width:400px;height:300px;vertical-align:middle;border:1px solid #66FF;">
            
                        <img id="aimg"  src=""/>
			
		</div>
	</div>
	
	
	
	<div   style="width:400px;float:left;">
		<label class=" hide">提交：</label>
		<div class=" modal-footer" id="asub">
			<a id="asub1" class="btn" onclick="afsubcancle()" >取消</a>
			<a id="asub2" class="btn btn-primary" onclick="afsubfunc()" >提交修改</a>
		</div>
	</div>
	
	
</div>
