<?php
$no_visible_elements=true;
include('header.php'); ?>

<script>
                function LoginTest()
                {
                var xmlhttp;
                var t1=$("#username").val();
                var t2=$("#password").val();
                var urla="backhouse/loginHandler.php?tn="+t1+"&tp="+t2;
                xmlhttp=$.ajax({url:urla,async:false});
                var result = xmlhttp.responseText;
                if (result.replace(/^\s*|\s*$/g, '').substr(0,1) == "欢"){
                        self.location='index.php';
		}
                else
			$("#txtHint").html("用户名或者密码错误");
                }

</script>


			<div class="row-fluid">
				<div class="span12 center login-header">
					<h2>Yiya 管理系统</h2>
				</div><!--/span-->
			</div><!--/row-->
			
			<div class="row-fluid">
				<div class="well span5 center login-box">
					<div class="alert alert-info">
						请输入用户名和密码
					</div>
						<fieldset>
							<div class="input-prepend" title="用户名" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><input style="width:200px" autofocus class="input-large span10" name="username" id="username" type="text" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="密码" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><input style="width:200px" class="input-large span10" name="password" id="password" type="password" />
							</div>
							<div class="clearfix"></div>

							<div id="txtHint"></div>
							<div class="clearfix"></div>
							<p class="center span5">
							<button class="btn btn-primary" id="submitbutton" onclick="LoginTest()">登录</button>
							</p>
						</fieldset>
				</div><!--/span-->
			</div><!--/row-->
<?php include('footer.php'); ?>
