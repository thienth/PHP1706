<?php 
Route::get('/', 'Admin\DashboardController@index')->name('dashboard');

Route::get('cate', 'Admin\CategoryController@index')->name('cate.index');
Route::get('cate/add', 'Admin\CategoryController@add')->name('cate.add');
Route::post('cate/add', 'Admin\CategoryController@save');
Route::get('cate/update/{id}', 'Admin\CategoryController@edit')->name('cate.edit');
Route::post('cate/update/{id}', 'Admin\CategoryController@saveEdit');
Route::get('cate/remove/{id}', 'Admin\CategoryController@remove')->name('cate.remove');

Route::get('post', function(){
	return "admin/post => quan tri bai viet trong he thong";
});
 ?>