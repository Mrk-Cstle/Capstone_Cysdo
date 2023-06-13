<?php
session_start();
include '../../include/dbConnection.php';

if (isset($_POST["action"])) {
    if ($_POST["action"] == "insert") {
        insert();
    }
}

function insert()
{
    global $conn;

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $middleName = $_POST["middleName"];
    $position = $_POST["position"];
    $contactNumber = $_POST["contact"];
    $email = $_POST["email"];

    $fullName = $lastName . ", " . $firstName . " " . $middleName;

    $insertQuery = "INSERT INTO staff (fullName,last_name, first_name,middle_name, position, contactNum,  email ) VALUES ('$fullName', '$lastName','$firstName','$middleName','$position'  ,'$contactNumber' ,'$email' )";
    mysqli_query($conn, $insertQuery);
    echo "Inserted Successfully";
}
