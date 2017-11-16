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
}
