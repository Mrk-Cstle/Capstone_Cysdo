<?php
session_start();

include '../include/selectDb.php';

$userId = $_SESSION['user_id'];

// Check if the user is an admin
$query = "SELECT admin_id FROM admin WHERE admin_id = $userId";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // The user is an admin
    if (isset($_GET['scholar_id'])) {
        $scholar_id = $_GET['scholar_id'];

        // Modify the query to order messages in ascending order by timestamp
        $query = "SELECT * FROM chat_messages WHERE scholar_id = $scholar_id ORDER BY timestamp ASC";
        $result = mysqli_query($conn, $query);

        // Include the function to mark messages as read
        function markMessagesAsRead($conn, $scholar_id) {
            $markReadQuery = "UPDATE chat_messages SET is_read = TRUE WHERE scholar_id = $scholar_id AND is_read = FALSE";
            mysqli_query($conn, $markReadQuery);
        }

        $boldMessage = true; // Variable to track whether the message should be bold

        while ($row = mysqli_fetch_assoc($result)) {
            $sender = $row['sender'];
            $message = $row['message'];

            // Check if the message is a response
            $isResponse = ($sender === 'City Youth and Sports Development Office - CSJDM');

            // Apply styles based on whether it's a response or not
            if ($isResponse) {
                echo '<div class="message response">';
                echo '<p class="text" style="text-align: right;"><strong>' . $sender . ':</strong> ' . ($boldMessage ? '<strong>' . $message . '</strong>' : $message) . '</p>';
                echo '<div class="photo" style="background-image: url(\'/assets/image/1x1.jpg\'); float: right;"></div>';
            } else {
                echo '<div class="message">';
                echo '<div class="photo" style="background-image: url(\'/assets/image/1x1.jpg\');"></div>';
                echo '<p class="text"><strong>' . $sender . ':</strong> ' . ($boldMessage ? '<strong>' . $message . '</strong>' : $message) . '</p>';
            }

            echo '</div>';

            // Call the markMessagesAsRead function after displaying each message
            markMessagesAsRead($conn, $scholar_id);

            // Set $boldMessage to false after displaying the first message
            $boldMessage = false;
        }
    }
} else {
    // The user is not an admin; check if the user is a staff member
    $query = "SELECT staffId FROM staff WHERE staffId = $userId";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // The user is an admin
        if (isset($_GET['scholar_id'])) {
            $scholar_id = $_GET['scholar_id'];

            // Modify the query to order messages in ascending order by timestamp
            $query = "SELECT * FROM chat_messages WHERE scholar_id = $scholar_id ORDER BY timestamp ASC";
            $result = mysqli_query($conn, $query);

            // Include the function to mark messages as read
            function markMessagesAsRead($conn, $scholar_id) {
                $markReadQuery = "UPDATE chat_messages SET is_read = TRUE WHERE scholar_id = $scholar_id AND is_read = FALSE";
                mysqli_query($conn, $markReadQuery);
            }

            $boldMessage = true; // Variable to track whether the message should be bold

            while ($row = mysqli_fetch_assoc($result)) {
                $sender = $row['sender'];
                $message = $row['message'];

                // Check if the message is a response
                $isResponse = ($sender === 'City Youth and Sports Development Office - CSJDM');

                // Apply styles based on whether it's a response or not
                if ($isResponse) {
                    echo '<div class="message response">';
                    echo '<p class="text" style="text-align: right;"><strong>' . $sender . ':</strong> ' . ($boldMessage ? '<strong>' . $message . '</strong>' : $message) . '</p>';
                    echo '<div class="photo" style="background-image: url(\'/assets/image/1x1.jpg\'); float: right;"></div>';
                } else {
                    echo '<div class="message">';
                    echo '<div class="photo" style="background-image: url(\'/assets/image/1x1.jpg\');"></div>';
                    echo '<p class="text"><strong>' . $sender . ':</strong> ' . ($boldMessage ? '<strong>' . $message . '</strong>' : $message) . '</p>';
                }

                echo '</div>';

                // Call the markMessagesAsRead function after displaying each message
                markMessagesAsRead($conn, $scholar_id);

                // Set $boldMessage to false after displaying the first message
                $boldMessage = false;
            }
        }
    }
}

mysqli_close($conn);
?>
