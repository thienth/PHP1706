<?php 

$url = isset($_GET['r']) == true ? $_GET['r'] : "/";
require_once 'routes/CustomRoute.php';

CustomRoute::clientRoute($url);

 ?>