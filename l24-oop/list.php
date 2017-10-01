<?php 
require_once 'models/User.php';
require_once 'models/Post.php';
$listPost = Post::all();
 ?>
 <table>
 	<thead>
 		<tr>
 			<th>ID</th>
 			<th>Title</th>
 			<th>Content</th>
 			<th>Author</th>
 			<th>
 				<a href="add-post.php" title="">Add new</a>
 			</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php 
 		foreach ($listPost as $p) {
 			?>
			<tr>
	 			<td>
	 				<?= $p->id?>
	 			</td>
	 			<td>
	 				<a href="detail.php?id=<?= $p->id?>">
	 					<?= $p->title?>
	 				</a>
	 			</td>
	 			<td>
	 				<?= $p->content?>
	 			</td>
	 			<td>
	 				<?= $p->getAuthorName()?>
	 			</td>
	 			<td>
	 				<a href="update.php?id=<?php echo $p->id ?>" title="">Update</a>
	 				<a href="remove-post.php?id=<?php echo $p->id ?>" title="">Remove</a>
	 			</td>
	 		</tr>
 			<?php
 		}

 		 ?>
 		
 	</tbody>
 </table>