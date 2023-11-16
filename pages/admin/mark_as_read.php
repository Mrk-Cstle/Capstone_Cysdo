<?php
include '../include/selectDb.php';

$admin_id = 24;
$staffId = 183;
$excluded_sender = "City Youth and Sports Development Office - CSJDM";

// Mark messages as read excluding specific sender
$updateQuery = "UPDATE chat_messages SET is_read = 1 WHERE admin_id = $admin_id AND sender != '$excluded_sender' AND staffId != '$excluded_sender' AND is_read = 0";
mysqli_query($conn, $updateQuery);

mysqli_close($conn);
?>
