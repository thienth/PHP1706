<table>
	<thead>
		<tr>
			<th>id</th>
			<th>title</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($posts as $p): ?>
		<tr>
			<td><?php echo $p->id ?></td>
			<td><?php echo $p->title ?></td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>