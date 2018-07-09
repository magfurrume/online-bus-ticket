<?php
	include_once("../pages/db.php");
	$bus_name = "";
	$time = "";
?>
<?php

?>
<?php
	
	if(isset($_POST['save'])){


		$bus_name = mysqli_real_escape_string($con, $_POST['bus_name']);
		$time = mysqli_real_escape_string($con, $_POST['time']);

		//update bus name

		//update time


	}else{


		//bus
		$bus_id = $_GET['bus_id'];
		$sql = "SELECT name FROM bus where id='$bus_id'";
		$result = $con->query($sql);

		if ($result->num_rows > 0) {
		    $row = $result->fetch_assoc();
		    $bus_name = $row['name'];
		} else {
		    echo "0 results";
		}

		//time
		$sql = "SELECT time FROM bus_time where id='$bus_id'";
		$result = $con->query($sql);

		if ($result->num_rows > 0) {
		    $row = $result->fetch_assoc();
		    $time = $row['time'];
		} else {
		    echo "0 results";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Update Bus</title>
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
				<h2>Update Exithing Bus</h2>
			   <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
				   	<div id="busname_div" class="form-group">
				   	  <label>Bus Name</label> <br>
				   	  <input type="text" name="bus_name" class="form-control" value="<?php if($bus_name){ echo $bus_name;}?>">
				   	  <div id="name_error"></div>
				   	</div>
				   	<div id="from" class="form-group">
				   	  <label>From</label> <br>
                        <select class="form-control" name="from">
                          <option value="dhaka">Dhaka</option>
                          <option value="khulna">Khulna</option>
                          <option value="rajshahi">Rajshahi</option>
                          <option value="sylhet">Sylhet</option>
                          <option value="sylhet">Sylhet</option>
                          <option value="satkhira">Satkhira</option>
                          <option value="rangpur">Rangpur</option>
                          <option value="nator">Nator</option>
       
                          <option value="bagerhat">Bagerhat</option>
                          <option value="gopalganj">Gopalganj</option>
                        </select>
				   	  <div id="from_error"></div>
				   	</div>
				   	<div id="to" class="form-group">
				   	  <label>To</label> <br>
				   	  <select class="form-control" name="to" value= "Value">
                            <option value="satkhira">Satkhira</option>
                            <option value="rangpur">Rangpur</option>
                            <option value="nator">Nator</option>
                            <option value="bagerhat">Bagerhat</option>
                            <option value="gopalganj">Gopalganj</option>
                            <option value="dhaka">Dhaka</option>
                            <option value="khulna">Khulna</option>
                            <option value="rajshahi">Rajshahi</option>
                            <option value="sylhet">Sylhet</option>
                            <option value="sylhet">Sylhet</option>
                        </select>
				   	</div>
				   	<div id="bustime" class="form-group">
				   	   <label>Time</label> <br>
				   	   <input type="time" name="time" class="form-control" value="<?php if( $time) {echo $time;}?>">
				   	   <div id="time_error"></div>
                   </div>
				   	<div class="form-group">
				   		<input type="submit" name="save" value="Save" class="btn btn-primary">
				   	</div>
			   </form>
	  		</div>
		</div>
	</div>
	<script type="text/javascript" src="scripts.js"></script>
</body>
</html>