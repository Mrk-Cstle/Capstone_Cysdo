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
    $searchCondition = "AND (full_name LIKE '%$searchQuery%' OR  contact_num1 LIKE '%$searchQuery%' OR full_address LIKE '%$searchQuery%')";
}

$query =
    "SELECT renewal_award.*, renewal.*, scholar.*
          FROM renewal
          JOIN scholar ON scholar.scholar_id = renewal.scholar_id
          JOIN renewal_award ON renewal_award.renewal_id = renewal.renewal_id
          $searchCondition
          ORDER BY renewal_award.award_id ASC
          LIMIT $offset, $pageSize";

// Execute the SQL query for data retrieval
$result = mysqli_query($conn, $query);

$tableHTML = '';
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Build table rows dynamically
        $tableHTML .= '<tr>';

        $tableHTML .= '<td>' . htmlspecialchars($row['scholar_id']) . '</td>';

        $tableHTML .= '<td>' . htmlspecialchars($row['full_name']) . '</td>';
        $tableHTML .= '<td>' . htmlspecialchars($row['contact_num1']) . '</td>';
        $tableHTML .= '<td>' . htmlspecialchars($row['atm_number']) . '</td>';

        $tableHTML .= '<td>' . htmlspecialchars($row['semester_year']) . '</td>';

        $tableHTML .= '<td>';
        if ($row['award_status'] == !null) {
            if ($row['award_status'] == 'done') {
                $tableHTML .= '<span class="badge bg-success text-capitalize" >' . $row['award_status'] . '</span>';
            } else {
                $tableHTML .= '<span class="badge bg-danger text-capitalize" >' . $row['award_status'] . '</span>';
            }
        } else {
            $tableHTML .= '<span class="badge bg-warning">For Review</span>';
        }
        $tableHTML .= '</td>';
        $tableHTML .= '<td>';

        if ($row['award_status'] == null) {
            $tableHTML .= '<button class="resetPassword btn btn-sm btn-success" onclick="sendAction(\'' .  $row['award_id'] . '\', \'done\', \'' . $row['semester_year'] . '\')">Done</button> | ';

            $tableHTML .= '<a class="resetPassword btn btn-sm btn-dark" href="renewalStatus.php?id=' . htmlspecialchars($row['renewal_id']) . '&action=' . htmlspecialchars($row['semester']) .  '&page=award">View</a>';
        } else {
            $tableHTML .= '<a class="resetPassword btn btn-sm btn-dark" href="renewalStatus.php?id=' . htmlspecialchars($row['renewal_id']) . '&action=' . htmlspecialchars($row['semester']) .  '&page=award">View</a> | ';
            $tableHTML .= '<button class="deleteApplicant btn btn-sm btn-danger" onclick="sendAction(\'' .  $row['award_id'] . '\', \'delete\', \'' . $row['semester_year'] . '\')">Delete</button>';
        }



        $tableHTML .= '</td>';
        $tableHTML .= '</tr>';
    }

    // Calculate the total count of "pass" results
    $countQuery = "SELECT COUNT(*) AS totalRows
              FROM renewal_award
              JOIN renewal ON renewal.renewal_id = renewal_award.renewal_id
              JOIN scholar ON scholar.scholar_id = renewal.scholar_id
              $searchCondition";

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
