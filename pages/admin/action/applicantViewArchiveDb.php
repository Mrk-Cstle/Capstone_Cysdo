<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use function PHPSTORM_META\type;

require '../../../vendor/autoload.php';
session_start();
include '../../include/dbConnection.php';
if (isset($_POST['id']) && isset($_POST['action'])) {
    $applicantId = $_POST['id'];

    $sql = "SELECT * FROM registration_archive WHERE applicant_id = '$applicantId'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Step 3: Check if the row exists
        if (mysqli_num_rows($result) > 0) {
            // Step 4: Fetch the row
            $row = mysqli_fetch_assoc($result);

            // Step 5: Access the values of the row
            extract($row);
            // ...

            // Process the retrieved row as needed
            // For example, you can display the values or perform any other operations

            // Free the result set
            mysqli_free_result($result);
            $user =
                $_SESSION['user'];
        }

        if ($_POST["action"] == "approve") {
            approve($contactNum1, $contactNum2, $fullName, $user, $row);
        }
        // else if ($_POST["action"] == "edit") {
        //     edit();
        // } 
        else if ($_POST["action"] == "decline") {
            decline($contactNum1, $contactNum2, $fullName, $user, $row);
        } else {
            echo "error";
        }
        // Process the approval/decline logic here based on the $applicantId and $action

        // Respond with a success message (optional)

    } else {
        // Respond with an error message if any parameter is missing
        echo "Error: Missing parameters in the request.";
    }
}

function send_sms($message, $contactNum1)
{
    $url = "https://sms.teamssprogram.com/api/send";

    // API key and other parameters
    $params = [
        "key" => "57048235d40a3b216bd64e2e6efed7cf380a39f9",
        "phone" => $contactNum1,
        "message" => $message,
        "device" => "505",
        "sim" => "1",
        "priority" => "1",
    ];

    // Send the SMS
    $response = file_get_contents($url . '?' . http_build_query($params));

    // if ($response === "OK") {
    //     echo "SMS sent successfully!";
    // } else {
    //     echo "Failed to send SMS. Response: " . $response;
    // }
}

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
        $mail->Subject = 'Application Status';
        $mail->Body    = $message;

        // Send the email
        $mail->send();
        echo 'Email has been sent</br>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}</br>";
    }
}
function approve($contactNum1, $contactNum2, $fullName, $user, $rowData)
{
    global $conn;
    $applicant_id = $rowData['applicant_id'];
    $fullName = $rowData['fullName'];
    $lastName = $rowData['lastName'];
    $firstName = $rowData['firstName'];
    $middleName = $rowData['middleName'];
    $status = $rowData['status'];
    $gender = $rowData['gender'];
    $civilStatus = $rowData['civilStatus'];
    $voter = $rowData['voter'];
    $birthDate = $rowData['birthDate'];
    $birthPlace = $rowData['birthPlace'];
    $citizenship = $rowData['citizenship'];
    $fullAddress = $rowData['fullAddress'];
    $houseAddress = $rowData['houseAddress'];
    $streetAddress = $rowData['streetAddress'];
    $barangayAddress = $rowData['barangayAddress'];
    $contactNum1 = $rowData['contactNum1'];
    $contactNum2 = $rowData['contactNum2'];
    $pic2x2 = $rowData['pic2x2'];
    $signaturePic = $rowData['signaturePic'];
    $schoolName = $rowData['schoolName'];
    $schoolAddress = $rowData['schoolAddress'];
    $schoolType = $rowData['schoolType'];
    $course = $rowData['course'];
    $yearLevel = $rowData['yearLevel'];
    $fatherName = $rowData['fatherName'];
    $fatherStatus = $rowData['fatherStatus'];
    $fatherAddress = $rowData['fatherAddress'];
    $fatherContact = $rowData['fatherContact'];
    $fatherOccupation = $rowData['fatherOccupation'];
    $fatherEduc = $rowData['fatherEduc'];
    $motherName = $rowData['motherName'];
    $motherStatus = $rowData['motherStatus'];
    $motherAddress = $rowData['motherAddress'];
    $motherContact = $rowData['motherContact'];
    $motherOccupation = $rowData['motherOccupation'];
    $motherEduc = $rowData['motherEduc'];
    $guardianName = $rowData['guardianName'];
    $guardianAddress = $rowData['guardianAddress'];
    $guardianContact = $rowData['guardianContact'];
    $guardianOccupation = $rowData['guardianOccupation'];
    $guardianEduc = $rowData['guardianEduc'];
    $sibling1 = $rowData['sibling1'];
    $sibling2 = $rowData['sibling2'];
    $sibling3 = $rowData['sibling3'];
    $sibling4 = $rowData['sibling4'];
    $sibling5 = $rowData['sibling5'];
    $sibling6 = $rowData['sibling6'];
    $sizeFamily = $rowData['sizeFamily'];
    $annualGross = $rowData['annualGross'];
    $date = $rowData['date'];

    $applicantId = $_POST['id'];
    $action = $_POST['action'];

    try {
        $insertQuery = "INSERT INTO registration (applicant_id, fullName, lastName, firstName, middleName,  gender, civilStatus, voter, birthDate, birthPlace, citizenship, fullAddress, houseAddress, streetAddress, barangayAddress, contactNum1, contactNum2, pic2x2, signaturePic, schoolName, schoolAddress, schoolType, course, yearLevel, fatherName, fatherStatus, fatherAddress, fatherContact, fatherOccupation, fatherEduc, motherName, motherStatus, motherAddress, motherContact, motherOccupation, motherEduc, guardianName, guardianAddress, guardianContact, guardianOccupation, guardianEduc, sibling1, sibling2, sibling3, sibling4, sibling5, sibling6, sizeFamily, annualGross, date) VALUES ('$applicant_id','$fullName','$lastName','$firstName','$middleName','$gender','$civilStatus','$voter','$birthDate','$birthPlace','$citizenship','$fullAddress','$houseAddress','$streetAddress','$barangayAddress','$contactNum1','$contactNum2','$pic2x2','$signaturePic','$schoolName','$schoolAddress','$schoolType','$course','$yearLevel','$fatherName','$fatherStatus','$fatherAddress','$fatherContact','$fatherOccupation','$fatherEduc','$motherName','$motherStatus','$motherAddress','$motherContact','$motherOccupation','$motherEduc','$guardianName','$guardianAddress','$guardianContact','$guardianOccupation','$guardianEduc','$sibling1','$sibling2','$sibling3','$sibling4','$sibling5','$sibling6','$sizeFamily','$annualGross','$date')";
        $result = mysqli_query($conn, $insertQuery);
        if ($result) {



            mysqli_query($conn, "DELETE FROM registration_archive WHERE applicant_id = '$applicantId'");

            echo "Scholar Declined";
        } else {
            echo "Insert Failed: " . mysqli_error($conn);
        }
    } catch (mysqli_sql_exception $e) {
        // Hide the error message from the frontend
        echo "An error occurred";
    }
}

function decline($contactNum1, $contactNum2, $fullName, $user, $rowData)
{
    global $conn;

    $applicantId = $_POST['id'];
    $action = $_POST['action'];

    $action = "decline";
    try {






        mysqli_query($conn, "DELETE FROM registration_archive WHERE applicant_id = '$applicantId'");

        echo "Scholar Deleted";
    } catch (mysqli_sql_exception $e) {
        // Hide the error message from the frontend
        echo "An error occurred";
    }
}
