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
         if(!$cate){
            // return view 404 - not found
            dd('not-found');
         }
         $posts = Post::where('cate_id', $cate->id)->paginate(24);
         return view('home.cate-detail', compact('posts', 'cate'));

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
