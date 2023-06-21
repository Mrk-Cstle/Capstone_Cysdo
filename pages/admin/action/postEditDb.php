<?php

include '../../include/dbConnection.php';
include '../include/session.php';

$id = $_GET['id'];
$newPost = $_POST['postText'];

mysqli_query($conn, "UPDATE announcements SET announcement='$newPost' WHERE uploadId = '$id'");

// Redirect to the postUpdate.php page
header('location:../postUpdate.php');
