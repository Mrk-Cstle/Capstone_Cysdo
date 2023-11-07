<?php
session_start();

// Include your database connection script
include '../include/selectDb.php';

// Handle sending chat messages from the scholar
if (isset($_POST['message'])) {
    $message = $_POST['message'];
    $scholar_id = $_SESSION['user_id']; // Get the scholar's ID
    $admin_id = 1; // Replace with the actual admin's user ID
    $sender = $_SESSION['user']; // Get the scholar's name from the session

    // Insert the message into the chat_messages table with the scholar's name
    $query = "INSERT INTO chat_messages (sender, message) VALUES ('$sender', '$message')";
    mysqli_query($conn, $query);

    // Add a record to a table that tracks which scholar sent the message
    $query = "INSERT INTO scholar_messages (scholar_id, message_id) VALUES ($scholar_id, LAST_INSERT_ID())";
    mysqli_query($conn, $query);
}

// Fetch and display chat messages with the scholar's name
$query = "SELECT sender, message FROM chat_messages ORDER BY timestamp DESC LIMIT 10"; // Fetch the last 10 messages
$result = mysqli_query($conn, $query);

$chat_messages = array();
while ($row = mysqli_fetch_assoc($result)) {
    $chat_messages[] = $row;
}

mysqli_close($conn);
?>
