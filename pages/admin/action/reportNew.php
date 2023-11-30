<?php
include '../../include/selectDb.php';
include '../../include/dbConnection.php';

$pageSize = 50; // Number of rows to display per page
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
WHERE registration_requirements.req_status = 'Approve'
  $searchCondition
    ORDER BY registration.applicant_id ASC LIMIT $offset, $pageSize";

// Execute the SQL query for data retrieval
$result = mysqli_query($conn, $query);

$tableHTML = '';
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Build table rows dynamically
        $tableHTML .= '<tr>';


        $tableHTML .= '<td>' . htmlspecialchars($row['fullName']) . '</td>';
        $tableHTML .= '<td>' . htmlspecialchars($row['contactNum1']) . '</td>';
        $tableHTML .= '<td>' . htmlspecialchars($row['contactNum2']) . '</td>';
        $tableHTML .= '<td>' . htmlspecialchars($row['fullAddress']) . '</td>';








        $tableHTML .= '</tr>';
    }

    // Calculate total number of rows from the registration_approval table where action_type is 'approve'
    $countQuery = "SELECT COUNT(*) AS totalRows FROM examination WHERE requirements_status = 'Approve'";
    $countResult = mysqli_query($conn, $countQuery);
    if ($countResult) {
        $totalRowsData = mysqli_fetch_assoc($countResult);
        $totalRows = $totalRowsData['totalRows'];
    } else {
        // Handle the case where the query was not successful
        echo "Error executing the SQL query: " . mysqli_error($conn);
        exit();
    }

    // Calculate total number of pages
    $totalPages = ceil($totalRows / $pageSize);

    $paginationHTML = '';
    if ($totalPages > 1) {
        $paginationHTML .= '<ul class="pagination">';
        $paginationHTML .= '<li class="page-item ' . ($page == 1 ? 'disabled' : '') . '"><a class="page-link pagination-button" href="#" data-page="' . ($page - 1) . '"> < </a></li>';

        // Add the current page count
        $paginationHTML .= '<li class="page-item disabled"><span class="pageNumber page-link">Page ' . $page . ' of ' . $totalPages . '</span></li>';

        for ($i = 1; $i <= $totalPages; $i++) {
            $activeClass = ($i === $page) ? 'active' : '';
            $paginationHTML .= '<li class="page-item ' . $activeClass . '"><a class="page-link pagination-button" href="#" data-page="' . $i . '">' . $i . '</a></li>';
        }
        $paginationHTML .= '<li class="page-item ' . ($page == $totalPages ? 'disabled' : '') . '"><a class="page-link pagination-button" href="#" data-page="' . ($page + 1) . '"> > </a></li>';
        $paginationHTML .= '</ul>';
    }

    echo $tableHTML . $paginationHTML;
} else {
    echo '<tr><td colspan="10">No data available</td></tr>';
}

exit;