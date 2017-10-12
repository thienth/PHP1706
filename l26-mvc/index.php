<?php 
session_start();
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
// lấy ra url gốc của project
function getUrl($path = ""){
	$currentUrlpath = $GLOBALS['url'];

	$absoluteUrl = strtok("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",'?');

	if($currentUrlpath != "/"){
		$absoluteUrl = str_replace("$currentUrlpath", "", $absoluteUrl);
	}

	return $path == "/" ? $absoluteUrl : $absoluteUrl.$path;
}


require_once 'routes/CustomRoute.php';

CustomRoute::clientRoute($url);

 ?>