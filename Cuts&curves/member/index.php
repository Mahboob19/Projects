<?php
	session_start();
	if (!isset($_SESSION['member']) && !isset($_POST['login']))
		header('location:../index.php');
	else
	{
		if (isset($_POST['login'])) 
		{
			$cnn = mysqli_connect("localhost","root","","cuts_curve");
			$user_id = $_POST['email_id'];
			$email_id = $_POST['email_id'];
			$password = $_POST['password'];
			$sql="SELECT * from member WHERE email_id='$email_id'OR id='$user_id'AND password='$password'";
			$rec = mysqli_query($cnn,$sql);
			$num_of_row = mysqli_num_rows($rec);
			if(!$num_of_row)
			{
				echo "<script>alert('Invalid User!!!');</script>";
				echo "<script>location.href='index.php;</script>'";
			}
			else
			{
				$row = mysqli_fetch_assoc($rec);
				$_SESSION['member']=$row['name'];
				$photo=$row['email_id'];
			}
		}
	} 
?>
<!DOCTYPE html>
<html>
<head>
  <title>::Member Zone::</title>
<?php include('member_zone.php');?>
 <div class="col-md-10" style="padding-top:50px;">
 <div class="row">
 	<?php $sql="SELECT * from member WHERE email_id='$email_id'OR id='$user_id'AND password='$password'";
 	$rec=mysqli_query($cnn,$sql);
 	$row=mysqli_fetch_assoc($rec);
 	?>
 	<div class="col-md-8 offset-md-1">
 		<table class="table table-striped" border="0">
 			<tr>
 				<td rowspan="9">
 					<img src="images\<?php echo $photo;?>.jpg">
 				</td>
 				<th>ID : </th>
 				<td><?php echo $row['id'];?></td>
 			</tr>
 			<tr>
 				<th>Name : </th>
 				<td><?php echo $row['name'];?></td>
  			</tr>
  			<tr>
 				<th>Father's Name : </th>
 				<td><?php echo $row['fname'];?></td>
  			</tr>
  			<tr>
 				<th>Date of Birth : </th>
 				<td><?php echo $row['dob'];?></td>
  			</tr>
  			<tr>
 				<th>Class : </th>
 				<td><?php echo $row['class'];?></td>
  			</tr>
  			<tr>
 				<th>Area : </th>
 				<td><?php echo $row['area'];?></td>
  			</tr>
  			<tr>
 				<th>Contact No : </th>
 				<td><?php echo $row['contact'];?></td>
  			</tr>
  			<tr>
 				<th>Email_Id : </th>
 				<td><?php echo $row['email_id'];?></td>
  			</tr>
  			<tr>
 				<th>Password : </th>
 				<td><?php echo $row['password'];?></td>
  			</tr>
 		</table>
 	</div>
 </div>		
  </div>
	</div>
</div>
</body>
</html>