<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
class CategoryController extends Controller
{
    public function index(Request $request){

        $fullUrl = $request->fullUrl();
        $keyword = $request->keyword;
        if(!$keyword){
    	   $cates = Category::paginate(10);
        }else{
            $cates = Category::where('name', 'like', "%$keyword%")->paginate(10);
            $cates->withPath("?keyword=$keyword");
        }
    	return view('admin.cate.index', 
                        compact('cates', 'keyword', 'fullUrl'));
    }

    public function add(){
    	$model = new Category();
    	$cates = Category::all();
    	return view('admin.cate.form', compact('model', 'cates'));
    }

    public function edit($id){
    	$model = Category::find($id);
    	if(!$model) return view('admin.404');
    	$cates = Category::all();
    	return view('admin.cate.form', compact('model', 'cates'));
    }

    public function save(Request $request){
    	if($request->id){
    		$model = Category::find($request->id);
    		if(!$model) return view('admin.404');
    	}else{
    		$model = new Category();
    	}
    	$model->fill($request->all());
    	
    	$model->save();
    	return redirect(route('cate.index'));
    }

    public function remove($id){
    	$cate = Category::find($id);
    	if(!$cate) return view('admin.404');

    	$cate->delete();

    	return redirect(route('cate.index'));
    }
}
