<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant List</title>
    <style>
        table,
        th,
        td {
            border-collapse: collapse;
            border: 1px solid black;
            padding: 20px;
            text-align: center;

        }

        table {
            width: 90%;
        }
    </style>
</head>

<body>
    <?php
    include 'include/nav.php';
    include 'include/selectDb.php';
    ?>
    <section class="home-section">
        <caption>List Of Approve Applicants</caption>
        <table>

            <tr>
                <th>Full Name</th>
                <th>Contact Number 1</th>
                <th>Contact Number 2</th>
                <th>Barangay</th>
                <th>School</th>
                <th>Current Level</th>
                <th>Course</th>
                <th></th>
            </tr>
            <?php
            if ($resultGetApplicantApprove->num_rows > 0) {

                while ($row = $resultGetApplicantApprove->fetch_assoc()) {
            ?>

                    <tr>
                        <td><?php echo $row['fullName']; ?></td>
                        <td><?php echo $row['contactNum1']; ?></td>
                        <td><?php echo $row['contactNum2']; ?></td>
                        <td><?php echo $row['barangayAddress']; ?></td>
                        <td><?php echo $row['schoolName']; ?></td>
                        <td><?php echo $row['yearLevel']; ?></td>
                        <td><?php echo $row['course']; ?></td>
                        <td>
                            <a href="applicantView.php?id=<?php echo $row['fullName']; ?>">View</a>
                            <a href="applicantRemove.php?id=<?php echo $row['fullName']; ?>">Remove</a>
                        </td>


                    </tr>




            <?php
                }
                echo "</table>";
            } else {
                echo "<tr><td>" . "0 result" . "</td><td></table>";
            }
            ?>


    </section>
</body>

</html>