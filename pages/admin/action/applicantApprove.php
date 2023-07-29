<?php

include '../../include/dbConnection.php';
if (isset($_POST['id']) && isset($_POST['action'])) {



    if ($_POST["action"] == "approve") {
        approve();
    }
    // else if ($_POST["action"] == "edit") {
    //     edit();
    // } 
    else if ($_POST["action"] == "decline") {
        decline();
    } else {
        echo "error";
    }
    // Process the approval/decline logic here based on the $applicantId and $action

    // Respond with a success message (optional)

} else {
    // Respond with an error message if any parameter is missing
    echo "Error: Missing parameters in the request.";
}

function approve()
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
    } else {
        echo "Insert Failed: " . mysqli_error($conn);
    }
}

function decline()
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

            echo "Scholar Declined";
        } else {
            echo "Insert Failed: " . mysqli_error($conn);
        }
    } catch (mysqli_sql_exception $e) {
        // Hide the error message from the frontend
        echo "An error occurred";
    }
}
