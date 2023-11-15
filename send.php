<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host       = 'smtp.hostinger.com'; // Specify your SMTP server
    $mail->SMTPAuth   = true; // Enable SMTP authentication
    $mail->Username   = 'csjdm@cysdo-ceap.online'; // SMTP username
    $mail->Password   = 'Cysdo-ceap1'; // SMTP password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, 'ssl' also accepted
    $mail->Port       = 587; // TCP port to connect to

    // Sender information
    $mail->setFrom('csjdm@cysdo-ceap.online', 'Your Name');

    // Recipient
    $mail->addAddress('castillo.markdavid64@gmail.com', 'Recipient Name');

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Subject of the email';
    $mail->Body    = 'This is the HTML message body';

    // Send the email
    $mail->send();
    echo 'Email has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
