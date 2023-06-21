<?php
include 'pages/include/dbConnection.php';
include 'pages/admin/include/session.php';

// Assuming you already have a valid database connection and session

$query = "SELECT * FROM announcements WHERE category = 'applicant'";
$resultGetPost = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>

<head>
    <title>News & Updates</title>
    <!-- Include your CSS and other head elements here -->
    <style>
        * {
            box-sizing: border-box;
            margin: 0px;
            padding: 0px;
        }

        form {
            margin: 2px;
            padding: 10px;
            border: 1px solid black;
            display: flex;
            width: 90%;
            justify-content: flex-end;
            flex-direction: column;
        }

        textarea {
            padding: 10px;
        }

        #submitBtn {
            margin-top: 10px;
            display: flex;
            flex-direction: row-reverse;
            justify-content: flex-start;
            gap: 20px;
        }

        button {
            width: 100px;
            height: 30px;
            border: 1px solid black;
            margin-bottom: 5px;
        }

        .postFormat {
            border: 1px solid black;
            margin-top: 20px;
            height: auto;
            width: 90%;
        }

        .postFormat section {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin: 10px 20px;
        }

        .postFormat.scholar {
            background-color: lightblue; /* Adjust the styling for scholar announcements */
        }

        .postFormat.applicant {
            background-color: lightgreen; /* Adjust the styling for applicant announcements */
        }

        main {
            margin: 10px 20px;
        }

        .aBtn {
            border: 1px solid black;
            width: 20%;
            text-align: center;
            text-decoration: none;
        }

        footer {
            margin-top: 10px;
            display: flex;
            justify-content: flex-end;
            gap: 20px;
            margin: 20px;
        }
    </style>
</head>

<body>
    <?php include 'assets/template/homeNavigation.php'; ?>

    <div id="manageStyle">

        <h2>Applicant Announcements</h2>
        <?php
        if ($resultGetPost->num_rows > 0) {
            while ($row = $resultGetPost->fetch_assoc()) {
                echo "<div class='postFormat applicant'>
                          <section>
                              <h3>Upload Date: " . $row['uploadDate'] . "</h3>
                          </section>
                          <main>
                              <p>" . $row['announcement'] . "</p>
                          </main>
                      </div>";
            }
        } else {
            echo "No applicant announcements found.";
        }
        ?>
    </div>

    <!-- Include your JavaScript and other body elements here -->

</body>

</html>
