<?php
session_start();
include '../../include/dbConnection.php';
if (isset($_POST['id']) && isset($_POST['action'])) {
    $applicantId = $_POST['id'];
    $semYr = $_POST['semesterYear'];

    $sql = "SELECT scholar.*,newscholar_award.*
        FROM newscholar_award
        JOIN scholar ON scholar.scholar_id = newscholar_award.scholar_id
       
        WHERE newscholar_award.scholar_release_id = '$applicantId'";





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

        if ($_POST["action"] == "done") {
            approve($row, $semYr);
        }
        // else if ($_POST["action"] == "edit") {
        //     edit();
        // } 
        else if ($_POST["action"] == "delete") {
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

function approve($row, $semYr)
{
    global $conn;
    $scholar_id = $row['scholar_id'];
    $applicantId = $_POST['id'];

    $action = "Released New Scholar";

    try {
        mysqli_query($conn, "UPDATE newscholar_award SET newrelease_status = 'done'  WHERE scholar_release_id = '$applicantId'");
        mysqli_query($conn, "UPDATE scholar SET scholar_award_status = '$action'  WHERE scholar_id = '$scholar_id'");

        // $insertQuery = "INSERT INTO registration_approval (application_id,action_type ) VALUES ('$applicantId', '$action')";
        // $result = mysqli_query($conn, $insertQuery);
        // if ($result) {

        //     // echo "Scholar Approve";
        //     // send_sms("We are pleased to inform you " . $fullName . " that your CYSDO Scholarship application has been accepted. You will receive further details regarding the examination date in the near future. Please stay updated by regularly checking of facebook page and our official website. Congratulations on your selection, and feel free to reach out if you have any questions.  " . "\n\n-CYSDO CSJDM-", $contactNum1);
        // } else {
        //     echo "Insert Failed: " . mysqli_error($conn);
        // }

    } catch (mysqli_sql_exception $e) {
        // Hide the error message from the frontend
        echo "An error occurred";
    }
}

function decline($contactNum1, $fullName, $user)
{
    global $conn;

    $applicantId = $_POST['id'];


    $action = "decline";
    try {
        mysqli_query($conn, "DELETE FROM newscholar_award WHERE scholar_release_id =  '$applicantId'");

        echo "Delete Successful";

        // if ($result) {
        //     send_sms("We regret to inform you " . $fullName . " that your CYSDO Scholarship application has not been accepted. We appreciate your interest in the scholarship program and encourage you to consider other opportunities in the future. If you have any questions or require feedback, please do not hesitate to reach out.\n\n-CYSDO CSJDM-", $contactNum1);
        //     echo "Scholar Declined";
        // } else {
        //     echo "Insert Failed: " . mysqli_error($conn);
        // }
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
