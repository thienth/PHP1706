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
}

class ConMeo extends DongVat{
	static $table = 'cats';
}
$anhVan = ConNguoi::diNgu()->get();
$conTom = ConMeo::diNgu();
var_dump($anhVan);


// $anhVan = new ConNguoi();
// var_dump($anhVan);
// $anhVan->an(0.5);
// var_dump($anhVan);













 




 ?>