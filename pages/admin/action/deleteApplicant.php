<?php
include '../../include/selectDb.php';
include '../../include/dbConnection.php';

if (isset($_GET['applicant_id'])) {
    $applicantId = mysqli_real_escape_string($conn, $_GET['applicant_id']); // Sanitize the input

    // Perform the delete operation on the registration_approval table
    $deleteQuery = "DELETE FROM registration_approval WHERE application_id = '$applicantId'";

    if (mysqli_query($conn, $deleteQuery)) {
        // Return a success response (you can customize the response as needed)
        echo "Applicant deleted successfully.";
    } else {
        // Return an error response if the delete operation fails
        echo "Error deleting applicant: " . mysqli_error($conn);
    }
} else {
    // Handle the case where 'applicant_id' is not provided in the GET request
    echo "No 'applicant_id' provided in the request.";
}

// Close the database connection
mysqli_close($conn);
?>
