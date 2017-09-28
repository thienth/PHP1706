<?php 
require_once 'BaseModel.php';
require_once 'User.php';
/**
* 
*/
class Post extends BaseModel
{
	public $tableName = 'posts';

	public function getAuthorName(){
		$author = User::find($this->created_by);
		return $author->name;
	}
}

 ?>