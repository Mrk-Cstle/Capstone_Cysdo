<?php
session_start();
include '../../include/dbConnection.php';
if (isset($_POST['id']) && isset($_POST['action'])) {
    $applicantId = $_POST['id'];
    $semesterYear = $_POST['semesterYear'];

    $sql = "SELECT renewal_process.*, renewal.*, scholar.*
        FROM renewal
        JOIN scholar ON scholar.scholar_id = renewal.scholar_id
        JOIN renewal_process ON renewal_process.renewal_id = renewal.renewal_id
        WHERE renewal_process.process_id = '$applicantId'";

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
            approve($row, $semesterYear, $full_name, $contact_num1);
        }
        // else if ($_POST["action"] == "edit") {
        //     edit();
        // } 
        else if ($_POST["action"] == "decline") {
            decline($row, $semesterYear, $full_name, $contact_num1);
        } else if ($_POST["action"] == "delete") {
            deleted($row, $semesterYear, $applicantId);
        } else if ($_POST["action"] == "delete_decline") {
            delete_decline($row, $semesterYear, $applicantId);
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

function approve($row, $semesterYear, $full_name, $contact_num1)
{
    global $conn;
    $applicantId = $_POST['id'];
    $serviceValue = $_POST['serviceValue'];
    $commentValue = $_POST['commentValue'];
    $semester = $_POST['semester'];
    $scholar_id = $row['scholar_id'];
    $renewal_id = $row['renewal_id'];


    try {
        mysqli_query($conn, "UPDATE renewal_process SET process_status = 'approve'  WHERE process_id = '$applicantId'");
        // send_sms("Hello " . $full_name . ", " . $commentValue, $contact_num1);
        mysqli_query($conn, "UPDATE renewal SET status = 'approve'  WHERE renewal_id = '$renewal_id'");
        mysqli_query($conn, "UPDATE scholar SET status_lastsem = '$semesterYear' , c_service1st = '$serviceValue' , $semester = 'approve renewal', scholar_status = 'Approve' WHERE scholar_id = '$scholar_id'");
        $insertQuery = "INSERT INTO renewal_award (renewal_id,semester_year ) VALUES ('$renewal_id', '$semesterYear')";
        $result = mysqli_query($conn, $insertQuery);
        if ($result) {
            echo "pass";
        } else {
            echo "Insert Failed: " . mysqli_error($conn);
        }
    } catch (mysqli_sql_exception $e) {
        // Hide the error message from the frontend
        echo "An error occurred";
    }
}

function decline($row, $semesterYear, $full_name, $contact_num1)
{
    global $conn;

    $applicantId = $_POST['id'];
    $action = $_POST['action'];

    $action = "decline";

    $serviceValue = $_POST['serviceValue'];
    $commentValue = $_POST['commentValue'];
    $semester = $_POST['semester'];

    $scholar_id = $row['scholar_id'];
    $renewal_id = $row['renewal_id'];



    mysqli_query($conn, "UPDATE renewal SET status = 'decline'  WHERE renewal_id = '$renewal_id'");
    mysqli_query($conn, "UPDATE renewal_process SET process_status = 'decline', comment = '$commentValue'  WHERE process_id = '$applicantId'");
    send_sms("Hello " . $full_name . ", " . $commentValue, $contact_num1);
    mysqli_query($conn, "UPDATE scholar SET  $semester = 'reupload renewal'  WHERE scholar_id = '$scholar_id'");



    echo "failed";
}


function deleted($row, $semesterYear, $applicantId)
{
    global $conn;

    $applicantId = $_POST['id'];
    $action = $_POST['action'];

    $action = "decline";
    try {
        mysqli_query($conn, "DELETE FROM renewal_process WHERE process_id =  '$applicantId'");



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
function delete_decline($row, $semesterYear, $applicantId)
{
    global $conn;

    $applicantId = $_POST['id'];
    $action = $_POST['action'];
    $renewal_id = $row['renewal_id'];
    $action = "decline";
    try {
        mysqli_query($conn, "DELETE FROM renewal WHERE renewal_id =  '$renewal_id'");



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
mysqli_query($conn, "DELETE FROM renewal_award WHERE award_id =  '$applicantId'");
