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

use Illuminate\Http\Request;
use App\PasswordReset;
use Carbon\Carbon;
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
		$pwdReset->delete();
		return "error! invalid token";
	}
	return view('auth.reset-pwd', compact('token'));
});

Route::get(App\Category::CATE_URL.'{cateSlug}', 'HomeController@cate')->name('cate.detail');

Route::get('/{slugUrl}', 'HomeController@detail')->name('post.detail');



