<?php
	include '../Includes/common.php';
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
			.jumbotron{ margin-top:8%;}
		</style>
	</head>
	
	<body>
		<?php
			include '../Includes/header.php';
			include '../Includes/check_if_added.php';
			//echo "<h1>".$_SESSION['id']."</h1>";
		?>
		<div class="container">
			<div class="jumbotron">
				<h1>Welcome to our Lifestyle Store!</h1>
				<p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
			</div>
			
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="../img/c1.jpeg" alt="Responsive image">
						<div class="caption">
							<h3>Nikon DSLR</h3>
							<p>Price: Rs.36000.00</p>
							<?php
								if (!isset($_SESSION['email']))
								{?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php
								} 
								else 
								{
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(1)) 
											{ //This is same as if(check_if_added_to_cart !=0)
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											} 
											else 
											{
												
									?>
												<a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
												<?php
											}
								}
												?>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="../img/c2.jpeg" alt="Responsive image">
						<div class="caption">
							<h3>Canon DSLR</h3>
							<p>Price: Rs.40000.00</p>
							<?php
								if (!isset($_SESSION['email']))
								{?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php
								} 
								else 
								{
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(2)) 
											{ //This is same as if(check_if_added_to_cart !=0)
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											} 
											else 
											{
												
									?>
												<a href="cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
												<?php
											}
								}
												?>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="../img/c3.jpeg" alt="Responsive image">
						<div class="caption">
							<h3>Canon DSLR</h3>
							<p>Price: Rs.50000.00</p>
							<?php
								if (!isset($_SESSION['email']))
								{?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php
								} 
								else 
								{
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(3)) 
											{ //This is same as if(check_if_added_to_cart !=0)
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											} 
											else 
											{
												
									?>
												<a href="cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
												<?php
											}
								}
												?>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="../img/c4.jpeg" alt="Responsive image">
						<div class="caption">
							<h3>Canon DSLR</h3>
							<p>Price: Rs.60000.00</p>
							<?php
								if (!isset($_SESSION['email']))
								{?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php
								} 
								else 
								{
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(4)) 
											{ //This is same as if(check_if_added_to_cart !=0)
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											} 
											else 
											{
												
									?>
												<a href="cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
												<?php
											}
								}
												?>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="../img/s1.jpeg" alt="Responsive image">
						<div class="caption">
							<h3>H&W</h3>
							<p>Price: Rs.800.00</p>
							<?php
								if (!isset($_SESSION['email']))
								{?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php
								} 
								else 
								{
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(5)) 
											{ //This is same as if(check_if_added_to_cart !=0)
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											} 
											else 
											{
												
									?>
												<a href="cart_add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
												<?php
											}
								}
												?>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="../img/s2.jpeg" alt="Responsive image">
						<div class="caption">
							<h3>Luis Phil</h3>
							<p>Price: Rs.1000.00</p>
							<?php
								if (!isset($_SESSION['email']))
								{?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php
								} 
								else 
								{
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(6)) 
											{ //This is same as if(check_if_added_to_cart !=0)
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											} 
											else 
											{
												
									?>
												<a href="cart_add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
												<?php
											}
								}
												?>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="../img/s3.jpeg" alt="Responsive image">
						<div class="caption">
							<h3>John Zok</h3>
							<p>Price: Rs.1500.00</p>
							<?php
								if (!isset($_SESSION['email']))
								{?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php
								} 
								else 
								{
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(7)) 
											{ //This is same as if(check_if_added_to_cart !=0)
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											} 
											else 
											{
												
									?>
												<a href="cart_add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
												<?php
											}
								}
												?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="../img/s4.jpeg" alt="Responsive image">
						<div class="caption">
							<h3>Jhalsani</h3>
							<p>Price: Rs.1300.00</p>
							<?php
								if (!isset($_SESSION['email']))
								{?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php
								} 
								else 
								{
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(8)) 
											{ //This is same as if(check_if_added_to_cart !=0)
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											} 
											else 
											{
												
									?>
												<a href="cart_add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
												<?php
											}
								}
												?>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="../img/w1.jpeg" alt="Responsive image">
						<div class="caption">
							<h3>Titan Model #301</h3>
							<p>Price: Rs.13000.00</p>
							<?php
								if (!isset($_SESSION['email']))
								{?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php
								} 
								else 
								{
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(9)) 
											{ //This is same as if(check_if_added_to_cart !=0)
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											} 
											else 
											{
												
									?>
												<a href="cart_add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
												<?php
											}
								}
												?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="../img/w2.jpeg" alt="Responsive image">
						<div class="caption">
							<h3>Titan Model #201</h3>
							<p>Price: Rs.3000.00</p>
							<?php
								if (!isset($_SESSION['email']))
								{?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php
								} 
								else 
								{
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(10)) 
											{ //This is same as if(check_if_added_to_cart !=0)
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											} 
											else 
											{
												
									?>
												<a href="cart_add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
												<?php
											}
								}
												?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="../img/w3.jpeg" alt="Responsive image">
						<div class="caption">
							<h3>HMT Milan</h3>
							<p>Price: Rs.8000.00</p>
							<?php
								if (!isset($_SESSION['email']))
								{?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php
								} 
								else 
								{
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(11)) 
											{ //This is same as if(check_if_added_to_cart !=0)
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											} 
											else 
											{
												
									?>
												<a href="cart_add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
												<?php
											}
								}
												?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="../img/w4.jpeg" alt="Responsive image">
						<div class="caption">
							<h3>Faber Luba#111</h3>
							<p>Price: Rs.18000.00</p>
							<?php
								if (!isset($_SESSION['email']))
								{?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php
								} 
								else 
								{
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(12)) 
											{ //This is same as if(check_if_added_to_cart !=0)
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											} 
											else 
											{
												
									?>
												<a href="cart_add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
												<?php
											}
								}
												?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br/>
		<?php
			include '../Includes/footer.php';
		?>
	</body>
</html>
