<?php
include '../include/selectDb.php';

$admin_id = 24;
$excluded_admin_name = "City Youth and Sports Development Office - CSJDM";

$query = "SELECT * FROM chat_messages WHERE admin_id = $admin_id AND sender != '$excluded_admin_name' ORDER BY timestamp DESC LIMIT 10";
$result = mysqli_query($conn, $query);

$notifications = array();
while ($row = mysqli_fetch_assoc($result)) {
    $notifications[] = $row;
}

// Fetch count of unread notifications
$countQuery = "SELECT COUNT(*) as unread_count FROM chat_messages WHERE admin_id = $admin_id AND sender != '$excluded_admin_name' AND is_read = 0";
$countResult = mysqli_query($conn, $countQuery);
$unreadCount = mysqli_fetch_assoc($countResult)['unread_count'];

mysqli_close($conn);

$response = array(
    'notifications' => $notifications,
    'unread_count' => $unreadCount,
);

echo json_encode($response);
?>
