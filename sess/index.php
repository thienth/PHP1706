<?php 
session_start();
$name = 'thienth';
$_SESSION['AUTH'] = $name;
echo $_SESSION['AUTH'];


 ?>