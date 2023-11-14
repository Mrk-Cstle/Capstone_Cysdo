<?php
include '../../include/dbConnection.php';
if (isset($_FILES["imageUpdate"]) && $_FILES["imageUpdate"]["error"] == UPLOAD_ERR_OK) {



    $userId = $_POST["userid"];

    $viewProfile = "SELECT * FROM staff WHERE staffId = '$userId'";
    $result = mysqli_query($conn, $viewProfile);

    if ($result) {
        // Step 3: Check if the row exists
        if (mysqli_num_rows($result) > 0) {
            // Step 4: Fetch the row
            $row = mysqli_fetch_assoc($result);

            // Step 5: Access the values of the row
            extract($row);
            // ...

            // Process the retrieved row as needed
            // For example, you can display the values or perform any other operations

            // Free the result set
            mysqli_free_result($result);
        } else {
            echo "No row found with the specified ID.";
        }
    } else {
        echo "Error executing the query: " . mysqli_error($conn);
    }


    $userName = $last_name;
    $extensionName = pathinfo($_FILES["imageUpdate"]["name"], PATHINFO_EXTENSION);
    $newFileName = $userName . "_" . "profile" . "." . $extensionName;

    $targetDir = "../../../uploads/admin/"; // Specify your target directory
    $targetFile = $targetDir . $newFileName;
    // $targetFile = $targetDir . basename($_FILES["imageUpdate"]["name"]);

    if (move_uploaded_file($_FILES["imageUpdate"]["tmp_name"], $targetFile)) {
        // File uploaded successfully
        // Get other form data
        // Assuming you have an input field with name "userId"

        // Update the database with the new image file path
        $sql = "UPDATE staff SET image = ? WHERE staffId = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $newFileName, $userId);

        if ($stmt->execute()) {
            echo "File uploaded and database updated successfully.";
        } else {
            echo "Error updating the database: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error uploading file.";
    }
} else {
    echo "No file uploaded or an error occurred.";
}


// Close the database connection
$conn->close();
