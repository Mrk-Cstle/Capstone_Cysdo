<?php
include '../../include/dbConnection.php';

try {
    $user_id = $_POST['userid'];
    $user = $_POST['user'];
    $password = $_POST['password'];



    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = mysqli_query($conn, "SELECT * FROM staff WHERE staffId = '$user_id'");
    $row = mysqli_fetch_assoc($query);

    if (
        $row['password'] === $password && $row['user'] === $user
    ) {
        // No changes were made
        echo 'No changes were made';
    } else {
        // Changes were made, execute the UPDATE query
        mysqli_query($conn, "UPDATE staff SET user = '$user', password = '$hashedPassword'  WHERE staffId = '$user_id'");

        if (mysqli_affected_rows($conn) > 0) {
            echo 'Save Changes Successfully';
        } else {
            echo 'No changes were';
        }
    }
} catch (mysqli_sql_exception $e) {
    // Hide the error message from the frontend
    echo "An error occurred";
}
