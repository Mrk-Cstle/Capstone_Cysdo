<?php
include '../../include/selectDb.php';
include '../../include/dbConnection.php';

if (isset($_GET['applicant_id'])) {
    $applicantId = mysqli_real_escape_string($conn, $_GET['applicant_id']); // Sanitize the input

    // Start a database transaction
    mysqli_begin_transaction($conn);

    // Define the delete query for the 'registration' table
    $deleteRegistrationQuery = "DELETE FROM registration WHERE applicant_id = '$applicantId'";

    // Define the delete query for the 'registration_approval' table
    $deleteApprovalQuery = "DELETE FROM registration_approval WHERE application_id = '$applicantId'";

    $success = true;

    // Execute the first delete query
    if (!mysqli_query($conn, $deleteRegistrationQuery)) {
        $success = false;
    }

    // Execute the second delete query
    if (!mysqli_query($conn, $deleteApprovalQuery)) {
        $success = false;
    }

    // Commit the transaction if both delete queries were successful, otherwise, roll back
    if ($success) {
        mysqli_commit($conn);
        echo "Applicant deleted successfully from both tables.";
    } else {
        mysqli_rollback($conn);
        echo "Error deleting applicant: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // Handle the case where 'applicant_id' is not provided in the GET request
    echo "No 'applicant_id' provided in the request.";
}
?>
