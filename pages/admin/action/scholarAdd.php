<?php
session_start();
include '../../include/dbConnection.php';

if (isset($_POST["action"])) {
    if ($_POST["action"] == "insert") {
        insert();
    }
    // else if ($_POST["action"] == "edit") {
    //     edit();
    // } 
    else {
        // delete();
    }
}


function insert()
{
    global $conn;
    try {
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $middleName = $_POST["middleName"];

        $contactNumber = $_POST["contact"];


        $fullName = $lastName . ", " . $firstName . " " . $middleName;
        $password = $contactNumber;
        $user = $lastName;
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $insertQuery = "INSERT INTO scholar (full_name,last_name, first_name,middle_name, contact_num1, password, user ) VALUES ('$fullName', '$lastName','$firstName','$middleName' ,'$contactNumber' , '$hashedPassword', '$user' )";
        $result = mysqli_query($conn, $insertQuery);
        if ($result) {

            echo "Inserted Successfully";
        } else {
            echo "Insert Failed: " . mysqli_error($conn);
        }
    } catch (mysqli_sql_exception $e) {
        // Hide the error message from the frontend
        echo "An error occurred";
    }
}
