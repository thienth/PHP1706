<h2>Homepage here!!!!</h2>
<table>
	<thead>
		<tr>
			<th>Id</th>
			<th>name</th>
			<th>img</th>
			<th>price</th>
			<th>
				<a href="index.php?r=add-post" title="">Add new</a>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $p): ?>
		<tr>
			<td><?php echo $p->id ?></td>
			<td><?php echo $p->name ?></td>
			<td>
				<img src="<?php echo $p->image ?>" width="200">
			</td>
			<td><?php echo $p->price ?></td>
			
			<td>
				<a href="index.php?r=remove&id=<?php echo $p->id ?>" title="">
					Remove
				</a>
				<a href="index.php?r=update-post&id=<?php echo $p->id ?>" title="">
					Update
				</a>
			</td>
			<td>
				<a href="index.php?r=remove&id=<?php echo $p->id ?>" title="">
					edit
				</a>
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>