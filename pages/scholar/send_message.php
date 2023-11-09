<?php
include 'include/session.php';
include '../include/selectDb.php';

$admin_id = 24;
$scholar_id = $_SESSION['scholar_id'];

if (isset($_POST['message'])) {
    $message = $_POST['message'];
    $sender = $_SESSION['user'];

    $query = "INSERT INTO chat_messages (sender, message, admin_id, scholar_id) VALUES ('$sender', '$message', $admin_id, $scholar_id)";
    $result = mysqli_query($conn, $query);

    // Rest of your code...
}

mysqli_close($conn);

// Rest of the code...
?>
