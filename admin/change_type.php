<?php
session_start();
include('../conn.php');
if(!isset($_SESSION['admin'])){
	header('Location: index.php');	
	exit;
}

$sql = 'UPDATE user set type = '.$_POST['InputType'].' WHERE id = '.$_POST['id'];
mysqli_query($con,$sql);
header('Location: index.php?message=2');

?>