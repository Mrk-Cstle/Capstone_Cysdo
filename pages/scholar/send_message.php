<?php
session_start();

// Include your database connection script
include '../include/selectDb.php';

// Define the admin_id and scholar_id for the message
$admin_id = 24;
$scholar_id = 5;

// Handle sending chat messages from the scholar
if (isset($_POST['message'])) {
    $message = $_POST['message'];
    $sender = $_SESSION['user']; // Get the scholar's name from the session

    // Insert the message into the chat_messages table with the scholar's name, admin_id, and scholar_id
    $query = "INSERT INTO chat_messages (sender, message, admin_id, scholar_id) VALUES ('$sender', '$message', $admin_id, $scholar_id)";
    mysqli_query($conn, $query);

    // Add a record to a table that tracks which scholar sent the message
    $query = "INSERT INTO scholar_messages (scholar_id, message_id) VALUES ($scholar_id, LAST_INSERT_ID())";
    mysqli_query($conn, $query);
}

// Fetch and display chat messages with the scholar's name
$query = "SELECT sender, message FROM chat_messages WHERE scholar_id = $scholar_id ORDER BY timestamp DESC LIMIT 10"; // Fetch the last 10 messages for the specified scholar
$result = mysqli_query($conn, $query);

$chat_messages = array();
while ($row = mysqli_fetch_assoc($result)) {
    $chat_messages[] = $row;
}

// Close the database connection
mysqli_close($conn);

// Return the chat messages as JSON to be processed on the scholar's side
echo json_encode($chat_messages);
?>
