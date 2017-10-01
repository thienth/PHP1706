<?php 
require_once 'models/Post.php';
//1 thu thap thong tin tu form (du lieu moi)
$title = $_POST['title'];
$content = $_POST['content'];
$created_by = $_POST['created_by'];

$model = new Post();
//3 cap nhat du lieu tu form vao model
$model->title = $title;
$model->content = $content;
$model->created_by = $created_by;
//4 save
$model = $model->insert();
if(!$model){
	echo "<h1>Thêm mới thất bại</h1>";
	die;
}
//5 redirect ve trang chu (list.php)
header('location: list.php');

 ?>