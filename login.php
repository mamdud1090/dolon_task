<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<link rel="stylesheet" type="text/css" href="style.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Login Page</title>
</head>
<body>

	<div class="container loginPanel">

			
		<div class="loginBox">

			<form method="post" action="validation.php" >
				<div class="form-group">
					<h2>Login Here</h2>
					<label>User Name: </label>
					<input type="text" name="user_name" class="form-control" required>
				</div>

				<div class="form-group">
					<label>Password: </label>
					<input type="password" name="user_password" class="form-control" required>
				</div>

				<button type="submit" name="submit" class="btn btn-primary">Login</button>

			</form>
		</div>
	</div>

</body>
</html>