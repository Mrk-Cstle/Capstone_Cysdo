<?php
include '../../include/selectDb.php';
include '../../include/dbConnection.php';

if (isset($_GET['applicant_id'])) {
    $applicantId = intval($_GET['applicant_id']);

    // Determine the action_id from the registration_approval table
    $getActionIdQuery = "SELECT action_id FROM registration_approval WHERE application_id = $applicantId";
    $actionIdResult = mysqli_query($conn, $getActionIdQuery);

    if ($actionIdResult) {
        while ($row = mysqli_fetch_assoc($actionIdResult)) {
            $actionId = $row['action_id'];

            // Delete data from the examination table
            $deleteExaminationQuery = "DELETE FROM examination WHERE action_id = $actionId";
            mysqli_query($conn, $deleteExaminationQuery);
        }

        // Delete data from the registration_approval table
        $deleteRegistrationApprovalQuery = "DELETE FROM registration_approval WHERE application_id = $applicantId";
        mysqli_query($conn, $deleteRegistrationApprovalQuery);

        // Delete data from the registration table
        $deleteRegistrationQuery = "DELETE FROM registration WHERE applicant_id = $applicantId";
        mysqli_query($conn, $deleteRegistrationQuery);

        echo "Examinee with ID $applicantId has been deleted successfully.";
    } else {
        echo "Error retrieving action_id for deletion.";
    }
} else {
    echo "Invalid request.";
}

exit;
