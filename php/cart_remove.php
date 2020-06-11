<?php
	include '../Includes/common.php';
	$item_id = $_GET['id'];
	$user_id = $_SESSION['id'];
	$query = "delete from user_products_backup where user_id = $user_id and item_id = $item_id";
	$run = mysqli_query($con, $query) or die(mysqli_error($con));
	header('location:cart.php');
?>																					
