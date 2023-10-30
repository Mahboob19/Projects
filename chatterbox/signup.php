<!DOCTYPE html>
<?php
	session_start();
	include("includes/connection.php");
	$_SESSION['email'] = $_POST['eml'];
	$_SESSION['password'] = $_POST['pas'];
	$_SESSION['c_password'] = $_POST['c_pas'];
	$email = $_SESSION['email'];
	if(strlen($_SESSION['password'])<12){
	echo "<script>alert('Password should be minimum 12  characters!')</script>";
	echo "<script>window.open('index.php','_self')</script>";
	exit();
	}
	$check_email = "select * from users where user_email='$email'";
	$run_email = mysqli_query($con,$check_email);
	$check = mysqli_num_rows($run_email);
	if($check==1){
	echo "<script>alert('Email already exist, please try another!')</script>";
	echo "<script>window.open('index.php','_self')</script>";
	exit();
	}
?>
<html>
<head>
	<title>Signup</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/81c2c05f29.js" crossorigin="anonymous"></script>
	<script src="bootstrap/js/sweetalert.min.js"></script>
</head>
<style>
	body{
		overflow-x: hidden;
	}
	.main-content{
		width: 50%;
		height: 40%;
		margin: 10px auto;
		background-color: #fff;
		border: 2px solid #e6e6e6;
		padding: 40px 50px;
	}
	.header{
		border: 0px solid #000;
		margin-bottom: 5px;
	}
	.well{
		background-color: #187FAB;
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
    .btn {
	width: 170px;
	height: 50px;
	padding: 5px 0;
	border: 0;
	border-radius: 30px;
	outline: 0;
	position: relative;
	overflow: hidden;
	transition: 0.2s ease-in-out;
	box-shadow: 0 2px 2px rgba(0, 0, 0, 0.6);
	opacity: 1;
	background: #ffba08;
	color: #fff;
}
.btn-text {
	font-size: 1em;
}
.btn .btn-icon {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	display: none;
}
.btn:hover {
	cursor: pointer;
	box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
}
.sending .btn-text {
	opacity: 1;
	animation: 0.5s ease-out fadeOut forwards;
	animation-delay: 0.5s;
}
.sending .btn-icon {
	display: block;
	opacity: 0;
	animation: 0.6s ease-in-out iconAnimation forwards;
	animation-delay: 1s;
}
.sent {
	background: #04db5e;
	color: #fff;
}
@keyframes iconAnimation {
	20% {
		opacity: 1;
	}
	25% {
		left: 45%;
	}
	50% {
		left: 105%;
		opacity: 0;
	}
	55% {
		left: -5%;
	}
	100% {
		left: 50%;
		opacity: 1;
	}
}
@keyframes fadeOut {
	to {
		opacity: 0;
	}
}
</style>
<body background="images/banner.jpg">
<div class="row">
	<div class="col-sm-12">
		<div class="main-content">
			<div class="header">
				<h3 style="text-align: center;font-family:Edwardian Script ITC;font-size: 35px;"><strong style="color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;">Join Chatterbox</strong></h3>
				<hr>
			</div>
			<div class="l-part">
				<form action="register_user.php" method="post">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						<input type="text" class="form-control" placeholder="Full Name" name="full_name" required="required">
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
						<input type="date" class="form-control input-sm" name="birthday" required>
					</div><br>
					<div class="input-group">
					<b>Select Your Gender :</b>&nbsp 
					 Male <input type="radio" id="r1" name="gen" onclick="gender(r1);" value="male"> &nbsp
					 Female <input type="radio" id="r2" name="gen" onclick="gender(r2);" value="female"> &nbsp
					 Others <input type="radio" id="r2" name="gen" onclick="gender(r3);" value="others"> 
					</div><br>	
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
						<select class="form-control" name="cnt" required="required">
							<option disabled>Select your Country</option>
							<option>Afghanistan</option>
							<option>Albania</option>
							<option>Algeria</option>
							<option>Andorra</option>
							<option>Angola</option>
							<option>Antigua and Barbuda</option>
							<option>Argentina</option>
							<option>Armenia</option>
							<option>Australia</option>
							<option>Austria</option>
							<option>Austrian Empire</option>
							<option>Azerbaijan</option>
							<option>Baden</option>
							<option>Bahamas</option>
							<option>Bahrain</option>
							<option>Bangladesh</option>
							<option>Barbados</option>
							<option>Bavaria</option>
							<option>Belarus</option>
							<option>Belgium</option>
							<option>Belize</option>
							<option>Benin</option>
							<option>Bolivia</option>
							<option>Bosnia and Herzegovina</option>
							<option>Botswana</option>
							<option>Brazil</option>
							<option>Brunei</option>
							<option>Brunswick and Lüneburg</option>
							<option>Bulgaria</option>
							<option>Burkina Faso</option>
							<option>Burma</option>
							<option>Burundi</option>
							<option>Cabo Verde</option>
							<option>Cambodia</option>
							<option>Cameroon</option>
							<option>Canada</option>
							<option>Cayman Islands</option>
							<option>Central African Republic</option>
							<option>Central American Federation</option>
							<option>Chad</option>
							<option>Chile</option>
							<option>China</option>
							<option>Colombia</option>
							<option>Comoros</option>
							<option>Congo Free State</option>
							<option>Costa Rica</option>
							<option>Cote d’Ivoire</option>
							<option>Croatia</option>
							<option>Cuba</option>
							<option>Cyprus</option>
							<option>Czechia</option>
							<option>Czechoslovakia</option>
							<option>Democratic Republic of the Congo</option>
							<option>Denmark</option>
							<option>Djibouti</option>
							<option>Dominica</option>
							<option>Dominican Republic</option>
							<option>Duchy of Parma</option>
							<option>East Germany</option>
							<option>Ecuador</option>
							<option>Egypt</option>
							<option>El Salvador</option>
							<option>Equatorial Guinea</option>
							<option>Eritrea</option>
							<option>Estonia</option>
							<option>Eswatini</option>
							<option>Ethiopia</option>
							<option>Federal Government of Germany</option>
							<option>Fiji</option>
							<option>Finland</option>
							<option>France</option>
							<option>Gabon</option>
							<option>Gambia</option>
							<option>Georgia</option>
							<option>Germany</option>
							<option>Ghana</option>
							<option>Grand Duchy of Tuscany</option>
							<option>Greece</option>
							<option>Grenada</option>
							<option>Guatemala</option>
							<option>Guinea</option>
							<option>Guinea-Bissau</option>
							<option>Guyana</option>
							<option>Haiti</option>
							<option>Hanover</option>
							<option>Hanseatic Republics</option>
							<option>Hawaii</option>
							<option>Hesse</option>
							<option>Holy See</option>
							<option>Honduras</option>
							<option>Hungary</option>
							<option>Iceland</option>
							<option>India</option>
							<option>Indonesia</option>
							<option>Iran</option>
							<option>Iraq</option>
							<option>Ireland</option>
							<option>Israel</option>
						    <option>Italy</option>
							<option>Jamaica</option>
							<option>Japan</option>
							<option>Jordan</option>
							<option>Kazakhstan</option>
							<option>Kenya</option>
							<option>Kingdom of Serbia/Yugoslavia</option>
							<option>Kiribati</option>
							<option>Korea</option>
							<option>Kosovo</option>
							<option>Kuwait</option>
							<option>Kyrgyzstan</option>
							<option>Laos</option>
							<option>Latvia</option>
							<option>Lebanon</option>
							<option>Lesotho</option>
							<option>Lew Chew </option>
							<option>Liberia</option>
							<option>Libya</option>
							<option>Liechtenstein</option>
							<option>Lithuania</option>
							<option>Luxembourg</option>
							<option>Madagascar</option>
							<option>Malawi</option>
							<option>Malaysia</option>
							<option>Maldives</option>
							<option>Mali</option>
							<option>Malta</option>
							<option>Marshall Islands</option>
							<option>Mauritania</option>
							<option>Mauritius</option>
							<option>Mecklenburg-Schwerin</option>
							<option>Mecklenburg-Strelitz</option>
							<option>Mexic</option>
							<option>Micronesia</option>
							<option>Moldova</option>
							<option>Monaco</option>
							<option>Mongolia</option>
							<option>Montenegro</option>
							<option>Morocco</option>
							<option>Mozambique</option>
							<option>Namibia</option>
							<option>Nassau</option>
							<option>Nauru</option>
							<option>Nepal</option>
							<option>Netherlands</option>
							<option>New Zealand</option>
							<option>Nicaragua</option>
							<option>Niger</option>
							<option>Nigeria</option>
							<option>North German Confederation</option>
						    <option>North German Union</option>
							<option>North Macedonia</option>
							<option>Norway</option>
							<option>Oldenburg</option>
							<option>Oman</option>
							<option>Orange Free State</option>
							<option>Pakistan</option>
							<option>Palau</option>
							<option>Panama</option>
							<option>Papal States</option>
							<option>Papua New Guinea</option>
							<option>Paraguay</option>
							<option>Peru</option>
							<option>Philippines</option>
							<option>Piedmont-Sardinia</option>
							<option>Polan</option>
							<option>Portugal</option>
							<option>Qatar</option>
							<option>Republic of Genoa</option>
							<option>Republic of Korea (South Korea)</option>
							<option>Republic of the Congo</option>
							<option>Romania</option>
							<option>Russia</option>
							<option>Rwanda</option>
							<option>Saint Kitts and Nevis</option>
							<option>Saint Lucia</option>
							<option>Saint Vincent and the Grenadines</option>
							<option>Samoa</option>
							<option>San Marino</option>
							<option>Sao Tome and Principe</option>
							<option>Saudi Arabia</option>
							<option>Schaumburg-Lippe</option>
							<option>Senegal</option>
							<option>Serbia</option>
							<option>Seychelles</option>
							<option>Sierra Leone</option>
							<option>Singapore</option>
							<option>Slovakia</option>
							<option>Slovenia</option>
							<option>Solomon Islands</option>
							<option>Somalia</option>
							<option>South Africa</option>
							<option>South Sudan</option>
							<option>Spain</option>
							<option>Sri Lanka</option>
							<option>Sudan</option>
							<option>Suriname</option>
							<option>Sweden</option>
							<option>Switzerland</option>
							<option>Syria</option>
							<option>Tajikistan</option>
							<option>Tanzania</option>
							<option>Texas</option>
							<option>Thailand</option>
							<option>Timor-Leste</option>
							<option>Togo</option>
							<option>Trinidad and Tobago</option>
							<option>Tunisia</option>
							<option>Turkey</option>
							<option>Turkmenistan</option>
							<option>Tuvalu</option>
							<option>Two Sicilies</option>
							<option>Uganda</option>
							<option>Ukraine</option>
							<option>Union of Soviet Socialist Republics</option>
							<option>United Arab Emirates</option>
							<option>United Kingdom</option>
							<option>Uruguay</option>
							<option>Uzbekistan</option>
							<option>Vanuatu</option>
							<option>Venezuela</option>
							<option>Vietnam</option>
							<option>Württemberg</option>
							<option>Yemen</option>
							<option>Zambia</option>
							<option>Zimbabwe</option>
						</select>
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
						<input type="text" class="form-control" placeholder="State" name="state" required="required">
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-send"></i></span>
						<input type="text" class="form-control" placeholder="City" name="city" required="required">
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-question-sign"></i></span>
						<select class="form-control" name="ques" required="required">
							<option>Select a security question?</option>
							<option>What is your pet name?</option>
							<option>Your first phone number?</option>
							<option>Your best friend name?</option>
							<option>First vehicle?</option>
							<option>Primary school?</option>
						</select>
					</div><br>
					
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
						<input type="text" class="form-control" name="ans" placeholder="Security Answer">
					</div><br>
					<div class="input-group">
					  <input type="checkbox" value="Copy" id="item" required> I accept 
					   <a href=""> Terms & Condition</a>
					 </div><br>
					<center><span class="btn-text"><input type="submit" value="Submit" id="signup" class="btn "></span>
					  <i class="fas fa-long-arrow-alt-right btn-icon"></i>
					</center>
				</form>
			</div>
		</div>
	</div>
	</div>
</div>
</div>
 <script type="text/javascript">
 	const btn = document.querySelector('.btn');
const btnText = document.querySelector('.btn .btn-text');
const btnIcon = document.querySelector('.btn .btn-icon');

btn.addEventListener('click', () => {
	btn.classList.add('sending');
	btnText.innerHTML = 'Submiting...';

	setTimeout(() => {
		btn.classList.remove('sending');
		btnText.innerHTML = '<i class="fas fa-check"></i>';
		btn.classList.add('sent');
	}, 2000);
});
 </script>
</body>
</html>