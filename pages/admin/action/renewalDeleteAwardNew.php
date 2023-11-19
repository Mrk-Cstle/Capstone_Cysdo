<?php
include '../../include/selectDb.php';
include '../../include/dbConnection.php';

// Start a database transaction
mysqli_begin_transaction($conn);

$success = true;

// Get a list of applicant_ids from registration_approval with action_type = 'decline'
$applicantIdsToDelete = [];
$deleteApprovalQuery = "SELECT scholar_release_id FROM newscholar_award ";

$result = mysqli_query($conn, $deleteApprovalQuery);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $applicantIdsToDelete[] = $row['scholar_release_id'];
    }

    // Delete records from registration_approval with action_type = 'decline'
    $deleteApprovalQuery = "DELETE FROM newscholar_award ";
    if (!mysqli_query($conn, $deleteApprovalQuery)) {
        $success = false;
    }
}


// Commit the transaction if all delete queries were successful, otherwise, roll back
if ($success) {
    mysqli_commit($conn);
    echo "All Renewal deleted successfully .";
} else {
    mysqli_rollback($conn);
    echo "Error deleting Renewal: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
