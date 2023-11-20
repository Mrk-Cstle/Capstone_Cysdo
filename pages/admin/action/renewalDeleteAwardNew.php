<?php
// Assuming you have a valid database connection named $conn
include '../../include/selectDb.php';
include '../../include/dbConnection.php';

// SELECT query
$selectQuery = "SELECT  scholar.*,newscholar_award.*
          FROM newscholar_award
          JOIN scholar ON scholar.scholar_id = newscholar_award.scholar_id";

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


        // INSERT INTO ... SELECT query for each row
        $insertQuery = "INSERT INTO newscholar_award_archive (scholar_release_id, scholar_id, newrelease_status) 
                VALUES ('$scholar_release_id', '$scholar_id', '$newrelease_status')";

        $resultss = mysqli_query($conn, $insertQuery);

        // Check if the INSERT INTO ... SELECT query was successful for each row
        if ($resultss) {
            // Delete the inserted row from the original table
            mysqli_query($conn, "DELETE FROM newscholar_award WHERE scholar_id = '$scholar_id'");
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }
    }

    echo "Data successfully inserted into archive.";
} else {
    echo "No data to insert.";
}

// Close the database connection
mysqli_close($conn);
