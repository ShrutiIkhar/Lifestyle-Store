<?php
	require '../Includes/common.php';
	if(isset($_SESSION['email']))
	{
		header('location:index.php');
	}
	if(isset($_POST['login']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$email = mysqli_real_escape_string($con, $email);
		$password = md5(mysqli_real_escape_string($con, $password));
		$query = "select id, email from users where email = '$email' and password = '$password'";
		$result = mysqli_query($con, $query) or die(mysqli_error($con));
		$rows = mysqli_num_rows($result);
		if($rows==0)
		{
			echo "Incorrect Details";
		}
		else
			{
				$row = mysqli_fetch_array($result);
				$_SESSION['email'] = $email;
				$_SESSION['id'] = $row['id'];
				header('location:products.php');
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
			.phead{
				padding-top:80px;
				margin-top:2%;
			}
			.row-style{margin-top:20px;}
			footer{margin-top:35%;}
			.text{text-align:center;
			}
		</style>
	</head>
	
	<body>
		<?php include '../Includes/header.php'; ?>
		<div class="container phead">
			<div class="row row-style ">
				<div class="col-xs-5  col-xs-offset-3 input-lg">
					<div class="panel panel-primary">
						<div class="panel-heading text">
							<h3>LOGIN</h3>				
						</div>
						<div class="panel-body">
							<form method="POST" action="">
								<p class="text-warning">Login to make a purchase</p>
								<div class="form-group">	
									<input type="text" class="form-control" name="email" placeholder="Email">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="password" placeholder="Password">
								</div>	
								<input type="submit" value="Login" name="login" class="text btn btn-primary">
							</form>
						</div>
						<div class="panel-footer">Don't have an account? <a href="signup.php">Register</a></div>
					</div>
				</div>
			</div>
		</div>
		<?php include '../Includes/footer.php'; ?>
	</body>
</html>
