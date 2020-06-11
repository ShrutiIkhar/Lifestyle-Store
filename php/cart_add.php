<?php
	include '../Includes/common.php';
	$item_id = $_GET['id'];
	$user_id = $_SESSION['id'];
	$query = "Insert into user_products_backup(user_id, item_id, status) values($user_id, $item_id, 'Added to cart')";
	//echo $query;
	$run = mysqli_query($con, $query) or die(mysqli_error($con));
	header('location:products.php');
?>
