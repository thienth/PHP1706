<<<<<<< HEAD
<?php
//required parameter
//optional parameter
	$a = $_GET['a'];
	$b = $_GET['b'];
	$c = $_GET['c'];
	function tong($a, $b, $c)
	{
		echo $a + $b +$c;
		
	}
	tong($a, $b, $c);





=======
<?php 
//required parameter
//optional parameter
function tinhtong($a, $b, $c = 0){
	echo $a+$b+$c;
}


tinhtong(4,5);
>>>>>>> master



 ?>