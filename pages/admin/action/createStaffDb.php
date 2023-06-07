<?php
include 'include/dbConnection.php';



$lName = $_POST['lastName'];
$fName = $_POST['firstName'];
$mName = $_POST['middleName'];
$contactNum = $_POST['contactNum'];
$position = $_POST['position'];
$email = $_POST['email'];
$address = $_POST['address'];
$image = $_POST['image'];

$fullName = $lName . ", " . $fName . " " . $mName;
$uploadQuery = "INSERT INTO staff (fullName, position, user, password, contactNum, address, email, image ) VALUES ('$fullName','$position' ,'$email' ,'$mName' ,'$contactNum' ,'$address' ,'$email' , '$image')";

$insertStaff = mysqli_query($conn, $uploadQuery);

header('location: createStaff.php');
