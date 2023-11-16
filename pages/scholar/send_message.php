<?php
include 'include/session.php';
include '../include/selectDb.php';

$admin_id = 24;
$staffId = 183;
$scholar_id = $_SESSION['scholar_id'];

if (isset($_POST['message'])) {
    $message = $_POST['message'];
    $sender = $_SESSION['user'];

    $query = "INSERT INTO chat_messages (sender, message, admin_id, staffId, scholar_id) VALUES ('$sender', '$message', $admin_id, $staffId, $scholar_id)";
    $result = mysqli_query($conn, $query);

    // Rest of your code...
}

mysqli_close($conn);
?>
