<?php 
require_once 'models/Post.php';
//1 thu thap thong tin tu form (du lieu moi)
$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
$created_by = $_POST['created_by'];
//2 find model
$model = Post::find($id);
if(!$model){
	echo "<h1>Sai thông tin!</h1>";
	die;
}
//3 cap nhat du lieu tu form vao model
$model->title = $title;
$model->content = $content;
$model->created_by = $created_by;
//4 save
$model = $model->update();

//5 redirect ve trang chu (list.php)
header('location: list.php');

 ?>