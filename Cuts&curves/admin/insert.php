<?php
	$cnn=mysqli_connect("localhost","root","","cuts_curve");
	$name=$_POST['txtName'];
	$fname=$_POST['txtFname'];
	$dob= date_format(date_create($_POST['txtDob']),"y-m-d");
	$class=$_POST['txtClass'];
	$area=$_POST['txtArea'];
	$contact=$_POST['txtContact'];
	$email_id=$_POST['txtEmail'];
	$filename=$_FILES['fileImage']['tmp_name'];
	$destination="../member/images/$email_id.jpg";
	move_uploaded_file($filename,$destination);

	$sql="INSERT into member(name,fname,dob,class,area,contact,email_id,password)VALUES('$name','$fname','$dob','$class','$area','$contact','$email_id','1234567')";

	if(mysqli_query($cnn,$sql))
	header('location:showallmember.php');
?>