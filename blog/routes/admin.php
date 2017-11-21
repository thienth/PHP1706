<?php 
use Illuminate\Http\Request;
use App\Category;
Route::get('/', 'Admin\DashboardController@index')->name('dashboard');

Route::get('cate', 'Admin\CategoryController@index')->name('cate.index');

Route::post('cate/check-name', function(Request $request){
	$cate = Category::where('name', $request->name)->first();

	$result = $cate == false ? true : false;

	return response()->json($result);
})->name('cate.checkName');

Route::get('cate/add', 'Admin\CategoryController@add')->name('cate.add');
Route::get('cate/update/{id}', 'Admin\CategoryController@edit')->name('cate.edit');
Route::get('cate/remove/{id}', 'Admin\CategoryController@remove')->name('cate.remove');
Route::post('cate/save', 
	'Admin\CategoryController@save')->name('cate.save');

Route::get('post', function(){
	return "admin/post => quan tri bai viet trong he thong";
});
 ?>