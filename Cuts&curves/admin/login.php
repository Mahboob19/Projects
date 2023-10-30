<!DOCTYPE html>
<html>
<head>
	<title>::Admin Login::</title>
   <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../bootstrap/css/glyphicons.css">
  <script src="../bootstrap/jQuery/jQuery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>  
<style type="text/css">
	.login
	{
		margin-top: 150px;
		color:white;
	}
	.modal-footer
	{
		padding-right: 0px;
	}
	#brand
	{
		font-family: Cosmic Sans Ms;
	}
</style>
</head>
<body background="bg.jpg">
<div class="col-md-4 offset-md-4 login">
	<h5 align="center">Admin Login</h5>
	<h5 align="center" id="brand">Cuts & Curves (CnC) Dance Academy</h5>
	<div class="modal-body">
		<form action="index.php" method="post">
			<div class="form-group">
				<label>Email ID : &nbsp</label>
				<input type="text"class="btn btn-primary" name="email_id">
			</div>
			<div class="form-group">
				<label>Password : </label>
				<input type="password" class="btn btn-primary" name="password">
			</div>
			<div class="modal-footer">
				 <button type="submit" class="btn btn-primary" name="login">Login</button>
			</div>
		</form>
	</div>
</div>
</body>
</html>