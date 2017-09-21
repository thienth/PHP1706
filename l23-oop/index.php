<?php 

class DongVat{
	var $ten;
	var $tuoi;
	var $canNang;

	const DANH_MUC = "dong vat";
	static $gioiTinh = 'male';

	function hat(){
		echo "em dang hat $this->ten em nam nay $this->tuoi";
	}

	function an($khoiLuong){
		$this->canNang += $khoiLuong;
	}

	static function layGioiTinh(){
		echo $this->ten;
	}

	static function diNgu(){
		$model = new static();
		$model->queryBuilder = "select * from " . static::$table;
		return $model;
	}

	function get(){
		return $this->queryBuilder;
	}
}

class ConNguoi extends DongVat{
	static $table = 'peoples';

	// Overwrite
	function an($khoiLuong){
		$this->canNang -= $khoiLuong;
	}
}

class ConMeo extends DongVat{
	static $table = 'cats';
	function an($khoiLuong){
		$this->chieuCao += $khoiLuong;
	}
}
$anhVan = new ConNguoi();
$anhVan->canNang = 200;
var_dump($anhVan);
$anhVan->an(100);
var_dump($anhVan);

echo "<br>";
$tom = new ConMeo();
$tom->chieuCao = 100;
var_dump($tom);
$tom->an(100);
var_dump($tom);


// $anhVan = new ConNguoi();
// var_dump($anhVan);
// $anhVan->an(0.5);
// var_dump($anhVan);













 




 ?>