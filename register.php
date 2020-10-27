<!DOCTYPE html>
<html>
<head>
	<title>REGISTER PAGE</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
	<div class="register-form">
		<form action="register_user.php" method="POST">
			<div class="form-header">
				<h2>Register</h2>
				<p>Fill this form and create your account</p>
			</div>
				
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" placeholder="example: ABC" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="user_password" class="form-control" placeholder="Enter Password" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label>Email Address</label>
					<input type="email" name="user_email" class="form-control" placeholder="Enter your email here" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label>Gender</label>
					<select class="form-control" name="user_gender" required>
						<option disabled="">Select your gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						<option value="Others">Others</option>
					</select>
				</div>
				<div class="form-group">
					<label class="checkbox-inline">
						<input type="checkbox" required> I accept the <a href="#">Terms of Use</a>&amp;<a href="#">Privacy Policy</a>
					</label>
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-lg" name="signup">Register</button>
				</div>
				<?php 
					include("register_user.php");
				?>
		</form>
		<div class="text-center small" style="color:black;">
			Already have account!!! <a href="login.php">Log In here</a>
		</div>
	</div>
</body>
</html>