<?php
include '../../include/selectDb.php';

$recordsPerPage = 5; // Change this to your desired value

// Initialize variables for search and page number
$searchQuery = isset($_GET['searchQuery']) ? $_GET['searchQuery'] : '';
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$start = ($page - 1) * $recordsPerPage;

// Modify the SQL query to fetch records based on search and pagination
$sql = "SELECT * FROM staff";

// If a search query is provided, add a WHERE clause to the SQL query
if (!empty($searchQuery)) {
  $searchCondition = "WHERE fullName LIKE '%$searchQuery%'";
}

$sql .= " LIMIT $start, $recordsPerPage";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <th class="user_id" scope="row"><?php echo $row['staffId']; ?></th>
        <td><?php echo $row['fullName']; ?></td>
        <td><?php echo $row['position']; ?></td>
        <td><?php echo $row['contactNum']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td class="hidden-cell"><?php echo $row['last_name']; ?></td>
        <td class="hidden-cell"><?php echo $row['first_name']; ?></td>
        <td class="hidden-cell"><?php echo $row['middle_name']; ?></td>
        <td>
          <a class="editButton btn btn-sm btn-primary " data-id="<?php echo $row['staffId']; ?>">Edit</a>
          <a class=" btn btn-sm btn-danger" href="" onclick="submitData('<?php echo $row['staffId']; ?>')">Delete</a>
          <a class="resetPassword btn btn-sm btn-dark" data-id="<?php echo $row['staffId']; ?>" href="">Reset Password</a>
        </td>
      </tr>
  <?php
    }

    // Calculate total number of rows
    $totalRows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM staff"));

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
