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
    
    if (mysqli_query($conn, $updateQuery)) {
        // Update successful

        // Provide feedback that the update was successful
        echo 'success';
        
        // Update session variable for the counter
        $_SESSION['notification_counter'][$admin_id] = 0;
        $_SESSION['notification_counter'][$staffId] = 0;
    } else {
        // Handle the case where the update query failed
        echo 'Error updating messages';
    }
}

mysqli_close($conn);
?>
