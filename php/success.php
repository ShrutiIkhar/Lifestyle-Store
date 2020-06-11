<?php
	include '../Includes/common.php';
	if(!isset($_SESSION['email']))
	{
		header('header:index.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Lifestyle Store</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
		<meta name="viewport" content="width=device-width initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/boot.css">
		<style>
			.jumbotron{margin-top:8%;}
		</style>
	</head>
	
	<body>
		<?php
			include '../Includes/header.php';
			$item_id = $_GET['id'];
			$user_id = $_SESSION['id'];
			$query = "update user_products_backup set status='Confirmed' where user_id=$user_id";
			echo $query;
			$run = mysqli_query($con, $query) or die(mysqli_error($con));
		?>
		
		<div class="container">
			<div class="jumbotron">
				<h3>Order Details</h3>
				<p>Your order is confirmed successfully.</p>
				<p>Thank You for shopping with us.</p>
				<a href="products.php"><button class="btn btn-primary"> Shop More</button></a>
			</div>
		</div>
	</body>
</html>
