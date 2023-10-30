  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../bootstrap/css/glyphicons.css">
  <script src="../bootstrap/jQuery/jQuery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>  
  <style type="text/css">
    .navbar-brand
    {
      color: white;
      font-size: 25px;
    }
    .navbar a:hover
    {
      color:white;
    }
    .navbar-nav
    {
      color:white;
    }
    .nav-link
    {
      color: white;
    }
    #menu
    {
      background-color: green;
      font-family:verdana;
      font-size: 15px;
      height: 626px;
      text-align:center;
      padding-top: 40px;
      color: white; 
    }
    #menu a
    {
      color:white;
      text-decoration:none;
    }
    .glyphicon
    {
      font-size: 40px;
      text-align:center;
    }
  </style>
</head>
<body>
<div class="navbar bg-success">
  <a href="index.php" class="navbar-brand">Member Zone</a>
  <ul class="navbar-nav">
        <span>Welcome, <?php echo $_SESSION['member'];?>
        <img src="images/<?php echo $row['email_id'];?>.jpg" style="width:30px;height:30px;"class="img-rounded"></span>
  </ul>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2" id="menu">
      <a href="profile.php">
      <span class="glyphicon glyphicon-edit"></span><br>
      Edit Your Profile<br><br></a>
      <a href="logout.php">
      <span class="glyphicon glyphicon-check"></span><br>
      Change Your Password<br><br></a>
      <a href="logout.php">
      <span class="glyphicon glyphicon-list-alt"></span><br>
      Fees Details<br><br></a>
      <a href="logout.php">
      <span class="glyphicon glyphicon-th"></span><br>
      Traning Material<br><br></a>
      <a href="logout.php">
      <span class="glyphicon glyphicon-log-out"></span><br>
      Logout<br><br></a>
    </div>