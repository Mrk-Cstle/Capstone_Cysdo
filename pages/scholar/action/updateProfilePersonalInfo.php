<?php
include '../../include/dbConnection.php';

try {
    $user_id = $_POST['userid'];
    $age = $_POST['age'];
    $address = $_POST['add-ress'];
    $barangay = $_POST['barangay'];
    $email = $_POST['email'];
    $contact_num1 = $_POST['contactNum1'];
    $contact_num2 = $_POST['contactNum2'];
    $facebook = $_POST['facebook'];
    $telegram = $_POST['telegram'];




    $query = mysqli_query($conn, "SELECT * FROM scholar WHERE scholar_id = '$user_id'");
    $row = mysqli_fetch_assoc($query);

    if (
        $row['age'] === $age && $row['full_address'] === $address && $row['email'] === $email &&
        $row['barangay'] === $barangay && $row['contact_num1'] === $contact_num1 && $row['contact_num2'] === $contact_num2
        && $row['facebook'] === $facebook
        && $row['telegram'] === $telegram
    ) {
        // No changes were made
        echo 'No changes were made';
    } else {
        // Changes were made, execute the UPDATE query
        mysqli_query($conn, "UPDATE scholar SET age = '$age', full_address ='$address', barangay='$barangay', email = '$email', contact_num1 = '$contact_num1', contact_num2= '$contact_num2', facebook = '$facebook', telegram= '$telegram'  WHERE scholar_id = '$user_id'");

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
