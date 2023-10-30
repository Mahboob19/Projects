<?php
	$cnn=mysqli_connect("localhost","root","","cuts_curve");
	$name=$_POST['txtName'];
	$email_id=$_POST['txtEmail'];
	$subject=$_POST['txtSubject'];
	$contact=$_POST['txtMob'];
	$message=$_POST['txtMessage'];

	$sql="INSERT into contactus(name,email_id,subject,contact,message)VALUES('$name','$email_id','$subject','$contact','$message')";
	if(mysqli_query($cnn,$sql))
	{
		echo "<script>alert('Thankyou for interseted in Cuts & Curve Dance Academy')</script>";
		echo "<script>location.href='index.php'</script>";
	}
?>