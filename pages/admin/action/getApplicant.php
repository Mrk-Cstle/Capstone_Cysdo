<?php
include '../../include/selectDb.php';
include '../../include/dbConnection.php';

$pageSize = 5; // Number of rows to display per page
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; // Get current page number
$searchTerm = isset($_GET['search']) ? $_GET['search'] : ''; // Get the search term

$offset = ($page - 1) * $pageSize; // Calculate the offset for the query

// Construct the search query
$searchQuery = "SELECT * FROM registration";
if (!empty($searchTerm)) {
    $searchQuery .= " WHERE fullName LIKE '%$searchTerm%'";
}
$searchQuery .= " ORDER BY applicant_id ASC LIMIT $offset, $pageSize";

$result = mysqli_query($conn, $searchQuery);

$tableHTML = '';
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Build table rows dynamically
        $tableHTML .= '<tr>';
        $tableHTML .= '<td>' . htmlspecialchars($row['applicant_id']) . '</td>';
        $tableHTML .= '<td>' . htmlspecialchars($row['fullName']) . '</td>';
        $tableHTML .= '<td>' . htmlspecialchars($row['contactNum1']) . '</td>';
        $tableHTML .= '<td>' . htmlspecialchars($row['contactNum2']) . '</td>';
        $tableHTML .= '<td>' . htmlspecialchars($row['fullAddress']) . '</td>';
        $tableHTML .= '<td>';
        if ($row['status'] === 'done') {
            $tableHTML .= '<span class="badge bg-success">Done</span>';
        } else {
            $tableHTML .= '<span class="badge bg-danger">For Review</span>';
        }
        $tableHTML .= '</td>';
        $tableHTML .= '<td class="hidden-cell">' . htmlspecialchars($row['lastName']) . '</td>';
        $tableHTML .= '<td class="hidden-cell">' . htmlspecialchars($row['firstName']) . '</td>';
        $tableHTML .= '<td class="hidden-cell">' . htmlspecialchars($row['middleName']) . '</td>';
        $tableHTML .= '<td>';
        $tableHTML .= '<a class="resetPassword btn btn-sm btn-dark" href="applicantView.php?id=' . htmlspecialchars($row['applicant_id']) . '">View</a>';
        $tableHTML .= '</td>';
        $tableHTML .= '</tr>';
    }

    // Calculate total number of rows
    $totalRows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM registration"));

    // Calculate total number of pages
    $totalPages = ceil($totalRows / $pageSize);

    $paginationHTML = '';
    if ($totalPages > 1) {
        $paginationHTML .= '<ul class="pagination">';
        $paginationHTML .= '<li class="page-item ' . ($page == 1 ? 'disabled' : '') . '"><a class="page-link pagination-button" href="#" data-page="' . ($page - 1) . '">Previous</a></li>';
        for ($i = 1; $i <= $totalPages; $i++) {
            $activeClass = ($i === $page) ? 'active' : '';
            $paginationHTML .= '<li class="page-item ' . $activeClass . '"><a class="page-link pagination-button" href="#" data-page="' . $i . '">' . $i . '</a></li>';
        }
        $paginationHTML .= '<li class="page-item ' . ($page == $totalPages ? 'disabled' : '') . '"><a class="page-link pagination-button" href="#" data-page="' . ($page + 1) . '">Next</a></li>';
        $paginationHTML .= '</ul>';
    }

    echo $tableHTML . $paginationHTML;
} else {
    echo '<tr><td colspan="10">No data available</td></tr>';
}

exit;
