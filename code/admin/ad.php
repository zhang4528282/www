<?php

include("../inc/ad.php");
include("check.php");
if (isset($_POST['save'])) {
	$str = '';
	$str .= '<?php';
	$str .= "\n";
	$str .= '//广告设置';
	$str .= "\n";
	$str .= 'define(\'XXXXXXXXXX9\', \''.$_POST['XXXXXXXXXX9'].'\');';
	$str .= "\n";	
	$str .= 'define(\'XXXXXXXXXX10\', \''.$_POST['XXXXXXXXXX10'].'\');';
	$str .= "\n";	
	$str .= 'define(\'XXXXXXXXXX11\', \''.$_POST['XXXXXXXXXX11'].'\');';
	$str .= "\n";	
	$str .= 'define(\'XXXXXXXXXX12\', \''.$_POST['XXXXXXXXXX12'].'\');';
	$str .= "\n";		
	$str .= '?>';
	$files = '../inc/ad.php';
	$ff = fopen($files,'w+');
	fwrite($ff,$str);
	
	echo "恭喜修改成功！";

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
				<div class="hd-1">广告设置</div>
				<div class="bd-1">


					<form method="post">
						<div class="line-big">


							<div class="fc"></div>
							<div class="x4">
								<div class="form-group">
									<div class="label"><label for="s_seoname">头部横幅广告管理</label></div>
									<div class="field">
									<textarea  class="input" name="XXXXXXXXXX9" /><?php echo XXXXXXXXXX9;?></textarea>	
									</div>
								</div>
							</div>	
							<div class="fc"></div>
							<div class="x4">
								<div class="form-group">
									<div class="label"><label for="s_seoname">播放器页面下方横幅广告管理</label></div>
									<div class="field">
									<textarea  class="input" name="XXXXXXXXXX10" /><?php echo XXXXXXXXXX10;?></textarea>	
									</div>
								</div>
							</div>	
							<div class="fc"></div>
							<div class="x4">
								<div class="form-group">
									<div class="label"><label for="s_seoname">移动端顶部浮漂广告管理</label></div>
									<div class="field">
									<textarea  class="input" name="XXXXXXXXXX11" /><?php echo XXXXXXXXXX11;?></textarea>	
									</div>
								</div>
							</div>	
							<div class="fc"></div>
							<div class="x4">
								<div class="form-group">
									<div class="label"><label for="s_seoname">移动端底部浮漂广告管理</label></div>
									<div class="field">
									<textarea  class="input" name="XXXXXXXXXX12" /><?php echo XXXXXXXXXX12;?></textarea>	
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