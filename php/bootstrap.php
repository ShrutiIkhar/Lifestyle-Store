<!DOCTYPE html>
<html>
	<head>
		<title>Bootstrap</title>
		<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
		</script>
		
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
		</script>
		
		<meta name="viewport" content="width=device-width initial-scale=1">
		
		
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-4">
					<h1>Styling Form</h1>
					<form>
						<label for="firstname">First Name:</label>
						<div class="form-group">
							<input type="text"  class="form-control">
						</div>
						<div class="form-group">
							Last Name:<input type="text" class="form-control" name="last" placeholder="Last Name">
						</div>
						
						<div class="radio">
							Gender	
							<label>
								<input type="radio" name="male">Male
							</label>
							<label>
								<input type="radio" name="female">Female
							</label>
							<label>
								<input type="radio" name="other">Other
							</label>
						</div>
						
						<div class="checkbox">
							I want to order:
							<label>
								<input type="checkbox" name="coffee">Coffee
							</label>
							<label>
								<input type="checkbox" name="cake">Cake
							</label>
						</div>
						
						<div class="form-group">
							Quantity
							<select class="form-control">
								<option>1</option>
								<option>2</option>
								<option>3</option>
							</select>
						</div>
						<div>
							<input type="button" name="button" value="Submit" class="btn btn-primary btn-block">
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</body>
</html>
