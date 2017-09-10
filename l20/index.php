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


$sqlQuery = "select * from users";

$stmt = $conn->prepare($sqlQuery);
$stmt->execute();
$result = $stmt->fetchAll();

 ?>

 <table>
 	<thead>
 		<tr>
 			<th>ID</th>
 			<th>Email</th>
 			<th>Name</th>
 		</tr>
 	</thead>
 	<tbody>
 	<?php 
 		foreach ($result as $user) { ?>
		<tr>
 			<td><?= $user['id']?></td>
 			<td><?= $user['email']?></td>
 			<td><?= $user['name']?></td>
 		</tr>
	<?php
 		}
 	 ?>
 		
 	</tbody>
 </table>