<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    include '../pages/header.php' ;
    include_once("../pages/db.php");
    ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="../bootstrap/css/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="../bootstrap/css/npm.js"></script>
    <script type="text/javascript" src="../bootstrap/css/npm.js"></script>

</head>

<body>

    <div id="wrapper" style="text-align: center;">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Bus Reservation</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li >
                    
                    <a href="../index.php"><i class="fa fa-sign-out fa-fw"></i>Home</a>
                    </a>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>

        <h2>
            <strong><a href="add_bus.php">Add New Bus</a></strong>
        </h2>

    </div>
    <div class="container">
        <table class="table">
          <thead class="thead-dark" >
            <tr style="color: black">
              <th scope="col">#</th>
              <th scope="col">Bus Name</th>
              <th scope="col">Total Seat</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php  

            $sql = "SELECT * FROM bus";
            $result = $con->query($sql);

            $i = 1;
            if ($result->num_rows > 0) {
                        
                while($row = $result->fetch_assoc()) {

                    ?>

                    <tr>
                      <th scope="row"><?php echo $i++;?></th>
                      <td><a href="bus_details.php?bus_id=<?php echo $row['id']; ?>"><?php echo $row["name"];?></a></td>
                      <td><?php echo $row["total_seat"];?></td>
                      <td><a href="delete_bus.php?bus_id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
                    </tr>

                    <?php
                }
            }

            ?>
            


          </tbody>
        </table>
        
    </div>
</body>
</html>