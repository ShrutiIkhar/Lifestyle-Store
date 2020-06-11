<?php
	include '../Includes/common.php';
	if(isset($_SESSION['email']))
	{
		header('location:products.php');
	}
	
	if(isset($_POST['submit']))	
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$contact = $_POST['contact'];
		$city = $_POST['city'];
		$address = $_POST['address'];
		$fetch = "select id from users where email='$email'";
		$execute = mysqli_query($con,$fetch);
		$rows = mysqli_num_rows($execute);
		if($rows>0)
			echo "email id already exists";
		else
		{
			if(!empty($name) && !empty($email) && !empty($password) && !empty($contact) && !empty($city) && !empty($address))
			{
				$query = "insert into users(name, email, password, contact, city, address) values ('$name' ,'$email' ,'$password' ,'$contact' ,'$city', '$address')";
				$run = mysqli_query($con, $query) or die(mysqli_error($con));
				$_SESSION['email'] = $email;
				$_SESSION['id'] = mysqli_insert_id($con);
				header('location:products.php');
			}
		}
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
			.contain{
				padding-top:3%;
			}
			footer{
				margin-top:17%;
			}
		</style>
	</head>
	
	<body>
		<?php
			include '../Includes/header.php';
		?>
		<div class="container contain">
			<div class="row">
				<div class="col-xs-4 col-xs-offset-4">
					<h1>SIGN UP</h1>
					<form method="POST" action="">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="name" name="name" required="true">
						</div>
						<div class="form-group">
							<input id="email" type="email" class="form-control" placeholder="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,}$">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="password" name="password" required="true" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
						</div>
						<div class="form-group">
							<input type="text" class="form-control"  placeholder="contact" name="contact" required="true"  pattern="(7|8|9)\d{9}">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="city" name="city" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="address" name="address" required>
						</div>
						<input type="submit" value="Submit" name="submit" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>
		<?php
			include '../Includes/footer.php';
		?>
	</body>
</html>
