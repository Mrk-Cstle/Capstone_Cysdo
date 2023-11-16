<?php
include 'include/session.php';
include '../include/selectDb.php';

$admin_id = 24;
$staffId = 183;
$scholar_id = $_SESSION['scholar_id'];

// Query for both admin and staff messages for the specific scholar
$query = "SELECT * FROM chat_messages WHERE (admin_id = $admin_id OR staffId = $staffId) AND scholar_id = $scholar_id ORDER BY timestamp ASC LIMIT 10";
$result = mysqli_query($conn, $query);

$notificationsAdmin = array();
$notificationsStaff = array();

while ($row = mysqli_fetch_assoc($result)) {
    if ($row['admin_id'] == $admin_id) {
        $notificationsAdmin[] = $row;
    } elseif ($row['staffId'] == $staffId) {
        $notificationsStaff[] = $row;
    }
}

// Fetch count of unread admin notifications for the specific scholar
$countQueryAdmin = "SELECT COUNT(*) as unread_count FROM chat_messages WHERE admin_id = $admin_id AND scholar_id = $scholar_id AND is_read = 0";
$countResultAdmin = mysqli_query($conn, $countQueryAdmin);
$unreadCountAdmin = (int)mysqli_fetch_assoc($countResultAdmin)['unread_count'];

// Fetch count of unread staff notifications for the specific scholar
$countQueryStaff = "SELECT COUNT(*) as unread_count FROM chat_messages WHERE staffId = $staffId AND scholar_id = $scholar_id AND is_read = 0";
$countResultStaff = mysqli_query($conn, $countQueryStaff);
$unreadCountStaff = (int)mysqli_fetch_assoc($countResultStaff)['unread_count'];

mysqli_close($conn);

// Calculate the total unread count
$totalUnreadCount = $unreadCountAdmin + $unreadCountStaff;

$responseAdmin = array(
    'notifications' => $notificationsAdmin,
    'unread_count' => $unreadCountAdmin,
);

$responseStaff = array(
    'notifications' => $notificationsStaff,
    'unread_count' => $unreadCountStaff,
);

echo json_encode(array('admin' => $responseAdmin, 'staff' => $responseStaff, 'total_unread_count' => $totalUnreadCount));
?>
