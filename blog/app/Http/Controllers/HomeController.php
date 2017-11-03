<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
class HomeController extends Controller
{
   	public function index(){
         $posts = Post::paginate(24);
   		return view('home.index', compact('posts'));
   	}

      public function cate($cateSlug){
         $cate = Category::where('slug', $cateSlug)->first();
         $posts = Post::where('cate_id', $cate->id)->get();
         dd($posts);
      }

      public function detail($slugUrl){
         $post = Post::where('slug', $slugUrl)->first();
         if(!$post){
            // return view 404 - not found
            dd('not-found');
         }
         return view('home.detail', compact('post'));
      }
}
