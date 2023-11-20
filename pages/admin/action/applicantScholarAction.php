<?php
// Assuming you have a valid database connection named $conn
include '../../include/selectDb.php';
include '../../include/dbConnection.php';

// SELECT query
$selectQuery = "SELECT registration.*, registration_approval.*, examination.*, registration_requirements.*
    FROM registration
    JOIN registration_approval ON registration.applicant_id = registration_approval.application_id
    JOIN examination ON examination.action_id = registration_approval.action_id
    JOIN registration_requirements ON registration_requirements.examination_id = examination.examination_id
    WHERE registration_requirements.req_status = 'Approve'";

// Execute the SELECT query
$selectResult = mysqli_query($conn, $selectQuery);

// Check if the SELECT query was successful
if (!$selectResult) {
    echo "Error selecting data: " . mysqli_error($conn);
    exit;
}

// Check if there are rows to insert
if (mysqli_num_rows($selectResult) > 0) {
    // Loop through the result set
    while ($row = mysqli_fetch_assoc($selectResult)) {
        // Access the values of the row
        extract($row);
        $type = 'New Scholar';

        // INSERT INTO ... SELECT query for each row
        $insertQuery = "INSERT INTO registration_archive (applicant_id, type, fullName, lastName, firstName, middleName, status, gender, civilStatus, voter, birthDate, birthPlace, citizenship, fullAddress, houseAddress, streetAddress, barangayAddress, contactNum1, contactNum2, pic2x2, signaturePic, schoolName, schoolAddress, schoolType, course, yearLevel, fatherName, fatherStatus, fatherAddress, fatherContact, fatherOccupation, fatherEduc, motherName, motherStatus, motherAddress, motherContact, motherOccupation, motherEduc, guardianName, guardianAddress, guardianContact, guardianOccupation, guardianEduc, sibling1, sibling2, sibling3, sibling4, sibling5, sibling6, sizeFamily, annualGross, date) VALUES ('$applicant_id','$type','$fullName','$lastName','$firstName','$middleName','$status','$gender','$civilStatus','$voter','$birthDate','$birthPlace','$citizenship','$fullAddress','$houseAddress','$streetAddress','$barangayAddress','$contactNum1','$contactNum2','$pic2x2','$signaturePic','$schoolName','$schoolAddress','$schoolType','$course','$yearLevel','$fatherName','$fatherStatus','$fatherAddress','$fatherContact','$fatherOccupation','$fatherEduc','$motherName','$motherStatus','$motherAddress','$motherContact','$motherOccupation','$motherEduc','$guardianName','$guardianAddress','$guardianContact','$guardianOccupation','$guardianEduc','$sibling1','$sibling2','$sibling3','$sibling4','$sibling5','$sibling6','$sizeFamily','$annualGross','$date')";

        $resultss = mysqli_query($conn, $insertQuery);

        // Check if the INSERT INTO ... SELECT query was successful for each row
        if ($resultss) {
            // Delete the inserted row from the original table
            mysqli_query($conn, "DELETE FROM registration WHERE applicant_id = '$applicant_id'");
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }
    }

    echo "Data successfully inserted into registration_archive.";
} else {
    echo "No data to insert.";
}

// Close the database connection
mysqli_close($conn);
