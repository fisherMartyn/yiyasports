<script type="text/javascript">
  function getpage1(){
    var xmlhttp;
    if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
    }
    else{// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
  
    xmlhttp.onreadystatechange=function(){
      if (xmlhttp.readyState==4 && xmlhttp.status==200){
        document.getElementById("content").innerHTML=xmlhttp.responseText;
      }
    }
    xmlhttp.open("GET","Smarty/templates/doctpl/filelist.php",true);
    xmlhttp.send();
  }
  function getpage2(){
    var xmlhttp;
    if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
    }
    else{// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
  
    xmlhttp.onreadystatechange=function(){
      if (xmlhttp.readyState==4 && xmlhttp.status==200){
        document.getElementById("content").innerHTML=xmlhttp.responseText;
      }
    }
    xmlhttp.open("GET","Smarty/templates/doctpl/uploadfile_check.tpl",true);
    xmlhttp.send();
  }
</script>
<link type="text/css" rel="stylesheet" href="./Smarty/templates/doctpl/style.css"/>
<div class="header">
	<a href="javascript:getpage1()">文件列表</a>
	<a href="javascript:getpage2()">上传文件</a>
</div>
<div class="header">
	<ul> 
		 <li style='width:350px'>文件名</li>
            	<li style='width:250px'>修改时间</li>
            	<li style='width:150px'>大小</li>
		<li style='width:150px'>操作</li>
	</ul>
</div>
<script type="text/javascript">
        getpage1();
</script>
<div id="content">
</div>
