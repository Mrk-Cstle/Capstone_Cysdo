<?php
include '../../include/dbConnection.php';


$user_id = $_POST['userid'];
$age = $_POST['age'];
$last_name = $_POST['l-name'];
$first_name = $_POST['f-name'];
$middle_name = $_POST['m-name'];
$email = $_POST['email'];
$contact_num1 = $_POST['contactNum1'];
$contact_num2 = $_POST['contactNum2'];
$facebook = $_POST['facebook'];
$telegram = $_POST['telegram'];
$gender = $_POST['gender'];
$voter = $_POST['voter'];
$community = $_POST['community'];

$full_address = $_POST['add-ress'];
$barangay = $_POST['barangay'];
$current_year = $_POST['current_year'];
$course = $_POST['course'];
$years_course = $_POST['years_course'];
$degree_or_non = $_POST['degree_or_non'];
$school_name = $_POST['school_name'];
$school_address = $_POST['school_address'];


try {

    $query = mysqli_query($conn, "SELECT * FROM scholar WHERE scholar_id = '$user_id'");
    $row = mysqli_fetch_assoc($query);

    if (
        $row['age'] === $age && $row['full_address'] === $full_address && $row['email'] === $email &&
        $row['barangay'] === $barangay && $row['contact_num1'] === $contact_num1 && $row['contact_num2'] === $contact_num2
        && $row['last_name'] === $last_name
        && $row['middle_name'] === $middle_name
        && $row['first_name'] === $first_name
        && $row['gender'] === $gender
        && $row['voter'] === $voter
        && $row['telegram'] === $telegram
        && $row['facebook'] === $facebook
        && $row['school_address'] === $school_address
        && $row['full_address'] === $full_address
        && $row['c_service1st'] === $community
        && $row['current_yr'] === $current_year
        && $row['course'] === $course
        && $row['years_course'] === $years_course
        && $row['degree_or_non'] === $degree_or_non
        && $row['school_name'] === $school_name
    ) {
        // No changes were made
        echo 'No changes were made';
    } else {

        $full_name = $last_name . ', ' . $first_name . ' ' . $middle_name;
        // Changes were made, execute the UPDATE query
        mysqli_query($conn, "UPDATE scholar SET full_name = '$full_name', last_name = '$last_name', first_name = '$first_name', middle_name = '$middle_name', age = '$age', full_address ='$full_address', barangay='$barangay', email = '$email', contact_num1 = '$contact_num1', contact_num2= '$contact_num2', facebook = '$facebook', telegram= '$telegram' , gender= '$gender', voter= '$voter', school_address= '$school_address', current_yr= '$current_year', course= '$course' , years_course= '$years_course', degree_or_non= '$degree_or_non' , school_name= '$school_name', c_service1st = '$community' WHERE scholar_id = '$user_id'");

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
