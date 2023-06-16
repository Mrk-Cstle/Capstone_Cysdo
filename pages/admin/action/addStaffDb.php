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
        delete();
    }
}


function insert()
{
    global $conn;
    try {
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $middleName = $_POST["middleName"];
        $position = $_POST["position"];
        $contactNumber = $_POST["contact"];
        $email = $_POST["email"];

        $fullName = $lastName . ", " . $firstName . " " . $middleName;
        $password = $middleName;
        $user = $email;
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $insertQuery = "INSERT INTO staff (fullName,last_name, first_name,middle_name, position, contactNum,  email, password, user ) VALUES ('$fullName', '$lastName','$firstName','$middleName','$position'  ,'$contactNumber' ,'$email', '$hashedPassword', '$user' )";
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
// function edit()
// {
//     global $conn;
//     $id = $_POST["id"];
//     $firstName = $_POST["firstName"];
//     $lastName = $_POST["lastName"];
//     $middleName = $_POST["middleName"];
//     $position = $_POST["position"];
//     $contactNumber = $_POST["contact"];
//     $email = $_POST["email"];

//     $fullName = $lastName . ", " . $firstName . " " . $middleName;

//     $editQuery = "UPDATE staff SET fullName = '$fullName', last_name = '$lastName', first_name = ' $firstName ', middle_name = '$middleName', position = ' $position' WHERE staffId = '$id' )";
//     mysqli_query($conn, $editQuery);
//     echo "Updated Successfully";
// }

function delete()
{
    global $conn;

    $id = $_POST["action"];

    $deleteQuery = "DELETE FROM staff WHERE staffId = $id";
    mysqli_query($conn, $deleteQuery);
    if (mysqli_affected_rows($conn) > 0) {
        echo "Staff Info Deleted";
    } else {
        echo 'No records were deleted';
    }
}
