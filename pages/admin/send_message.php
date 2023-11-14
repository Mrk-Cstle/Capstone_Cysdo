<?php
session_start();

// Include your database connection script
include '../include/selectDb.php';

if (isset($_POST['message']) && isset($_POST['scholar_id'])) {
    $message = $_POST['message'];
    $admin_id = 24; // Get the admin's ID
    $staffId = 183;
    $sender = 'City Youth and Sports Development Office - CSJDM'; // Set the sender's name
    $scholar_id = $_POST['scholar_id']; // Get the scholar's ID from the POST data

    // Check the role of the user (admin or staff)
    $role = $_SESSION['role'];
    $user_id = $_SESSION['user_id'];

    if ($role === 'admin') {
        // For admin, use admin_id
        $query = "INSERT INTO chat_messages (sender, message, scholar_id, admin_id) VALUES ('$sender', '$message', $scholar_id, $admin_id)";
        mysqli_query($conn, $query);
        
        // Add a record to a table that tracks which admin sent the message
        $query = "INSERT INTO admin_messages (admin_id, message_id) VALUES ($user_id, LAST_INSERT_ID())";
        mysqli_query($conn, $query);
    } elseif ($role === 'staff') {
        // For staff, use staff_id
        $query = "INSERT INTO chat_messages (sender, message, scholar_id, staffId) VALUES ('$sender', '$message', $scholar_id, $user_id)";
        mysqli_query($conn, $query);

        // Add a record to a table that tracks which staff sent the message
        $query = "INSERT INTO staff_messages (staffId, message_id) VALUES ($user_id, LAST_INSERT_ID())";
        mysqli_query($conn, $query);
    }
}

mysqli_close($conn);
?>
