<?php 
require_once 'models/User.php';

$users = User::all();

 ?>

 <form action="save-add-post.php" method="post">
	<div>
		title <input type="text" name="title" value="" placeholder=""> 		
 	</div> 	
	<div>
		content <input type="text" name="content" value="" placeholder=""> 		
 	</div> 	
	<div>
		Author 
		<select name="created_by">
			<?php foreach ($users as $u): ?>
				<option 
					value="<?php echo $u->id ?>">
					<?php echo $u->name ?>
				</option>
			<?php endforeach ?>
		</select>
 	</div> 	
 	<div>
 		<button type="submit">Submit</button>
 	</div>
 </form>