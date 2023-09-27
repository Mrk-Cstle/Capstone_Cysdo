<?php

include '../../include/dbConnection.php';
if (isset($_POST['id']) && isset($_POST['action'])) {
    $applicantId = $_POST['id'];

    $sql = "SELECT * FROM registration WHERE applicant_id = '$applicantId'";
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
        }

        if ($_POST["action"] == "approve") {
            approve($contactNum1, $fullName);
        }
        // else if ($_POST["action"] == "edit") {
        //     edit();
        // } 
        else if ($_POST["action"] == "decline") {
            decline($contactNum1, $fullName);
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

function approve($contactNum1, $fullName)
{
    global $conn;

    $applicantId = $_POST['id'];
    $action = $_POST['action'];

    $action = "approve";
    mysqli_query($conn, "UPDATE registration SET status = 'done'  WHERE applicant_id = '$applicantId'");
    $insertQuery = "INSERT INTO registration_approval (application_id,action_type ) VALUES ('$applicantId', '$action')";
    $result = mysqli_query($conn, $insertQuery);
    if ($result) {

        echo "Scholar Approve";
        send_sms("You Have been accpeted, " .  $fullName, $contactNum1);
    } else {
        echo "Insert Failed: " . mysqli_error($conn);
    }
}

function decline($contactNum1, $fullName)
{
    global $conn;

    $applicantId = $_POST['id'];
    $action = $_POST['action'];

    $action = "decline";
    try {
        mysqli_query($conn, "UPDATE registration SET status = 'done'  WHERE applicant_id = '$applicantId'");
        $insertQuery = "INSERT INTO registration_approval (application_id,action_type ) VALUES ('$applicantId', '$action')";
        $result = mysqli_query($conn, $insertQuery);
        if ($result) {
            send_sms("You Have been accpeted, " .  $fullName, $contactNum1);
            echo "Scholar Declined";
        } else {
            echo "Insert Failed: " . mysqli_error($conn);
        }
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
        "phone" => "09928957901",
        "message" => $message,
        "device" => "505",
        "sim" => "1",
        "priority" => "1",
    ];

    // Send the SMS
    $response = file_get_contents($url . '?' . http_build_query($params));

    if ($response === "OK") {
        echo "SMS sent successfully!";
    } else {
        echo "Failed to send SMS. Response: " . $response;
    }
}
