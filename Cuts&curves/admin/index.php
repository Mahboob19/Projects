 <?php
  		 session_start();
   
   $cnn = mysqli_connect("localhost","root","","cuts_curve");
   
   if(!isset($_SESSION['admin']) && !isset($_POST['login']))
   	header('location:login.php');   
   else
   {    
	 if(isset($_POST['login']))
     {
	   $_SESSION['email_id'] = $_POST['email_id'];
	   $_SESSION['password'] = $_POST['password'];
	   
	   
	   $email_id = $_SESSION['email_id'];
	   $password = $_SESSION['password'];
	   
	   $sql = "SELECT * from admin WHERE email_id = '$email_id' AND password = '$password'" ;
	   
	   $rec = mysqli_query($cnn,$sql);
	   $num_of_rows = mysqli_num_rows($rec);
	   

	   if(!$num_of_rows)
	   {
	   	 echo"<script>alert('Invalid Administrator!!!'); </script>";
	   	 echo "<script>location.href='login.php';</script>";
	   }	

	   else
	   {
	   	  $row = mysqli_fetch_assoc($rec);
	   	  $_SESSION['admin']= $row['name'];	
	   	  $_SESSION['photo'] = $row['email_id'];   	  
	   }
	 } 
   }             
?>
<!DOCTYPE html>
<html>
<head>
	<title>::Admin Zone::</title>
	<?php include('admin_zone.php'); ?>
	<div class="col-md-10" style="padding-top:150px;padding-left:380px;">		
	 <img src="images\<?php echo $_SESSION['photo'];?>.jpg" style="width:200px;height:200px;">
	</div>
  </div>		   
</div>
</body>
</html>