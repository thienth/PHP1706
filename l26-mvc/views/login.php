<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="<?php echo getUrl('post-login') ?>" method="post" >
		<input type="text" name="username" value="" placeholder="User name">
		<input type="password" name="password" value="" placeholder="Password">
		<input type="checkbox" name="remember" value="1"> Remember
		<button type="submit">Login</button>
	</form>
</body>
</html>