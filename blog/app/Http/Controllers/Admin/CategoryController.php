<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
class CategoryController extends Controller
{
    public function index(){

    	$cates = Category::paginate(20);

    	return view('admin.cate.index', compact('cates'));
    }

    public function add(){
    	$model = new Category();
    	$cates = Category::all();
    	return view('admin.cate.form', compact('model', 'cates'));
    }

    public function remove($id){
    	$cate = Category::find($id);
    	if(!$cate) return view('admin.404');

    	$cate->delete();

    	return redirect(route('cate.index'));
    }
}
