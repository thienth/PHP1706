<?php 

// 1. Lấy id từ url
$id = isset($_GET['id']) == true ? $_GET['id'] : null;
// 2. Kiểm tra id có hợp lệ không
if($id == null){
	echo "<h1>Sai đường dẫn</h1><a href='index.php'>trở về trang chủ</a>";
	die;
}

// 3. Lấy thông tin user từ id
require_once 'db.php';
$sql = "select * from users where id = $id";

$stmt = $conn->prepare($sql);
$stmt->execute();
$user = $stmt->fetch();
if($user == false){
	echo "<h1>Người dùng không tồn tại</h1><a href='index.php'>trở về trang chủ</a>";
	die;
}
// 4. Hiển thị form với những dữ liệu có sẵn (từ csdl)

 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="save-update-user.php" method="post" >
		<input type="hidden" name="id" value="<?= $user['id']?>">
		<div>
			<input type="text" name="name" value="<?= $user['name']?>" placeholder="Name">
		</div>
		<div>
			<input type="text" name="email" value="<?= $user['email']?>" placeholder="Email">
		</div>
		<div>
			<label>Avatar</label>
			<input type="file" name="avatar" value="" >
		</div>
		<div>
			<button type="submit">Tạo mới</button>
		</div>
	</form>
</body>
</html>
