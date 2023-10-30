<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>::Admin Zone::</title>
	<?php include('admin_zone.php'); ?>
	<div class="col-md-10" style="padding-top:50px;padding-left:30px;padding-right:30px;">		
	 <TABLE class="table table-striped table-bordered">
	 	<tr><th colspan="11" style="color:blue;text-align:center;font-size:25px;">All Cuts & Curves Members</th></tr>
	 	<tr>
	 		<th>Sno.</th>
	 		<th>ID</th>
	 		<th>Photo</th>
	 		<th>Member Name</th>
	 		<th>Father Name</th>
	 		<th>Date of Birth</th>
	 		<th>Class Name</th>
	 		<th>Area Name</th>
	 		<th>Contact No.</th>
	 		<th>Email</th>
	 		<th>Password</th>
	   </tr>
	   <?php 

       $cnn = mysqli_connect("localhost","root","","cuts_curve");
       $sql = "SELECT * from member";
       $rec = mysqli_query($cnn,$sql);
       $n = mysqli_num_rows($rec);        
       for($i=1;$i<=$n;$i++)
       {
          $row = mysqli_fetch_assoc($rec);
          $photo = $row['email_id'] . ".jpg" ;
          echo "<tr>";
          echo "<td>$i</td>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td><img src='../member/images/$photo' width='60'></td>";
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['fname'] . "</td>";
          echo "<td>" . $row['dob'] . "</td>";
          echo "<td>" . $row['class'] . "</td>";
          echo "<td>" . $row['area'] . "</td>";
          echo "<td>" . $row['contact'] . "</td>";
          echo "<td>" . $row['email_id'] . "</td>";
          echo "<td>" . $row['password'] . "</td>";
          echo "<tr>";
       }

        mysqli_close($cnn);

	   ?>		
	 </TABLE>
	</div>
  </div>		   
</div>
</body>
</html>