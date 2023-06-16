<?php
include '../../include/dbConnection.php';
try {
    $id = $_GET['id'];
    $resetPassword = $_POST['resetPassword'];



    $hashedPassword = password_hash($resetPassword, PASSWORD_DEFAULT);



    // mysqli_query($conn, "UPDATE staff SET password = '$hashedPassword'  WHERE staffId = '$id'");

    // if (mysqli_affected_rows($conn) > 0) {
    //     echo 'Reset Password Successfully';
    // } elseif (mysqli_affected_rows($conn) == 0) {
    //     echo 'No changes were made';
    // } else {
    //     echo 'Error occurred during password reset';
    // }

    $result = mysqli_query($conn, "SELECT password FROM staff WHERE staffId = '$id'");
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $existingPassword = $row['password'];

        // Compare the new hashed password with the existing password
        if (password_verify($resetPassword, $existingPassword)) {
            echo 'No changes were made';
        } else {
            // Update the password
            mysqli_query($conn, "UPDATE staff SET password = '$hashedPassword' WHERE staffId = '$id'");

            if (mysqli_affected_rows($conn) > 0) {
                echo 'Reset Password Successfully';
            } else {
                echo 'Error occurred during password reset';
            }
        }
    } else {
        echo 'Invalid staff ID';
    }
} catch (mysqli_sql_exception $e) {
    // Hide the error message from the frontend
    echo "An error occurred";
}
