<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="login-form">
		<form action="login_user.php" method="POST">
			<div class="form-header">
				<h2>Log In</h2>
				<p>Login to my chat</p>
			</div>
				
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" class="form-control" placeholder="Enter your email here" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" placeholder="Enter Password" autocomplete="off" required>
				</div>
				<div class="small">
					Forgot Password? <a href="ForgotPassword.php">Click Here</a>
				</div>
				<br>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-lg" name="signin">Log In</button>
				</div>
				
		</form>
		<div class="text-center small" style="color:black;">
			Don't have an account? <a href="register.php">Register here</a>
		</div>
		</div>
</body>
</html>