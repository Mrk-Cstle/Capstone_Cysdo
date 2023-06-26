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
                    <input class="searchBar form-control-lg mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btnSearch btn btn-outline-success" type="submit">Search</button>
                    <a class="btnAddStaff btn btn-outline-primary" href="#btnAdd">Add Staff</a>
                    <p id="response"></p>
                </form>
            </nav>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Contact 1</th>
                        <th scope="col">Contact 2</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                    </tr>



                    <tbody id="tableData">

                        <?php
                        include '../include/selectDb.php';
                        ?>




                        <?php
                        if (mysqli_num_rows($resultApplicantList) > 0) {
                            while ($row = $resultApplicantList->fetch_assoc()) {
                        ?>
                                <tr>

                                    <th class="user_id" scope="row"><?php echo $row['applicant_id']; ?></th>

                                    <td><?php echo $row['fullName']; ?></td>

                                    <td><?php echo $row['contactNum1']; ?></td>
                                    <td><?php echo $row['contactNum2']; ?></td>
                                    <td><?php echo $row['fullAddress']; ?></td>

                                    <td class="hidden-cell"><?php echo $row['last_name']; ?></td>
                                    <td class="hidden-cell"><?php echo $row['first_name']; ?></td>
                                    <td class="hidden-cell"><?php echo $row['middle_name']; ?></td>
                                    <td>

                                        <a class="resetPassword btn btn-sm btn-dark" href="applicantView.php?id=<?php echo $row['applicant_id']; ?>">View</a>
                                    </td>
                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="7">No data available</td>
                            </tr>

                        <?php
                        }
                        ?>

                    </tbody>


                </table>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>







            </script>
    </section>
</body>

</html>