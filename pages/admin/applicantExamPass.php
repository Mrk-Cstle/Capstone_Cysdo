<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style/addStaff.css">
    <title>Pass Examiner List</title>
    <style>
        .hidden-cell {
            display: none;
        }

        .filter-button {
            margin-right: 10px;
        }
    </style>
</head>
<?php
include 'include/session.php';
if ($_SESSION['role'] === 'admin') {
    include '../../assets/template/profileNav.php';
} elseif ($_SESSION['role'] === 'staff') {
    include '../../assets/template/staffNavi.php';
}
?>




<body>

    <section id="content" class="home-section">
        <h1>Pass Examiner List</h1>
        <nav class="navbar navbar-light bg-light d-flex">
            <a class="btn btn-outline-success" href="applicantExaminers.php">All Examiner</a>
            <a class="btn btn-outline-success" href="applicantExamFailed.php">Failed Examiner</a>
            <form id="searchForm" class="form-inline m-lg-3">
                <input id="searchInput" class="searchBar form-control-lg mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btnSearch btn btn-outline-success" type="submit">Search</button>
                <button id="refreshButton" class="btn btn-outline-secondary" type="button">Refresh</button>
                <button id="deleteAllButton" class="btn btn-danger">Delete All Examinees</button>
                <p id="response"></p>
            </form>
        </nav>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Applicant Id</th>

                        <th scope="col">Full Name</th>
                        <th scope="col">Contact 1</th>
                        <th scope="col">Contact 2</th>
                        <th scope="col">Address</th>
                        <th scope="col">Exam Result</th>
                        <th scope="col">Requirement Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody id="tableData">
                    <!-- Table rows will be dynamically populated here -->
                </tbody>
            </table>
        </div>

        <div id="paginationButtons">
            <!-- Pagination buttons will be dynamically populated here -->
        </div>
        <script>
            function sendAction(applicantId, action) {
                // Create an AJAX request
                $.ajax({
                    type: 'POST', // You can use 'GET' if preferred
                    url: 'action/applicantExaminerPassAction.php', // Replace 'process_action.php' with the server-side script that will handle the approval/decline
                    data: {
                        id: applicantId,
                        action: action
                    },
                    success: function(response) {
                        // Handle the response from the server if needed
                        $('#response').text(response);
                        setTimeout(function() {
                            $('#response').text('');
                        }, 5000);
                        loadTableData(currentPage);
                        // For example, you can display a success message or update the UI
                        if (action === 'pass') {
                            alert(response);
                            $('#approveBtn').hide();
                            $('#declineBtn').hide();
                        } else if (action === 'failed') {
                            alert(response);
                            $('#approveBtn').hide();
                            $('#declineBtn').hide();
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle the error if the request fails
                        console.error('Error sending action:', error);
                    }
                });
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
var myNamespace = 'appExamP';

// Function to get the current page from session storage
function getCurrentPage() {
    var currentPage = sessionStorage.getItem(myNamespace + 'currentPage');
    return currentPage ? parseInt(currentPage) : 1;
}

// Function to save the current page to session storage
function setCurrentPage(page) {
    sessionStorage.setItem(myNamespace + 'currentPage', page);
}

var currentPage = getCurrentPage(); // Get the current page from local storage


            function loadTableData(page) {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4) {
                        if (xhr.status === 200) {
                            document.getElementById('tableData').innerHTML = xhr.responseText;
                            setCurrentPage(page); // Save the current page to local storage
                        } else {
                            console.error('Error:', xhr.status);
                        }
                    }
                };
                xhr.open('GET', 'action/applicantExaminerPassDb.php?page=' + page, true);
                xhr.send();
            }

            function searchTableData(searchValue, page) {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4) {
                        if (xhr.status === 200) {
                            document.getElementById('tableData').innerHTML = xhr.responseText;
                            setCurrentPage(page); // Save the current page to local storage
                        } else {
                            console.error('Error:', xhr.status);
                        }
                    }
                };
                xhr.open('GET', 'action/applicantExaminerPassDb.php?search=' + searchValue + '&page=' + page, true);
                xhr.send();
            }

            document.addEventListener('DOMContentLoaded', function() {
                loadTableData(currentPage);

                document.addEventListener('click', function(event) {
                    if (event.target.classList.contains('pagination-button')) {
                        event.preventDefault();
                        var page = event.target.dataset.page;
                        if (page !== currentPage) {
                            if (document.getElementById('searchInput').value.trim() !== '') {
                                // If search is active, use the searchTableData function
                                searchTableData(document.getElementById('searchInput').value.trim(), page);
                            } else {
                                loadTableData(page);
                            }
                            currentPage = page;
                        }
                    }
                });

                document.getElementById('searchForm').addEventListener('submit', function(event) {
                    event.preventDefault();
                    var searchInput = document.getElementById("searchInput");
                    var searchQuery = searchInput.value.trim();
                    searchTableData(searchQuery, 1); // Reset to page 1 when performing a search
                });

                document.getElementById('refreshButton').addEventListener('click', function() {
                    refreshList();
                });
            });

            document.addEventListener('click', function (event) {
    if (event.target.classList.contains('deleteApplicant')) {
        var applicantId = event.target.getAttribute('data-applicant-id');
        var confirmation = confirm('Are you sure you want to delete this examinee?');
        if (confirmation) {
            // Perform the delete operation here, for example, using AJAX
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {
                        // Show a success message (you can customize this)
                        alert(xhr.responseText);
                        // Check if there are no more rows left on the current page
                        if (document.querySelectorAll('#tableData tr').length === 1) {
                            // Get the total number of pages from the last pagination button
                            var lastPage = document.querySelector('.pagination-button:last-child').getAttribute('data-page');
                            // Load the data for the last page
                            loadTableData(lastPage);
                        } else {
                            // Refresh the table after successful deletion
                            refreshList();
                        }
                    } else {
                        // Handle errors, e.g., show an error message
                        alert("Error deleting examinee: " + xhr.status);
                    }
                }
            };

            xhr.open("GET", "action/deleteExaminer.php?applicant_id=" + applicantId, true);
            xhr.send();
        }
    }
});


function refreshList() {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        document.getElementById("tableData").innerHTML = xhr.responseText;
                        setCurrentPage(currentPage); // Save the current page to local storage
                    }
                };

                xhr.open("GET", "action/applicantExaminerPassDb.php?page=" + currentPage, true); // Pass the current page
                xhr.send();
            }

            document.getElementById('deleteAllButton').addEventListener('click', function() {
    var confirmation = confirm('Are you sure you want to delete all examinees? This action cannot be undone.');
    if (confirmation) {
        // Perform the delete all operation here, for example, using AJAX
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    // Refresh the table after successful deletion
                    refreshList();
                    // Show a success message (you can customize this)
                    alert(xhr.responseText);
                } else {
                    // Handle errors, e.g., show an error message
                    alert("Error deleting all examinees: " + xhr.status);
                }
            }
        };

        xhr.open("GET", "action/deleteAllExamineesPass.php", true); // Replace "path/to/deleteAllExamineesPass.php" with the correct URL
        xhr.send();
    }
});

        </script>
    </section>
</body>


</html>