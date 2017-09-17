<?php 
$id = isset($_GET['id']) == true ? $_GET['id'] : null;
if($id == null){
	echo "<h1>Sai đường dẫn</h1><a href='index.php'>trở về trang chủ</a>";
	die;
}

require_once 'db.php';
$sql = "select * from users where id = $id";

$stmt = $conn->prepare($sql);
$stmt->execute();
$user = $stmt->fetch();
if($user == false){
	echo "<h1>Người dùng không tồn tại</h1><a href='index.php'>trở về trang chủ</a>";
	die;
}

$sql = "delete from users where id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();

header('location: index.php');









 ?>