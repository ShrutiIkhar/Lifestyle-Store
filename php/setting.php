<?php
	include '../Includes/common.php';
	if(!isset($_SESSION['email']))
	{
		header('location:index.php');
	}
	$user_id = $_SESSION['id'];
	if(isset($_POST['change']))
	{
		$password = md5($_POST['password']);
		$newpassword = md5($_POST['newpassword']);
		$rewritepassword = md5($_POST['rewritepassword']);
		if(!isset($_SESSION['email']))
		{
			header('location:index.php');
		}
		
		$user_id = $_SESSION['id'];
		$query = "select password from users where id = '$user_id'";
		$run = mysqli_query($con, $query) or die(mysqli_error($con));
		//echo $query;
		if($newpassword == $rewritepassword)
		{
			$update = "update users set password = '$newpassword' where id = '$user_id'";
			$exe =mysqli_query($con, $update) or die(mysqli_error($con));
			$msg = "Password has been changed ";
		}
		else
		{
			$msg = "New password and Re-write new password must be matched";
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
			.foot{margin-top:26%;}
			.row{margin-top:5%}
		</style>
	</head>
	
	<body>
		<?php
			include '../Includes/header.php';
		?>
		
		<div class="container">
			<div class="row">
				<div class="col-xs-4 col-xs-offset-3">
					<h3>Change Password</h3>
					<form action="" method="POST">
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Old Password" name="password">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="newpassword" placeholder="New Password"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="rewritepassword" placeholder="Re-write New Password">
						</div>
						<?php
							if(isset($msg))
							{
						?>
								<p class ="bg-success"><?php echo $msg; ?></p>
						<?php	
							}
						?>
						<input type="submit" value="Change" name="change" class="btn btn-primary">
						
					</form>
				</div>
			</div>
		</div>
		<?php
			include '../Includes/footer.php';
		?>
	</body>
</html>
