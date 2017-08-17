<?php 

	$name = 'thienth';
	$age = 25.5;
	// Toan tu Cong +
	// Toan tu Tru -
	// Toan tu Cong chuoi .
	// Toan tu chia /
	// Toan tu Chia lay du %
	// Toan tu thuc hien cong 1 don vi sau khi thuc thi $a++
	// Toan tu thuc hien cong 1 don vi truoc khi thuc thi ++$a
	// Toan tu thuc hien Tru 1 don vi sau khi thuc thi $a--
	// Toan tu thuc hien Tru 1 don vi truoc khi thuc thi --$a
	// 
	// Toan tu cong don $a += 1
	// Toan tu tru don $a -= 1
	// Toan tu nhan don $a *= 1
	// Toan tu chia don $a /= 1
	// Toan tu cong chuoi don $a .= 1
	// 
	// Toan tu so sang bang ==
	// Toan tu so sang bang tuyet doi ===
	// Toan tu so sang khac !=
	// Toan tu so sang khac tuyet doi !==
	// Toan tu so sang lon hon >
	// Toan tu so sang lon hon bang >=
	// Toan tu so sang nho hon <
	// Toan tu so sang nho hon  bang <=
	// Toan tu so sang Va &&
	// Toan tu so sang Hoac ||
	// Toan tu so sang Phu dinh !
	/*
		Comment nhieu dong
	 */
	// echo 'Gia tri cua bien \'$age\' = ' . $age;


	$a  = array();
	$a  = [];

	$a = [
			'name' => 'thienth', 
			'age' => 25, 
			'hometown' => 'nam dinh', 
			100, 
			200
		];

	$a[] = 300;
	// var_dump($a);die;
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		var_dump($_REQUEST);die;
		var_dump($_FILES['avatar']);die;
	}
	if($_SERVER["REQUEST_METHOD"] == "GET"){
		// var_dump($_REQUEST['username']);die;
		$username = $_GET['username'];
		echo $username;
		?>
		<form action="" method="post" enctype="multipart/form-data">
			<input type="text" name="username" value="<?php echo $_GET['username']?>">
			<input type="file" name="avatar" >
			<button type="submit">Submit</button>
		</form>
		<?php
	}

 ?>

