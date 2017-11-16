<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	const CATE_URL = 'danh-muc/';
   	protected $table = 'categories';

   	public $fillable = ['name', 'desc', 'is_menu', 'parent_id', 'slug'];
}
