<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");
?>
<?php 

if(!isset($_SESSION['user_email'])){
	
	header("location: index.php");

}
else{ ?>
<html>
<head>
	<title>Welcomme to Home</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/home_style2.css" media="all"/>
    <script src="bootstrap/js/sweetalert2.min.js"></script>
</head>
<style>

</style>
<body>
<div class="row">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-8">
		<form action="" method="post" enctype="multipart/form-data">
					<table class="table table-bordered table-hover">
						<tr align="center">
							<td colspan="6" class="active"><h2>Edit Your Profile</h2></td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Full Name</td>
							<td>
							<input class="form-control" type="text" name="f_name" required="required" value="<?php echo $first_name;?>"/ disabled>
							</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">User Name</td>
							<td>
							<input class="form-control" type="text" name="u_name" required="required" value="<?php echo $user_name;?>"/ disabled>
							</td>
						</tr>

						<tr>
							<td style="font-weight: bold;">Status</td>
							<td>
							<input class="form-control" type="text" name="describe_user" required="required" value="<?php echo $describe_user;?>" autocomplete="off">
							</td>
						</tr>

						<tr>
							<td style="font-weight: bold;">Relationship Status</td>
							<td>
							<select class="form-control" name="Relationship">
								<option><?php echo $Relationship_status;?></option>
								<option>Engaged</option>
								<option>Married</option>
								<option>Single</option>
								<option>In an Replationship</option>
								<option>It's complicated</option>
								<option>Separated</option>
								<option>Divorced</option>
								<option>Widowed</option>
							</select>
							</td>
						</tr>						
						<tr>
							<td style="font-weight: bold;">Email</td>
							<td>
							<input class="form-control" type="email" name="u_email" required="required" value="<?php echo $user_email;?>" disabled></td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Country</td>
							<td>
							<select class="form-control" name="u_country">
								<option><?php echo $user_country;?></option>
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
							</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">State</td>
							<td>
							<input class="form-control" name="u_state" required="required" value="<?php echo $user_state;?>" ></td>
						</tr>
						<tr>
							<td style="font-weight: bold;">City</td>
							<td>
							<input class="form-control" name="u_city" required="required" value="<?php echo $user_city;?>" ></td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Gender</td>
							<td>
							<input class="form-control" name="u_gender" value="<?php echo $user_gender;?>" disabled>
							</td>
						</tr>
						
						<tr>
							<td style="font-weight: bold;">Birthday</td>
							<td>
							<input name="u_birthday" class="form-control input-md" value="<?php echo $user_birthday;?>" required="required" disabled>
						</tr>					
						<tr align="center">
							<td colspan="6">
							<input class="btn btn-info" style="width: 250px;" type="submit" name="update" value="Update"/>
							</td>
						</tr>
					</table>
				</form>
	</div>
</div>
</body>
</html>
					
<?php 
	if(isset($_POST['update'])){
		$describe_user = htmlentities($_POST['describe_user']);
		$Relationship_status = htmlentities($_POST['Relationship']);
		$u_country = htmlentities($_POST['u_country']);
		$u_state = htmlentities($_POST['u_state']);
		$u_city = htmlentities($_POST['u_city']);		
		$update = "update users set describe_user='$describe_user',Relationship='$Relationship_status',user_country='$u_country',user_state='$u_state',user_city='$u_city' where user_id='$user_id'";
		$run = mysqli_query($con,$update); 
		if($run){ ?>
			<script>
				Swal.fire({
			  position: 'center',
			  icon: 'success',
			  title: 'Your profile has been updated!!!',
			  showConfirmButton: false,
			  timer: 1000
			})
			</script>
		<?php
		}
	}
?>
<?php } ?>
<script>
function show_password() {
    var x = document.getElementById("mypass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>