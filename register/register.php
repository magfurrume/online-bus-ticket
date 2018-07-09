<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="../bootstrap/css/bootstrap.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="../bootstrap/css/npm.js"></script>
	<script type="text/javascript" src="../bootstrap/css/npm.js"></script>
</head>
<body>
</br>
	<div class="container">
	  	<div class="row">
			<div class="col-md-4 col-md-offset-4 well">
				<h2>New User Register Here</h2>
			   <form method="POST" action="successRegister.php" onsubmit="return Validate()" name="vform" >
				   	<div id="username_div" class="form-group">
				   	  <label>Username</label> <br>
				   	  <input type="text" name="username" class="form-control">
				   	  <div id="name_error"></div>
				   	</div>
				   	<div id="email_div" class="form-group">
				   	  <label>Email</label> <br>
				   	  <input type="email" name="email" class="form-control">
				   	  <div id="email_error"></div>
				   	</div>
                   	<div id="phone" class="form-group">
				   	  <label>Phone Number</label> <br>
				   	  <input type="phone" name="phone" class="form-control">
				   	  <div id="phone_error"></div>
				   	</div>
				   	<div id="password_div" class="form-group">
				   	  <label>Password</label> <br>
				   	  <input type="password" name="password" class="form-control">
				   	</div>
				   	<div id="pass_confirm_div" class="form-group">
				   	   <label>Confirm Password</label> <br>
				   	   <input type="password" name="password_confirm" class="form-control">
				   	   <div id="password_error"></div>
				   	</div>
				   	<div id="address_div" class="form-group">
				   	   <label>Address</label> <br>
				   	   <input type="text" name="address" class="form-control">
				   	   <div id="address_error"></div>
				   	</div>
				   	<div class="form-group">
				   		<input type="submit" name="register" value="Register" class="btn btn-primary">
				   	</div>
			   </form>
	  		</div>
		</div>
	</div>
	<script type="text/javascript" src="scripts.js"></script>
</body>
</html>