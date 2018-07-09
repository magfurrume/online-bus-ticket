<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="login/style.css" />
	<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="login/jquery-1.7.min.js"></script>
	<script type="text/javascript">
	
	$(document).ready(function(){
		$("#login").click(function(){
			
			var action = $("#lg-form").attr('action');
			var form_data = {
				email: $("#email").val(),
				password: $("#password").val(),
				is_ajax: 1
			};

			if((form_data['email']=='admin') && (form_data['password']=='admin') ){
					window.location.href = 'admin/admin.php';
					return false;
				}

			$.ajax({
				type: "POST",
				url: action,
				data: form_data,
				success: function(response)
				{
					

					if(response == "success")
						$("#lg-form").slideUp('slow', function(){
							$("#message").html('<p class="success">You have logged in successfully!</p><p>Redirecting....</p>');
							window.location.href = 'pages/home.php';
						});
					else{
                        $("#message").html('<p class="error">ERROR: Invalid username and/or password.</p>');
                        alert(response);
                    }
						
				}	
			});
			return false;
		});
	});
	</script>
</head>
<body>
	<div class="lg-container">
		<h1>Login</h1>
		<form action="login/waka-login.php" id="lg-form" name="lg-form" method="post">
			
			<div>
				<label for="email">Email:</label>
				<input type="text" name="email" id="email" placeholder="email"/>
			</div>
			
			<div>
				<label for="password">Password:</label>
				<input type="password" name="password" id="password" placeholder="password" />
			</div>
			
			<div>				
				<button type="submit" id="login">Login</button>
				<a href="register/register.php">Sign Up</a>
			</div>
			
		</form>
		<div id="message"></div>
	</div>
</body>
</html>