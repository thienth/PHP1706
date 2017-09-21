<?php 
require_once 'models/User.php';
require_once 'models/Post.php';
$model = new User();
$listUser = $model->all();

echo "<pre>";
var_dump($listUser);

 ?>