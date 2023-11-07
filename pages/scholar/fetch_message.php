<?php
include '../include/selectDb.php';

$query = "SELECT * FROM chat_messages ORDER BY timestamp DESC";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo '<p><strong>' . $row['sender'] . ':</strong> ' . $row['message'] . '</p>';
}

mysqli_close($conn);
?>
