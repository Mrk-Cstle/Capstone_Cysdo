<?php

include 'dbConnection.php';

$getStaffList = "SELECT * FROM staff ORDER BY staffId DESC";
$resultStaffList = mysqli_query($conn, $getStaffList);

$getAdminList = "SELECT * FROM admin ORDER BY admin_id DESC";
$resultAdminList = mysqli_query($conn, $getAdminList);


//for announcement
$getPost = "SELECT * FROM announcements ORDER BY uploadId DESC ";
$resultGetPost = mysqli_query($conn, $getPost);

//end of announcement