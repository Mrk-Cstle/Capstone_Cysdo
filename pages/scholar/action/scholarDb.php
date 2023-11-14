<?php
session_start();

include '../../include/dbConnection.php';





$userName = $_POST['userName'];
$password = $_POST['password'];

// Retrieve the hashed password from the database based on the given username
$loginQuery = "SELECT * FROM scholar WHERE user='$userName'";
$result = mysqli_query($conn, $loginQuery);

if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $storedPassword = $row['password'];

        // Verify the entered password against the stored hashed password
        if (password_verify($password, $storedPassword)) {
                // Password is correct
                // Set session variables

                // $_SESSION['user_id'] = $row['scholar_id'];
                $_SESSION['user_id'] = $row['scholar_id'];
                $_SESSION['scholar_id'] = $row['scholar_id'];
                $_SESSION['user'] = $row['full_name'];
                $_SESSION['logged_in'] = true;

                // Redirect to the appropriate page
                header("Location: ../scholarHome.php");
                exit();
        }
}

// Invalid login
header("Location: ../scholarLogin.php?error=1");
exit();
