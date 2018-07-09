<?php
	include("../pages/db.php");
	$is_ajax = $_REQUEST['is_ajax'];
	if(isset($is_ajax) && $is_ajax)
	{
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		
		$sql = "SELECT * FROM user WHERE email='".$email."' AND password = '".$password."'";		
		$row = mysqli_fetch_assoc($con->query($sql));
		if(mysqli_num_rows($con->query($sql))==1){
			session_start();
			$_SESSION['user_id'] = $row['id'];
			$_SESSION['user_name'] = $row['name'];
			echo "success";
		}else{
            echo $email."  ".$password;
        }

	}

?>
