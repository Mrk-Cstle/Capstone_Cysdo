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
    </style>
</head>
<?php
include 'include/session.php';
if ($_SESSION['role'] === 'admin') {
    include '../../assets/template/profileNav.php';
} elseif ($_SESSION['role'] === 'staff') {
    include '../../assets/template/staffNav.php';
}
?>


<body>
    <section id="content" class="home-section">
        <nav class="navbar navbar-light bg-light d-flex">
            <form id="searchForm" class="form-inline m-lg-3">
                <input id="searchInput" class="searchBar form-control-lg mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btnSearch btn btn-outline-success" type="submit">Search</button>
                <button id="refreshButton" class="btn btn-outline-secondary" type="button">Refresh</button>
                <a class="btnAddStaff btn btn-outline-primary" href="#btnAdd">Add Admin</a>
                <p id="response"></p>
            </form>
        </nav>



        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Contact #</th>
                    <th scope="col">Address</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Action</th>
                </tr>
                <tbody id="tableData">
                    <!-- Data will be populated here -->
                </tbody>
            </table>
        </div>
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
                            <label class="d-flex">E-mail</label>
                            <input class="d-flex" placeholder="Enter E-mail" type="text" id="email">
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
                    url: 'action/addAdminDb.php',
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


                        } else if (response === "Admin Info Deleted") {
                            swal({
                                title: "Success!",
                                text: "Deleted Successfully",
                                icon: "success",
                                button: "OK",
                            })
                            $("#" + action).css("display", "none");
                        } else {
                            $('#response').text(response);
                            swal({
                                title: "Error!",
                                text: "An error occurred",
                                icon: "error",
                                button: "OK",
                            });
                        }

                    }
                });
            }



            function addData() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("tableData").innerHTML = this.responseText;
                    }
                };

                xhttp.open("GET", "action/addAdminList.php", true);
                xhttp.send();
            }

            function loadDoc() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("tableData").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "action/addAdminList.php", true);
                xhttp.send();
            }

            loadDoc();

            // Search functionality
            document.getElementById("searchForm").addEventListener("submit", function(event) {
                event.preventDefault(); // Prevent form submission

                const searchInput = document.getElementById("searchInput").value.toLowerCase();
                const tableRows = document.querySelectorAll("#tableData tr");

                tableRows.forEach(function(row) {
                    const fullNameCell = row.querySelector("td:nth-child(2)");
                    if (fullNameCell) {
                        const fullName = fullNameCell.textContent.toLowerCase();
                        if (fullName.includes(searchInput)) {
                            row.style.display = "";
                        } else {
                            row.style.display = "none";
                        }
                    }
                });
            });

            document.getElementById("refreshButton").addEventListener("click", function() {
    refreshList(); // Call the refreshList() function to refresh the content
});

function refreshList() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("tableData").innerHTML = this.responseText;
        }
    };

    xhttp.open("GET", "action/addAdminList.php", true);
    xhttp.send();
}
        </script>
    </section>
</body>

</html>