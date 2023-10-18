<?php
include '../../include/selectDb.php';
include '../../include/dbConnection.php';

// First, select the applicant IDs for 'failed' examinees
$selectFailedApplicantsQuery = "SELECT applicant_id FROM registration WHERE applicant_id IN (SELECT application_id FROM registration_approval WHERE action_id IN (SELECT action_id FROM examination WHERE result = 'failed'))";

$result = mysqli_query($conn, $selectFailedApplicantsQuery);

if (!$result) {
    die("Error: " . mysqli_error($conn));
}

$failedApplicants = array();

while ($row = mysqli_fetch_assoc($result)) {
    $failedApplicants[] = $row['applicant_id'];
}

// Delete data from the examination table for 'failed' examinees
$deleteExaminationQuery = "DELETE FROM examination WHERE result = 'failed'";
mysqli_query($conn, $deleteExaminationQuery);

// Delete data from the registration_approval table for 'failed' examinees
$deleteRegistrationApprovalQuery = "DELETE FROM registration_approval WHERE action_id IN (SELECT action_id FROM examination WHERE result = 'failed')";
mysqli_query($conn, $deleteRegistrationApprovalQuery);

// Delete data from the registration table for 'failed' examinees
$deleteRegistrationQuery = "DELETE FROM registration WHERE applicant_id IN (" . implode(",", $failedApplicants) . ")";
mysqli_query($conn, $deleteRegistrationQuery);

echo "All examinees with 'failed' status have been deleted successfully.";
exit;
?>
