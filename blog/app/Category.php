<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	const CATE_URL = 'danh-muc/';
   	protected $table = 'categories';

   	public $fillable = ['name', 'desc', 'is_menu', 'parent_id', 'slug'];

   	public function getParentName(){
   		$parent = self::find($this->parent_id);
   		if(!$parent){
   			return null;
   		}
   		return $parent->name;
   	}
}
