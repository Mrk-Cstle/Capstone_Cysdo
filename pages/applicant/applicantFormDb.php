<?php
include '../include/dbConnection.php';

$id = $_POST['scholar_id'];

$action = $_POST['action'];


// Define the upload directory


// Function to handle file upload and return the new file name
function handleFileUpload($fileInput,  $id, $action, $docs)
{
    if (!empty($fileInput['tmp_name'])) {

        $uploadDir = "../../uploads/applicant/requirements/";

        $extension = pathinfo($fileInput['name'], PATHINFO_EXTENSION);
        $newFileName = $action . "_"  . $id . "_" . $docs .  "." . $extension;
        $filePath = $uploadDir . $newFileName;

        if (move_uploaded_file($fileInput['tmp_name'], $filePath)) {
            return $newFileName;
        } else {
            return false; // Handle the case where the file couldn't be moved
        }
    }
}

// Handle 'prevCor' file upload
$newFileName2x2 = handleFileUpload($_FILES['f2x2-pic'], $id, $action, 'pic');
$newFileNameBirth = handleFileUpload($_FILES['birth'], $id, $action, 'birth');
$newFileNameBir = handleFileUpload($_FILES['bir'], $id, $action, 'bir');
$newFileNameCedula = handleFileUpload($_FILES['cedula'], $id, $action, 'cedula');
$newFileNameHealth = handleFileUpload($_FILES['health-cert'], $id, $action, 'health');
$newFileNameCurriculum = handleFileUpload($_FILES['curriculum'], $id, $action, 'curriculum');
$newFileNameResidency = handleFileUpload($_FILES['cert-of-residency'], $id, $action, 'residency');
$newFileNameMap = handleFileUpload($_FILES['house-map'], $id, $action, 'map');
$newFileNamePhoto = handleFileUpload($_FILES['house-photo'], $id, $action, 'photo');
$newFileNameMoral = handleFileUpload($_FILES['good-moral'], $id, $action, 'moral');
$newFileNamePrevCor = handleFileUpload($_FILES['prev-cor'], $id, $action, 'cor');
$newFileNamePrevCog = handleFileUpload($_FILES['prev-cog'], $id, $action, 'cog');
$newFileNamePrevCoe = handleFileUpload($_FILES['latest-coe'], $id, $action, 'coe');
$newFileNameStub = handleFileUpload($_FILES['comelec-stub'], $id, $action, 'stub');
$newFileNameLandbank = handleFileUpload($_FILES['landbank'], $id, $action, 'landbank');
$newFileNamePhotocopy = handleFileUpload($_FILES['id-photocopy'], $id, $action, 'photocopy');
$newFileNameLetter = handleFileUpload($_FILES['letter-of-intent'], $id, $action, 'intent');

// Handle 'cog' file upload







if (
    $newFileName2x2 !== false &&
    $newFileNameBirth !== false &&
    $newFileNameBir !== false &&
    $newFileNameCedula !== false &&
    $newFileNameHealth !== false &&
    $newFileNameCurriculum !== false &&
    $newFileNameResidency !== false &&
    $newFileNameMap !== false &&
    $newFileNamePhoto !== false &&
    $newFileNameMoral !== false &&
    $newFileNamePrevCor !== false &&
    $newFileNamePrevCog !== false &&
    $newFileNamePrevCoe !== false &&
    $newFileNameStub !== false &&
    $newFileNameLandbank !== false &&
    $newFileNamePhotocopy !== false &&
    $newFileNameLetter !== false

) {
    // Both files were successfully uploaded and saved with the new names

    $insertRenewalMergeQuery = "INSERT INTO registration_requirements (examination_id, image2x2,birth,bir,cedula,health,curriculum,residency,map,house,moral,cor,cog,coe,stub,landbank,photocopy,letter,req_status) VALUES ('$id', '$newFileName2x2','$newFileNameBirth','$newFileNameBir','$newFileNameCedula','$newFileNameHealth','$newFileNameCurriculum','$newFileNameResidency','$newFileNameMap','$newFileNamePhoto','$newFileNameMoral','$newFileNamePrevCor','$newFileNamePrevCog','$newFileNamePrevCoe','$newFileNameStub','$newFileNameLandbank','$newFileNamePhotocopy','$newFileNameLetter','Uploaded')";
    $result = mysqli_query($conn, $insertRenewalMergeQuery);

    if ($result) {
        echo "Upload Successful";
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
