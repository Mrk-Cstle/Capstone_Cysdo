<?php

include 'include/dbConnection.php';
include 'include/session.php';
$id = $_GET['id'];

$status = $_POST['status'];


mysqli_query($conn, "UPDATE registration SET status ='$status' WHERE fullName = '$id'");
header('location:applicantList.php');
