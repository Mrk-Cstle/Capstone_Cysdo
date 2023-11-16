<?php

include '../../include/dbConnection.php';
if (isset($_POST['switchStatus'])) {
    // Get the switch status from the AJAX request


    // Establish a database connection (modify with your actual connection details)

    if (!$conn) {
        die('Could not connect: ' . mysqli_connect_error());
    }

    // Update the switch status in the database

    $updateQuery = "UPDATE scholar SET scholar_status = NULL";

    $result = mysqli_query($conn, $updateQuery);


    // Close the database connection
    mysqli_close($conn);
} else {
    // Handle the case where switchStatus is not set
    echo 'Invalid request.';
}
