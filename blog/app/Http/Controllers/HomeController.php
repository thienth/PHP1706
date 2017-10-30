<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   	public function index(){
   		$listPost = [
   			[
   				'id' => 1,
   				'title' => 'Lorem ipsum dolor sit amet',
   				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit non nesciunt aliquid a necessitatibus vitae pariatur architecto, soluta modi explicabo cumque illo voluptatem at rem distinctio magnam reprehenderit, sed! Ipsum.',
   				'image' => 'http://lorempixel.com/400/200'
   			],
   			[
   				'id' => 2,
   				'title' => 'Lorem ipsum dolor sit amet',
   				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit non nesciunt aliquid a necessitatibus vitae pariatur architecto, soluta modi explicabo cumque illo voluptatem at rem distinctio magnam reprehenderit, sed! Ipsum.',
   				'image' => 'http://lorempixel.com/400/200'
   			],
   			[
   				'id' => 3,
   				'title' => 'Lorem ipsum dolor sit amet',
   				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit non nesciunt aliquid a necessitatibus vitae pariatur architecto, soluta modi explicabo cumque illo voluptatem at rem distinctio magnam reprehenderit, sed! Ipsum.',
   				'image' => 'http://lorempixel.com/400/200'
   			],
   			[
   				'id' => 4,
   				'title' => 'Lorem ipsum dolor sit amet',
   				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit non nesciunt aliquid a necessitatibus vitae pariatur architecto, soluta modi explicabo cumque illo voluptatem at rem distinctio magnam reprehenderit, sed! Ipsum.',
   				'image' => 'http://lorempixel.com/400/200'
   			],
   			[
   				'id' => 5,
   				'title' => 'Lorem ipsum dolor sit amet',
   				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit non nesciunt aliquid a necessitatibus vitae pariatur architecto, soluta modi explicabo cumque illo voluptatem at rem distinctio magnam reprehenderit, sed! Ipsum.',
   				'image' => 'http://lorempixel.com/400/200'
   			],
   			[
   				'id' => 6,
   				'title' => 'Lorem ipsum dolor sit amet',
   				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit non nesciunt aliquid a necessitatibus vitae pariatur architecto, soluta modi explicabo cumque illo voluptatem at rem distinctio magnam reprehenderit, sed! Ipsum.',
   				'image' => 'http://lorempixel.com/400/200'
   			],
   			[
   				'id' => 7,
   				'title' => 'Lorem ipsum dolor sit amet',
   				'content' => '<b>Lorem ipsum</b> dolor sit amet, consectetur adipisicing elit. Sit non nesciunt aliquid a necessitatibus vitae pariatur architecto, soluta modi explicabo cumque illo voluptatem at rem distinctio magnam reprehenderit, sed! Ipsum.',
   				'image' => 'http://lorempixel.com/400/200'
   			],
   			[
   				'id' => 8,
   				'title' => 'Lorem ipsum dolor sit amet',
   				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit non nesciunt aliquid a necessitatibus vitae pariatur architecto, soluta modi explicabo cumque illo voluptatem at rem distinctio magnam reprehenderit, sed! Ipsum.',
   				'image' => 'http://lorempixel.com/400/200'
   			],
   		];
   		return view('welcome', compact('listPost'));
   	}

   	public function cate($cateName = null){
   		
   		return view('cate.index', 
   					['a' => $cateName]);
   	}
}
