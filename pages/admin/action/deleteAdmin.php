<?php
include '../../include/selectDb.php';
include '../../include/dbConnection.php';

if (isset($_POST['admin_id'])) {
    $adminId = mysqli_real_escape_string($conn, $_POST['admin_id']);
    
    // Perform the delete operation here
    $sql = "DELETE FROM admin WHERE admin_id = $adminId";
    
    if (mysqli_query($conn, $sql)) {
        echo "Admin record deleted successfully.";
    } else {
        echo "Error deleting admin record: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}
?>
