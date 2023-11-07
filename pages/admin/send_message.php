<?php
session_start();

// Include your database connection script
include '../include/selectDb.php';

if (isset($_POST['message']) && isset($_POST['scholar_id'])) {
    $message = $_POST['message'];
    $admin_id = $_SESSION['user_id']; // Get the admin's ID
    $scholar_id = $_POST['scholar_id']; // Get the scholar's ID from the POST data
    $sender = $_SESSION['user']; // Get the admin's name from the session

    // Insert the message into the chat_messages table with the admin's name and scholar's ID
    $query = "INSERT INTO chat_messages (sender, message, scholar_id, admin_id) VALUES ('$sender', '$message', $scholar_id, $admin_id)";
    mysqli_query($conn, $query);

    // Add a record to a table that tracks which admin sent the message
    $query = "INSERT INTO admin_messages (admin_id, message_id) VALUES ($admin_id, LAST_INSERT_ID())";
    mysqli_query($conn, $query);
}

mysqli_close($conn);
?>
