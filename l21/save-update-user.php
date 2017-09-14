<?php 

// 1. Lấy dữ liệu từ form
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

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
	where id = :id
";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':name', $name);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':id', $id);
$stmt->execute();

// 4. Trở về trang chủ
header('location: index.php');

 ?>