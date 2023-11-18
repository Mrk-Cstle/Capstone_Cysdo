<?php
include '../include/dbConnection.php';

$id = $_POST['scholar_id'];

$action = $_POST['action'];


// Define the upload directory


// Function to handle file upload and return the new file name
function handleFileUpload($fileInput,  $id, $action)
{
    if (!empty($fileInput['tmp_name'])) {

        $uploadDir = "../../uploads/applicant/requirements/";

        $extension = pathinfo($fileInput['name'], PATHINFO_EXTENSION);
        $newFileName = $action . "_"  . $id . "." . $extension;
        $filePath = $uploadDir . $newFileName;

        if (move_uploaded_file($fileInput['tmp_name'], $filePath)) {
            return $newFileName;
        } else {
            return false; // Handle the case where the file couldn't be moved
        }
    }
}

// Handle 'prevCor' file upload
$newFileNamePrevCor = handleFileUpload($_FILES['f2x2-pic'], $id, $action);

// Handle 'cog' file upload







if (
    $newFileNamePrevCor !== false

) {
    // Both files were successfully uploaded and saved with the new names

    $insertRenewalMergeQuery = "INSERT INTO registration_requirements (examination_id, image2x2) VALUES ('$id', '$newFileNamePrevCor')";
    $result = mysqli_query($conn, $insertRenewalMergeQuery);

    if ($result) {
        echo "asd";
        // try {

        //     $lastInsertID = mysqli_insert_id($conn);
        //     $insertRenewalProcess = "INSERT INTO renewal_process (renewal_id,uploader) VALUES ('$lastInsertID','$id')";
        //     $results = mysqli_query($conn, $insertRenewalProcess);

        //     if ($results) {
        //         $Query = "SELECT * FROM scholar WHERE scholar_id='$user'";
        //         $queryresult = mysqli_query($conn, $Query);
        //         if ($queryresult) {

        //             mysqli_query($conn, "UPDATE scholar SET $action = 'uploaded'  WHERE scholar_id = '$id'");
        //         } else {

        //             echo "Error: Missing parameters in the request.";
        //         }

        //         echo "uploaded ";
        //     } else {
        //         echo "failed to upload due to duplicate entry ";
        //     }

        //     # code...

        // } catch (mysqli_sql_exception $e) {
        //     if ($e->getCode() == 1062) {

        //         echo "Duplicate entry: " . $e->getMessage();
        //     } else {
        //         // Handle other exceptions
        //         echo "Error: " . $e->getMessage();
        //     }
        // }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
}
