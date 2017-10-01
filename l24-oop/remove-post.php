<?php 
require_once 'models/Post.php';
require_once 'models/User.php';
$id = $_GET['id'];

$post = Post::find($id);
if(!$post){
	echo "<h1>Bài viết không tồn tại</h1>";
	die;
}
$post->delete();
header('location: list.php');

 ?>