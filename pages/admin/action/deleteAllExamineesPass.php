<?php
include '../../include/selectDb.php';
include '../../include/dbConnection.php';

// First, select the applicant IDs for 'pass' examinees
$selectPassApplicantsQuery = "SELECT applicant_id FROM registration WHERE applicant_id IN (SELECT application_id FROM registration_approval WHERE action_id IN (SELECT action_id FROM examination WHERE result = 'pass'))";

$result = mysqli_query($conn, $selectPassApplicantsQuery);

if (!$result) {
    die("Error: " . mysqli_error($conn));
}

$passApplicants = array();

while ($row = mysqli_fetch_assoc($result)) {
    $passApplicants[] = $row['applicant_id'];
}

// Delete data from the examination table for 'pass' examinees
$deleteExaminationQuery = "DELETE FROM examination WHERE result = 'pass'";
mysqli_query($conn, $deleteExaminationQuery);

// Delete data from the registration_approval table for 'pass' examinees
$deleteRegistrationApprovalQuery = "DELETE FROM registration_approval WHERE action_id IN (SELECT action_id FROM examination WHERE result = 'pass')";
mysqli_query($conn, $deleteRegistrationApprovalQuery);

// Delete data from the registration table for 'pass' examinees
$deleteRegistrationQuery = "DELETE FROM registration WHERE applicant_id IN (" . implode(",", $passApplicants) . ")";
mysqli_query($conn, $deleteRegistrationQuery);

echo "All examinees with 'pass' status have been deleted successfully.";
exit;
?>
