<?php
session_start();
include '../../include/dbConnection.php';
if (isset($_POST['id']) && isset($_POST['action'])) {
    $applicantId = $_POST['id'];

    $sql = "SELECT registration.*, registration_approval.* ,examination.*
FROM registration
JOIN registration_approval ON registration.applicant_id = registration_approval.application_id
JOIN examination ON examination.action_id = registration_approval.action_id

WHERE examination_id  = $applicantId";
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

            $user =
                $_SESSION['user'];
        }

        if ($_POST["action"] == "approve") {

            approve($contactNum1, $applicant_id, $lastName, $firstName, $middleName, $fullName, $user);
        }
        // else if ($_POST["action"] == "edit") {
        //     edit();
        // } 
        else if ($_POST["action"] == "denied") {
            decline($contactNum1, $fullName, $user);
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

function approve($contactNum1, $applicant_id, $lastName, $firstName, $middleName, $fullName, $user)
{

    global $conn;

    $applicantId = $_POST['id'];


    mysqli_query($conn, "UPDATE examination SET requirements_status = 'Approve'  WHERE examination_id = '$applicantId'");
    $insertQuery = "INSERT INTO scholar (contact_num1, applicant_id,last_name, first_name,middle_name, full_name ) VALUES ('$contactNum1', '$applicant_id', '$lastName', '$firstName', '$middleName', '$fullName')";
    $result = mysqli_query($conn, $insertQuery);
    if ($result) {


        echo "" . $fullName . " Official Scholar";

        send_sms(" We are pleased to announce that you " . $fullName . " that you have been selected as a scholar by CYSDO. This is in recognition of your excellent academic achievements and dedication. This letter marks the beginning of your scholarship journey with us. In the upcoming weeks, we will provide you with more information about your scholarship benefits and any necessary announcement. Please bear with us as we finalize these details. If you have any questions or need assistance, please feel free to contact us . Additionally, we encourage you to connect with us on our official Facebook page: City Youth and Sports Development Office - CSJDM . You can send us a message there if you have any questions or if there is anything specific you like to discuss. Congratulations on this achievement, and we look forward to supporting your academic pursuits as an official scholar.  " . "\n\n-CYSDO CSJDM-", $contactNum1);
    } else {
        echo "Insert Failed: " . mysqli_error($conn);
    }
}

function decline($contactNum1, $fullName, $user)
{
    global $conn;

    $applicantId = $_POST['id'];
    $action = $_POST['action'];

    $action = "failed";
    try {
        mysqli_query($conn, "UPDATE examination SET requirements_status = 'Failed'  WHERE examination_id = '$applicantId'");


        send_sms(" We regret to inform you " . $fullName . " that after a thorough evaluation, you did not meet the requirements for the CYSDO Scholarship Program. We understand that this news may be disappointing, and we acknowledge the effort and dedication you invested in your application. Should you have any questions or seek feedback regarding your application, please dont hesitate to reach out to us. We are here to provide support and guidance. We appreciate your interest in the CYSDO Scholarship Program and wish you all the best in your future academic endeavors.\n\n-CYSDO CSJDM-", $contactNum1);
        echo "" . $fullName . " Declined Scholar";
    } catch (mysqli_sql_exception $e) {
        // Hide the error message from the frontend
        echo "An error occurred";
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
