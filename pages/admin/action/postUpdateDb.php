<?php
include '../../include/dbConnection.php';
include '../include/session.php';

$newPost = $_POST['postText'];
$uploader = $_SESSION['user'];
$category = $_POST['category']; // Retrieve the category value from the $_POST array

$uploadQuery = "INSERT INTO announcements (announcement, uploader, category) VALUES ('$newPost', '$uploader', '$category')";

if (mysqli_query($conn, $uploadQuery)) {
    $uploadId = mysqli_insert_id($conn);
    $uploadDate = date('Y-m-d'); // Assuming the uploadDate is the current date
    $response = [
        'uploadId' => $uploadId,
        'uploader' => $uploader,
        'category' => $category,
        'uploadDate' => $uploadDate,
        'announcement' => $newPost
    ];
    echo json_encode($response);
} else {
    // Handle the case where the insertion fails
    echo "Error inserting post: " . mysqli_error($conn);
}
?>
