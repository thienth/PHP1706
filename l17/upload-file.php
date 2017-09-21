<?php 
$file = $_FILES['avatar'];
if($file['size'] > 0){
	$fileName = "uploads/" . uniqid() . '-' . $file['name'];
	if(move_uploaded_file($file['tmp_name'], $fileName)){

		echo "<img src=$fileName width='150'>";
	}
}


 ?>