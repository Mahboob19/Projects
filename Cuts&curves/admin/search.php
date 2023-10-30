<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
	<title>::Admin Zone::</title>
	<?php include('admin_zone.php'); ?>
	<div class="col-md-10" style="padding-top:100px;padding-left:180px;">		
	 <h5>Search Member</h5><br>
	 <div class="col-md-8">
	 <form action="search.php" method="get"> 
	 <div class="input-group">
	 	Member ID : &nbsp;
      <input type="text" class="form-control" name="txtId">
      <div class="input-group-append">
        <button class="btn btn-success" type="submit" name="btnSearch">
          Search          
        </button>        
      </div>
    </div>    
   </form>
    <br><br>
    <?php

      $cnn = mysqli_connect("localhost","root","","cuts_curve");

      if(isset($_GET['btnSearch']))
      {
             
        $id  = $_GET['txtId'];        
        $sql = "SELECT * from member WHERE id = '$id'" ;
        $rec = mysqli_query($cnn,$sql);
        $n = mysqli_num_rows($rec);

        if(!$n)
         echo "<b><font color='red'>Record Not Found !!!</font></b>";
        else      
        {
           $row = mysqli_fetch_assoc($rec);
           $id   = $row['id'];
           $name = $row['name'];
           $photo = $row['email_id'] . ".jpg" ;
           $fname = $row['fname'];
           $dob = $row['dob'];
           $class  = $row['class'];
           $area = $row['area'];
           $contact = $row['contact'];
           $email = $row['email_id'];
           $pass = $row['password']; 

    ?>
   
   <style>
   	th
   	{
   		text-align:left; 
   		width:100%;  		
   	}
   	TABLE
   	{
   		border:0px;
   	}
   </style>
   <TABLE border="1">
     <tr>
     	<td rowspan="9">
     	 <img src='../member/images/<?php echo $photo; ?>'>
        </td>
        <th>Member ID  </th><td><?php echo $id; ?></td>        
    </tr>
    <tr>
     <th>Member Name  </th><td><?php echo $name; ?>
    </tr>
    <tr>
     <th>Father's Name  </th><td><?php echo $fname; ?>
    </tr>
    <tr>
     <th>Date of Birth  </th><td><?php echo $dob; ?>
    </tr>
    <tr>
     <th>Class Name  </th><td><?php echo $class; ?>
    </tr>
    <tr>
     <th>Area Name  </th><td><?php echo $area; ?>
    </tr>
    <tr>
     <th>Contact No.  </th><td><?php echo $contact; ?>
    </tr>
    <tr>
     <th>Email  </th><td><?php echo $email; ?>
    </tr>
    <tr>
     <th>Password  </th><td><?php echo $pass; ?>
    </tr>
   </TABLE>	<?php } } ?>

</div>
	</div>
  </div>		   
</div>
</body>
</html>