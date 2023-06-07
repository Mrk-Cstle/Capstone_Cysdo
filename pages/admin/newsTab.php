<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="include/nav.css">
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

        button {
            width: 100px;
            height: 30px;
            border: 1px solid black;
            margin-bottom: 5px;
        }

        .postFormat {
            border: 1px solid black;
            margin: 10px;
            height: auto;
            width: 100%;
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

    include 'include/selectDb.php';
    ?>
    <section class="home-section">


        <form method="POST" action="postUpdateDb.php">

            <label for="postText">Post Announcements</label></br>
            <textarea id="postText" name="postText" rows="5" cols="50"></textarea></br>

            <div id="submitBtn">
                <button type="submit">Submit</button>
                <button type="reset">Reset</button>
            </div>


        </form>


        <div>
            <h1>Manage Post</h1>

            <?php
            if ($resultGetPost->num_rows > 0) {

                while ($row = $resultGetPost->fetch_assoc()) {
                    echo "<div class='postFormat'><section><h3>Uploader:" . $row['uploader'] . "</h3><h3>Upload Date:" . $row['uploadDate'] . "</h3></section><main><p>" . $row['announcement'] . "</p></main>" ?>
                    <footer><a class="aBtn" href="postEdit.php?id=<?php echo $row['uploadId']; ?>">Edit</a>
                        <a class="aBtn" href="postDelete.php?id=<?php echo $row['uploadId']; ?>">Delete</a>
                    </footer>
        </div> <?php

                }
            }
                ?>
</div>
    </section>
</body>

</html>