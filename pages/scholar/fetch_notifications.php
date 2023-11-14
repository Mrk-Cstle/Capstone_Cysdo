<?php
include '../include/selectDb.php';

$admin_id = 24;
$staffId = 183;

// Query for admin messages
$queryAdmin = "SELECT * FROM chat_messages WHERE admin_id = $admin_id ORDER BY timestamp DESC LIMIT 10";
$resultAdmin = mysqli_query($conn, $queryAdmin);

$notificationsAdmin = array();
while ($row = mysqli_fetch_assoc($resultAdmin)) {
    $notificationsAdmin[] = $row;
}

// Fetch count of unread admin notifications
$countQueryAdmin = "SELECT COUNT(*) as unread_count FROM chat_messages WHERE admin_id = $admin_id AND is_read = 0";
$countResultAdmin = mysqli_query($conn, $countQueryAdmin);
$unreadCountAdmin = (int) mysqli_fetch_assoc($countResultAdmin)['unread_count'];

// Query for staff messages
$queryStaff = "SELECT * FROM chat_messages WHERE staffId = $staffId ORDER BY timestamp DESC LIMIT 10";
$resultStaff = mysqli_query($conn, $queryStaff);

$notificationsStaff = array();
while ($row = mysqli_fetch_assoc($resultStaff)) {
    $notificationsStaff[] = $row;
}

// Fetch count of unread staff notifications
$countQueryStaff = "SELECT COUNT(*) as unread_count FROM chat_messages WHERE staffId = $staffId AND is_read = 0";
$countResultStaff = mysqli_query($conn, $countQueryStaff);
$unreadCountStaff = (int) mysqli_fetch_assoc($countResultStaff)['unread_count'];

mysqli_close($conn);

$responseAdmin = array(
    'notifications' => $notificationsAdmin,
    'unread_count' => $unreadCountAdmin,
);

$responseStaff = array(
    'notifications' => $notificationsStaff,
    'unread_count' => $unreadCountStaff,
);

echo json_encode(array('admin' => $responseAdmin, 'staff' => $responseStaff));
?>
