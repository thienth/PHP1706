<?php 
/**
* 
*/
require_once 'controllers/HomeController.php';
require_once 'controllers/PostController.php';
require_once 'models/RememberToken.php';
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
				$remember = isset($_POST['remember']) == true; // check xem co tick vao remember hay khong
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

					if($remember){

						// neu co tick remember thi tao moi ban ghi trong remember tokens va tao cookies
						$rememberToken = RememberToken::find($user->id);
						if($rememberToken){
							$rememberToken->delete(); // xoa du lieu cu neu ton tai
						}

						$rememberToken = new RememberToken();
						$token = md5($user->email."-".microtime()); // sinh ra token

						// lay ngay thang nam cua 15 ngay sau
						$date = date("Y-m-d");
						$expiredDate = date("Y-m-d", 
							strtotime(date("Y-m-d", strtotime($date)) . " +15 days"));

						$rememberToken->user_id = $user->id;
						$rememberToken->token = $token;
						$rememberToken->expired_date = $expiredDate;
						$rememberToken->insert(); // them du lieu moi vao csdl

						// tao cookie
						setcookie("AUTH_TOKEN", $token, time()+(3600*24*15));
					}

					// var_dump($_SESSION['AUTH']);die;
					header('location: index.php');
					die;
				}else{
					echo "Sai email/mat khau!";die;
					// header('location: index.php?r=login');
				}
				break;
			case 'add-post':
				$token = isset($_COOKIE['AUTH_TOKEN']) == true ? $_COOKIE['AUTH_TOKEN'] : null;
				if($token != null){
					$rm = RememberToken::where(['token', '=', $token])->first();
					
					$now = date_create(date('Y-m-d'));
					$dbDate = date_create($rm->expired_date);
					$dateDiff = date_diff($now, $dbDate);

					if($dateDiff->days <= 15){
						$user = User::find($rm->user_id);
						$_SESSION['AUTH'] = [
							'name' => $user->name,
							'email' => $user->email,
							'id' => $user->id
						];
					}
				}


				if(!isset($_SESSION['AUTH']) || $_SESSION['AUTH'] == null){
					header('location: login');
					die;
				}
				$ctl = new PostController();
				$ctl->add();
				break;

			case "admin/category":
				$ctl = new HomeController();
				$ctl->testView();
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