<?php 
	session_start();
	include("includes/connection.php");
		$email = $_SESSION['email'];
		$_SESSION['password'] = $_SESSION['password'];
		$_SESSION['c_password'] =$_SESSION['c_password'];
		$password = $_SESSION['password'];
		$c_password = $_SESSION['c_password'];
		$f_name = htmlentities($_POST['full_name']);
		$u_birthday = htmlentities($_POST['birthday']);
		$u_gender = htmlentities($_POST['gen']);
		$u_country = htmlentities($_POST['cnt']);
		$u_state = htmlentities($_POST['state']);
		$u_city = htmlentities($_POST['city']);
		$question = htmlentities($_POST['ques']);
		$answer = htmlentities($_POST['ans']);
		$status = "verified";
		$posts = "no";
		$newgid = sprintf('%05d', rand(0, 999999));
		$username = strtolower($f_name . "_" . $newgid);
		$check_username_query = "select user_name from users where user_email='$email'";
		$run_username = mysqli_query($con,$check_username_query);

		$rand = rand(1, 3); 
		if($rand == 1)
			$profile_pic = "head_red.png";
		else if($rand == 2)
			$profile_pic = "head_sun_flower.png";
		else if($rand == 3)
			$profile_pic = "head_turqoise.png";
	$insert = "insert into users (fullname,user_name,describe_user,Relationship,user_pass,confirm_pass,user_email,user_country,user_state,user_city,user_gender,user_birthday,user_image,user_cover,user_reg_date,status,posts,sec_que,sec_ans) values ('$f_name','$username','This is my default status.','........','$password','$c_password','$email','$u_country','$u_state','$u_city','$u_gender','$u_birthday','$profile_pic','default_cover.jpg',NOW(),'$status','$posts','$question','$answer')";
		$run = mysqli_query($con,$insert); 
		
		if($run){
		echo "<script>alert('Congratulations $f_name, your account has been created successfully.')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		}
?>