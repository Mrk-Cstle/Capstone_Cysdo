<?php
include '../../include/selectDb.php';
include '../../include/dbConnection.php';

// Start a database transaction
mysqli_begin_transaction($conn);

$success = true;

// Get a list of applicant_ids from registration_approval with action_type = 'decline'
$applicantIdsToDelete = [];
$deleteApprovalQuery = "SELECT application_id FROM registration_approval WHERE action_type = 'decline'";

$result = mysqli_query($conn, $deleteApprovalQuery);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $applicantIdsToDelete[] = $row['application_id'];
    }

    // Delete records from registration_approval with action_type = 'decline'
    $deleteApprovalQuery = "DELETE FROM registration_approval WHERE action_type = 'decline'";
    if (!mysqli_query($conn, $deleteApprovalQuery)) {
        $success = false;
    }

    // Delete corresponding records from registration using the applicant_ids
    if (!empty($applicantIdsToDelete)) {
        $applicantIdsToDeleteStr = implode(',', $applicantIdsToDelete);
        $deleteRegistrationQuery = "DELETE FROM registration WHERE applicant_id IN ($applicantIdsToDeleteStr)";
        if (!mysqli_query($conn, $deleteRegistrationQuery)) {
            $success = false;
        }
    }
} else {
    $success = false;
}

// Commit the transaction if all delete queries were successful, otherwise, roll back
if ($success) {
    mysqli_commit($conn);
    echo "All applicants with a decline status have been deleted successfully from both tables.";
} else {
    mysqli_rollback($conn);
    echo "Error deleting applicants: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
