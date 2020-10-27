<?php
include("includes/connection.php");
	if(isset($_POST['signup']))
	{
		$name=$_POST['username'];
		$pswd=$_POST['user_password'];
		$email=$_POST['user_email'];
		$gender=$_POST['user_gender'];
		$rand=rand(1,2);
		if($name==""){
			echo "<script>alert('Please enter your username.....');</script>";
		}
		if(strlen($pswd)<8){
			echo "<script>alert('Password should have minimum 8 characters');</script>";
		}
		$checkEmail="SELECT * from users WHERE user_email='$email'";
		$run_email=mysqli_query($con,$checkEmail);
		$check=mysqli_num_rows($run_email);
		if($check==1){
			echo "<script>alert('Email already exists, try with another email!');</script>";
			echo "<script>window.open('register.php','_self');</script>";
			exit();
		}
		if($rand==1)
			$profile_pic="images/download.jpg";
		else if($rand==2)
			$profile_pic="images/images.jpg";
		$insert="INSERT into users(username,user_password,user_email,user_profile,user_gender) values('$name','$pswd','$email',
		'$profile_pic','$gender')";
		//$query=mysqli_query($con,$insert);
		if(!mysqli_query($con,$insert))
			{
			  echo "error in adding data : ".mysqli_error($con);
			}
		else{

			echo "<script>alert('Congrats $name, your account has been created successfully!!!!');</script>";
			echo "<script>window.open('login.php','_self');</script>";
		}
		/*else{
			echo "<script>alert('Registration failed,try again!!!');</script>";
			echo "<script>window.open('register.php');</script>";
		}*/
	}

?>