<?php 
/**
* 
*/
require_once 'controllers/HomeController.php';
require_once 'controllers/PostController.php';
class CustomRoute
{
	static function clientRoute($url)
	{
		switch ($url) {
			case '/': // trang chu
				$ctl = new HomeController();
				$ctl->index();
				break;
			case 'logout':
				unset($_SESSION['AUTH']);
				header('location: index.php');
				break;
			case 'login':
				include_once 'views/login.php';
				break;
			case 'post-login':
				$username = $_POST['username'];
				$password = $_POST['password'];
				require_once 'models/User.php';
				$user = User::where(['email' ,'=', $username])
							->andWhere(['password' , '=', md5($password)])->first();
				if($user){
					$_SESSION['AUTH'] = [
						'name' => $user->name,
						'email' => $user->email,
						'id' => $user->id
					];
					// var_dump($_SESSION['AUTH']);die;
					header('location: index.php');
					die;
				}else{
					echo "Sai email/mat khau!";die;
					// header('location: index.php?r=login');
				}
				break;
			case 'add-post':
				if(!isset($_SESSION['AUTH']) || $_SESSION['AUTH'] == null){
					header('location: login');
					die;
				}
				$ctl = new PostController();
				$ctl->add();
				break;
			case 'update-post':
				if(!isset($_SESSION['AUTH']) || $_SESSION['AUTH'] == null){
					header('location: login');
					die;
				}
				$ctl = new PostController();
				$ctl->update();
				break;
			case 'save-update':
				if(!isset($_SESSION['AUTH']) || $_SESSION['AUTH'] == null){
					header('location: login');
					die;
				}
				$ctl = new PostController();
				$ctl->saveUpdate();
				break;
			case 'save-add':
				if(!isset($_SESSION['AUTH']) || $_SESSION['AUTH'] == null){
					header('location: login');
					die;
				}
				$ctl = new PostController();
				$ctl->saveAdd();
				break;
			case 'remove':
				if(!isset($_SESSION['AUTH']) || $_SESSION['AUTH'] == null){
					header('location: login');
					die;
				}
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