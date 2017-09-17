<?php 

// 1. Lấy dữ liệu từ form
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

require_once 'db.php';

// 2. Kiểm tra email đã tồn tại hay chưa
$sql = "select * from users where email = :email";

$stmt = $conn->prepare($sql);
$stmt->bindValue(':email', $email);
$stmt->execute();
$user = $stmt->fetch();
if($user != false){
	echo "<h1>Email đã tồn tại</h1><a href='index.php'>trở về trang chủ</a>";
	die;
}

// 3. Thêm dữ liệu vào db
$sql = "
	insert into users (name, email, password)
	values (:name, :email, :password)
";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':name', $name);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':password', md5($password));
$stmt->execute();

// 4. Trở về trang chủ
header('location: index.php');

 ?>