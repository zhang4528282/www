<?php
include("../inc/jiekou.php");
require_once('../inc/mima.php');

include("../inc/xiton.php");
include("check.php");
if (isset($_POST['save'])) {
	$str = '';
	$str .= '<?php';
	$str .= "\n";
	$str .= '//后台密码';
	$str .= "\n";
	$str .= 'define(\'USERNAME\', \''.$_POST['username'].'\');';
	$str .= "\n";
	$str .= 'define(\'PASSWORD\', \''.$_POST['password'].'\');';
	$str .= "\n";
	$str .= '?>';
	$files = '../inc/mima.php';
	$ff = fopen($files,'w+');
	fwrite($ff,$str);
	echo "重置成功！";
	setcookie('username','',time()-1);
setcookie('password','',time()-1);
header('location:login.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php include("inc_head.php");?>
<script type="text/javascript">
KindEditor.ready(function(K) {
	K.create('#s_copyright');
	var editor = K.editor();
	K('#picture').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
			imageUrl : K('#s_logo').val(),
			clickFn : function(url, title, width, height, border, align) {
				K('#s_logo').val(url);
				editor.hideDialog();
				}
			});
		});
	});
	K('#weixin').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
			imageUrl : K('#s_weixin').val(),
			clickFn : function(url, title, width, height, border, align) {
				K('#s_weixin').val(url);
				editor.hideDialog();
				}
			});
		});
	});
	K('#dashang').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
			imageUrl : K('#s_dashang').val(),
			clickFn : function(url, title, width, height, border, align) {
				K('#s_dashang').val(url);
				editor.hideDialog();
				}
			});
		});
	});
});
</script>

</head>
<body>

<?php include("inc_header.php");?>
<div id="content">
	<div class="container">
		<div class="line-big">
		<?php include("inc_left.php");?>
			<div class="xx105">
				<div class="hd-1">密码重置</div>
				<div class="bd-1">


					<form method="post">
						<div class="line-big">
		
		
							<div class="fc"></div>
							<div class="x4">
								<div class="form-group">
									<div class="label"><label for="s_seoname">用户名</label></div>
									<div class="field">
										<input id="s_seoname" class="input" name="username" type="text" size="60" value="admin" />

									</div>
								</div>
							</div>
							<div class="x4">
								<div class="form-group">
									<div class="label"><label for="s_keywords">密码</label></div>
									<div class="field">
										<input id="s_keywords" class="input" name="password" type="text" size="60" value="admin" />

									</div>
								</div>
							</div>
	


	


						</div>
						<div class="form-group">
							<div class="label"><label></label></div>
							<div class="field">
								<input id="save" class="btn bg-dot btn-block" name="save" type="submit" value="保存" />
							</div>
						</div>
					</form>


				</div>

			</div>
		</div>
	</div>
</div>

<?php include("inc_footer.php");?>
</body>
</html>