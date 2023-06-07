<?php

include 'include/dbConnection.php';

$id = $_GET['id'];
$editPostQuery = mysqli_query($conn, "SELECT * FROM announcements WHERE uploadId='$id'");
$row = mysqli_fetch_array($editPostQuery); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Post</title>
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

            justify-content: end;
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

        .postFormat {
            border: 1px solid black;
            margin: 10px;
            height: auto;
            width: 70%;
        }

        .postFormat section {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin: 10px 20px;
        }

        main {
            margin: 10px 20px;
        }

        .aBtn {
            border: 1px solid black;
            width: 20%;
            text-align: center;

        }

        footer {
            margin-top: 10px;
            display: flex;

            justify-content: end;
            gap: 20px;
            margin: 20px;
        }
    </style>
</head>

<body>
    <?php
    include 'include/nav.php';
    include 'include/selectDb.php';
    ?>
    <section class="home-section">
        <form method="POST" action="postEditDb.php?id=<?php echo $id; ?>">

            <label for="postText">Edit Announcements</label></br>
            <textarea id="postText" name="postText" rows="5" cols="50"></textarea></br>

            <div id="submitBtn">
                <button type="submit">Submit</button>
                <button type="reset">Reset</button>
            </div>


        </form>
    </section>

</body>

</html>