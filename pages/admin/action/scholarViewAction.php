<?php
session_start();
include '../../include/dbConnection.php';
if (isset($_POST['id']) && isset($_POST['action'])) {
    $applicantId = $_POST['id'];


    $sql = "SELECT * FROM scholar WHERE scholar_id = '$applicantId'";

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

        if ($_POST["action"] == "graduated") {
            graduate($row);
        } else if ($_POST["action"] == "remove") {
            remove($row);
        } else if ($_POST["action"] == "reset") {
            resetPass($row);
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

function resetPass($row)
{
    global $conn;

    $scholar_id = $row['scholar_id'];
    $contact_num1 = $row['contact_num1'];
    $hashedPassword = password_hash($contact_num1, PASSWORD_DEFAULT);

    try {
        $result = mysqli_query($conn, "SELECT password FROM scholar WHERE scholar_id = '$scholar_id'");
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $existingPassword = $row['password'];

            // Compare the new hashed password with the existing password
            if (password_verify($contact_num1, $existingPassword)) {
                echo 'No changes were made';
            } else {
                // Update the password
                mysqli_query($conn, "UPDATE scholar SET password = '$hashedPassword' WHERE scholar_id = '$scholar_id'");

                if (mysqli_affected_rows($conn) > 0) {
                    echo 'Reset Password Successfully';
                } else {
                    echo 'Error occurred during password reset';
                }
            }
        } else {
            echo 'Invalid Admin ID';
        }
    } catch (mysqli_sql_exception $e) {
        // Hide the error message from the frontend
        echo "An error occurred";
    }
}

function remove($row)
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



    echo "Scholar Declined";
}


function graduate($row)
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
