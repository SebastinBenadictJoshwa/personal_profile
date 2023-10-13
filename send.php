<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer classes
require 'vendor/autoload.php';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp-relay.brevo.com';
    $mail->SMTPAuth = true;
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'youremail';
    $mail->Password = 'yourpassword';
    $mail->CharSet = 'UTF-8';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $fromEmail = $_POST['email']; 
    $toEmail = '#';   
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $subject = $_POST['sub'];
    $message = $_POST['message'];
    $emailBody = "First Name: $firstName\n";
    $emailBody .= "Last Name: $lastName\n";
    $emailBody .= "Email: $email\n";
    $emailBody .= "Subject: $subject\n";
    $emailBody .= "Message:\n$message";
    $mail->setFrom($fromEmail, $firstName);
    $mail->addAddress($toEmail, 'Joshwa');
    $mail->isHTML(false);
    $mail->Subject = 'Message from Website';
    $mail->Body = $emailBody;
    $status=$mail->send();
    if($status){
    $_SESSION['success']="Message Sent Successfully !!!";
    }else{
        $_SESSION['error']="Message Not Sent !!!";
    }
    // echo $_SESSION['success'];exit;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
    
?>
