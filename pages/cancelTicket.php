<?php
    include 'db.php';
    $id = $_REQUEST['idDel'];
    $sql = "DELETE FROM `bookings` WHERE `bookings`.`id` = ".$id;
    $con->query($sql);
?>