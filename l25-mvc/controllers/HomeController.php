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
}



 ?>