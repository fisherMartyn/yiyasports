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
function banuser(nickname){
  $("#bandialog").dialog({
    title:nickname,
    modal:true,
    draggable:false,
    resizable:false,
    buttons:{
      '确定':function(){
        var tt=$("#bantimed").val();
        var isnum=/\d/;
        if(!(isnum.test(tt))){
           alert("时间格式不正确！");
           return;
        }
        banuserYES(nickname,$("#bantimed").val(),$("#banreasond").val());
        $(this).dialog("close");
      },
      '取消':function(){
        $(this).dialog("close");
      }
    }
  });

};

function banuserYES(nickname,time,reason){
  var xmlhttp;
  xmlhttp=$.ajax({url:"backhouse/banuser.php",data:{nickname:nickname,time:time,reason:reason},async:false});
  var oTable = $('#userlist').dataTable();
  var row=oTable.$("#user_"+nickname);
  var rindex=oTable.fnGetPosition(row[0]);
  oTable.fnUpdate("<span title='"+reason+"' class='label label-important'>封禁中</span>",rindex,4);

  oTable.fnUpdate("<a onclick=\"releaseuser('"+nickname+"')\" class=\"btn btn-info release_button\" href=\"#\"><i class=\"icon-ok icon-white\"></i>解封</a>",rindex,5);
  
  //row.children('td').eq(4).html("<span title='"+reason+"' class='label label-important'>封禁中</span>");
  //row.children('td').eq(5).html("<a onclick=\"releaseuser('"+nickname+"')\" class=\"btn btn-info release_button\" href=\"#\"><i class=\"icon-ok icon-white\"></i>解封</a>");
}

function releaseuser(nickname){

  var xmlhttp;
  xmlhttp=$.ajax({url:"backhouse/banuser.php",data:{nickname:nickname,time:0,reason:""},async:false});
  var oTable = $('#userlist').dataTable();
  var row=oTable.$("#user_"+nickname);
  var rindex=oTable.fnGetPosition(row[0]);
  oTable.fnUpdate("<span class=\"label label-success\">正常</span>",rindex,4);
  oTable.fnUpdate("<a onclick=\"banuser('"+nickname+"')\" class=\"btn btn-danger ban_button\" href=\"#\"><i class=\"icon-minus-sign icon-white\"></i>封禁</a>",rindex,5);
}

function viewuser(nickname){
  var xmlhttp;
  xmlhttp=$.ajax({url:"backhouse/getuserinfo.php",data:{nickname:nickname},async:false});
  $("#userinfocontent").html(xmlhttp.responseText);
  $("#userinfo_dialog").modal('show');
}

</script>


<div id="bandialog"  style="display:none;color:black;">
  <div id="tt1">封禁时间：<input id="bantimed" value='1' type="text" maxLength='3' onkeypress="return digitsonly(event)"> </input> 天</div>
  <div id="tt2">封禁理由：<br/> <textarea id="banreasond" maxLength='60'></textarea>   </div>
</div>


<div class="modal" id="userinfo_dialog" style="display:none">

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <h3>用户信息</h3>
   </div>
  <div  class="modal-body">
	<table id="userinfocontent" >
	</table>
  </div>

  <div class="modal-footer">
    <a class="btn"  data-dismiss="modal">确定</a>
  </div>
</div>




			
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> 用户管理</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table id="userlist" class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>昵称</th>
								  <th>邮箱</th>
								  <th>身份</th>
								  <th>最后登录</th>
								  <th>状态</th>
								  <th>封禁</th>
								  <th>查看</th>
							  </tr>
						  </thead>   
						  <tbody id="userlistbox">
							<?php include('fronthouse/showuserlist.php'); ?>
						  </tbody>
						</table>
			</div>
				</div><!--/span-->
			
			</div><!--/row-->
<?php include('footer.php'); ?>


