<!DOCTYPE html>
<html>
<head>
	<title>Chatterbox</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/jQuery/jQuery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>  
	<style>
		*
		{
			margin:0;
			padding:0;
			font-family: sans-serif;
		}
		.hero
		{
			height: 100%;
			width: 100%;
			background-position: center;
			background-size: cover;
			position: absolute;
		}
		#brand
		{
			font-weight: 800;
			font-size: 35px;
			font-family:Edwardian Script ITC;
			text-decoration: none;
			text-decoration-style: none;
		}
		.form-box
		{
			text-align:center;
			width: 500px;
			height: 800px;
			position: relative;
			margin: 6% auto;
			background: #fff;
			padding: 5px;
			overflow: hidden;
		}
		.button-box
		{
			margin-top: 35px;
			width: 225px;
			margin: 40px auto; 
			position: relative;
			box-shadow: 0 0 20px 9px #ff61241f;
			border-radius: 30px;
		}
		.toggle-btn
		{
			padding:10px 30px;
			cursor:pointer;
			background:transparent;
			border: 0;
			outline: none;
			position: relative;
		}
		#btn
		{
			top: 0;
			left: 0;
			position: absolute;
			width: 110px;
			height: 100%;
			background:linear-gradient(to right,#ff105f,#ffad06);
			border-radius: 30px;
			transition: .5s; 
		}
		.social-icons
		{
			margin: 30px auto;
			text-align: center;
		}
		.social-icons img
		{
			width: 30px;
			margin: 0 12px;
			box-shadow: 0 0 20px 0 #7f7f7f3d;
			cursor: pointer;
			border-radius: 50%;
		}
		.input-group
		{
			top: 210px;
			position: absolute;
			width: 280px;
			transition: .5s;
		}
		.input-field
		{
			width: 100%
			padding:20px 0;
			margin: 10px 60px;
			border-left: 0;
			border-top: 0;
			border-right: 0;
			border-bottom: 1px solid #999;
			outline: none;
			background:transparent;
		}
		.submit-btn
		{
			width: 85%;
			padding:10px 30px;
			cursor: pointer;
			display: block;
			margin:auto;
			background:linear-gradient(to right,#ff105f,#ffad06);
			border:0;
			outline: none;
			border-radius: 30px;
	}
	 #login
	 {
	 	left: 20px;
	 }
	 #register
	 {
	 	left: 400px;
	 }
	 #footer
    {
    	background-color: black;
    	color: white;
    	position: fixed;
    	text-align: center;
    	padding-top: 5px;
    	height: 30px;
 		left: 0;
 		bottom: 0;
  		width: 100%;
    }
	</style>
</head>
<body background="banner.jpg">
	<div class="hero">
		<div class="form-box">
			<a href="#" id=brand> Chatterbox</a>
			<div class="button-box">
				<div id="btn"></div>
					<button type="button" class="toggle-btn" onclick="login()">Login</button>
					<button type="button" class="toggle-btn" onclick="register()">Register</button>
			    </div>
			<div class="social-icons">
				<img src="fb.png">
				<img src="tw.png">
				<img src="gp.png">
			</div>
			<form id="login" class="input-group">
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
   </div><button type="submit" class="submit-btn" style="margin-top:20px; margin-right:5px;">Register</button>
			</form>
		</div>
     <div id="footer">
     Chatter Box 2019 &copy; Copy Right Reserved 
     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
     Developed by : <a href="website/index.php">SPY Software Solutions.</a>
    </div> 
    </div>
    <script>
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn");
    function register() {
     	x.style.left = "-400px";
     	y.style.left = "20px";
     	z.style.left = "110px";
     }
      function login() {
     	x.style.left = "20px";
     	y.style.left = "400px";
     	z.style.left = "0px";
     }
	</script>
</body> 
</html>