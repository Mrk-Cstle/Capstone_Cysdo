<?php
include '../../include/selectDb.php';
include '../../include/dbConnection.php';

if (isset($_POST['staffId'])) {
    $staffId = mysqli_real_escape_string($conn, $_POST['staffId']);
    
    // Perform the deletion query
    $sql = "DELETE FROM staff WHERE staffId = '$staffId'";
    if (mysqli_query($conn, $sql)) {
        // Deletion successful
        echo "Staff record deleted successfully.";
    } else {
        // Deletion failed
        echo "Error deleting staff record: " . mysqli_error($conn);
    }
}
