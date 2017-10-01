<?php 

$url = isset($_GET['r']) == true ? $_GET['r'] : "/";
require_once 'controllers/HomeController.php';
require_once 'controllers/Admin/PostController.php';
switch ($url) {
	case '/': // trang chu
		$ctl = new HomeController();
		$ctl->index();
		break;
	case 'post':
		$ctl = new PostController();
		$ctl->list();
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