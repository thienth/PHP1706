<?php 
$tong = [];
$le = [];
$chan = [];

for ($i=0; $i < 100; $i++) { 
	$ranNumber = rand(1, 100);
	$tong[] = $ranNumber;

	if($ranNumber % 2 == 0){
		$chan[] = $ranNumber;
	}else{
		$le[] = $ranNumber;
	}
}

echo "Mang tong:";
var_dump($tong);
echo "Mang so chan:";
var_dump($chan);
echo "Mang so le:";
var_dump($le);


 ?>