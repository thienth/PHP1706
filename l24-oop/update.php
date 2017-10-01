<?php 
require_once 'models/Post.php';
require_once 'models/User.php';
$id = $_GET['id'];

$post = Post::find($id);
if(!$post){
	echo "<h1>Bài viết không tồn tại</h1>";
	die;
}
$users = User::all();

 ?>

 <form action="save-update-post.php" method="post">
 	<input type="hidden" name="id" value="<?php echo $post->id ?>">
	<div>
		title <input type="text" name="title" value="<?php echo $post->title ?>" placeholder=""> 		
 	</div> 	
	<div>
		content <input type="text" name="content" value="<?php echo $post->content ?>" placeholder=""> 		
 	</div> 	
	<div>
		Author 
		<select name="created_by">
			<?php foreach ($users as $u): ?>
				<option 
					<?php if ($u->id == $post->created_by): ?>
						selected
					<?php endif ?>
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