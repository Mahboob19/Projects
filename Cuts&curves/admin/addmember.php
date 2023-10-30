<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>::Admin Zone::</title>
	<style type="text/css">
		.form
		{
			margin-top:50px;
		}
		.btn
		{
			width:80px;
			margin-left:315px;
		}
	</style>
	<?php include('admin_zone.php');?> 
		
  <div class="col-md-4 offset-md-1 form">   
    <form action="insert.php" method="post" enctype="multipart/form-data">
	  <div class="form-group">
	    <label>Member Name : </label>
	    <input type="text" class="form-control" name="txtName">   
	  </div>
	  <div class="form-group">
	    <label>Father's Name : </label>
	    <input type="text" class="form-control" name="txtFname">  
	  </div>
	  <div class="form-group">
	    <label>Date of Birth : </label>
	    <input type="date" class="form-control" name="txtDob">   
	  </div>
	  <div class="form-group">
	    <label>Class Name : </label>
	    <input type="text" class="form-control" name="txtClass">  
	  </div>  
   </div>
   <div class="col-md-4 form">
   	 <div class="form-group">
	    <label>Area Name : </label>
	    <input type="text" class="form-control" name="txtArea">
	  </div>
   	 <div class="form-group">
	    <label>Contact No. : </label>
	    <input type="tel" class="form-control" name="txtContact">
	  </div>
	  <div class="form-group">
	    <label>Email : </label>
	    <input type="email" class="form-control" name="txtEmail">
	  </div>
	  <div class="form-group">
	    <label>Member Photo : </label>
	    <input type="file" name="fileImage">
	  </div>
	  	 
	  <div class="footer">        
        <button type="submit" class="btn btn-primary" name="btnAdd">Add</button>
	  </div>	  
   </div>
</form>		   
</div>
</body>
</html>