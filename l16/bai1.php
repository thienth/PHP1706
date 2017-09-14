<?php 
$str = $_GET['ipValue'];
$str2 = str_replace(" ", "", $str);
// var_dump($str2);die;
echo "So luong khoang trang:" . (strlen($str)-strlen($str2));

 ?>
 <a href="index.php" title="">Back</a>