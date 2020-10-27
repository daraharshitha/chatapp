<?php
session_start();
include("includes/connection.php");
if(isset($_POST["signin"]))
{
	$email=$_POST["email"];
	$pswd=$_POST["password"];
	$sql="SELECT * from users where user_email='$email' AND user_password='$pswd'";
	$query=mysqli_query($con,$sql);
	$check_user=mysqli_num_rows($query);
	if($check_user==1){
		$_SESSION['user_email']=$email;
		$update_msg=mysqli_query($con,"UPDATE users SET log_in='Online' WHERE user_email='$email'");
		$user=$_SESSION['user_email'];
		$get_user="SELECT * from users WHERE user_email='$email'";
		$run_user=mysqli_query($con,$get_user);
		$row=mysqli_fetch_array($run_user);
		$username=$row["username"];
		echo "<script>window.open('home.php?username=$username','_self');</script>";
	}
	else{
		echo "<div class='alert alert-danger'>
				<strong>Check your Email and Password</strong>
		</div>";
	}
}
?>