<script src="bootstrap/js/sweetalert.min.js"></script>
<?php 
session_start();
include("includes/connection.php"); 
	if(isset($_POST['login'])){
	$email = strip_tags(mysqli_real_escape_string($con,$_POST['email']));
	$pass = strip_tags(mysqli_real_escape_string($con,$_POST['pass']));
	$select_user = "select * from users where user_email='$email' AND status='verified'";
	$query = mysqli_query($con,$select_user); 
	if(mysqli_num_rows($query)>0){
		while($row = mysqli_fetch_array($query))
		{  
		if(password_verify($pass,$row["user_pass"])){
		$check_user = mysqli_num_rows($query);
	
		if($check_user==1){
		
		$_SESSION['user_email']=$email;
		
		echo "<script>window.open('home.php','_self')</script>";
		
		}
			
		}	 
		else  
                     {   
                          echo '<script>alert("Wrong Email_id or Password")</script>';  
                          echo "<script>window.open('index.php','_self')</script>";
                     }  
                }  
           }  
           else  
           {  ?>
           		<script>
           			swal({
						  title: "Good job!",
						  text: "You clicked the button!",
						  icon: "success",
						});
           		</script>
           		<?php
                echo '<script>alert("Wrong User Details!!!!")</script>';  
                echo "<script>window.open('index.php','_self')</script>";
           }  
}  
?>