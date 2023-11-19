<?php
include '../../include/dbConnection.php';
include '../include/session.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../../vendor/autoload.php';

function email($message, $contactNum2, $fullName)
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
        $mail->addAddress($contactNum2, $fullName);

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Announcement';
        $mail->Body    = $message;

        // Send the email
        $mail->send();
        echo 'Email has been sent</br>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}</br>";
    }
}


$newPost = $_POST['postText'];
$uploader = $_SESSION['user'];
$category = $_POST['category']; // Retrieve the category value from the $_POST array

$uploadQuery = "INSERT INTO announcements (announcement, uploader, category) VALUES ('$newPost', '$uploader', '$category')";

if (mysqli_query($conn, $uploadQuery)) {

    if ($category == 'applicant') {
        $message = $newPost;
        $query = "SELECT * FROM registration";
        $result = $conn->query($query);
        if ($result) {
            // Fetch the rows
            $rows = [];
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }

            // Loop through each row and send an email
            foreach ($rows as $row) {
                $contactNum2 = $row['contactNum2'];
                $fullName = $row['fullName'];

                email($message, $contactNum2, $fullName);
            }

            // Close the result set
            $result->close();
        } else {
            echo "Error executing query: " . $conn->error;
        }
    }
    $uploadId = mysqli_insert_id($conn);
    $uploadDate = date('Y-m-d'); // Assuming the uploadDate is the current date
    $response = [
        'uploadId' => $uploadId,
        'uploader' => $uploader,
        'category' => $category,
        'uploadDate' => $uploadDate,
        'announcement' => $newPost
    ];
    echo json_encode($response);
} else {
    // Handle the case where the insertion fails
    echo "Error inserting post: " . mysqli_error($conn);
}
