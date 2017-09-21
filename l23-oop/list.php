<?php 
require_once 'models/User.php';
require_once 'models/Post.php';
$listUser = User::where(['id', '>=', 5])
				->orWhere(['email', 'like', '%va%'])
				->andWhere(['id', 6])
				->get();

echo "<pre>";
var_dump($listUser);

 ?>