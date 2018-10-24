

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('inc_head.php') ?>
</head>
<body>
<?php

include('check.php');
include("../inc/version.php");

include("../inc/jiekou.php");
$javajson4=file_get_contents($javajson4);
$javajson5=file_get_contents($javajson5);
$javajson6=file_get_contents($javajson6);
	if($javajson4 == $version){
		
	}else{
		?>
		<script type="text/javascript">

  var name=prompt("您好您的版本不是最新版本请添加官方QQ群更新版本","QQ群：<?php echo $javajson5;?>")
  if (name!=null && name!="")
    {
    document.write("您好您的版本不是最新版本请添加官方QQ群更新版本" + name)
    }

</script>
<?php
	}								
	?>
<?php include('inc_header.php') ?>
<div id="content">
	<div class="container">
		<div class="line-big">
			<?php include('inc_left.php') ?>
<?php echo $javajson6;?>
		</div>
	</div>
</div>
<?php include('inc_footer.php') ?>
</body>
</html>