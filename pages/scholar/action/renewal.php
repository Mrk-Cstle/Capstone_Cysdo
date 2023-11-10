<?php
include '../../include/dbConnection.php';

$id = $_POST['scholar_id'];
$user = $_POST['user'];
$action = $_POST['action'];
$academic = $_POST['academic'];

// Define the upload directory
$uniqueNumber = uniqid();

// Function to handle file upload and return the new file name
function handleFileUpload($fileInput, $user, $id, $action)
{
    if (!empty($fileInput['tmp_name'])) {

        $uploadDir = "../../../uploads/scholar/renewal/";

        $extension = pathinfo($fileInput['name'], PATHINFO_EXTENSION);
        $newFileName = $action . "_" . $user . "_" . $id . "_" . uniqid() . "." . $extension;
        $filePath = $uploadDir . $newFileName;

        if (move_uploaded_file($fileInput['tmp_name'], $filePath)) {
            return $newFileName;
        } else {
            return false; // Handle the case where the file couldn't be moved
        }
    }
}

// Handle 'prevCor' file upload
$newFileNamePrevCor = handleFileUpload($_FILES['prevCor'], $user, $id, $action);

// Handle 'cog' file upload
$newFileNameCog = handleFileUpload($_FILES['cog'], $user, $id, $uniqueNumber, $action);
$newFileNameCurrentCor = handleFileUpload($_FILES['currentCor'], $user, $id, $uniqueNumber, $action);
$newFileNameCurriculum = handleFileUpload($_FILES['curriculum'], $user, $id, $uniqueNumber, $action);

$newFileNameDtr = handleFileUpload($_FILES['dtr'], $user, $id, $uniqueNumber, $action);
$newFileNameAtm = handleFileUpload($_FILES['atm'], $user, $id, $uniqueNumber, $action);
$newFileNameE3Form = handleFileUpload($_FILES['e3Form'], $user, $id, $uniqueNumber, $action);






if (
    $newFileNamePrevCor !== false &&
    $newFileNameCog !== false &&
    $newFileNameCurrentCor !== false &&
    $newFileNameCurriculum !== false &&
    $newFileNameDtr !== false &&
    $newFileNameAtm !== false &&
    $newFileNameE3Form !== false
) {
    // Both files were successfully uploaded and saved with the new names

    $insertRenewalMergeQuery = "INSERT INTO renewal (scholar_id, previous_cor, cog, atm, current_cor,dtr, e3_form,curriculum,academic_year, semester) VALUES ('$id', '$newFileNamePrevCor', '$newFileNameCog', '$newFileNameAtm', '$newFileNameCurrentCor', '$newFileNameDtr', '$newFileNameE3Form','$newFileNameCurriculum','$academic','$action')";
    $result = mysqli_query($conn, $insertRenewalMergeQuery);

    if ($result) {

        try {

            $lastInsertID = mysqli_insert_id($conn);
            $insertRenewalProcess = "INSERT INTO renewal_process (renewal_id,uploader) VALUES ('$lastInsertID','$id')";
            $results = mysqli_query($conn, $insertRenewalProcess);

            if ($results) {
                $Query = "SELECT * FROM scholar WHERE scholar_id='$user'";
                $queryresult = mysqli_query($conn, $Query);
                if ($queryresult) {

                    mysqli_query($conn, "UPDATE scholar SET $action = 'uploaded'  WHERE scholar_id = '$id'");
                } else {

                    echo "Error: Missing parameters in the request.";
                }

                echo "uploaded ";
            } else {
                echo "failed to upload due to duplicate entry ";
            }

            # code...

        } catch (mysqli_sql_exception $e) {
            if ($e->getCode() == 1062) {

                echo "Duplicate entry: " . $e->getMessage();
            } else {
                // Handle other exceptions
                echo "Error: " . $e->getMessage();
            }
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
}
