<?php 

class TParent{
	private $bienPublic = 100;


	// public function truyCapBienPublic($value){
	// 	$this->bienPublic = $value;
	// }

	// public function getBienProtected(){
	// 	return $this->bienPublic;
	// }
}

class TChild extends TParent{

	public function truyCapBienPublicCuaLopCha(){
		$this->bienPublic = 'set gia tri tu lop con';
	}

	public function truyCapBienPublic($value){
		$this->bienPublic = $value;
	}

	public function getBienProtected(){
		return $this->bienPublic;
	}
}


$parent = new TChild();
// $parent->bienPublic = 'set duoc gia tri';

$parent->truyCapBienPublic('truyen value');
// var_dump($parent);
 $parent->getBienProtected();
 var_dump($parent);

 ?>