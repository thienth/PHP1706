<?php 
/**
* 
*/
require_once 'models/Post.php';
class HomeController
{
	
	function index()
	{
		$posts = Post::all();
		include_once 'views/client/homepage.php';
	}

	function testView(){
		var_dump($_COOKIE['username']);die;
		setcookie('username', 'value duoc set tu server');
		include_once 'views/testview.php';
	}
}



 ?>