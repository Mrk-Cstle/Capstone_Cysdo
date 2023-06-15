<?php
include '../../include/dbConnection.php';
$id = $_GET['id'];
$lName = $_POST['editlastName'];
$fName = $_POST['editfirstName'];
$mName = $_POST['editmiddleName'];
$position = $_POST['editposition'];
$contactNum = $_POST['editcontactNumber'];

$email = $_POST['editemail'];


$fullName = $lName . ", " . $fName . " " . $mName;

mysqli_query($conn, "UPDATE staff SET fullName = '$fullName', last_name='$lName', first_name='$fName', middle_name = '$mName', position = '$position', contactNum= '$contactNum', email = '$email'  WHERE staffId = '$id'");

echo 'Updated Successfully';
