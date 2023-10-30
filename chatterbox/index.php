<!DOCTYPE html>
<html>
<head>
	<title>Chatterbox</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	 <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto&display=swap"
      rel="stylesheet"
    />
	<script src="bootstrap/jQuery/jQuery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>  
    <script src="bootstrap/js/sweetalert.min.js"></script>
    <script>
    	function validatePassword(password) {
                if (password.length === 0) {
                    document.getElementById("msg").innerHTML = "";
                    return;
                }  
                var matchedCase = new Array();
                matchedCase.push("[$@$!%*#?&]"); 
                matchedCase.push("[A-Z]");      
                matchedCase.push("[0-9]");      
                matchedCase.push("[a-z]");                    
                var ctr = 0;
                for (var i = 0; i < matchedCase.length; i++) {
                    if (new RegExp(matchedCase[i]).test(password)) {
                        ctr++;
                    }
                }
                var color = "";
                var strength = "";
                switch (ctr) {
                    case 0:
                    case 1:
                    case 2:
                        strength = "Very Weak";
                        color = "red";
                        break;
                    case 3:
                        strength = "Medium";
                        color = "orange";
                        break;
                    case 4:
                        strength = "Strong";
                        color = "green";
                        break;
                }
                document.getElementById("msg").innerHTML = strength;
                document.getElementById("msg").style.color = color;
            }
        </script>
     <script src="jquery-3.3.1.min.js"></script>
   <script>
   function password_match(){
    var password1 = document.getElementById('pwd').value ; 
    var password2 = document.getElementById('pwd2').value ; 
     $.post("check.php", {
     pass1: password1, pass2: password2 
      },
   function(data, status){
   document.getElementById('show-result').innerHTML = data ; 
   }
   ) ; 
    }
   </script>
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
			width: 350px;
			height: 490px;
			position: relative;
			margin: 6% auto;
			background: #fff;
			padding: 5px;
			overflow: hidden;
		}
		.form-box a
		{
			color:black;
			text-decoration: none;
			cursor:pointer;
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
    #footer a{
    	color: white;
    	text-decoration: none;
    }

	</style>
</head>
<body background="images/37.jpg">
	<div class="hero">
		<div class="form-box">
			<a href="#" id=brand style=" color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;"> Chatterbox</a>
			<div class="button-box">
				<div id="btn"></div>
					<button type="button" class="toggle-btn" onclick="login()" >Login</button>
					<button type="button" class="toggle-btn" onclick="register()">Register</button>
			    </div>
			<div class="social-icons">
				<img src="images/fb.png">
				<img src="images/tw.png">
				<img src="images/gp.png">
			</div>
			<form id="login" class="input-group" method="post" action="login.php">
				<input type="email" class="input-field" placeholder="Emial or Phone" required autocomplete="off" name="email">
				<input type="Password" class="input-field" placeholder="Password" required autocomplete="off" name="pass">
					 <a href="forgot_password.php" style="margin-left: 130px;">Forgot password?</a>
					    
					    <button type="submit" class="submit-btn"style="margin-top:20px; margin-right:5px;" name="login">Log in</button>
				</form>

			<form id="register" class="input-group" method="post" action="signup.php">
				<input type="email" class="input-field" placeholder="Emial or Phone" required autocomplete="off" name="eml">

				<input type="Password" class="input-field" placeholder="New Password" required autocomplete="off" name="pas"
				 id="pwd"  onkeyup="validatePassword(this.value);"/><span id="msg" style="padding-left:60px;"></span>

				<input type="Password" class="input-field" placeholder="Confirm Password" required autocomplete="off" name="c_pas" id="pwd2" onfocusout="password_match()">

				  <div id="show-result" style="padding-left:60px;">
 				 </div>
 				 <input type="submit" value="Register" style="width: 85%;padding:10px 30px;cursor:pointer;display: block;margin:auto;background:linear-gradient(to right,#ff105f,#ffad06);border:0;outline:none;border-radius:30px;margin-top:20px; margin-right:5px;">
			</form>
		</div>
     <div id="footer">
     Chatter Box 2020 &copy; Copy Right Reserved by <a href="https://mahboobhasan.000webhostapp.com"> SPY Software Solutions.</a>
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