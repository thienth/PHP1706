<?php 
/**
* 
*/
require_once 'controllers/HomeController.php';
require_once 'controllers/ProductsController.php';
class CustomRoute
{
	static function clientRoute($url)
	{
		switch ($url) {
			case '/': // trang chu
				$ctl = new HomeController();
				$ctl->index();
				break;
			case 'add-post':
				$ctl = new PostController();
				$ctl->add();
				break;
			case 'update-post':
				$ctl = new PostController();
				$ctl->update();
				break;
			case 'save-update':
				$ctl = new PostController();
				$ctl->saveUpdate();
				break;
			case 'save-add':
				$ctl = new PostController();
				$ctl->saveAdd();
				break;
			case 'remove':
				$ctl = new PostController();
				$ctl->remove();
				break;
			default:
				echo "<h1>Not found!</h1>";
				break;
		}
	}
}


 ?>