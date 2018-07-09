<?php
include_once("../pages/db.php");

?>
<?php  
	
	if(isset($_POST['save'])){
		$total_seat = 40;
		$bus_id = 0;
		$route_id = 0;

		$bus_name = mysqli_real_escape_string($con, $_POST['bus_name']);
		$from = mysqli_real_escape_string($con, $_POST['from']);
		$to = mysqli_real_escape_string($con, $_POST['to']);
		$time = mysqli_real_escape_string($con, $_POST['time']);



		$sql = "SELECT * FROM bus where name='$bus_name' LIMIT 1";

		//echo $sql;


		$result = $con->query($sql);
		if ($result->num_rows > 0) {
    			
    		$row = $result->fetch_assoc() ;

    		$bus_id = $row['id'];
			//add route

	    		$route_name = $from.'-'.$to;
	    		if(mysqli_query($con, "INSERT INTO route (bus_id, route_name)
					VALUES ('$bus_id', '$route_name')")){

	    			$sql = "SELECT id FROM route WHERE 1 ORDER BY id DESC LIMIT 1";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {
		    			
		    			while($row = $result->fetch_assoc()) {

		    				$route_id = $row['id'];
		    			}
		    		}

		    		if(mysqli_query($con, "INSERT INTO bus_time (bus_id, route_id, time)
						VALUES ('$bus_id', '$route_id', '$time')")){

		    			header("Location: admin.php");
					}
	    		}

    	}else{

    		//add bus 
			if(mysqli_query($con, "INSERT INTO bus (name, total_seat)
				VALUES ('$bus_name', '$total_seat')")){
				//header("Location: ../index.php");

				//die("suss");

				$sql = "SELECT id FROM bus WHERE 1 ORDER BY id DESC LIMIT 1";
				$result = $con->query($sql);
				if ($result->num_rows > 0) {
	    			
	    			while($row = $result->fetch_assoc()) {

	    				$bus_id = $row['id'];
	    			}
	    		}


	    		//add route

	    		$route_name = $from.'-'.$to;
	    		if(mysqli_query($con, "INSERT INTO route (bus_id, route_name)
					VALUES ('$bus_id', '$route_name')")){

	    			$sql = "SELECT id FROM route WHERE 1 ORDER BY id DESC LIMIT 1";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {
		    			
		    			while($row = $result->fetch_assoc()) {

		    				$route_id = $row['id'];
		    			}
		    		}

		    		if(mysqli_query($con, "INSERT INTO bus_time (bus_id, route_id, time)
						VALUES ('$bus_id', '$route_id', '$time')")){

		    			header("Location: admin.php");
					}
	    		}
			} 
			else{
				header("Location: add_bus.php");
			}
    	}


	}

?>







<!DOCTYPE html>
<html>
<head>
	<title>Add New bus</title>
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
				<h2>Add New Bus</h2>
			   <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
				   	<div id="busname_div" class="form-group">
				   	  <label>Bus Name</label> <br>
				   	  <input type="text" name="bus_name" class="form-control">
				   	  <div id="name_error"></div>
				   	</div>
				   	<div id="from" class="form-group">
				   	  <label>From</label> <br>
                        <select class="form-control" name="from">
                          <option value="Dhaka">Dhaka</option>
                          <option value="Khulna">Khulna</option>
                          <option value="Rajshahi">Rajshahi</option>
                          <option value="Sylhet">Sylhet</option>
                          <option value="Barisal">Sylhet</option>
                          <option value="Satkhira">Satkhira</option>
                          <option value="Rangpur">Rangpur</option>
                          <option value="Nator">Nator</option>
       
                          <option value="bagerhat">Bagerhat</option>
                          <option value="gopalganj">Gopalganj</option>
                        </select>
				   	  <div id="from_error"></div>
				   	</div>
				   	<div id="to" class="form-group">
				   	  <label>To</label> <br>
				   	  <select class="form-control" name="to">
                            <option value="Satkhira">Satkhira</option>
                            <option value="Rangpur">Rangpur</option>
                            <option value="Nator">Nator</option>
                            <option value="Bagerhat">Bagerhat</option>
                            <option value="Gopalganj">Gopalganj</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Sylhet">Sylhet</option>
                            <option value="Barisal">Sylhet</option>
                        </select>
				   	</div>
				   	<div id="bustime" class="form-group">
				   	   <label>Time</label> <br>
				   	   <input type="time" name="time" class="form-control">
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