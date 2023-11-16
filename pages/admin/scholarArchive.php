<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style/addStaff.css">
    <title>Scholar Archive List</title>
    <style>
        .hidden-cell {
            display: none;
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
    <section id="content" class="home-section">
        <nav class="navbar navbar-light bg-light d-flex mt-5">
            <h3 class="scholarArchiveList ms-5">Scholar Archive List</h3>
            <form id="searchForm" class="form-inline m-lg-3">
                <input id="searchInput" class="searchBar form-control-lg mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btnSearch btn btn-outline-success" type="submit">Search</button>
                <button id="refreshButton" class="btnSearch btn btn-outline-secondary" type="button">Refresh</button>
                <a class="btnAddStaff btn btn-outline-primary" href="#btnAdd">Add Scholar</a>
                <p id="response"></p>
            </form>
        </nav>



        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Remove Date</th>
                    <th scope="col">Approve Date</th>
                    <th scope="col">Action</th>
                </tr>
                <tbody id="tableData">
                    <!-- Data will be populated here -->
                </tbody>
            </table>
        </div>
        <div id="paginationContainer" class="pagination-container"></div>
        <div class="overlay" id="btnAdd">
            <div class="wrapper">
                <h2>Please Fill up The Form</h2><a class="close" href="#">&times;</a>
                <div class="content">
                    <div class="container">
                        <form id="addForm">
                            <label class="d-flex">Last Name</label>
                            <input class="d-flex" placeholder="Enter Last Name" type="text" id="lastName">
                            <label class="d-flex">First Name</label>
                            <input class="d-flex" placeholder="Enter Full Name" type="text" id="firstName">
                            <label class="d-flex">Middle Name</label>
                            <input class="d-flex" placeholder="Enter Middle Name" type="text" id="middleName">

                            <label class="entCont d-flex">Contact #</label>
                            <input class="entContact d-flex" placeholder="Enter Contact no." type="number" id="contactNumber">

                            <p id="response"></p>
                            <input class="btn btn-success" value="Submit" onclick="submitData('insert')">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="container-fluid">
                        <a type="button" class="btn-close mt-3 float-end" data-bs-dismiss="modal" aria-label="Close"></a>
                        <hr class="mb-3 mt-3 opacity-0">
                        <h2>Edit Details</h2>
                    </div>
                    <div class="modal-body">

                        <form>

                            <label class="d-flex">Last Name</label>
                            <input class="d-flex" placeholder="Enter New Last Name" type="text" id="editlastName">
                            <label class="d-flex">First Name</label>
                            <input class="d-flex" placeholder="Enter New Full Name" type="text" id="editfirstName">
                            <label class="d-flex">Middle Name</label>
                            <input class="d-flex" placeholder="Enter New Middle Name" type="text" id="editmiddleName">

                            <label class="entCont d-flex">Contact #</label>
                            <input class="entContact d-flex" placeholder="Enter New Contact no." type="number" id="editcontactNumber">
                            <label class="d-flex">E-mail</label>
                            <input class="d-flex" placeholder="Enter New E-mail" type="text" id="editemail">
                            <input type="hidden" id="editstaffId" name="postId" value="">
                            <input class="btn btn-success" id="editSaveBtn" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            $(document).ready(function() {
                $(document).on('click', '.resetPassword', function(e) {
                    e.preventDefault();
                    var adminId = $(this).data('id');
                    var $row = $(this).closest('tr');
                    var resetPassword = $row.find('td:nth-child(8)').text();
                    console.log(resetPassword);
                    $.ajax({
                        type: 'POST',
                        url: 'action/addAdminReset.php?id=' + adminId,
                        data: {
                            adminId: adminId,
                            resetPassword: resetPassword,


                        },
                        success: function(response) {

                            if (response === 'Reset Password Successfully') {
                                $('#response').text(response);

                                $('#editModal').modal('hide');
                                addData();
                                swal({
                                    title: "Success!",
                                    text: "Reset Password Successfully",
                                    icon: "success",
                                    button: "OK",
                                });
                            } else {
                                $('#response').text(response);
                                swal({
                                    title: "Error!",
                                    text: "No changes were made",
                                    icon: "error",
                                    button: "OK",
                                });
                            }
                            // Handle the response from the server
                            console.log('Password Reset successfully');
                            // Close the edit modal
                            $('#response').text(response);

                            addData();



                        },
                        error: function(xhr, status, error) {
                            // Handle any errors
                            console.error('Error updating post:', error);
                        }
                    });



                });
                $(document).on('click', '.editButton', function() {

                    var adminId = $(this).data('id');
                    var $row = $(this).closest('tr');
                    var fullName = $row.find('td:nth-child(2)').text();

                    var contactNumber = $row.find('td:nth-child(3)').text();
                    var address = $row.find('td:nth-child(4)').text();
                    var email = $row.find('td:nth-child(5)').text();
                    var lastName = $row.find('td:nth-child(6)').text();
                    var firstName = $row.find('td:nth-child(7)').text();
                    var middleName = $row.find('td:nth-child(8)').text();

                    $('#editstaffId').val(adminId);
                    $('#editlastName').val(lastName);
                    $('#editfirstName').val(firstName);
                    $('#editmiddleName').val(middleName);

                    $('#editcontactNumber').val(contactNumber);
                    $('#editaddress').val(address);
                    $('#editemail').val(email);
                    console.log(adminId, firstName, firstName, contactNumber, address, email);
                    $('#editModal').modal('show');
                });
            });
            $('#editSaveBtn').click(function(e) {
                e.preventDefault();
                var adminId = $('#editstaffId').val();
                var editlastName = $('#editlastName').val();
                var editfirstName = $('#editfirstName').val();
                var editmiddleName = $('#editmiddleName').val();

                var editcontactNumber = $('#editcontactNumber').val();
                var editaddress = $('#editaddress').val();
                var editemail = $('#editemail').val();
                console.log(adminId);
                // Perform your Ajax request here to handle the edit functionality
                $.ajax({
                    type: 'POST',
                    url: 'action/addAdminEdit.php?id=' + adminId,
                    data: {
                        adminId: adminId,
                        editlastName: editlastName,
                        editfirstName: editfirstName,
                        editmiddleName: editmiddleName,

                        editcontactNumber: editcontactNumber,
                        editaddress: editaddress,
                        editemail: editemail,

                    },
                    success: function(response) {
                        // Handle the response from the server
                        if (response === 'Save Changes Successfully') {
                            $('#response').text(response);
                            $('#editModal').modal('hide');
                            addData();
                            swal({
                                title: "Success!",
                                text: "Inserted Successfully",
                                icon: "success",
                                button: "OK",
                            });
                        } else {
                            $('#response').text(response);
                            swal({
                                title: "Error!",
                                text: "No changes were made",
                                icon: "error",
                                button: "OK",
                            });
                        }

                        // Close the edit modal




                    },
                    error: function(xhr, status, error) {
                        // Handle any errors
                        console.error('Error updating post:', error);
                    }
                });
            });

            function submitData(action) {
                event.preventDefault();
                var data = {
                    action: action,
                    lastName: $("#lastName").val(),
                    firstName: $("#firstName").val(),
                    middleName: $("#middleName").val(),
                    position: $("#position").val(),
                    contact: $("#contactNumber").val(),
                    email: $("#email").val(),
                };

                $.ajax({
                    url: 'action/scholarAdd.php',
                    type: 'POST',
                    data: data,
                    success: function(response) {

                        if (response === 'Inserted Successfully') {
                            $('#response').text(response);
                            addData();

                            $('#btnAdd').prop('disabled', true); // Disable the button temporarily
                            swal({
                                title: "Success!",
                                text: "Inserted Successfully",
                                icon: "success",
                                button: "OK",
                            }).then(function() {
                                $('#btnAdd').prop('disabled', false);
                                $("#lastName").val("");
                                $("#firstName").val("");
                                $("#middleName").val("");
                                $("#position").val("");
                                $("#contactNumber").val("");
                                $("#email").val("");
                                // Enable the button again

                                // Additional code if needed
                            });
                        }
                    }
                });

            }


            function deleteAdmin(adminId, searchQuery) {
                if (confirm("Are you sure you want to delete this admin record?")) {
                    $.ajax({
                        type: "POST",
                        url: "action/scholarDelete.php", // Adjust the path to your delete script
                        data: {
                            admin_id: adminId
                        },
                        success: function(data) {
                            // Handle the response from the server
                            alert(data); // You can replace this with your preferred handling method

                            if (data === "Admin record deleted successfully.") {
                                // Remove the row from the table without a page refresh
                                $("#row_" + adminId).remove();

                                // Refresh the table data with the current search query
                                loadPage(1);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error("AJAX request failed: " + error);
                        }
                    });
                }
            }


            function addData() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("tableData").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "action/scholarArchiveList.php", true);
                xhttp.send();
            }

            function loadDoc() {
                var searchInput = document.getElementById("searchInput");
                if (searchInput.value === "") {
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("tableData").innerHTML = this.responseText;
                        }
                    };
                    xhttp.open("GET", "action/scholarArchiveList.php", true);
                    xhttp.send();
                }
            }
            loadDoc();


            function filterTable(searchQuery) {
                var rows = document.querySelectorAll("#tableData tr");
                searchQuery = searchQuery.toLowerCase();

                rows.forEach(function(row) {
                    var fullName = row.querySelector("td:nth-child(2)").textContent.toLowerCase();
                    if (fullName.includes(searchQuery)) {
                        row.style.display = "table-row";
                    } else {
                        row.style.display = "none";
                    }
                });

                // Call loadPage with the search query
                loadPage(1);
            }


            function refreshTable(searchQuery = "") {
                var searchInput = document.getElementById("searchInput").value;
                var currentPage = '1'; // Get the current page from session storage

                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("tableData").innerHTML = this.responseText;
                        // Update the search input with the provided query
                        document.getElementById("searchInput").value = searchQuery;

                        // Load the current page after refreshing the table
                        loadPage(currentPage);
                    }
                };
                xhttp.open("GET", "action/scholarArchiveList.php?page=" + currentPage + "&searchQuery=" + searchQuery, true);
                xhttp.send();
            }

            document.addEventListener("DOMContentLoaded", function() {
                // Initialize the table and pagination on page load
                refreshTable(); // Initially, no search query

                // Event handler for the search form submission
                var searchForm = document.getElementById("searchForm");
                searchForm.addEventListener("submit", function(event) {
                    event.preventDefault();
                    var searchInput = document.getElementById("searchInput");
                    var searchQuery = searchInput.value;
                    refreshTable(searchQuery); // Refresh the table with the search query
                });

                // Event handler for the refresh button
                var refreshButton = document.getElementById("refreshButton");
                refreshButton.addEventListener("click", function() {
                    refreshTable(); // Refresh the table without clearing the search query
                });
            });


            function refreshList() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("tableData").innerHTML = this.responseText;

                        // Reset the pagination to page 1
                        loadPage(1);
                    }
                };

                xhttp.open("GET", "action/scholarArchiveList.php", true);
                xhttp.send();
            }

            // Modify the loadPage function to include the search query and page number
            function loadPage(page) {
                var searchInput = document.getElementById("searchInput");
                var searchQuery = searchInput.value;

                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("tableData").innerHTML = this.responseText;
                        // Store the current page in localStorage
                        setCurrentPage(page);
                    }
                };
                xhttp.open("GET", "action/scholarArchiveList.php?page=" + page + "&searchQuery=" + searchQuery, true);
                xhttp.send();
            }



            document.addEventListener("click", function(e) {
                if (e.target && e.target.classList.contains("pagination-button")) {
                    e.preventDefault();
                    var page = e.target.getAttribute("data-page");
                    loadPage(page); // Load the page

                    // Store the current page in localStorage
                    setCurrentPage(page);
                }
            });


            // Add this function to initialize pagination when the page loads
            function initializePagination() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("tableData").innerHTML = this.responseText;
                        // Initialize pagination links
                        loadPage(1);
                    }
                };
                xhttp.open("GET", "action/scholarArchiveList.php", true);
                xhttp.send();
            }

            // Call the initializePagination function when the page loads
            document.addEventListener("DOMContentLoaded", function() {
                initializePagination();
            });

            var myNamespace = 'scholarArchiveList';

            // Function to get the current page from session storage
            function getCurrentPage() {
                var currentPage = sessionStorage.getItem(myNamespace + 'currentPage');
                return currentPage ? parseInt(currentPage) : 1;
            }

            // Function to save the current page to session storage
            function setCurrentPage(page) {
                sessionStorage.setItem(myNamespace + 'currentPage', page);
            }


            // Add this function to load the current page from localStorage
            function loadCurrentPage() {
                var currentPage = getCurrentPage();
                loadPage(currentPage);
            }


            // Add this event listener to handle pagination button clicks and store the current page
            document.addEventListener("click", function(e) {
                if (e.target && e.target.classList.contains("pagination-button")) {
                    e.preventDefault();
                    var page = e.target.getAttribute("data-page");
                    loadPage(page);

                    // Store the current page in localStorage
                    setCurrentPage(page);
                }
            });

            // Call the loadCurrentPage function to load the current page from localStorage
            loadCurrentPage();

            // Add this function to initialize pagination when the page loads
            function initializePagination() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("tableData").innerHTML = this.responseText;
                        // Initialize pagination links
                        loadCurrentPage(); // Load the current page from localStorage
                    }
                };
                xhttp.open("GET", "action/scholarArchiveList.php", true);
                xhttp.send();
            }

            // Call the initializePagination function when the page loads
            document.addEventListener("DOMContentLoaded", function() {
                initializePagination();
            });
        </script>
    </section>
</body>

</html>