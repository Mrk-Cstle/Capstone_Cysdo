<?php
include '../../include/dbConnection.php';

try {
    $id = $_GET['id'];
    $lName = $_POST['editlastName'];
    $fName = $_POST['editfirstName'];
    $mName = $_POST['editmiddleName'];
    $position = $_POST['editposition'];
    $contactNum = $_POST['editcontactNumber'];
    $email = $_POST['editemail'];

    $fullName = $lName . ", " . $fName . " " . $mName;
    $password = $mName;
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = mysqli_query($conn, "SELECT * FROM staff WHERE staffId = '$id'");
    $row = mysqli_fetch_assoc($query);

    if (
        $row['last_name'] === $lName && $row['first_name'] === $fName && $row['middle_name'] === $mName &&
        $row['position'] === $position && $row['contactNum'] === $contactNum && $row['email'] === $email
    ) {
        // No changes were made
        echo 'No changes were made';
    } else {
        // Changes were made, execute the UPDATE query
        mysqli_query($conn, "UPDATE staff SET fullName = '$fullName', last_name='$lName', first_name='$fName', middle_name = '$mName', position = '$position', contactNum= '$contactNum', email = '$email', password = '$hashedPassword'  WHERE staffId = '$id'");

        if (mysqli_affected_rows($conn) > 0) {
            echo 'Save Changes Successfully';
        } else {
            echo 'No changes were made';
        }
    }
} catch (mysqli_sql_exception $e) {
    // Hide the error message from the frontend
    echo "An error occurred";
}
