<?php
include '../../include/selectDb.php';
include '../../include/dbConnection.php';

// Perform the delete all operation (adjust your query as needed)
$query = "DELETE FROM registration_approval WHERE action_type = 'decline'";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "All applicants have been deleted successfully.";
} else {
    echo "Error deleting all applicants: " . mysqli_error($conn);
}
?>
