<?php 
if(isset($_SESSION['AUTH'])): ?>
	<h2>Hello Mr. <?php echo $_SESSION['AUTH']['name'] ?></h2>
	<a href="logout" title="">Logout</a>
<?php endif ?>

<table>
	<thead>
		<tr>
			<th>Id</th>
			<th>Title</th>
			<th>Author</th>
			<th>
				<a href="add-post" title="">Add new</a>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($posts as $p): ?>
		<tr>
			<td><?php echo $p->id ?></td>
			<td><?php echo $p->title ?></td>
			<td><?php echo $p->getAuthorName() ?></td>
			<td>
				<a href="remove&id=<?php echo $p->id ?>" title="">
					Remove
				</a>
				<a href="update-post&id=<?php echo $p->id ?>" title="">
					Update
				</a>
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>