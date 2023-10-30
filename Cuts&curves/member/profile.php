<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>::Member Profile::</title>
	<style>
     input[type='text']
     {
     	width:200px;
     	padding-left:5px;
     }
	</style>
	<?php include('member_zone.php'); ?>
	<div class="col-md-10" style="padding-top:50px;">
	<div class="col-md-10">
		<div class="row">
	 <?php	

         $cnn = mysqli_connect("localhost","root","","cuts_curve");
       	 
	     $sql = "SELECT * from member WHERE email_id = 'machasan786@gmail.com' AND password = 'jamesbond'";

          $rec = mysqli_query($cnn,$sql);
          $row = mysqli_fetch_assoc($rec);
          $photo = $row['email_id'];

          if(isset($_POST['btnUpdate'])) 
		  {
		     $name = $_POST['txtName'];     
		     $sql="UPDATE member SET name = '$name' WHERE id=1";
		     if(mysqli_query($cnn,$sql))
		     {
		     	echo "Profile Updated!!!";
		     }
		  } 
		 
     ?>

	<div class="col-md-10 offset-md-1"> 
     <form action="profile.php" method="post">
	  	<TABLE class="table table-striped" border="0"> 
	  	 <tr> 
	  	  <td rowspan="9"> 
	  	 	<img src="images\<?php echo $photo;?>.jpg">
          </td> 
          <th>ID : </th> 
          <td><?php echo $row['id'];?></td> 
         </tr> 
         <tr> <th>Name : </th> 
         	  <td><input type="text" name="txtName" value="<?php echo $row['name'];?>"></td> 
         </tr> 
         <tr> <th>Father's Name : </th>
              <td><?php echo $row['fname'];?></td> 
         </tr> 
         <tr> <th>Date of Birth : </th>
              <td><?php echo $row['dob'];?></td> 
         </tr>	 	 
         <tr> <th>Class : </th> 
         	  <td><?php echo $row['class'];?></td> 
         </tr> 
         <tr> <th>Area : </th> 
         	  <td><?php echo $row['area'];?></td> 
         </tr> <tr> <th>Contact No. : </th> 
         	   <td><?php echo $row['contact'];?></td> 
         </tr> <tr> <th>Email : </th> 
         	   <td><?php echo $row['email_id'];?></td> 
         </tr> 
         <tr> <th>Password : </th> 
         	   <td><?php echo $row['password'];?></td> 
         </tr> 
         <tr> <td colspan="3" align="right"> 
         	  <button class="btn btn-primary" name="btnUpdate" style="width:100px;">Update</button></td>     	
         </tr> 
       </TABLE> 
      </form> 
      </div> 
     </div>
	</div>
</div>
  </div>		   
</div>
</body>
</html>
