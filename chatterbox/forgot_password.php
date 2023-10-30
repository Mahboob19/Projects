<!DOCTYPE html>
<html>
<head>
	<title>Forgotten Password</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="jquery.js"></script>
</head>
<style>
  body{
    overflow-x: hidden;
  }
  .main-content {
    width: 50%;
    height: 40%;
    margin: 10px auto;
    background-color: #fff;
    border: 2px solid #e6e6e6;
    padding: 40px 50px;
  }
  .header {
    border: 0px solid #000;
    margin-bottom: 5px;
  }
  .well{
    background:rgba(0,0,0,0.5);
    font-weight: 800;
    font-size: 35px;
	font-family:Edwardian Script ITC;
	color: white;
    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px lightblue;
  }
  #signup{
    width: 60%;
    border-radius: 30px;
  }
</style>
<body background="images/12.jpg">
	<div class="row">
		<div class="col-sm-12">
			<div class="well">
				<center><h1><strong>Chatterbox</strong></h1></center>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="main-content">
		        <div class="header">
		          <h3 style="text-align: center;"><strong>Forgot Password.</strong></h3><hr>
		        </div>
		        <div class="l-part">
		          <form  action="" method="post">
		          	<h4>Please enter your registered email address to search for your account.</h4>
		          	<br> 
		          	<div class="input-group">
								    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								    <input id="email" type="text" class="form-control" name="email" placeholder="eg@gmail.com" required="required" autocomplete="off">
								</div><br>
								<hr>
					<a style="text-decoration:none; float: right;color:black;" title="Signin"  href="index.php">Back to Login?</a><br><br>
		            <center><button id="signup" class="btn btn-info btn-lg" name="submit">Search</button></center>
		          </form>
		        </div>
	      </div>
		</div>
	</div>
</body>
</html>
<?php
session_start();

include("includes/connection.php");



	if(isset($_POST['submit'])){

	$email = htmlentities(mysqli_real_escape_string($con,$_POST['email']));
	$select_user = "select * from users where user_email='$email'";

	$query = mysqli_query($con,$select_user);

	$check_user = mysqli_num_rows($query);

	if($check_user==1){

	$_SESSION['user_email']=$email;

	echo "<script>window.open('security.php','_self')</script>";

	}
	else {
	echo "<script>alert('Your Email or your Bestfriend name is Incorrect')</script>";
	echo "<script>window.open('forgot_password.php','_self')</script>";
	}

	}


?>
