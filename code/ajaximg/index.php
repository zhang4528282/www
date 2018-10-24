<?php
$json1=$_GET['json1'];
$json2=$_GET['json2'];


$files = $json2.".jpg";
if(file_exists($files))
{
    header("Location: ".$files);
}
else
{
$img=file_get_contents($json1);

	$files = $json2.".jpg";
	$ff = fopen($files,'w+');
	fwrite($ff,$img);
    header("Location: ".$files);	
}




	

?>

