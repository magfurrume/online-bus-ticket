<?php
    include 'db.php';
    session_start();

    $busId = $_REQUEST['busId'];
    $routeId = $_REQUEST['routeId'];
    $timeId = $_REQUEST['timeId'];
    $dateT = $_REQUEST['dateT'];
    $userId = $_SESSION['user_id'];

    $_SESSION['bus_id'] = $busId;
    $_SESSION['date'] = $dateT;
    $_SESSION['time_id'] = $timeId;


    $seats = "";
    
    if(!empty($_POST['seats']) && isset($_SESSION['user_id'])){    
        foreach($_POST['seats'] as $selected){
            $sql = "INSERT INTO `bookings` (`bus_id`, `route_id`, `time_id`, `date`, `seat_number`, `user_id`) VALUES ('$busId', '$routeId', '$timeId', '$dateT', '$selected', '$userId')";            
            $con->query($sql);
            $seats = $seats.' '.$selected;
        }
    }
    $_SESSION['seats'] = $seats;

    header('Location: send_mail.php');
    
?>
