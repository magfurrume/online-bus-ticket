<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

//Load Composer's autoloader
session_start();
require 'PHPMailer/PHPMailerAutoload.php';
include 'db.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {


	//getData
	$user_id = $_SESSION['user_id'];
	$bus_id = $_SESSION['bus_id'];
    $seats = $_SESSION['seats'];

    $date = $_SESSION['date'];
    $time_id = $_SESSION['time_id'];




	$sql = "SELECT name FROM bus WHERE id=".$bus_id;
	$result = $con->query($sql);
	if ($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
			$bus_name = $row['name'];
		}
	}


	$sql2 = "SELECT name,email FROM user WHERE id=".$user_id;
	$result2 = $con->query($sql2);
	if ($result2->num_rows > 0){
		while($row2 = $result2->fetch_assoc()) {
			$user_name = $row2['name'];
			$email = $row2['email'];
		}
	}



    $sql3 = "SELECT TIME_FORMAT(time, '%h:%i %p') as time FROM bus_time WHERE id=".$time_id;
    $result3 = $con->query($sql3);
    if ($result3->num_rows > 0){
        while($row3 = $result3->fetch_assoc()) {
            $time = $row3['time'];
        }
    }

	//echo $bus_name.$user_name.$email.$seat;

    //Server settings
    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'bus.reservation.2018@gmail.com';                 // SMTP username
    $mail->Password = '123456bus.reservation';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('bus.reservation.2018@gmail.com', 'Bus Reservation');
    $mail->addAddress($email, $user_name);     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('att.zip');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Bus Reservation';
    $mail->Body    = 'Dear, <strong style="color:black;font-size: 150%;">'.$user_name.'</strong><br> You have succesfully reserved your desired location. Have a safe journey and take a look. <br>Bus Name : <b>'.$bus_name.'</b><br>Seat : <b>'.$seats.'</b>'.'
    <br>Date : <b>'.$date.'</b>,<b>'.$time.'</b><br> Thanks you.<br>If you having any problem please contact with us on <strong style="color:red;">+8801929661667</strong>';
    $mail->AltBody = 'Thank you';

    if(!($seats=="")){
        $mail->send();
        echo "SEND";
    }
    
    //header('Location: /BusReservation/congz.php');
    header('Location: bought_ticket.php');
} catch (Exception $e) {
    die( 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo);
    //header('Location: /BusReservation/congz.php');
    //header('Location: bought_ticket.php');
}