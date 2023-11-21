<?php
include '../../include/dbConnection.php';

$pageSize = 50; // Number of rows to display per page
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; // Get current page number

$offset = ($page - 1) * $pageSize; // Calculate the offset for the query

// Initialize search parameters
$searchQuery = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';
$searchCondition = '';

// If a search query is provided, add a WHERE clause to the query
if (!empty($searchQuery)) {
    $searchCondition = "WHERE fullName LIKE '%$searchQuery%' OR contactNum1 LIKE '%$searchQuery%' OR contactNum2 LIKE '%$searchQuery%' OR fullAddress LIKE '%$searchQuery%'";
}

// Construct the query to fetch data with or without search
$query = "SELECT * FROM registration_archive $searchCondition ORDER BY id ASC LIMIT $offset, $pageSize";

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
        $tableHTML .= '<td>' . htmlspecialchars($row['type']) . '</td>';

        $tableHTML .= '<td class="hidden-cell">' . htmlspecialchars($row['lastName']) . '</td>';
        $tableHTML .= '<td class="hidden-cell">' . htmlspecialchars($row['firstName']) . '</td>';
        $tableHTML .= '<td class="hidden-cell">' . htmlspecialchars($row['middleName']) . '</td>';
        $tableHTML .= '<td>';
        $tableHTML .= '<a class="resetPassword btn btn-sm btn-dark" href="applicantViewArchive.php?id=' . htmlspecialchars($row['applicant_id']) . '">View</a>';
        $tableHTML .= '</td>';
        $tableHTML .= '</tr>';
    }

    // Calculate total number of rows based on the search
    $totalRows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM registration_archive $searchCondition"));

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
    echo '<tr><td colspan="10">No data available</td></tr>';
}

exit;
