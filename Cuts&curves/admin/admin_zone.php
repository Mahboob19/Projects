  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../bootstrap/css/glyphicons.css">
  <script src="../bootstrap/jQuery/jQuery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>  
  <style type="text/css">
    .navbar
    {
      background-color:maroon; 
    }
    .navbar-nav
    {
      color:white;
    }
    .navbar-brand
    {
      color: white;
      font-size: 25px;
    }
    .navbar a:hover
    {
      color:white;
    }
    .nav-link
    {
      color: white;
    }
    #menu
    {
      background-color: maroon;
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
      font-size: 35px;
      text-align:center;
    }
  </style>
</head>
<body>
<div class="navbar">
  <a href="index.php" class="navbar-brand">
    <span class=" glyphicon glyphicon-user" style="color:white; font-size:25px;"> Administrator</span></a>
  <ul class="navbar-nav">
        Welcome, <?php echo $_SESSION['admin'];?>
  </ul>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2" id="menu">
      <a href="addmember.php">
      <span class="glyphicon glyphicon-edit"></span><br>
      Add New Member<br><br></a>
      <a href="showallmember.php">
      <span class="glyphicon glyphicon-check" name="showallmember"></span><br>
      Show All Members<br><br></a>
      <a href="search.php">
      <span class="glyphicon glyphicon-search"></span><br>
      Search Member<br><br></a>
      <a href="delete.php">
      <span class=" glyphicon glyphicon-trash"></span><br>
      Delete Member<br><br></a>
      <a href="logout.php">
        <a href="#">
          <span class=" glyphicon glyphicon-earphone"></span><br>
          Contact Us List<br><br>
        </a>
          <a href="enteeryfees.php">
      <span class="glyphicon glyphicon-usd"></span><br>
      Entry Fees Detail<br><br></a>
        <a href="logout.php">
      <span class="glyphicon glyphicon-log-out"></span><br>
      Logout<br><br></a>
    </div>