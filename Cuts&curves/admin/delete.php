<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <title>::Delete Member::</title>  
  <?php include('admin_zone.php'); ?>
  <div class="col-md-7" style="padding-top:50px;padding-left:100px;">   
   <h5>Delete Member</h5><br>
  <form action="delete.php" method="get"> 
   <div class="input-group">
    Member ID : &nbsp;
      <input type="text" class="form-control" name="txtId">
      <div class="input-group-append">
        <button class="btn btn-success" type="submit" name="btnSearch">
          Search          
        </button>
      </div>
    </div>
    <?php

      $cnn = mysqli_connect("localhost","root","","cuts_curve");

      if(isset($_GET['btnSearch']))
      {
             
        $_SESSION['id'] = $_GET['txtId'];
        $id =  $_SESSION['id'] ;
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
    }
    TABLE
    {
      
      width:100%;
    }
   </style><br><br>
   <TABLE border="0">
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
    <tr>
      <td colspan="3"><br>
       <Button class="btn btn-danger" name="btnDelete">Delete</Button>
      </td>
    </tr>
   </TABLE> 
    <?php 

        }//End of else 
      }//end of btnSearch


      if(isset($_GET['btnDelete']))
      {
         $id =  $_SESSION['id'];
         $sql = "DELETE FROM member WHERE id = '$id'" ; 
        if(mysqli_query($cnn,$sql))
        {
          echo "<script>alert('Record Deleted.')</script>";
          echo "<script>location.href='showallmember.php'</script>";
        }  
      }
    ?>     
  </form>
  </div>
  </div>       
</div>
</body>
</html>