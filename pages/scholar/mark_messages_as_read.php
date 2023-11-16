<?php
include '../include/selectDb.php';
include 'include/session.php';

$admin_id = 24;
$staffId = 183;
$scholar_id = $_SESSION['scholar_id'];

// Check if sender is provided in the POST data
if (isset($_POST['sender'])) {
    $excluded_sender = $_POST['sender'];

    // Mark messages as read excluding specific sender
    $updateQuery = "UPDATE chat_messages SET is_read = 1 WHERE admin_id = $admin_id AND sender = '$excluded_sender' AND is_read = 0";
    mysqli_query($conn, $updateQuery);
}

mysqli_close($conn);
?>
