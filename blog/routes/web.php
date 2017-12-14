<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 
	'HomeController@index')->name('homepage');

use App\Category;
Route::get('get-list-category', function(){
	$cates = Category::all();
	$listSortedCate = get_options($cates, 0, "", 10);
	dd($listSortedCate);
});

Route::get('ajax-category', function(){
	$cate = Category::where('parent_id', 0)->get();
	return view('ajax-category', compact('cate'));
});

use Illuminate\Http\Request;
Route::post('get-child', function(Request $request){
	$childs = Category::where('parent_id', $request->parentId)->get();
	return response()->json($childs);
})->name('cate.child');

// Auth route
Route::get('cp-login', 'Auth\LoginController@login')->name('login');
Route::post('cp-login', 'Auth\LoginController@postLogin');
Route::any('logout', function(){
	Auth::logout();
	return redirect(route('login'));
})->name('logout');

Route::get('category/{cateName?}', 'Homecontroller@cate');
Route::get('tim-kiem', 'HomeController@search')->name('client.search');
Route::view('massive-tpl/something', 'layout.massive');

use Illuminate\Support\Facades\Mail;
Route::get('send-mail', function() {
    $username = 'thienth';
	Mail::send('mail_template.test-send-mail', compact('username'), function ($message) {
	    $message->to('thienth32@gmail.com', 'Thien tran');
	    $message->cc('kenjav96@gmail.com', 'Dũng thần dâm');
	    $message->replyTo('thienth@fpt.edu.vn', 'Mr.Thien');
	    $message->subject('test email');
	});
	return 'done!';
});


use App\PasswordReset;
use Carbon\Carbon;
use App\User;
Route::post('forget-pwd-email', function(Request $request) {
	$email = $request->email;
    $user = App\User::where('email', $email)->first();
    if(!$user) {
    	return 'done!';
    }

    $pwdReset = PasswordReset::where('email', $request->email)->delete();
    $token = str_random(20);
    $now = Carbon::now();
    $pwdReset = new PasswordReset();
    $pwdReset->email = $request->email;
    $pwdReset->token = $token;
    $pwdReset->created_at = $now;
    $pwdReset->save();
    
    $url = url('/reset-pwd/'.$token);
    // send email
    Mail::send('mail_template.reset-password-mail', compact('url', 'user'), function ($message) use ($user) {
	    $message->to($user->email, $user->name);
	    // $message->cc('kenjav96@gmail.com', 'Dũng thần dâm');
	    // $message->replyTo('thienth@fpt.edu.vn', 'Mr.Thien');
	    $message->subject('Yêu cầu cấp lại mật khẩu');
	});

	return 'done!';

})->name('forget-pwd.email');

Route::get('reset-pwd/{token}', function($token){
	// check token co hop le hay khong
	$pwdReset = PasswordReset::where('token', $token)->first();
	if(!$pwdReset){
		return "error! invalid token";
	}
	$thatDay = Carbon::createFromFormat('Y-m-d H:i:s', $pwdReset->created_at);
	$now = Carbon::now();
	$dif = $now->diffInHours($thatDay);
	if($dif > 24){
		DB::table('password_resets')->where('token', $token)->delete();
		return "error! invalid token";
	}
	return view('auth.reset-pwd', compact('token'));
});

Route::post('auth-reset-password', function(Request $request) {
    $pwdReset = PasswordReset::where('token', $request->token)->first();
	if(!$pwdReset){
		return "error! invalid token";
	}
	$thatDay = Carbon::createFromFormat('Y-m-d H:i:s', $pwdReset->created_at);
	$now = Carbon::now();
	$dif = $now->diffInHours($thatDay);
	if($dif > 24){
		DB::table('password_resets')->where('token', $token)->delete();
		return "error! invalid token";
	}

	$user = User::where('email', $pwdReset->email)->first();
	$user->password = Hash::make($request->password);
	$user->save();
	return "Done!";
})->name('auth.reset-pwd');

Route::get(App\Category::CATE_URL.'{cateSlug}', 'HomeController@cate')->name('cate.detail');

// Route::get('set-session/{key}/{value}', function($key, $value){
// 	Session::put($key, $value);
	
// 	return $key . "-" . $value;
// });
// Route::get('get-session/{key}', function($key){
// 	dd(Session::has('name'));
// 	return Session::get($key);
// });

// Route::get('flash-ss/{value}', function($value){

// 	Session::flash('thienth', $value);

// 	return redirect(route('get-flash'));
// });
// Route::get('get-flash-ss', function(){
// 	echo Session::get('thienth');
// })->name('get-flash');

// Route::get('create-cookie', function(Request $request){
// 	return response('Done!')->cookie(
// 		'thienth', 'php 1706', 1
// 	);
// });

// Route::get('get-cookie-value', function(Request $request){
// 	return $request->cookie('thienth');
// });

Route::get('list-post', function(Request $request){
	$posts = App\Post::take(10)->get();
	$likedIds = $request->cookie('liked_id');
	$likedIds = explode('|', $likedIds);
	for ($i=0; $i < count($posts); $i++) { 
		if(in_array($posts[$i]->id, $likedIds)){
			$posts[$i]->liked = true;
		}else{
			$posts[$i]->liked = false;
		}
	}
	return view('check-cookie', compact('posts'));
});

Route::get('clicked-like/{id}', function(Request $request){
	// get all cookies
	$likedIds = $request->cookie('liked_id');
	$result = false;
	if(!$likedIds){
		$likedIds = "$request->id";
		$result = true;
	}else{
		$likedIds = explode('|', $likedIds);
		if(!in_array($request->id, $likedIds)){
			array_push($likedIds, $request->id);
			$likedIds = implode('|', $likedIds);
			$result = true;
		}else{
			for ($i=count($likedIds)-1; $i >= 0 ; $i--) { 
				if($likedIds[$i] == $request->id){
					array_splice($likedIds, $i, 1);
					break;
				}
			}
			$likedIds = implode('|', $likedIds);
		}
	}
	return response()->json($result)->cookie('liked_id', $likedIds, 60*24*365);
})->name('clicked-like');









Route::get('/{slugUrl}', 'HomeController@detail')->name('post.detail');

