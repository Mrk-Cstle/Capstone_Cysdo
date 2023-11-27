<?php
session_start();
include 'pages/include/dbConnection.php';





$userName = $_POST['userName'];
$password = $_POST['password'];

// Retrieve the hashed password from the database based on the given username
$loginQuery = "SELECT admin_id as user_id,full_name,  user, password, 'admin' as user_type FROM admin WHERE user='$userName'
               UNION ALL
               SELECT staffId as user_id,fullName as full_name,  user, password, 'staff' as user_type FROM staff WHERE user='$userName'
               UNION ALL
               SELECT scholar_id as user_id,full_name, user, password, 'scholar' as user_type FROM scholar WHERE user='$userName'";
$result = mysqli_query($conn, $loginQuery);


if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $storedPassword = $row['password'];

    // Verify the entered password against the stored hashed password
    if (password_verify($password, $storedPassword)) {

        // Login successful
        $userType = $row['user_type'];

        // Identify the user type and redirect or perform specific actions
        switch ($userType) {
            case 'admin':
                session_start();
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user'] = $row['full_name'];
                $_SESSION['role'] = 'admin';
                $_SESSION['logged_in'] = true;
                header("Location: pages/admin/adminHome.php");
                exit();
                // Redirect or perform actions for admin
                break;
            case 'staff':
                session_start();
                // Redirect or perform actions for staff

                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user'] = $row['user'];
                $_SESSION['role'] = 'staff';
                $_SESSION['logged_in'] = true;

                // Redirect to the appropriate page
                header("Location: pages/admin/adminHome.php");
                exit();
                break;
            case 'scholar':
                session_start();
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['scholar_id'] = $row['user_id'];
                $_SESSION['user'] = $row['full_name'];
                $_SESSION['user_name'] = $row['user'];
                $_SESSION['logged_in'] = true;



                // Redirect to the appropriate page
                header("Location: pages/scholar/scholarHome.php");
                exit();
                // Redirect or perform actions for scholar
                break;
            default:
                // Handle other user types if needed
        }
        // Password is correct
        // Set session variables


        // Redirect to the appropriate page

    }
}

// Invalid login
header("Location: login.php?error=1");
exit();
