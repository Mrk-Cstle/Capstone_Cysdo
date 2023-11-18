<?php
include '../../include/selectDb.php';
include '../../include/dbConnection.php';

$pageSize = 10; // Number of rows to display per page
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; // Get current page number

$offset = ($page - 1) * $pageSize; // Calculate the offset for the query

$searchQuery = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';
$searchCondition = '';

// If a search query is provided, add a WHERE clause to the query
if (!empty($searchQuery)) {
    $searchCondition = "AND (fullName LIKE '%$searchQuery%' OR contactNum1 LIKE '%$searchQuery%' OR contactNum2 LIKE '%$searchQuery%' OR fullAddress LIKE '%$searchQuery%')";
}

$query =
    "SELECT registration.*, registration_approval.*, examination.*, registration_requirements.*
FROM registration
JOIN registration_approval ON registration.applicant_id = registration_approval.application_id
JOIN examination ON examination.action_id = registration_approval.action_id
JOIN registration_requirements ON registration_requirements.examination_id = examination.examination_id
WHERE examination.result = 'pass' $searchCondition
ORDER BY registration.applicant_id ASC LIMIT $offset, $pageSize";

// Execute the SQL query for data retrieval
$result = mysqli_query($conn, $query);

$tableHTML = '';
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Build table rows dynamically
        $tableHTML .= '<tr>';
        $tableHTML .= '<td>' . '<img src="../../uploads/applicant/2x2/' . $row['pic2x2']  . '"alt="image"style="height: 80px; width: 80px;"><?></td>';
        $tableHTML .= '<td>' . htmlspecialchars($row['applicant_id']) . '</td>';

        $tableHTML .= '<td>' . htmlspecialchars($row['fullName']) . '</td>';
        $tableHTML .= '<td>' . htmlspecialchars($row['contactNum1']) . '</td>';
        $tableHTML .= '<td>' . htmlspecialchars($row['contactNum2']) . '</td>';
        $tableHTML .= '<td>' . htmlspecialchars($row['fullAddress']) . '</td>';

        $tableHTML .= '<td>';
        if ($row['result'] === 'pass') {
            $tableHTML .= '<span class="badge bg-success">Passed</span>';
        } else {
            $tableHTML .= '<span class="badge bg-danger">' . $row['result'] . '</span>';
        }
        $tableHTML .= '</td>';
        $tableHTML .= '<td>';
        if ($row['req_status'] == 'Pending') {
            $tableHTML .= '<span class="badge bg-danger">Pending Requirements</span>';
        } else if ($row['req_status'] === 'Uploaded') {
            $tableHTML .= '<span class="badge bg-warning">For Review</span>';
        } else {
            $tableHTML .= '<span class="badge bg-success">' . $row['req_status'] . '</span>';
        }
        $tableHTML .= '</td>';
        $tableHTML .= '<td class="hidden-cell">' . htmlspecialchars($row['lastName']) . '</td>';
        $tableHTML .= '<td class="hidden-cell">' . htmlspecialchars($row['firstName']) . '</td>';
        $tableHTML .= '<td class="hidden-cell">' . htmlspecialchars($row['middleName']) . '</td>';
        $tableHTML .= '<td>';

        $tableHTML .=   '<a class="resetPassword btn btn-sm btn-success mb-2 me-2" href="applicantRequirementsView.php?id=' . htmlspecialchars($row['examination_id']) . '">View</a>';
        $tableHTML .= '<button class="deleteApplicant btn btn-sm btn-danger mb-2" data-applicant-id="' . htmlspecialchars($row['applicant_id']) . '">Delete</button>';


        $tableHTML .= '</td>';
        $tableHTML .= '</tr>';
    }

    // Calculate the total count of "pass" results
    $countQuery = "SELECT COUNT(*) AS totalRows FROM registration
JOIN registration_approval ON registration.applicant_id = registration_approval.application_id
JOIN examination ON examination.action_id = registration_approval.action_id
WHERE examination.result = 'pass' $searchCondition";
    $countResult = mysqli_query($conn, $countQuery);

    if ($countResult) {
        $totalRowsData = mysqli_fetch_assoc($countResult);
        $totalRows = $totalRowsData['totalRows'];

        // Calculate total number of pages
        $totalPages = ceil($totalRows / $pageSize);

        $paginationHTML = '';
        if ($totalPages > 1) {
            $paginationHTML .= '<ul class="pagination">';
            $paginationHTML .= '<li class="page-item ' . ($page == 1 ? 'disabled' : '') . '"><a class="page-link pagination-button" href="#" data-page="' . ($page - 1) . '"> < </a></li>';

            // Add the current page count

            for ($i = 1; $i <= $totalPages; $i++) {
                $activeClass = ($i === $page) ? 'active' : '';
                $paginationHTML .= '<li class="page-item ' . $activeClass . '"><a class="page-link pagination-button" href="#" data-page="' . $i . '">' . $i . '</a></li>';
            }
            $paginationHTML .= '<li class="page-item ' . ($page == $totalPages ? 'disabled' : '') . '"><a class="page-link pagination-button" href="#" data-page="' . ($page + 1) . '"> > </a></li>';
            $paginationHTML .= '</ul>';
        }

        echo $tableHTML . $paginationHTML;
    } else {
        // Handle the case where the query was not successful
        echo "Error executing the SQL query: " . mysqli_error($conn);
    }
} else {
    echo '<tr><td colspan="10">No data available</td></tr>';
}

exit;
