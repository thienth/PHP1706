<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   	public function index(){
   		return view('welcome');
   	}

   	public function cate($cateName = null){
   		
   		return view('cate.index', 
   					['a' => $cateName]);
   	}
}
