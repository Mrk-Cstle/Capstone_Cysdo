<?php
include '../../include/dbConnection.php';

$pageSize = 16; // Number of rows to display per page
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
$query = "SELECT * FROM registration $searchCondition  ORDER BY applicant_id ASC LIMIT $offset, $pageSize";

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

    // Calculate total number of rows based on the search
    $totalRows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM registration $searchCondition"));

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