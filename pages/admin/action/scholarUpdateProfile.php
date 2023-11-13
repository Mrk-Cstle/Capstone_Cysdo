<?php
include '../../include/dbConnection.php';


$user_id = $_POST['userid'];
$user = $_POST['user'];
$password = $_POST['password'];



$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$query = mysqli_query($conn, "SELECT * FROM scholar WHERE scholar_id = '$user_id'");
$row = mysqli_fetch_assoc($query);

if (
    $row['password'] === $password && $row['user'] === $user
) {
    // No changes were made
    echo 'No changes were made';
} else {
    // Changes were made, execute the UPDATE query
    mysqli_query($conn, "UPDATE scholar SET user = '$user', password = '$hashedPassword'  WHERE scholar_id = '$user_id'");

    if (mysqli_affected_rows($conn) > 0) {
        echo 'Save Changes Successfully';
    } else {
        echo 'No changes were';
    }
}
