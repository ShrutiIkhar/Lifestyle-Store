<?php
	include '../Includes/common.php';
	if(!isset($_SESSION['email']))
	{
		header('location:index.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
		<meta name="viewport" content="width=device-width initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/boot.css">
		<style>
			.table{margin-top:10%;}
			.column{margin-top:5%;}
			.foot{margin-top:31%}
		</style>
	</head>
	<body>
		<?php
			include '../Includes/header.php';
			$user_id = $_SESSION['id'];
			$query = "select products.id, name, price from products inner join user_products_backup on products.id = user_products_backup.item_id where user_products_backup.user_id=$user_id and status='Added to cart'";
			$run = mysqli_query($con, $query);
			//echo $query;
			$num = mysqli_num_rows($run);
			
		?>
		<div class="container">
			<div class="col-xs-6 col-xs-offset-2 column">
			<table class="table  table-striped">
				<tbody>
					<tr>
						<th>Item Number</th>
						<th>Item Name</th>
						<th>Price</th>
						<th></th>
					</tr>
					<tr>
					<?php
						if($num == 0)
							echo "Add items to the cart first!";
						else
						{
							$sum = 0;
							$count = 0;
							while($row = mysqli_fetch_array($run))
							{
								$sum += $row['price'];
								$count++;
								
								
					?>
								<tr>
								<td><?php echo $count; ?></td>
								<td><?php echo $row['name'] ?></td>
								<td><?php echo $row['price'] ?></td>
								<td><a href="cart_remove.php?id=<?php echo $row['id']; ?>" class="remove_item_link"> Remove</a></td>
								</tr>
					<?php			
								
							}
						}
					?>
						
					</tr>
					<tr>
						<td></td>
						<td>Total</td>
						<td>Rs.<?php 
							if(isset($sum))
								echo $sum;
							else
								echo '0';	
						?>/-
						</td>
						
						<td>
							<?php
								if($num)
								{
							?>
									<a href="success.php?id=<?php echo $user_id; ?>"><button class="btn btn-primary">Confirm Order</button></a>
							<?php
								}
								else
								{
							?>
									<a href="success.php?id=<?php echo $user_id; ?>"><button class="btn btn-primary" disabled>Confirm Order</button></a>
							<?php
								}
							?>	
						</td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
		<?php
			include '../Includes/footer.php';
		?>
	</body>
</html>
