<?php

include 'include/dbConnection.php';
include 'include/session.php';


$newPost = $_POST['postText'];
$uploader = $_SESSION['user'];

$uploadQuery = "INSERT INTO announcements (announcement,uploader) VALUES ('$newPost','$uploader')";

$insertTbl = mysqli_query($conn, $uploadQuery);

header('location: postUpdate.php');
