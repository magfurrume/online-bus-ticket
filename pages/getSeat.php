<?php
    include 'db.php';
    error_reporting(0);
    $busId = $_REQUEST['busId'];
    $routeId = $_REQUEST['routeId'];
    $timeId = $_REQUEST['timeId'];
    $dateT = $_REQUEST['dateT'];
?>

<h1 class="text-center">Select Seat</h1>
<hr class="divider">
<form method="post" action="checkout.php">
    <input type="hidden" name="busId" value="<?php echo $busId; ?>">
    <input type="hidden" name="routeId" value="<?php echo $routeId; ?>">
    <input type="hidden" name="timeId" value="<?php echo $timeId; ?>">
    <input type="hidden" name="dateT" value="<?php echo $dateT; ?>">
<div class="row text-center col-md-offset-4">
    <div class="col-md-6 text-center">
        <div class="col-md-3 text-center seatCss">
            <?php
            
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'A1'";
            
            $result = $con->query($sql);
           
            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;" value="A1">A1
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">A1
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'A2'";
           
            $result = $con->query($sql);
           

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="A2">A2
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">A2
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'A3'";
            
            $result = $con->query($sql);

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="A3">A3
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">A3
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'A4'";
            
            $result = $con->query($sql);
            

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="A4">A4
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">A4
            <?php
            }
            ?>
        </div>
    </div>
</div>




<div class="row text-center col-md-offset-4">
    <div class="col-md-6 text-center">
        <div class="col-md-3 text-center seatCss">
            <?php
            
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'B1'";
            
            $result = $con->query($sql);
           
            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="B1">B1
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">B1
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'B2'";
           
            $result = $con->query($sql);
           

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="B2">B2
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">B2
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'B3'";
            
            $result = $con->query($sql);

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="B3">B3
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">B3
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'B4'";
            
            $result = $con->query($sql);
            

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="B4">B4
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">B4
            <?php
            }
            ?>
        </div>
    </div>
</div>




<div class="row text-center col-md-offset-4">
    <div class="col-md-6 text-center">
        <div class="col-md-3 text-center seatCss">
            <?php
            
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'C1'";
            
            $result = $con->query($sql);
           
            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="C1">C1
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">C1
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'C2'";
           
            $result = $con->query($sql);
           

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="C2">C2
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">C2
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'C3'";
            
            $result = $con->query($sql);

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="C3">C3
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">C3
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'C4'";
            
            $result = $con->query($sql);
            

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="C4">C4
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">C4
            <?php
            }
            ?>
        </div>
    </div>
</div>




<div class="row text-center col-md-offset-4">
    <div class="col-md-6 text-center">
        <div class="col-md-3 text-center seatCss">
            <?php
            
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'D1'";
            
            $result = $con->query($sql);
           
            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="D1">D1
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">D1
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'D2'";
           
            $result = $con->query($sql);
           

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="D2">D2
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">D2
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'D3'";
            
            $result = $con->query($sql);

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="D3">D3
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">D3
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'D4'";
            
            $result = $con->query($sql);
            

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="D4">D4
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">D4
            <?php
            }
            ?>
        </div>
    </div>
</div>




<div class="row text-center col-md-offset-4">
    <div class="col-md-6 text-center">
        <div class="col-md-3 text-center seatCss">
            <?php
            
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'E1'";
            
            $result = $con->query($sql);
           
            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="E1">E1
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">E1
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'E2'";
           
            $result = $con->query($sql);
           

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="E2">E2
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">E2
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'E3'";
            
            $result = $con->query($sql);

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="E3">E3
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">E3
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'E4'";
            
            $result = $con->query($sql);
            

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="E4">E4
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">E4
            <?php
            }
            ?>
        </div>
    </div>
</div>




<div class="row text-center col-md-offset-4">
    <div class="col-md-6 text-center">
        <div class="col-md-3 text-center seatCss">
            <?php
            
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'F1'";
            
            $result = $con->query($sql);
           
            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="F1">F1
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">F1
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'F2'";
           
            $result = $con->query($sql);
           

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="F2">F2
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">F2
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'F3'";
            
            $result = $con->query($sql);

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="F3">F3
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">F3
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'F4'";
            
            $result = $con->query($sql);
            

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="F4">F4
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">F4
            <?php
            }
            ?>
        </div>
    </div>
</div>




<div class="row text-center col-md-offset-4">
    <div class="col-md-6 text-center">
        <div class="col-md-3 text-center seatCss">
            <?php
            
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'G1'";
            
            $result = $con->query($sql);
           
            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="G1">G1
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">G1
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'G2'";
           
            $result = $con->query($sql);
           

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="G2">G2
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">G2
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'G3'";
            
            $result = $con->query($sql);

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="G3">G3
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">G3
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'G4'";
            
            $result = $con->query($sql);
            

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="G4">G4
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">G4
            <?php
            }
            ?>
        </div>
    </div>
</div>




<div class="row text-center col-md-offset-4">
    <div class="col-md-6 text-center">
        <div class="col-md-3 text-center seatCss">
            <?php
            
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'H1'";
            
            $result = $con->query($sql);
           
            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="H1">H1
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">H1
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'H2'";
           
            $result = $con->query($sql);
           

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="H2">H2
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">H2
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'H3'";
            
            $result = $con->query($sql);

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="H3">H3
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">H3
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'H4'";
            
            $result = $con->query($sql);
            

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="H4">H4
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">H4
            <?php
            }
            ?>
        </div>
    </div>
</div>




<div class="row text-center col-md-offset-4">
    <div class="col-md-6 text-center">
        <div class="col-md-3 text-center seatCss">
            <?php
            
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'I1'";
            
            $result = $con->query($sql);
           
            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="I1">I1
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">I1
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'I2'";
           
            $result = $con->query($sql);
           

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="I2">I2
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">I2
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'I3'";
            
            $result = $con->query($sql);

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="I3">I3
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">I3
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'I4'";
            
            $result = $con->query($sql);
            

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="I4">I4
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">I4
            <?php
            }
            ?>
        </div>
    </div>
</div>




<div class="row text-center col-md-offset-4">
    <div class="col-md-6 text-center">
        <div class="col-md-3 text-center seatCss">
            <?php
            
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'J1'";
            
            $result = $con->query($sql);
           
            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="J1">J1
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">J1
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'J2'";
           
            $result = $con->query($sql);
           

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="J2">J2
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">J2
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'J3'";
            
            $result = $con->query($sql);

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="J3">J3
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">J3
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 text-center seatCss">
            <?php
            $sql = "SELECT * FROM `bookings` WHERE `bus_id` = ".$busId." AND `route_id` = ".$routeId." AND `time_id` = ".$timeId." AND `date` LIKE '".$dateT."' AND `seat_number` LIKE 'J4'";
            
            $result = $con->query($sql);
            

            if(mysqli_num_rows($result)==0) {
            ?>
            <input type="checkbox" name="seats[]" style="width:25px; height:25px;"  value="J4">J4
            <?php
            }else{
            ?>
            <input type="checkbox" checked disabled style="width:25px; height:25px;">J4
            <?php
            }
            ?>
        </div>
    </div>
</div>
<hr class="divider">
<div class="row text-center">
    <button type="submit" class="btn btn-success">Processed</button>
    <button class="btn btn-danger" onclick="cancelAll();">Cancel</button>
</div>
    
</form>




