<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Manage Staff</title>
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
        <caption>List Of Scholars</caption>
        <table>

            <tr>
                <th>Full Name</th>
                <th>Contact Number 1</th>
                <th>Contact Number 2</th>
                <th>Address</th>
                <th>Email</th>
                <th></th>
            </tr>
            <?php
            if ($resultGetStaff->num_rows > 0) {

                while ($row = $resultGetStaff->fetch_assoc()) {
            ?>

                    <tr>
                        <td><?php echo $row['fullName']; ?></td>
                        <td><?php echo $row['contactNum']; ?></td>
                        <td><?php echo $row['contactNum']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><a href="createStaffDelete.php?id=<?php echo $row['staffId']; ?>">Remove</a></td>

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