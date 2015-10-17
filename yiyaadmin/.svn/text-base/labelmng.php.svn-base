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

function addlabel(){
  $("#addlabel_result").hide();
  $("#add_dialog").modal('show');
}

function addlabel_yes(){
    var warning;
    warning=$("#addlabel_result");
    warning.hide(); 
    if ($("#label_name").val()==""){
      warning.html("标签名称不能为空!");
      warning.show();
      return false;
    }
 var name=$("#label_name");
 var xmlhttp=$.ajax({url:"backhouse/addLabelDB.php",data:{name:name.val()},async:false});
 if(xmlhttp.responseText.length>5){
      warning.html(xmlhttp.responseText);
      warning.show();
      return false;
  }
  else{
    $("#add_dialog").modal('hide');
    self.location="labelmng.php";
  }
}

function dellabel(id,name){
   $("#dellabelname").html(name);
   $("#dellabelid").html(id);
   $("#del_dialog").modal('show'); 
}

function dellabel_yes(){
   var id=$("#dellabelid").text();
   $.ajax({url:"backhouse/delLabelDB.php", data:{id:$("#dellabelid").text()},async:true});
   $("#del_dialog").modal('hide');
var noty_success='{"text":"删除成功","layout":"top","type":"information"}';                        var options=$.parseJSON(noty_success);
                        noty(options); 

   var oTable = $('#labellist').dataTable();
   var row=oTable.$("#label_"+id);
   oTable.fnDeleteRow(row[0]);
}

</script>
		
<div class="modal" id="add_dialog" style="display:none">
<div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h3>添加标签</h3>
                        </div>
<div class="modal-body">
      <table>
      <tr><td align='right'>标签名称：</td><td><input id="label_name" maxLength='8' type="text" style="width:400px"></td></tr>
      </table>

      <div class="alert alert-error" id="addlabel_result" style="display:none"></div>
</div>

    <div class="modal-footer"><a name = "submit" class="btn" onclick="addlabel_yes()">确认</a>
    <a class="btn"  data-dismiss="modal">取消</a></div>
</div>


<div class="modal" id="del_dialog" style="display:none">
  <div class="modal-body">
    确定删除该标签吗？</br>
    标签名称：<span id="dellabelname"></span>
    <span id="dellabelid" style="display:none"></span>
  </div>
  <div class="modal-footer">
    <a name = "submit" class="btn" onclick="dellabel_yes()">确认</a>
    <a class="btn"  data-dismiss="modal">取消</a>
  </div>
</div>





	
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-tags"></i> 标签管理</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-settings btn-round" style="width:80px" onclick="addlabel()">添加标签</a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table id="labellist" class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>标签名</th>
								  <th>添加时间</th>
								  <th>操作</th>
							  </tr>
						  </thead>   
						  <tbody id="userlistbox">
							<?php include('fronthouse/showlabellist.php'); ?>
						  </tbody>
						</table>
			</div>
				</div><!--/span-->
			
			</div><!--/row-->
<?php include('footer.php'); ?>


