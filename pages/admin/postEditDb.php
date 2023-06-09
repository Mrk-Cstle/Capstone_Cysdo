<?php

include 'include/dbConnection.php';
include 'include/session.php';
$id = $_GET['id'];

$newPost = $_POST['postText'];
$uploader = $_SESSION['user'];

mysqli_query($conn, "UPDATE announcements SET announcement='$newPost',uploader= '$uploader' WHERE uploadId = '$id'");
header('location:postUpdate.php');
