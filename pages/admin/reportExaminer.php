<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style/addStaff.css">
    <link rel="stylesheet" href="../../node_modules/ldloader/index.css" />
    <title>Approve Applicants</title>
    <style>
        .hidden-cell {
            display: none;
        }

        .filter-button {
            margin-right: 10px;
        }

        @media screen and (max-width: 779px) {

            .btnSearch {
                padding: 10px;
                height: 45px;
                margin-bottom: 8px;
                margin-left: 10px;
            }

            .searchBar {
                margin-left: 10px;
                margin-bottom: 10px;
                padding: 5px;
                width: 250px;
            }
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
    <div class="ldld full z-3"></div>
    <section id="content" class="home-section">
        <nav class="navbar navbar-light bg-light d-flex mt-5">
            <h3 class="examinersList ms-5">Examiners List</h3>
            <!-- <a class="btnSearch btn btn-outline-success mb-3" href="applicantExamPass.php">List of Pass Examiner</a> -->
            <!-- <a class="btnSearch btn btn-outline-danger mb-3" href="applicantExamFailed.php">Failed Examiner</a> -->
            <form id="searchForm" class="form-inline m-lg-3">
                <input id="searchInput" class="searchBar form-control-lg mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btnSearch btn btn-outline-success" type="submit">Search</button>
                <button id="refreshButton" class="btnSearch btn btn-outline-secondary" type="button">Refresh</button>
                <button class="btnAddStaff btn btn-outline-primary" id="btnPrint">Print</button>
                
            </form>
        </nav>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>


                        <th scope="col">Full Name</th>
                        <th scope="col">Contact 1</th>
                        <th scope="col">Contact 2</th>
                        <th scope="col">Address</th>

                    </tr>
                </thead>
                <tbody id="tableData">
                    <!-- Table rows will be dynamically populated here -->
                </tbody>
            </table>
            <p id="response"></p>
        </div>

        <div id="paginationButtons">
            <!-- Pagination buttons will be dynamically populated here -->
        </div>
        <script src="https://cdn.jsdelivr.net/gh/loadingio/ldLoader@v1.0.0/dist/ldld.min.js"></script>
        <script src="../../node_modules/ldloader/index.js"></script>
        <script>
            function sendAction(applicantId, action) {
                // Create an AJAX request
                new ldLoader({
                    root: ".ldld.full"
                }).on();
                $.ajax({
                    type: 'POST', // You can use 'GET' if preferred
                    url: 'action/applicantExaminerAction.php', // Replace 'process_action.php' with the server-side script that will handle the approval/decline
                    data: {
                        id: applicantId,
                        action: action
                    },
                    success: function(response) {
                        // Handle the response from the server if needed
                        new ldLoader({
                            root: ".ldld.full"
                        }).off();
                        $('#response').text(response);
                        setTimeout(function() {
                            $('#response').text('');
                        }, 5000);
                        loadTableData(currentPage);
                        // For example, you can display a success message or update the UI
                        if (action === 'pass') {
                            // alert(response);
                            $('#approveBtn').hide();
                            $('#declineBtn').hide();
                        } else if (action === 'failed') {
                            // alert(response);
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
            // Function to get the current page from local storage
            function getCurrentPage() {
                var currentPage = localStorage.getItem('currentPage');
                return currentPage ? parseInt(currentPage) : 1;
            }

            // Function to save the current page to local storage
            function setCurrentPage(page) {
                localStorage.setItem('currentPage', page);
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
                xhr.open('GET', 'action/reportExaminer.php?page=' + page, true);
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
                xhr.open('GET', 'action/reportExaminer.php?search=' + searchValue + '&page=' + page, true);
                xhr.send();
            }

            function refreshList() {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        document.getElementById("tableData").innerHTML = xhr.responseText;
                        setCurrentPage(currentPage); // Save the current page to local storage
                    }
                };

                xhr.open("GET", "action/reportExaminer.php?page=" + currentPage, true); // Pass the current page
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
        </script>
        <script>
    // Function to print only the table element with class "table"
    function printTable() {
        // Check if the pagination element exists
        var paginationElement = document.querySelector(".pagination");

        // Check if there is at least one pagination button
        var paginationButtons = document.querySelectorAll(".pagination-button");
        var hasPagination = paginationButtons.length > 0;

        // Add a class to hide the pagination container if it exists and there is at least one pagination button
        if (paginationElement && hasPagination) {
            paginationElement.classList.add("hide-for-print");
        }

        var tableElement = document.querySelector(".table");
        var tableElements = document.querySelector(".pageNumber");
        var clonedTable = tableElement.cloneNode(true);
        var clonedTables = tableElements ? tableElements.cloneNode(true) : null;

        var tableContent = clonedTable.outerHTML;
        var tableContents = clonedTables ? clonedTables.outerHTML : '';

        // Create a new window or HTML document
        var printWindow = window.open('', '_blank');

        // Set the content of the new window or document
        printWindow.document.write('<html><head><title>Table</title>');
        printWindow.document.write('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">');
        printWindow.document.write('<style>body{margin: 20px;} table{width: 100%; border-collapse: collapse; margin-bottom: 20px;} th, td{border: 1px solid black; padding: 8px; text-align: left;} th{background-color: #f2f2f2;} .hide-for-print { display: none; }</style>');
        printWindow.document.write('</head><body>');
        printWindow.document.write(tableContent);
        printWindow.document.write(tableContents);
        printWindow.document.write('</body></html>');

        // Close the document after printing
        printWindow.document.close();

        // Remove the class to show the pagination container again if it exists and there is at least one pagination button
        if (paginationElement && hasPagination) {
            paginationElement.classList.remove("hide-for-print");
        }

        // Print the content
        printWindow.print();
    }

    // Bind the function to the print button
    document.getElementById("btnPrint").addEventListener("click", printTable);
</script>
    </section>
</body>


</html>