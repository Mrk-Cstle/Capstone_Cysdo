<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style/addStaff.css">
    <title>Document</title>
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
    include '../../assets/template/nav.php';
} elseif ($_SESSION['role'] === 'staff') {
    include '../../assets/template/staffNav.php';
}
?>




<body>
    <section id="content" class="home-section">
        <div class="backRound">
            <nav class="navbar navbar-light bg-light d-flex">
                <form class="form-inline m-lg-3">
                    <input id="searchInput" class="searchBar form-control-lg mr-sm-2" type="search" placeholder="Search" aria-label="Search">

                    <a class="btnRefresh btn btn-outline-primary" href="">Refresh</a>
                    <p id="response"></p>
                </form>
            </nav>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Contact 1</th>
                            <th scope="col">Contact 2</th>
                            <th scope="col">Address</th>
                            <th scope="col">Status</th>
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

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
                function loadTableData(page) {
                    var xhr = new XMLHttpRequest();
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === 4) {
                            if (xhr.status === 200) {
                                document.getElementById('tableData').innerHTML = xhr.responseText;
                            } else {
                                console.error('Error:', xhr.status);
                            }
                        }
                    };
                    xhr.open('GET', 'action/getApplicant.php?page=' + page, true);
                    xhr.send();
                }

                function searchTableData(searchValue) {
                    var xhr = new XMLHttpRequest();
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === 4) {
                            if (xhr.status === 200) {
                                document.getElementById('tableData').innerHTML = xhr.responseText;
                            } else {
                                console.error('Error:', xhr.status);
                            }
                        }
                    };
                    xhr.open('GET', 'action/getApplicant.php?search=' + searchValue, true);
                    xhr.send();
                }

                document.addEventListener('DOMContentLoaded', function() {
                    var currentPage = 1;

                    loadTableData(currentPage);

                    document.addEventListener('click', function(event) {
                        if (event.target.classList.contains('pagination-button')) {
                            event.preventDefault();
                            var page = event.target.dataset.page;
                            if (page !== currentPage) {
                                loadTableData(page);
                                currentPage = page;
                            }
                        }
                    });

                    document.getElementById('searchInput').addEventListener('input', function(event) {
                        var searchValue = event.target.value.trim();
                        searchTableData(searchValue);
                    });
                });


                function refreshList() {

                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("tableData").innerHTML = this.responseText;

                        }
                    };

                    xhttp.open("GET", "action/getApplicant.php", true);
                    xhttp.send();
                }
            </script>
        </div>
    </section>
</body>


</html>