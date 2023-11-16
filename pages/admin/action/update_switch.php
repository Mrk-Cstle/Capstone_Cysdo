<?php

include '../../include/dbConnection.php';
if (isset($_POST['switchStatus'])) {
    // Get the switch status from the AJAX request
    $switchStatus = $_POST['switchStatus'];

    // Establish a database connection (modify with your actual connection details)

    if (!$conn) {
        die('Could not connect: ' . mysqli_connect_error());
    }

    // Update the switch status in the database
    $sql = "UPDATE renewal_control SET switch_status = $switchStatus WHERE renew_control_id = 1";

    if (mysqli_query($conn, $sql)) {
        // Send a response back to the client if needed
        echo 'Switch status updated successfully.';
    } else {
        // Handle database query errors
        echo 'Error updating switch status: ' . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // Handle the case where switchStatus is not set
    echo 'Invalid request.';
}
