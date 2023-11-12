<?php
include '../include/selectDb.php';

$senderId = 24;
$senderId = 183;
include 'include/session.php';
$scholar_id  = $_SESSION['scholar_id'];

// Fetch messages from admin_messages
$query = "SELECT sender, message FROM chat_messages WHERE admin_id = $senderId AND scholar_id = $scholar_id ORDER BY timestamp ASC";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $sender = $row['sender'];
    $message = $row['message'];

    // Check if the message is a response
    $isResponse = ($sender === 'City Youth and Sports Development Office - CSJDM');

    // Apply styles based on whether it's a response or not
    if ($isResponse) {
        echo '<div class="message">';
        echo '<div class="photo" style="background-image: url(\'/assets/image/1x1.jpg\'); float: left;"></div>';
        echo '<p class="text"><strong>' . $sender . ':</strong> ' . $message . '</p>';
    } else {
        echo '<div class="message response">';
        echo '<div class="photo" style="background-image: url(\'/assets/image/1x1.jpg\'); float: right;"></div>';
        echo '<p class="text" style="text-align: right;"><strong>' . $sender . ':</strong> ' . $message . '</p>';
    }

    echo '</div>';
}

// Fetch messages from staff_messages
$query = "SELECT sender, message FROM chat_messages WHERE staffId = $senderId AND scholar_id = $scholar_id ORDER BY timestamp ASC";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $sender = $row['sender'];
    $message = $row['message'];

    // Check if the message is a response
    $isResponse = ($sender === 'City Youth and Sports Development Office - CSJDM');

    // Apply styles based on whether it's a response or not
    if ($isResponse) {
        echo '<div class="message">';
        echo '<div class="photo" style="background-image: url(\'/assets/image/1x1.jpg\'); float: left;"></div>';
        echo '<p class="text"><strong>' . $sender . ':</strong> ' . $message . '</p>';
    } else {
        echo '<div class="message response">';
        echo '<div class="photo" style="background-image: url(\'/assets/image/1x1.jpg\'); float: right;"></div>';
        echo '<p class="text" style="text-align: right;"><strong>' . $sender . ':</strong> ' . $message . '</p>';
    }

    echo '</div>';
}

mysqli_close($conn);
?>