<?php
include_once("../pages/db.php");

?>

<?php
var_dump($_POST);

	$name = mysqli_real_escape_string($con, $_POST['username']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$address = mysqli_real_escape_string($con, $_POST['address']);



	if(mysqli_query($con, "INSERT INTO user (name, email, password, address)
		VALUES ('$name', '$email', '$password', '$address')")){
		header("Location: ../index.php");
	} 
	else{
		header("Location: register.php");
	}
?>