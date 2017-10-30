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
					dbname=test;charset=utf8', 'root', '');

	}
	public function insert(){
		$this->queryBuilder = "insert into $this->tableName (";
		foreach ($this->columns as $col) {
			if($this->{$col} == null){
				continue;
			}
			$this->queryBuilder .= "$col, ";
		}
		$this->queryBuilder = rtrim($this->queryBuilder, ", ");
		$this->queryBuilder .= ") values ( ";
		foreach ($this->columns as $col) {
			if($this->{$col} == null){
				continue;
			}
			$this->queryBuilder .= "'" . $this->{$col} ."', ";
		}
		$this->queryBuilder = rtrim($this->queryBuilder, ", ");
		$this->queryBuilder .= ")";
		$stmt = $this->connect->prepare($this->queryBuilder);
		try{

			$stmt->execute();
			$this->id = $this->connect->lastInsertId();
			return $this;
		}catch(Exception $ex){
			var_dump($ex->getMessage());die;
		}

	}


	public function delete(){
		$this->queryBuilder = "delete from $this->tableName where id = $this->id";
		$stmt = $this->connect->prepare($this->queryBuilder);
		try{

			$stmt->execute();
			return true;
		}catch(Exception $ex){
			var_dump($ex->getMessage());die;
		}
	}

	public function update(){
		$this->queryBuilder = "update $this->tableName set ";

		foreach ($this->columns as $col) {
			if($this->{$col} == null){
				continue;
			}
			$this->queryBuilder .= " $col = '" . $this->{$col} . "', ";
		}

		$this->queryBuilder = rtrim($this->queryBuilder, ", ");

		$this->queryBuilder .= " where id = $this->id";
		
		$stmt = $this->connect->prepare($this->queryBuilder);
		try{
			$stmt->execute();
			return $this;
		}catch(Exception $ex){
			var_dump($ex->getMessage());
			die;
		}
	}

	public static function all(){
		$model = new static();
		$sql = "select * from $model->tableName";
		$stmt = $model->connect->prepare($sql);
		$stmt->execute();
		$rs = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
		return $rs;
	}

	public static function find($id){
		$model = new static();
		$sql = "select * from $model->tableName where id = $id";
		$stmt = $model->connect->prepare($sql);
		$stmt->execute();
		$rs = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
		if(count($rs) > 0) return $rs[0];
		return null;
	}

	public static function where($arr = []){
		$model = new static();
		$model->queryBuilder = "select * from $model->tableName where ";
		if(count($arr) == 2){
			$model->queryBuilder .= "$arr[0] = '$arr[1]' ";
		}

		if(count($arr) == 3){
			$model->queryBuilder .= "$arr[0] $arr[1] '$arr[2]' ";
		}
		return $model;
	}

	public function andWhere($arr = []){
		$this->queryBuilder .= " and ";
		if(count($arr) == 2){
			$this->queryBuilder .= "$arr[0] = '$arr[1]' ";
		}

		if(count($arr) == 3){
			$this->queryBuilder .= "$arr[0] $arr[1] '$arr[2]' ";
		}
		return $this;
	}

	public function orWhere($arr = []){
		$this->queryBuilder .= " or ";
		if(count($arr) == 2){
			$this->queryBuilder .= "$arr[0] = '$arr[1]' ";
		}

		if(count($arr) == 3){
			$this->queryBuilder .= "$arr[0] $arr[1] '$arr[2]' ";
		}
		return $this;
	}

	public function get(){
		// var_dump($this->queryBuilder);die;
		$stmt = $this->connect->prepare($this->queryBuilder);
		$stmt->execute();
		$rs = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
		return $rs;
	}



}


 ?>