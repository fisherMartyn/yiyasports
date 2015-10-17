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
<?php include('fronthouse/indexinfo.php')?>




			<div class="sortable row-fluid">
				<a data-rel="tooltip" title="今日新增0位用户" class="well span3 top-block" href="#">
					<span class="icon32 icon-red icon-user" style="width:32px;height:32px;"></span>
					<div>总用户数</div>
					<div><?php echo $totalmember?></div>
					<span class="notification">0</span>
				</a>

				<a data-rel="tooltip" title="今日发文0篇" class="well span3 top-block" href="#">
					<span class="icon32 icon-blue icon-document" style="width:32px;height:32px;"></span>
					<div>总发文数</div>
					<div>107</div>
					<span class="notification">0</span>
				</a>

				<a data-rel="tooltip" title="今日新增0个计划" class="well span3 top-block" href="#">
					<span class="icon32 icon-green icon-calendar" style="width:32px;height:32px;"></span>
					<div>总计划数</div>
					<div>207</div>
					<span class="notification">0</span>
				</a>

				<a data-rel="tooltip" title="今日新增<?php echo $newmedia?>个视频" class="well span3 top-block" href="#">
					<span class="icon32 icon-orange icon-video" style="width:32px;height:32px;"></span>
					<div>总视频数</div>
					<div><?php echo $totalmedia?></div>
					<span class="notification"><?php echo $newmedia?></span>
				</a>
			</div>

			<div class="row-fluid">
				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-info-sign"></i>YiYa介绍</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<h1>YiYafit.com <small>我们致力于打造全国最nb的网上健身瘦身平台，将私教和普通群众亲密的连接起来</small></h1>
						<p>yiyafit.com从策划至今已经走过了磕磕碰碰的两个月，我们填过了无数的坑，受到过无数的打击，但我们依然在坚持，不为别的，只为实现心中的梦想。</p>
						<p><b>我们本就一无所有，没有理由不去追随自己的心。</b></p>
						
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
					

		  
       
<?php include('footer.php'); ?>
