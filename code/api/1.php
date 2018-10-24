
<?php
include("inc/jiekou.php");
$javajson1=file_get_contents($javajson1);
 $www=$javajson1;
if (!isset($_GET['m'])) {
	$url=$www;
}else{
 $url=$www."/?m=".$_GET['m'];	
}
 
 

$url=file_get_contents($url);

$url=preg_replace('/\/template/si',$www.'/template',$url);
$url=preg_replace('/src="\//si','src="'.$www.'/',$url);
$url=preg_replace('/###logo###/si',XXXXXXXXXX8,$url);
$url=preg_replace('/<title>(.*?)<\/title>/si','<title>'.XXXXXXXXXX1.'$1-</title>',$url);
$url=preg_replace('/name="keywords" content="/si','name="keywords" content="'.XXXXXXXXXX2,$url);
$url=preg_replace('/name="description" content="/si','name="description" content="'.XXXXXXXXXX3,$url);
$url=preg_replace('/###sbsbsb###/si',$_SERVER['HTTP_HOST'],$url);
$url=preg_replace('/###adgg###/si',$XXXXXXXXXX9,$url);
$url=preg_replace('/###bfgg###/si',$XXXXXXXXXX10,$url);
$url=preg_replace('/###tongji###/si',$XXXXXXXXXX7,$url);
$url=preg_replace('/###youxiang###/si',XXXXXXXXXX6,$url);
$url=preg_replace('/###yddb1###/si',$XXXXXXXXXX11,$url);
$url=preg_replace('/###yddb2###/si',$XXXXXXXXXX12,$url);

$XXXXXXXXXX13 = preg_replace('/&&(.*?)###(.*?)&&/si',' <div class="col-md-2 portfolio-item"><a href="$1" target="_blank" >$2</a></div>',XXXXXXXXXX13);
$url=preg_replace('/###yqlla###/si',$XXXXXXXXXX13,$url); 
$url=preg_replace('/http:\/\/gif.zy.yj1c.co:2100\/(.*?)\/(.*?)\/1.jpg/si',"/ajaximg/?json1=http://gif.zy.yj1c.co:2100/$1/$2/1.jpg&json2=$1$2",$url);


echo $url;
?>
