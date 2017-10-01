<?php 
/**
* 
*/
require_once 'models/Post.php';
class PostController
{
	
	function list()
	{
		$posts = Post::all();
		include_once 'views/client/post/index.php';
	}
}


 ?>