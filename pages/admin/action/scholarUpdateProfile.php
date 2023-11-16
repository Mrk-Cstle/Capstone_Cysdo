<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../../vendor/autoload.php';

include '../../include/dbConnection.php';

function email($message, $email, $fullName)
{



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
        $mail->setFrom('csjdm@cysdo-ceap.online', 'City Youth and Sports Development Office');

        // Recipient
        $mail->addAddress($email, $fullName);

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Reset Account';
        $mail->Body    = $message;

        // Send the email
        $mail->send();
        echo 'Email has been sent' . ' | ';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


$user_id = $_POST['userid'];
$user = $_POST['user'];
$password = $_POST['password'];



$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$query = mysqli_query($conn, "SELECT * FROM scholar WHERE scholar_id = '$user_id'");
$row = mysqli_fetch_assoc($query);

if (
    $row['password'] === $password && $row['user'] === $user
) {
    // No changes were made
    echo 'No changes were made';
} else {
    // Changes were made, execute the UPDATE query
    mysqli_query($conn, "UPDATE scholar SET user = '$user', password = '$hashedPassword'  WHERE scholar_id = '$user_id'");

    if (mysqli_affected_rows($conn) > 0) {

        $fullName = $row['full_name'];
        $email = $row['email'];

        $text = 'Hello, ' . $fullName . '! Your password has been set to ' . $password . ' and your user has been set to ' . $user . '. Please log in to your account and change your account user and password as soon as possible.';

        email($text, $email, $fullName);
        echo 'Save Changes Successfully';
    } else {
        echo 'No changes were';
    }
}
