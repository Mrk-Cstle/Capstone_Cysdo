<?php
include '../include/selectDb.php';
include 'include/session.php';

$admin_id = 24;
$staffId = 183;
$scholar_id = $_SESSION['scholar_id'];

// Check if sender is provided in the POST data
if (isset($_POST['sender'])) {
    $excluded_sender = $_POST['sender'];

    // Mark messages as read for the specific scholar and sender
    $updateQuery = "UPDATE chat_messages SET is_read = 1 WHERE admin_id = $admin_id AND sender = '$excluded_sender' AND is_read = 0";
    mysqli_query($conn, $updateQuery);

    // Update the session variable for the counter
    $countQuery = "SELECT COUNT(*) as unread_count FROM chat_messages WHERE admin_id = $admin_id AND scholar_id = $scholar_id AND is_read = 0";
    $countResult = mysqli_query($conn, $countQuery);
    $unreadCount = (int)mysqli_fetch_assoc($countResult)['unread_count'];

    $_SESSION['notification_counter'] = $unreadCount;

    echo 'success';
}

mysqli_close($conn);
?>
