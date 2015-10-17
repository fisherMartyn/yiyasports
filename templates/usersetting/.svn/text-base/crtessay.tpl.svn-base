<div>
<input id="essaytitle" placeholder="标题" type="text"/>
</div>

 <textarea id="essayeditor" class="cleditor">



</textarea>
<button class="btn" onclick="openEssay()">打开草稿</button>
<button class="btn" onclick="saveEssay()">保存</button>
<button class="btn" onclick="pubEssay()">发布</button>
<input type="file" name="file_upload" id="file_upload" />

<script>

function autoGrow(){
	          var editor=$("#essayeditor").cleditor()[0];
		  var essaydoc=$("#essayeditor").cleditor()[0].doc;
		  var clbody=$("body",essaydoc);
                  var f=editor.$frame[0];         
                  var size = clbody.css('height').replace(/[^0-9]/ig,"");
		  size-=0;
		  size+=25;
		  if(size<500)
			size=500;
                  f.style.height = size+"px";
}

function addImage(name){
  
	var otext=$("#essayeditor").val();
	var id=name.replace(/[^0-9]/ig,"");
	otext=otext+"<img class='essayimage' data-id='"+id+"' src='allimages/"+name+"'/>";
	$("#essayeditor").val(otext);
	$("#essayeditor").cleditor()[0].updateFrame();
	//-------------使得加载图片后可以自适应高度----------------
	var essaydoc=$("#essayeditor").cleditor()[0].doc;
	var essayimages=$(".essayimage",essaydoc);
	essayimages.load(function(){
		autoGrow();
	});
	//-------------------------------------------------------------
}

$(function() {
    $('#file_upload').uploadify({
        'swf'      : 'phpui/uploadify.swf',
        'uploader' : 'phpui/uploadImage.php',
	'checkExisting' : 'phpui/check-exists.php',
	'multi'         : true,
        'fileTypeExts'   : '*.jpg;*.bmp;*.png;*.gif',
        'fileTypeDesc' : '图片文件' ,
        'method'   : 'post',
        'height'   : 30,
        'width'    : 120,
	'fileSizeLimit': '10240KB',
	'onUploadSuccess' : function(file, data, response) {
			addImage(data);
        }
        // Put your options here
    });
});

function openEssay(){
	var xmlhttp;
	var result;
	xmlhttp=$.ajax({url:"templates/usersetting/openEssay.php",async:false});
	result=eval('('+xmlhttp.responseText+')');
	$("#essayeditor").val(result.text);
	$("#essayeditor").cleditor()[0].updateFrame();
	$("#essaytitle").val(result.title);
	//-----------使得加载图片后可以自适应高度------------
	var essaydoc=$("#essayeditor").cleditor()[0].doc;
	var essayimages=$(".essayimage",essaydoc);
	essayimages.load(function(){
		autoGrow();
	});
	//------------------------------------------------
}
function saveEssay(){
	var xmlhttp;
	xmlhttp=$.ajax({type:'post', url:"templates/usersetting/saveEssay.php",data:{content:$("#essayeditor").val(),title:$("#essaytitle").val()},async:true});

}

function pubEssay(){
	//var xmlhttp;
	var essaydoc=$("#essayeditor").cleditor()[0].doc;
	var images=$(".essayimage",essaydoc);
	var size=images.size();
	var tmpstr="";
	var i;
	var tt;
	for(i=0;i<size;i++){
	  tmpstr=tmpstr+$(images[i]).data('id')+" ";
	}	
	xmlhttp=$.ajax({type:'post', url:"templates/usersetting/pubEssay.php",data:{content:$("#essayeditor").val(),title:$("#essaytitle").val(),imagesid:tmpstr},async:false});
	//----------save cover-----------------------
	if(xmlhttp.responseText.indexOf("失败")<0){
	var t1=xmlhttp.responseText;
	if(size>0){
		
		var t2=$(images[0]).data('id');
		tt=$.ajax({type:'post', url:"phpui/crtEssayCover.php",data:{id:t1,imageid:t2},async:false});
	}
	else
		tt=$.ajax({type:'post', url:"phpui/crtEssayCover.php",data:{id:t1},async:false});
		
	}
	//--------------------------------------------
	alert(tt);	
}


$(function(){
	$(".cleditor").cleditor({
	width:700,
	height: '100%',
	controls:"undo | font size | bold italic underline | color highlight | alignleft center alignright | bullets numbering | link | image",
	fonts:"宋体,黑体,仿宋,楷体,隶书,微软雅黑,幼圆,Arial,Calibri,Tahoma,Helvetica"
	});

	var editor=$("#essayeditor").cleditor()[0];
	editor.change(function(){
		autoGrow();
	});
        var f=editor.$frame[0];             
        f.style.height = "500px";
	f.frameborder="no";
	f.scrolling="no";
	
});


</script>
