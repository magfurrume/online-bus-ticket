<?php
    include 'db.php';
?>

<option value="">Choose Route</option>
<?php
$sql = "SELECT * FROM bus_time WHERE bus_id=".$_REQUEST['busId']." && route_id=".$_REQUEST['routeId'];
$result = $con->query($sql);

while ($row = mysqli_fetch_assoc($result)) {


?>

<option value="<?php echo $row['id']; ?>"><?php echo $row['time']; ?></option>
<?php
}
?>
