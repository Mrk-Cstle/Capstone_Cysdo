<?php
include '../../include/dbConnection.php';

try {
    $user_id = $_POST['userid'];
    $birth_date = $_POST['b-date'];
    $address = $_POST['add-ress'];
    $gender = $_POST['gender'];
    $civil_status = $_POST['civilStatus'];
    $citizenship = $_POST['citizenship'];
    $contact_number = $_POST['contactNum'];
    $email = $_POST['email'];




    $query = mysqli_query($conn, "SELECT * FROM admin WHERE admin_id = '$user_id'");
    $row = mysqli_fetch_assoc($query);

    if (
        $row['birth_date'] === $birth_date && $row['address'] === $address && $row['address'] === $address &&
        $row['gender'] === $gender && $row['civil_status'] === $civil_status && $row['citizenship'] === $citizenship
        && $row['contact_number'] === $contact_number
        && $row['email'] === $email
    ) {
        // No changes were made
        echo 'No changes were made';
    } else {
        // Changes were made, execute the UPDATE query
        mysqli_query($conn, "UPDATE admin SET birth_date = '$birth_date', address ='$address', gender='$gender', civil_status = '$civil_status', citizenship = '$citizenship', contact_number= '$contact_number', email = '$email'  WHERE admin_id = '$user_id'");

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
