<?php
include '../include/selectDb.php';

$admin_id = 24;
$scholar_id = 5;

$query = "SELECT sender, message FROM chat_messages WHERE admin_id = $admin_id AND scholar_id = $scholar_id ORDER BY timestamp DESC";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo '<p><strong>' . $row['sender'] . ':</strong> ' . $row['message'] . '</p>';
}

mysqli_close($conn);
?>
