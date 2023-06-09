<?php
include 'include/session.php';
include 'include/dbConnection.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM announcements WHERE uploadId='$id'");
header('location:postUpdate.php');
