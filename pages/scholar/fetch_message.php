<?php
include '../include/selectDb.php';
include 'include/session.php';

$admin_id = 24;
$staffId = 183;

$scholar_id  = $_SESSION['scholar_id'];

// Fetch messages for both admin and staff using UNION
$query = "
    (SELECT sender, message, timestamp FROM chat_messages WHERE admin_id = $admin_id AND scholar_id = $scholar_id)
    UNION
    (SELECT sender, message, timestamp FROM chat_messages WHERE staffId = $staffId AND scholar_id = $scholar_id)
    ORDER BY timestamp ASC";

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $sender = $row['sender'];
    $message = $row['message'];



    $imageQuery = "SELECT * FROM scholar where scholar_id = '$scholar_id'";
    $imageResult = mysqli_query($conn, $imageQuery);
    if ($imageResult) {
        // Fetch the image row as an associative array
        $imageRow = mysqli_fetch_assoc($imageResult);

        // Now $imageRow contains the data for the scholar with the specified scholar_id
        // You can access the image data using $imageRow['column_name']

        // Example: Accessing the image URL
        $image = $imageRow['image'];

        // Close the result set
        mysqli_free_result($imageResult);
    }


    // Check if the message is a response
    $isResponse = ($sender === 'City Youth and Sports Development Office - CSJDM');

    // Apply styles based on whether it's a response or not
    if ($isResponse) {
        echo '<div class="message">';
        echo '<div class="photo" style="background-image: url(\'../../assets/image/CysdoLogo.png\'); float: left;"></div>';
        echo '<p class="text"><strong>' . $sender . ':</strong></br>' . $message . '</p>';
    } else {
        echo '<div class="message response">';
        echo '<div class="photo" style="background-image: url(\'../../uploads/scholar/' . $image . '\'); float: right;"></div>';
        echo '<p class="text" style="text-align: right;"><strong>' . $sender . ':</strong></br> ' . $message . '</p>';
    }

    echo '</div>';
}

mysqli_close($conn);
