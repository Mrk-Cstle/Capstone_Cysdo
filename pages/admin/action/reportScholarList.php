<?php
include '../../include/selectDb.php';
include '../../include/dbConnection.php';

$recordsPerPage = 50; // Change this to your desired value

// Initialize page number
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$start = ($page - 1) * $recordsPerPage;

$searchQuery = isset($_GET['searchQuery']) ? mysqli_real_escape_string($conn, $_GET['searchQuery']) : '';
$sql = "SELECT * FROM scholar WHERE full_name LIKE '%$searchQuery%' LIMIT $start, $recordsPerPage";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>
        <tr>

            <td><?php echo $row['full_name']; ?></td>
            <td><?php echo $row['contact_num1']; ?></td>
            <td><?php echo $row['contact_num2']; ?></td>
            <td><?php echo $row['approve_date']; ?></td>




        </tr>
<?php
    }

    // Calculate total number of rows for the search query
    $totalRows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM scholar WHERE full_name LIKE '%$searchQuery%'"));

    // Calculate total number of pages based on the search results
    $totalPages = ceil($totalRows / $recordsPerPage);

    $paginationHTML = '';
    if ($totalPages > 1) {
        $paginationHTML .= '<ul class="pagination">';
        $paginationHTML .= '<li class="page-item ' . ($page == 1 ? 'disabled' : '') . '"><a class="page-link pagination-button" href="#" data-page="' . ($page - 1) . '"> < </a></li>';

        // Add the current page count
        $paginationHTML .= '<li class="page-item disabled"><span class="page-link">Page ' . $page . ' of ' . $totalPages . '</span></li>';

        for ($i = 1; $i <= $totalPages; $i++) {
            $activeClass = ($i === $page) ? 'active' : '';
            $paginationHTML .= '<li class="page-item ' . $activeClass . '"><a class="page-link pagination-button" href="#" data-page="' . $i . '">' . $i . '</a></li>';
        }
        $paginationHTML .= '<li class="page-item ' . ($page == $totalPages ? 'disabled' : '') . '"><a class="page-link pagination-button" href="#" data-page="' . ($page + 1) . '"> > </a></li>';
        $paginationHTML .= '</ul>';
    }
    echo $paginationHTML;
} else {
    echo '<tr><td colspan="10">No data available</td></tr>';
}

exit;
?>