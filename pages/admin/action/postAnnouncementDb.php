<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Process form data
    $formID = $_POST['formID'];

    // Example: Handling a file upload (assuming your input field name is 'announcement1')
    if (isset($_FILES["announcement1"])) {
        $uploadDir = "../../../uploads/announcement/"; // Specify your upload directory
        $newFileName = $formID; // You can change this to your desired name

        // Extract the original file extension from the uploaded file
        $originalFileName = $_FILES["announcement1"]["name"];
        $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
        $uploadFile = $uploadDir . $newFileName . "." . "jpeg";


        // Move uploaded file to the specified directory
        if (move_uploaded_file($_FILES["announcement1"]["tmp_name"], $uploadFile)) {
            echo "File is valid, and was successfully uploaded.";
        } else {
            echo "File upload failed.";
        }
    } else {
        echo 'error';
    }

    // Other form data processing can be done here

    // Example: Sending a response back to the client

} else {
    // Handle the case when the form is not submitted
    echo "Form not submitted.";
}
