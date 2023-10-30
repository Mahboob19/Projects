<!DOCTYPE html>
<html>
<head>
  <title>::Best Dance Classes Cuts & Curves in Whitefield, Bangluru::</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap/css/glyphicons.css">
  <script src="bootstrap/jQuery/jQuery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>  

  <style type="text/css">
    .navbar-brand
    {
       font-size:30px;  
    }

    #menuItems a
    {
       margin-right:30px;
       color:maroon;
    }
     #dropdown-menu a:hover
    {
      background-color:maroon;
      color: white;
    }
     #heading
    {
      background-color:pink;
      color: black;
      text-align: center;      
      padding-top: 5px;
      height:30px;
      font-weight: bold;
    }
    #footer
    {
      background-color: black;
      color: white;
      text-align: center;
      margin-top: 15px;
      padding-top: 5px;
      height: 30px;
    }
    </style>
</head>
<body>  
  <div class="navbar navbar-expand-sm navbar-dark bg-dark">
   <a href="index.php" class="navbar-brand">CUTS & CURVES</a>
   <UL class="navbar-nav ml-auto">
    <li class="nav-item">
      <a href="#" class="nav-link">
              <span class="glyphicon glyphicon-earphone"></span> +91-7007970016 / 8115785795 
      </a> 
    </li> 
    <li class="nav-item">
      <a href="#" class="nav-link">
              <span class="glyphicon glyphicon-envelope"></span> vkjaiswal2010@gmail.com 
      </a> 
    </li> 
    <li class="nav-item">
      <a href="#" class="nav-link">
              <span class="glyphicon glyphicon-hand-right"></span> <span style="color:white"><strong>Notice : </strong></span>
                <div style="float: right;width: 345px;margin-left: 10px;">
              <marquee><font face="Comic Sans MS">
              Hurry Up, Diwali Offer 10% discount on Jumba Dance !!!</font></span></marquee>
          </div>
      </a> 
    </li> 
    <li class="nav-item">
      <a href="#" class="nav-link" data-toggle="modal" data-target="#loginModal">Login</a>
    </li>
   </UL>
  </div>
  <?php include('member/login.php');?>
  <div class="navbar navbar-expand-sm bg-white">
   <a href="index.php" class="navbar-brand">
     <img src="images\logo.png">
   </a>
   <button class="navbar-toggler navbar-dark bg-dark" data-toggle="collapse" data-target="#menuItems">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div id="menuItems" class="collapse navbar-collapse">
     <UL class="navbar-nav text-center ml-auto">
      <li class="nav-item">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item">
        <a href="aboutus.php" class="nav-link">About Us</a>
      </li>
      <li class="nav-item">
        <div class="dropdown">
          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Classes</a>
        <div class="dropdown-menu" style="margin-top:5px; margin-left:20px;" id="dropdown-menu">
        <a class="dropdown-item" href="aerial.php">Aerial Yoga Classes</a>
          <a class="dropdown-item" href="salsa.php">Salsa Dance Classes</a>
          <a class="dropdown-item" href="ballet.php">Ballet Dance Classes</a>
          <a class="dropdown-item" href="zumba.php">Zumba Dance Classes</a>
          <a class="dropdown-item" href="acrobat.php">Acrobat Dance Classes</a>
          <a class="dropdown-item" href="hiphop.php">Hip Hop Dance Classes</a> </div>
      </div>
      </li>
      <li class="nav-item">
        <a href="plans.php" class="nav-link">Plans</a>
      </li>
      <li class="nav-item">
        <a href="offers.php" class="nav-link">Offers</a>
      </li>
      <li class="nav-item">
        <a href="instructor.php" class="nav-link">Instructors</a>
      </li>
      <li class="nav-item">
        <a href="gallery.php" class="nav-link">Gallery</a>
      </li>
      <li class="nav-item">
        <a href="testimonial.php" class="nav-link">Testimonials</a>
      </li>      
      <li class="nav-item">
        <a href="contact.php" class="nav-link">Contact Us</a>
      </li>
    </UL>
   </div> 
  </div>
  <div id="heading">Gallery</div>
  <div class="container">
    <div class="row" style="padding-top:20px;">
      <div class="col-md-3">
        <img src="images\gallery\i1.jpg" class="img-fluid">
      </div>
      <div class="col-md-3">
        <img src="images\gallery\i2.jpg"class="img-fluid">
      </div>
      <div class="col-md-3">
        <img src="images\gallery\i3.jpg"class="img-fluid">
      </div>
      <div class="col-md-3">
       <img src="images\gallery\i4.jpg"class="img-fluid">  
      </div>
      <br>
    </div>
    <div class="row" style="padding-top:20px;">
      <div class="col-md-3">
        <img src="images\gallery\i5.jpg"class="img-fluid">
      </div>
      <div class="col-md-3">
        <img src="images\gallery\i6.jpg"class="img-fluid">
      </div>
      <div class="col-md-3">
        <img src="images\gallery\i7.jpg"class="img-fluid">
      </div>
      <div class="col-md-3">
        <img src="images\gallery\i8.jpg"class="img-fluid">
      </div>
    </div>
  </div>
</div>
  <div id="footer">
  Cuts & Curve 2019 &copy; Copy Right Reserved
 </div>
</body>
</html>
