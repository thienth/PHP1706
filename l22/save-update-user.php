<?php 

// 1. Lấy dữ liệu từ form
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$avatar = $_FILES['avatar'];

require_once 'db.php';

// 2. Kiểm tra email đã tồn tại hay chưa
$sql = "select * from users where id = :id";

$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();
$user = $stmt->fetch();
if($user == false){
	echo "<h1>Thành viên không tồn tại</h1><a href='index.php'>trở về trang chủ</a>";
	die;
}

// 3. sửa dữ liệu vào db
$sql = "
	update users 
	set name = :name, 
		email = :email
";
if($avatar['size'] > 0){
	// Dat ten anh
	$fileName = 'uploads/' . uniqid() . "-" . $avatar['name'];
	// Luu anh tren server ** tra ve true thi luu thanh cong/tra ve false thi that bai
	if(move_uploaded_file($avatar['tmp_name'], $fileName)){
		// neu upload anh thanh cong thi update cau lenh sql
		$sql .= ", avatar = :fileName";
	}else{
		$fileName = null;
	}
}
$sql .= " where id = :id";

$stmt = $conn->prepare($sql);
$stmt->bindValue(':name', $name);
$stmt->bindValue(':email', $email);

// neu co anh thi bind duong dan anh vao cau query
if($fileName != null){
	$stmt->bindValue(':fileName', $fileName);
}

$stmt->bindValue(':id', $id);
$stmt->execute();

// 4. Trở về trang chủ
header('location: index.php');

 ?>