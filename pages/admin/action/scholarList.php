<?php
include '../../include/selectDb.php';

$recordsPerPage = 5; // Change this to your desired value

// Calculate the starting record for the current page
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$start = ($page - 1) * $recordsPerPage;

// Modify the SQL query to fetch records for the current page from the "admin" table
$sql = "SELECT * FROM scholar LIMIT $start, $recordsPerPage";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>
        <tr>
            <th class="user_id" scope="row"><?php echo $row['scholar_id']; ?></th>
            <td><?php echo $row['full_name']; ?></td>
            <td><?php echo $row['contact_num1']; ?></td>
            <td><?php echo $row['contact_num2']; ?></td>
            <td><?php echo $row['approve_date']; ?></td>
            <td></td>

            <td class="hidden-cell"><?php echo $row['last_name']; ?></td>
            <td class="hidden-cell"><?php echo $row['first_name']; ?></td>
            <td class="hidden-cell"><?php echo $row['middle_name']; ?></td>

        </tr>
<?php
    }

    // Calculate total number of rows from the "admin" table
    $totalRows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM scholar"));

    // Calculate total number of pages
    $totalPages = ceil($totalRows / $recordsPerPage);

    $paginationHTML = '';
    if ($totalPages > 1) {
        $paginationHTML .= '<ul class="pagination">';
        $paginationHTML .= '<li class="page-item ' . ($page == 1 ? 'disabled' : '') . '"><a class="page-link pagination-button" href="#" data-page="' . ($page - 1) . '">Previous</a></li>';

        // Add the current page count
        $paginationHTML .= '<li class="page-item disabled"><span class="page-link">Page ' . $page . ' of ' . $totalPages . '</span></li>';

        for ($i = 1; $i <= $totalPages; $i++) {
            $activeClass = ($i === $page) ? 'active' : '';
            $paginationHTML .= '<li class="page-item ' . $activeClass . '"><a class="page-link pagination-button" href="#" data-page="' . $i . '">' . $i . '</a></li>';
        }
        $paginationHTML .= '<li class="page-item ' . ($page == $totalPages ? 'disabled' : '') . '"><a class="page-link pagination-button" href="#" data-page="' . ($page + 1) . '">Next</a></li>';
        $paginationHTML .= '</ul>';
    }
    echo $paginationHTML;
} else {
    echo '<tr><td colspan="10">No data available</td></tr>';
}

exit;
?>
?>