<?php
include 'include/session.php';
include 'include/dbConnection.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM staff WHERE staffId='$id'");
header('location:createStaff.php');
