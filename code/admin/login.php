<?php
header('Content-type:text/html; charset=utf-8');//设置编码
require_once('../inc/mima.php');
$ppdaas="1";
if(isset($_POST['submit'])){
	if ( USERNAME != $_POST['username']) {
		echo "账号错误";$ppdaas="0";
	}
	if ( PASSWORD != $_POST['password']) {
		echo "密码错误";$ppdaas="0";
	}	
	if($ppdaas == "1"){
		setcookie('username',$_POST['username']);
		setcookie('password',$_POST['password']);
		header('location:index.php');		
	}



}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('inc_head.php') ?>
</head>
<body>
<div style="background-color: #000; padding: 120px 0;">
	<div class="container">
		<p style="font-size: 50px; color: #FFF; text-align: center;">奇幻管理系统 <span class="badge">第一版</span></p>
	</div>
</div>
<div class="container">
	<div style="width: 360px; margin: 50px auto;">
		<form method="post">
			<div class="form-group">
				<div class="label"><label for="a_name">用户名/USER NAME</label></div>
				<div class="field">
					<input id="a_name" class="input" name="username" type="text" data-validate="required:请输入用户名" value="" />
				</div>
			</div>
			<div class="form-group">
				<div class="label"><label for="a_password">密码/PASSWORD</label></div>
				<div class="field">
					<input id="a_password" class="input" name="password" type="password" data-validate="required:请输入密码" value="" />
				</div>
			</div>

			<div class="form-group">
				<div class="label"><label></label></div>
				<div class="field">
					<input id="login_submit" class="btn btn-block bg-black" name="submit" type="submit" value="登录后台" />
				</div>
			</div>
		</form>
	</div>
</div>
</body>
</html>