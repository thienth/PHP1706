<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="save-user.php" method="post" enctype="multipart/form-data">
		<div>
			<input type="text" name="name" value="" placeholder="Name">
		</div>
		<div>
			<input type="text" name="email" value="" placeholder="Email">
		</div>
		<div>
			<input type="password" name="password" value="" placeholder="Password">
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