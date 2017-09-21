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
	 				<?= $p->title?>
	 			</td>
	 			<td>
	 				<?= $p->content?>
	 			</td>
	 			<td>
	 				<?= $p->getAuthorName()?>
	 			</td>
	 		</tr>
 			<?php
 		}

 		 ?>
 		
 	</tbody>
 </table>