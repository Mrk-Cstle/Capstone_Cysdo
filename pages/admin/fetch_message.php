<?php
session_start();

include '../include/selectDb.php';

$userId = $_SESSION['user_id'];

// If the user is an admin, display admin-to-scholar messages
$query = "SELECT admin_id FROM admin WHERE admin_id = $userId";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    if (isset($_GET['scholar_id'])) {
        $scholar_id = $_GET['scholar_id'];

        // Modify the query to order messages in ascending order by timestamp
        $query = "SELECT * FROM chat_messages WHERE scholar_id = $scholar_id ORDER BY timestamp ASC";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $sender = $row['sender'];
            $message = $row['message'];
        
            // Check if the message is a response
            $isResponse = ($sender === 'City Youth and Sports Development Office - CSJDM');
        
            // Apply styles based on whether it's a response or not
            if ($isResponse) {
                echo '<div class="message response">';
                echo '<p class="text" style="text-align: right;"><strong>' . $sender . ':</strong> ' . $message . '</p>';
                echo '<div class="photo" style="background-image: url(\'/assets/image/1x1.jpg\'); float: right;"></div>';
            } else {
                echo '<div class="message">';
                echo '<div class="photo" style="background-image: url(\'/assets/image/1x1.jpg\');"></div>';
                echo '<p class="text"><strong>' . $sender . ':</strong> ' . $message . '</p>';
            }
        
            echo '</div>';
        }
        
    }
} else {
    // Handle the case where the user is not an admin.
    // You can display a message or handle this situation accordingly.
}

mysqli_close($conn);
?>

