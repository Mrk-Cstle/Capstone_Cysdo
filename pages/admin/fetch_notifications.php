<?php
include '../include/selectDb.php';

$admin_id = 24;

$query = "SELECT * FROM chat_messages WHERE admin_id = $admin_id ORDER BY timestamp DESC LIMIT 10";
$result = mysqli_query($conn, $query);

$notifications = array();
while ($row = mysqli_fetch_assoc($result)) {
    $notifications[] = $row;
}

mysqli_close($conn);

echo json_encode($notifications);
