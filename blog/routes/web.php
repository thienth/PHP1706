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

Route::get(App\Category::CATE_URL.'{cateSlug}', 'HomeController@cate')->name('cate.detail');
Route::get('/{slugUrl}', 'HomeController@detail')->name('post.detail');







