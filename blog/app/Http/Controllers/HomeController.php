<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class HomeController extends Controller
{
   	public function index(){
         $posts = Post::paginate(24);
   		return view('home.index', compact('posts'));
   	}

   	public function cate($cateName = null){
   		
   		return view('cate.index', 
   					['a' => $cateName]);
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
