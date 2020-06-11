<?php
	require '../Includes/common.php';
	if (isset($_SESSION['email'])) {
		header('location: products.php');
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
	</head>
	
	<body>
		<?php
			include '../Includes/header.php';
		?>
		
		<div id="banner-image">
			<div class="container">
				<div class="banner-content">
					<h1>We Sell Lifestyle</h1>
					<p>Flat 40% OFF on premium brands</p>
					<a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
				</div>
			</div>
		</div>
		<?php
			include '../Includes/footer.php';
		?>	
	</body>
</html>
