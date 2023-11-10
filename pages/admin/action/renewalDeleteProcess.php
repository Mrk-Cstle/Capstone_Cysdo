<?php
include '../../include/selectDb.php';
include '../../include/dbConnection.php';

// Start a database transaction
mysqli_begin_transaction($conn);

$success = true;

// Get a list of applicant_ids from registration_approval with action_type = 'decline'
$applicantIdsToDelete = [];
$deleteApprovalQuery = "SELECT process_id FROM renewal_process ";

$result = mysqli_query($conn, $deleteApprovalQuery);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $applicantIdsToDelete[] = $row['process_id'];
    }

    // Delete records from registration_approval with action_type = 'decline'
    $deleteApprovalQuery = "DELETE FROM renewal_process ";
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
