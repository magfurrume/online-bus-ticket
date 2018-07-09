<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ;?>
    
    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include 'navigation.php' ;?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Bought Ticket</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                
                
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Booked Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Date</th>
                                        <th>Bus</th>
                                        <th>Route</th>
                                        <th>Time</th>
                                        <th>Seat</th>
                                        <th>Cancel</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php							  
											$query = $con->query("select * from bookings WHERE user_id = ".$_SESSION['user_id']);
											$i = 1;
											
											while ($row = mysqli_fetch_array($query)) {
                                            ?>
                                                <tr class="text-center">
                                                    <td class="text-center">
                                                        <?php echo $i; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo $row['date']; ?>
                                                        
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                                            $q = $con->query("select * from bus WHERE id = ".$row['bus_id']);
                                                            $r = mysqli_fetch_array($q);
                                                            echo $r['name'];
                                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                                            $q = $con->query("select * from route WHERE id = ".$row['route_id']);
                                                            $r = mysqli_fetch_array($q);
                                                            echo $r['route_name'];
                                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                                            $q = $con->query("select * from bus_time WHERE id = ".$row['time_id']);
                                                            $r = mysqli_fetch_array($q);
                                                            echo $r['time'];
                                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo $row['seat_number']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <button type="button" class="btn btn-danger btn-xs" onclick="cancelTicket(<?php echo $row['id']; ?>)">Cancel Ticket</button>
                                                    </td>
                                                </tr>
                                                <?php											
												$i++;
											}
                                        ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
                
                
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    
    <?php include 'footer.php' ;?>
    
    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
        
        
        
        
        
        
        
        
        function cancelTicket(id) {

            var result = confirm("Sure to cancel ?");
            if (result) {
                $.ajax({
                        method: "get",
                        url: 'cancelTicket.php',
                        data: {
                            idDel: id
                        }
                    })
                    .done(function(response) {
                        location.reload();
                    });
            }


        }
    </script>

</body>

</html>
