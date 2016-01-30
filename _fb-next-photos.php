<?php
	header('Content-Type: application/json');
	$homepage = file_get_contents('https://graph.facebook.com/v2.1/150093019320/photos?access_token='.$_GET["access_token"].'&limit=25&after='.$_GET["after"]);
	echo $homepage;
?>