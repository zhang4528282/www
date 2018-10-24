<?php
include("../inc/jiekou.php");


include("../inc/xiton.php");
include("check.php");
if (isset($_POST['save'])) {
	$str = '';
	$str .= '<?php';
	$str .= "\n";
	$str .= '//系统设置';
	$str .= "\n";
	$str .= 'define(\'XXXXXXXXXX1\', \''.$_POST['XXXXXXXXXX1'].'\');';
	$str .= "\n";
	$str .= 'define(\'XXXXXXXXXX2\', \''.$_POST['XXXXXXXXXX2'].'\');';
	$str .= "\n";
	$str .= 'define(\'XXXXXXXXXX3\', \''.$_POST['XXXXXXXXXX3'].'\');';
	$str .= "\n";
	$str .= 'define(\'XXXXXXXXXX4\', \''.$_POST['XXXXXXXXXX4'].'\');';
	$str .= "\n";
	$str .= 'define(\'XXXXXXXXXX5\', \''.$_POST['XXXXXXXXXX5'].'\');';
	$str .= "\n";
	$str .= 'define(\'XXXXXXXXXX6\', \''.$_POST['XXXXXXXXXX6'].'\');';
	$str .= "\n";
	$str .= 'define(\'XXXXXXXXXX7\', \''.$_POST['XXXXXXXXXX7'].'\');';
	$str .= "\n";
	$str .= 'define(\'XXXXXXXXXX8\', \''.$_POST['XXXXXXXXXX8'].'\');';
	$str .= "\n";	
	$str .= '?>';
	$files = '../inc/xiton.php';
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
				<div class="hd-1">系统设置</div>
				<div class="bd-1">


					<form method="post">
						<div class="line-big">
							<div class="x6">
								<div class="form-group">
									<div class="label"><label for="s_name">网站名称</label></div>
									<div class="field">
										<input id="s_name" class="input" name="XXXXXXXXXX1" type="text" size="60" value="<?php echo XXXXXXXXXX1;?>" />

									</div>
								</div>
							</div>
		
							<div class="fc"></div>
							<div class="x4">
								<div class="form-group">
									<div class="label"><label for="s_seoname">优化标题</label></div>
									<div class="field">
										<input id="s_seoname" class="input" name="XXXXXXXXXX2" type="text" size="60" value="<?php echo XXXXXXXXXX2;?>" />

									</div>
								</div>
							</div>
							<div class="x4">
								<div class="form-group">
									<div class="label"><label for="s_keywords">关键字</label></div>
									<div class="field">
										<input id="s_keywords" class="input" name="XXXXXXXXXX3" type="text" size="60" value="<?php echo XXXXXXXXXX3;?>" />

									</div>
								</div>
							</div>
							<div class="x4">
								<div class="form-group">
									<div class="label"><label for="s_description">关键描述</label></div>
									<div class="field">
										<input id="s_description" class="input" name="XXXXXXXXXX4" type="text" size="60" value="<?php echo XXXXXXXXXX4;?>" />

									</div>
								</div>
							</div>
							<div class="fc"></div>
							<div class="x4">
								<div class="form-group">
									<div class="label"><label for="s_seoname">前台模板选择</label></div>
									<div class="field">
										<input id="s_seoname" class="input" name="XXXXXXXXXX5" type="text" size="60" value="<?php echo XXXXXXXXXX5;?>" />
										
										<?php 
										include("../inc/jiekou.php");
echo $javajson3=file_get_contents($javajson3);
										?>
			<div class="input-note">模板可以适当选择默认为奇幻模板</div>
									</div>
								</div>
							</div>
							<div class="fc"></div>
							<div class="x4">
								<div class="form-group">
									<div class="label"><label for="s_seoname">广告邮箱</label></div>
									<div class="field">
									
										<input id="s_seoname" class="input" name="XXXXXXXXXX6" type="text" size="60" value="<?php echo XXXXXXXXXX6;?>" />
										<div class="input-note">广告邮箱</div>
									</div>
								</div>
							</div>	
							<div class="fc"></div>
							<div class="x4">
								<div class="form-group">
									<div class="label"><label for="s_seoname">统计代码</label></div>
									<div class="field">
									<textarea  class="input" name="XXXXXXXXXX7" /><?php echo XXXXXXXXXX7;?></textarea>
	
										<div class="input-note">统计代码</div>
									</div>
								</div>
							</div>	
							<div class="fc"></div>
							<div class="x4">
								<div class="form-group">
									<div class="label"><label for="s_seoname">站点logo地址</label></div>
									<div class="field">
										<input id="s_seoname" class="input" name="XXXXXXXXXX8" type="text" size="60" value="<?php echo XXXXXXXXXX8;?>" />
										<div class="input-note">站点logo地址</div>
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