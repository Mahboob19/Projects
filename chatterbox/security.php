<!DOCTYPE html>
<?php
session_start();
include("includes/connection.php");
include("functions/functions.php");
?>
<?php 

if(!isset($_SESSION['user_email'])){
	
	header("location: index.php");

}else{ 
?>
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
	<div>
		<?php 
		$user = $_SESSION['user_email'];
		$get_user = "select * from users where user_email='$user'"; 
		$run_user = mysqli_query($con,$get_user);
		$row=mysqli_fetch_array($run_user);
					
		$user_id = $row['user_id'];
		$user_name = $row['user_name'];
		$sec_que = $row['sec_que'];
		?>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="well">
				<center><h1 style="color: white;"><strong>ChatterBox</strong></h1></center>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="main-content">
		        <div class="header">
				<h3 style="text-align: center;"><strong>Verifying User </strong></h3>
				<strong style="color:#187FAB; "><i><?php echo $user_name; ?></i></strong>
				<hr>
		        </div>
		        <div class="l-part">
		          <form  action="" method="post">
		          	<div class="input-group">
					    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					    <input id="text" type="text" class="form-control" value="<?php echo $sec_que; ?>">
					</div><br>
					<div class="input-group">
					    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					    <input id="password" type="text" class="form-control" name="ans" placeholder="Enter security answer" required="required">
					</div><br>
		            <center><button id="signup" class="btn btn-info btn-lg" name="s_change">Change Password</button></center>
		          </form>
		        </div>
	      </div>
		</div>
	</div>
</body>
</html>
<?php
if(isset($_POST['s_change'])){

	$sec_ans = htmlentities(mysqli_real_escape_string($con,$_POST['ans']));
	$select_user = "select * from users where sec_ans='$sec_ans'";

	$query = mysqli_query($con,$select_user);

	$check_user = mysqli_num_rows($query);

	if($check_user==1){

	$_SESSION['sec_ans']=$sec_ans;

	echo "<script>window.open('change_password.php','_self')</script>";

	}
	else {
	echo "<script>alert('Your Email or your Bestfriend name is Incorrect')</script>";
	echo "<script>window.open('security.php','_self')</script>";
	}

	}
}
?>