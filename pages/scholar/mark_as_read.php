<?php
include '../include/selectDb.php';

$admin_id = 24;
$excluded_admin_name = "City Youth and Sports Development Office - CSJDM";

// Update is_read to true for unread messages
$updateQuery = "UPDATE chat_messages SET is_read = true WHERE admin_id = $admin_id AND sender != '$excluded_admin_name' AND is_read = 0";
mysqli_query($conn, $updateQuery);

mysqli_close($conn);
?>
