<?php
    include 'db.php';
?>

<option value="">Choose Route</option>
<?php
$sql = "SELECT * FROM route WHERE bus_id=".$_REQUEST['busId'];
$result = $con->query($sql);

while ($row = mysqli_fetch_assoc($result)) {


?>

<option value="<?php echo $row['id']; ?>"><?php echo $row['route_name']; ?></option>
<?php
}
?>
