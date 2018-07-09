<?php
	include_once("../pages/db.php");
?>
<?php

	$bus_id = $_GET['bus_id'];

	//bookings
	$sql = "DELETE FROM bookings WHERE id='$bus_id'";

	if ($con->query($sql) === TRUE) {
	    echo "Record deleted successfully";
	} else {
	    echo "Error deleting record: " . $conn->error;
	}

	//route
	$sql = "DELETE FROM route WHERE id='$bus_id'";

	if ($con->query($sql) === TRUE) {
	    echo "Record deleted successfully";
	} else {
	    echo "Error deleting record: " . $conn->error;
	}

	//bus_time
	$sql = "DELETE FROM bus_time WHERE id='$bus_id'";

	if ($con->query($sql) === TRUE) {
	    echo "Record deleted successfully";
	} else {
	    echo "Error deleting record: " . $conn->error;
	}

	//bus
	$sql = "DELETE FROM bus WHERE id='$bus_id'";

	if ($con->query($sql) === TRUE) {
	    echo "Record deleted successfully";
	} else {
	    echo "Error deleting record: " . $conn->error;
	}
	header("Location: admin.php");
?>