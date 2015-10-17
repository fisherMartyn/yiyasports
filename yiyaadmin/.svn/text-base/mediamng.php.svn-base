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




<script>
function selectlabel(id){
  tid=$("#label_"+id);
  if(tid.data('selected')=='0'){
	tid.data('selected','1');
	tid.addClass('label-warning');
  }
  else{
        tid.data('selected','0');
        tid.removeClass('label-warning');
  }
}



function addmedia(){
  $("#addmedia_result").hide();
  $("#add_dialog").modal('show');
}

function addmedia_yes(){
    var warning;
    warning=$("#addmedia_result");
    warning.hide(); 
    if ($("#media_name").val()==""){
      warning.html("视频名称不能为空!");
      warning.show();
      return false;
    }
    if ($("#media_url").val()==""){
      warning.html("视频地址不能为空!");
      warning.show();
      return false;
    }

  var name=$("#media_name");
  var url=$("#media_url");
  var r=document.getElementsByName("selected_labels");
  var l = new Array();
  for(var i=0;i<r.length;i++){
    if($(r[i]).data('selected')=='1')
      l[l.length]=$(r[i]).data('id');
  }
  var label = l.join();
  var xmlhttp=$.ajax({url:"backhouse/addMediaDB.php",data:{name:name.val(),url:url.val(),label:label},async:false});
  if(xmlhttp.responseText.length>5){
      warning.html(xmlhttp.responseText);
      warning.show();
      return false;
  }
  else{
    var noty_success='{"text":"添加成功","layout":"top","type":"information"}';                        var options=$.parseJSON(noty_success);
                        noty(options); 
    $("#add_dialog").modal('hide');
    self.location="mediamng.php";
  }
}

function delmedia(id,name){
   $("#delmedianame").html(name);
   $("#delmediaid").html(id);
   $("#del_dialog").modal('show'); 
  
}

function delmedia_yes(){
   var id=$("#delmediaid").text();
   $.ajax({url:"backhouse/delMediaDB.php", data:{id:$("#delmediaid").text()},async:true});
   $("#del_dialog").modal('hide');
var noty_success='{"text":"删除成功","layout":"top","type":"information"}';                        var options=$.parseJSON(noty_success);
                        noty(options); 



   var oTable = $('#medialist').dataTable();
   var row=oTable.$("#media_"+id);
   oTable.fnDeleteRow(row[0]);
}

</script>

<div class="modal" id="add_dialog" style="display:none">
<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>添加视频</h3>
			</div>
<div class="modal-body">
      <table>
      <tr><td align='right'>视频名称：</td><td><input id="media_name" type="text" style="width:400px"></td></tr>
      <tr><td align='right'>视频地址：</td><td><input id="media_url" type="text" style="width:400px"></td></tr>
      <tr><td align='right'>标签：</td>
      <td  style="width:400px;line-height:23px" id="showlabel"><?php include('fronthouse/showlabels.php') ?></td></tr>
      </table>

      <div class="alert alert-error" id="addmedia_result" style="display:none"></div>
</div>

    <div class="modal-footer"><a name = "submit" class="btn" onclick="addmedia_yes()">确认</a>
    <a class="btn"  data-dismiss="modal">取消</a></div>
</div>


<div class="modal" id="del_dialog" style="display:none">
  <div class="modal-body">
    确定删除该视频吗？</br>
    视频名称：<span id="delmedianame"></span>
    <span id="delmediaid" style="display:none"></span>
  </div>
  <div class="modal-footer">
    <a name = "submit" class="btn" onclick="delmedia_yes()">确认</a>
    <a class="btn"  data-dismiss="modal">取消</a>
  </div> 
</div>



			
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-facetime-video"></i>视频管理</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-settings btn-round" style="width:80px" onclick="addmedia()">添加视频</a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table id="medialist" class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>视频名称</th>
								  <th>添加日期</th>
								  <th>播放次数</th>
								  <th>顶/踩</th>
								  <th>标签</th>
								  <th>删除</th>
								  <th>查看</th>
							  </tr>
						  </thead>   
						  <tbody id="medialistbox">
							<?php include('fronthouse/showmedialist.php'); ?>
						  </tbody>
						</table>
			</div>
				</div><!--/span-->
			
			</div><!--/row-->
<?php include('footer.php'); ?>


