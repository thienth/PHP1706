<?php /**
* 
*/
require_once 'models/User.php';
require_once 'models/Post.php';
class PostController
{
	
	function add()
	{
		$users = User::all();
		include_once 'views/client/add-new.php';
	}
	function update()
	{
		$post = Post::find($_GET['id']);
		$users = User::all();
		include_once 'views/client/update.php';
	}
	function saveAdd()
	{
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
		header('location: index.php');
	}
	function saveUpdate()
	{
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
		header('location: index.php');

	}
	function remove()
	{
		$id = $_GET['id'];

		$post = Post::find($id);
		if(!$post){
			echo "<h1>Bài viết không tồn tại</h1>";
			die;
		}
		$post->delete();
		header('location: index.php');
	}
} ?>