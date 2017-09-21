<?php 
/**
* 
*/
class BaseModel
{
	
	public $connect;
	function __construct()
	{
		$this->connect = 
				new PDO('mysql:host=127.0.0.1;
					dbname=php_1706;charset=utf8', 'root', '123456');
	}

	public function all(){
		$sql = "select * from $this->tableName";
		$stmt = $this->connect->prepare($sql);
		$stmt->execute();
		$rs = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
		return $rs;
	}



}


 ?>