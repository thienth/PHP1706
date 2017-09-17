<?php 
$servername = '127.0.0.1';
$dbname = 'php_1706';
$dbusername = 'root';
$dbpwd = '123456';

// Tao ket noi den csdl
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $dbusername, $dbpwd);
}
catch(PDOException $e)
{
	echo "Connection failed: " . $e->getMessage();
}

function x(){}


 ?>