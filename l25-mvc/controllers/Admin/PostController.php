<?php 
/**
* 
*/
require_once 'models/Post.php';
class PostController
{
	
	function listPost()
	{
		$posts = Post::all();
		include_once 'views/client/post/index.php';
	}
}


 ?>