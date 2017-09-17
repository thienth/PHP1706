<?php 
require_once 'db.php';

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
 			<th>Avatar</th>
 			<th>
 				<a href="create.php" title="">Add User</a>
 			</th>
 		</tr>
 	</thead>
 	<tbody>
 	<?php 
 		foreach ($result as $user) { ?>
		<tr>
 			<td><?= $user['id']?></td>
 			<td><?= $user['email']?></td>
 			<td><?= $user['name']?></td>
 			<td>
 				<img src="<?= $user['avatar']?>" width="200">
 			</td>
 			<td>
 				<a href="edit.php?id=<?= $user['id']?>">Edit</a> 
 				<a href="remove.php?id=<?= $user['id']?>">Remove</a>
 			</td>
 		</tr>
	<?php
 		}
 	 ?>
 		
 	</tbody>
 </table>