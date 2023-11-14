<?php
session_start();

// Include your database connection script
include '../include/selectDb.php';

if (isset($_POST['scholar_id'])) {
    $scholar_id = $_POST['scholar_id'];

    // Mark messages as read for the specified scholar
    markMessagesAsRead($conn, $scholar_id);
}

mysqli_close($conn);
?>
