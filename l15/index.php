<?php 
	// Vòng lặp
/*	$arr = [1,2,3,4,5,6,7,8,9];
	for ($i=0; $i < count($arr); $i++) { 
			echo "$arr[$i] <br>";
	}
*/	
	$thienth = [
		'name' => 'thienth',
		'age' => 26,
		'job' => 'teacher',
		'an com',
		100,
		'gender' => 'male',
		'di ngu'
	];
	$thienth[] = rand(1, 100);
	foreach ($thienth as $key => $value) {
		echo "$key ------- $value <br>";
	}
 ?>

