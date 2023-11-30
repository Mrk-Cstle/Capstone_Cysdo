<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../../vendor/autoload.php';
session_start();
include '../../include/dbConnection.php';
if (isset($_POST['id']) && isset($_POST['action'])) {
    $applicantId = $_POST['id'];

    $sql = "SELECT registration.*
FROM registration
JOIN registration_approval ON registration.applicant_id = registration_approval.application_id
WHERE registration_approval.action_id  = '$applicantId'";
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

        if ($_POST["action"] == "pass") {

            approve($contactNum1, $contactNum2, $fullName, $user);
        }
        // else if ($_POST["action"] == "edit") {
        //     edit();
        // } 
        else if ($_POST["action"] == "failed") {
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
        // echo 'Email has been sent</br>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}</br>";
    }
}
function approve($contactNum1, $contactNum2, $fullName, $user)
{
    global $conn;

    $applicantId = $_POST['id'];
    $action = $_POST['action'];


    $action = "pass";
    try {
        mysqli_query($conn, "UPDATE registration_approval SET exam_status = 'done'  WHERE action_id = '$applicantId'");
        $insertQuery = "INSERT INTO examination (action_id,result ) VALUES ('$applicantId', '$action')";
        $result = mysqli_query($conn, $insertQuery);
        if ($result) {
            $lastInsertID = mysqli_insert_id($conn);
            $insertQuery = "INSERT INTO registration_requirements (examination_id,req_status ) VALUES ('$lastInsertID', 'Pending')";
            $results = mysqli_query($conn, $insertQuery);
            if ($results) {
                $text = "We are delighted to inform you, " . $fullName . ", that you have successfully passed the scholarship examination for the CYSDO Scholarship Program! This is a significant achievement, and we are excited to have you join our scholarship recipients. Your hard work and dedication have paid off, and we believe that your academic journey will be filled with great promise. Congratulations on this remarkable accomplishment! Please stay tuned for further details and instructions regarding the next steps in the scholarship award process. You can keep yourself updated by visiting our official website and following our Facebook page. If you have any questions or need assistance, please feel free to reach out to us. We are here to support you every step of the way. Once again, congratulations on your well-deserved success! Please upload your requirements [here](http://localhost/Capstone_Cysdo/pages/applicant/applicantForm.php?id=" . $lastInsertID . "). \n\n-CYSDO CSJDM-";



                send_sms($text, '+63' . $contactNum1);

                email($text, $contactNum2, $fullName);
                echo "pass";
            } else {
                echo "An error occurred";
            }
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
    $text = " We regret to inform you " . $fullName . " that after careful evaluation, you did not pass the scholarship examination for the CYSDO Scholarship Program. We understand that this may be disappointing news, and we appreciate the effort and dedication you put into your application.Please know that this decision does not diminish your potential and achievements. Scholarships are highly competitive, and this result does not define your academic capabilities or future success.We encourage you to keep pursuing your educational goals with determination and enthusiasm. We believe that your dedication will lead to many accomplishments in the future.If you have any questions or would like feedback on your application, please do not hesitate to reach out to us. We are here to provide support and guidance.We thank you for your interest in the CYSDO Scholarship Program and wish you all the best in your future academic endeavors.\n\n-CYSDO CSJDM-";
    $action = "failed";
    try {
        mysqli_query($conn, "UPDATE registration_approval SET exam_status = 'done'  WHERE action_id = '$applicantId'");
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

        $type = 'Failed Exam';

        $insertQuery = "INSERT INTO registration_archive (applicant_id,type, fullName, lastName, firstName, middleName, status, gender, civilStatus, voter, birthDate, birthPlace, citizenship, fullAddress, houseAddress, streetAddress, barangayAddress, contactNum1, contactNum2, pic2x2, signaturePic, schoolName, schoolAddress, schoolType, course, yearLevel, fatherName, fatherStatus, fatherAddress, fatherContact, fatherOccupation, fatherEduc, motherName, motherStatus, motherAddress, motherContact, motherOccupation, motherEduc, guardianName, guardianAddress, guardianContact, guardianOccupation, guardianEduc, sibling1, sibling2, sibling3, sibling4, sibling5, sibling6, sizeFamily, annualGross, date) VALUES ('$applicant_id','$type','$fullName','$lastName','$firstName','$middleName','$status','$gender','$civilStatus','$voter','$birthDate','$birthPlace','$citizenship','$fullAddress','$houseAddress','$streetAddress','$barangayAddress','$contactNum1','$contactNum2','$pic2x2','$signaturePic','$schoolName','$schoolAddress','$schoolType','$course','$yearLevel','$fatherName','$fatherStatus','$fatherAddress','$fatherContact','$fatherOccupation','$fatherEduc','$motherName','$motherStatus','$motherAddress','$motherContact','$motherOccupation','$motherEduc','$guardianName','$guardianAddress','$guardianContact','$guardianOccupation','$guardianEduc','$sibling1','$sibling2','$sibling3','$sibling4','$sibling5','$sibling6','$sizeFamily','$annualGross','$date')";
        $result = mysqli_query($conn, $insertQuery);
        if ($result) {


            send_sms($text, '+63' . $contactNum1);

            email($text, $contactNum2, $fullName);
            mysqli_query($conn, "DELETE FROM registration WHERE applicant_id = '$applicant_id'");
            echo "failed";
        } else {
            echo "Insert Failed: " . mysqli_error($conn);
        }
    } catch (mysqli_sql_exception $e) {
        // Hide the error message from the frontend
        echo "An error occurred";
    }
}
