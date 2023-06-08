<?php
include '../../include/dbConnection.php';



$lName = $_POST['lastName'];
$fName = $_POST['firstName'];
$mName = $_POST['middleName'];
$contactNum = $_POST['contactNum'];
$email = $_POST['email'];
$address = $_POST['address'];

$user = $email;
$password = $mName;


// Hash the password with the salt
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$fullName = $lName . ", " . $fName . " " . $mName;
$uploadQuery = "INSERT INTO admin (full_name, user, password,  contact_number, address, email) VALUES ('$fullName', '$user', '$hashedPassword',  '$contactNum', '$address', '$email')";

$insertStaff = mysqli_query($conn, $uploadQuery);
header('location: createStaff.php');
