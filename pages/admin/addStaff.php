<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="../../style/addStaff.css">
  <title>Document</title>
</head>
<?php
include '../../assets/template/nav.php';

?>




<body>
  <section id="content" class="home-section">
    <div class="backRound">
      <nav class="navbar navbar-light bg-light d-flex">
        <form class="form-inline m-lg-3">
          <input class="searchBar form-control-lg mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btnSearch btn btn-outline-success" type="submit">Search</button>
          <a class="btnAddStaff btn btn-outline-primary" href="#btnAdd">Add Staff</a>
          <p id="response"></p> //@martin pa css eto yung notif sa html kung success yung pag add sa db
        </form>
      </nav>
      <div class="table-responsive">
        <table class="table table-hover">
          <tr>
            <th scope="col">Image</th>
            <th scope="col">Full Name</th>
            <th scope="col">Position</th>
            <th scope="col">Contact #</th>
            <th scope="col">Address</th>
            <th scope="col">E-mail</th>
            <th scope="col">Action</th>
          </tr>

          <tr>

          </tr>
        </table>
      </div>
      <div class="overlay" id="btnAdd">
        <div class="wrapper">
          <h2>Please Fill up The Form</h2><a class="close" href="#">&times;</a>
          <div class="content">
            <div class="container">
              <form>
                <label class="d-flex">Last Name</label>
                <input class="d-flex" placeholder="Enter Last Name" type="text" id="lastName">
                <label class="d-flex">First Name</label>
                <input class="d-flex" placeholder="Enter Full Name" type="text" id="firstName">
                <label class="d-flex">Middle Name</label>
                <input class="d-flex" placeholder="Enter Middle Name" type="text" id="middleName">
                <label class="d-flex">Position</label>
                <input class="d-flex" placeholder="Enter Position" type="text" id="position">
                <label class="entCont d-flex">Contact #</label>
                <input class="entContact d-flex" placeholder="Enter Contact no." type="number" id="contactNumber">
                <label class="d-flex">E-mail</label>
                <input class="d-flex" placeholder="Enter E-mail" type="text" id="email">
                <input class="btn btn-success" value="Submit" onclick="submitData('insert')">
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
      function submitData(action) {
        $(document).ready(function() {



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
            url: 'action/addStaffDb.php',
            type: 'POST',
            data: data,
            success: function(response) {
              $('#response').text(response);
              $('#btnAdd').hide();
              swal({
                title: "Success!",
                text: "Form submitted successfully",
                icon: "success",
                button: "OK",
              });
            }
          });

        });
      }
    </script>
  </section>
</body>

</html>