<h2>Homepage here!!!!</h2>
<table>
	<thead>
		<tr>
			<th>Id</th>
			<th>Title</th>
			<th>Author</th>
			<th>
				<a href="index.php?r=add-post" title="">Add new</a>
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
				<a href="index.php?r=remove&id=<?php echo $p->id ?>" title="">
					Remove
				</a>
				<a href="index.php?r=update-post&id=<?php echo $p->id ?>" title="">
					Update
				</a>
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>