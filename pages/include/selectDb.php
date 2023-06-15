<?php

include 'dbConnection.php';

$getStaffList = "SELECT * FROM staff ORDER BY staffId DESC";
$resultStaffList = mysqli_query($conn, $getStaffList);


//for announcement
$getPost = "SELECT * FROM announcements ORDER BY uploadId DESC ";
$resultGetPost = mysqli_query($conn, $getPost);

//end of announcement