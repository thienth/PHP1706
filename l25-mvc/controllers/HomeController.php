<?php 
/**
* 
*/
require_once 'models/products.php';
class HomeController
{
	
	function index()
	{
		$products = products::all();
		include_once 'views/client/homepage.php';
	}
}



 ?>