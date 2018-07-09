<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ;?>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body >

    <div id="wrapper" >

        <!-- Navigation -->
        <?php include 'navigation.php' ;?>

        <!-- Page Content -->
        <div id="page-wrapper" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Home</h1>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row" >
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Choose Options
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Select Bus</label>
                                            <select class="form-control" id="selectBus" onchange="busSelected();">
                                                <option value="">Choose Bus</option>
                                                <?php
                                                $sql = "SELECT * FROM bus";
                                                $result = $con->query($sql);

                                                while ($row = mysqli_fetch_assoc($result)) {
                                                
                                                
                                                ?>
                                                
                                                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Select Route</label>
                                            <select class="form-control" id="selectRoute"  onchange="routeSelected();">
                                                <option value="">Choose Route</option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Select Date</label>
                                            <input class="form-control" id="datepicker">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Select Time</label>
                                            <select class="form-control" id="selectTime" onchange="timeSelected();">
                                                <option value="">Choose Time</option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center" id="seatDiv">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    
    <?php include 'footer.php' ;?>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script>
    <!-- Using latest jQuery, and jQuery UI -->
        flatpickr("#datepicker", {});
        $('#selectRoute').hide();
        $('#selectTime').hide();
        $('#datepicker').hide();
        $('#seatDiv').hide();
        function busSelected(){
            var busId = $('#selectBus').val();
            $.ajax({
              url: "getRoute.php",
              method: "get",
              data: {
                  busId: busId
              }
            }).done(function(response) {
              $('#selectRoute').show();
                $('#selectRoute').html(response);
            });
        }

        function routeSelected(){
            var busId = $('#selectBus').val();
            var routeId = $('#selectRoute').val();
            $.ajax({
              url: "getTime.php",
              method: "get",
              data: {
                  busId: busId,
                  routeId: routeId
              }
            }).done(function(response) {
              $('#datepicker').show();
              $('#selectTime').show();
                $('#selectTime').html(response);
            });
        }
        
        function timeSelected(){
            var busId = $('#selectBus').val();
            var routeId = $('#selectRoute').val();
            var timeId = $('#selectTime').val();
            var dateT = $('#datepicker').val();
            $.ajax({
              url: "getSeat.php",
              method: "get",
              data: {
                  busId: busId,
                  routeId: routeId,
                  timeId: timeId,
                  dateT: dateT
              }
            }).done(function(response) {
                $('#seatDiv').show();
                $('#seatDiv').html(response);
                $("#seatDiv").css("fontSize", "25px"); 
                $("#seatDiv").css("font-weight", "bold"); 
            });
        }
    </script>

</body>

</html>
