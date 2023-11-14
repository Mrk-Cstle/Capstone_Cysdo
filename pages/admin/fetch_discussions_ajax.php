<?php
// Include your database connection script
include '../include/selectDb.php';

// Fetch all scholars along with the information about the last message
$queryAllScholars = "SELECT scholar.scholar_id, scholar.full_name, 
                            cm.sender, cm.message, cm.timestamp
                     FROM scholar
                     LEFT JOIN chat_messages cm ON scholar.scholar_id = cm.scholar_id
                     ORDER BY cm.timestamp DESC";

$resultAllScholars = mysqli_query($conn, $queryAllScholars);

$seenScholars = array(); // To track scholars that have been seen

while ($row = mysqli_fetch_assoc($resultAllScholars)) {
    $scholar_id = $row['scholar_id'];
    // Check if we have already displayed the scholar
    if (in_array($scholar_id, $seenScholars)) {
        continue;
    }
    $scholar_id = $row['scholar_id'];

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
    // Display chat head for each scholar
    echo '<div class="discussion" data-scholar-id="' . $scholar_id . '">';
    echo '<div class="photo" style="background-image: url(\'../../uploads/scholar/' . $image . '\');">';
    echo '<div class="online"></div>';
    echo '</div>';
    echo '<div class="desc-contact">';
    echo '<p class="name font-weight-bold">' . $row['full_name'] . '</p>';

    if ($row['sender'] && $row['message']) {
        // Apply the bolding logic for the last message
        $message = $row['message'];
        $isScholarMessage = ($row['sender'] !== 'City Youth and Sports Development Office - CSJDM');
        echo '<p class="message">';
        echo $isScholarMessage ? '<strong>' . $message . '</strong>' : $message;
        echo '</p>';
    } else {
        // Display a default message if no messages exist
        echo '<p class="message">No messages yet</p>';
    }
    echo '</div>';
    echo '</div>';

    // Mark the scholar as seen
    $seenScholars[] = $scholar_id;
}
