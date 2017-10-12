<?php 
require_once 'BaseModel.php';
/**
* 
*/
class RememberToken extends BaseModel
{

	public $tableName = 'remember_tokens';
	public $columns = ['user_id', 'token', 'expired_date'];
}

 ?>