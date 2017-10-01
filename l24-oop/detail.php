<?php 
require_once 'models/Post.php';
$id = $_GET['id'];

$post = Post::find($id);

 ?>
 <div style="background-color: aqua">
 	<h1><?php echo $post->title ?></h1>
 	<p><?php echo $post->content ?></p>
 	<strong><?php echo $post->getAuthorName(); ?></strong>
 	<div>
 		<a href="update.php?id=<?php echo $post->id ?>" title="">update</a>
 	</div>
 </div>