<?php 

$url = isset($_GET['r']) == true ? $_GET['r'] : "/";
switch ($url) {
	case '/': // trang chu
		

		include_once 'views/client/homepage.php';
		break;
	case 'post':
		require_once 'models/Post.php';
		$posts = Post::all();
		include_once 'views/client/post/index.php';
		break;
	case 'admin/add-post':

		include_once 'views/admin/category/add.php';
		break;
	case 'admin/category/save-add':
		require_once 'models/Post.php';
		$model = new Post();
		$model->title = $_POST['title'];
		var_dump($model);
		break;
	default:
		echo "<h1>Not found!</h1>";
		break;
}



 ?>