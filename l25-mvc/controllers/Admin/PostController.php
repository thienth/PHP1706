<?php 
/**
* 
*/
require_once 'models/products.php';
class PostController
{
	
	function listPost()
	{
		$products = products::all();
		include_once 'views/client/post/index.php';
	}
}


 ?>