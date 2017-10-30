<table>
	<thead>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>img</th>
			<th>price</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $p): ?>
		<tr>
			<td><?php echo $p->id ?></td>
			<td><?php echo $p->name ?></td>
			<td>
				<img src="<?php echo $p->image ?>" alt="">
			</td>
			<td><?php echo $p->price ?></td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>