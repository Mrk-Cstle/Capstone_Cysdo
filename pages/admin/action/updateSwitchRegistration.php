<?php
session_start();
include '../../include/dbConnection.php';
if (isset($_POST['quota'])) {
    // Retrieve the submitted value
    $quotaValue = $_POST['quota'];

    $sql = "UPDATE registration_control SET  quota = $quotaValue WHERE reg_control_id = 1";

    if (mysqli_query($conn, $sql)) {
        // Send a response back to the client if needed
        echo 'Update Quota Value: ' . $quotaValue;
    } else {
        // Handle database query errors
        echo 'Error updating switch status: ' . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // Handle the case where 'quota' is not set in the POST data
    echo 'Error: Quota not received.';
}
