<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News & Updates</title>
    <style>
        h1 {
            text-align: center;
            width: 100%;
            margin-top: 50px;
        }

        #newsList {
            display: flex;
            flex-direction: row;
            justify-content: center;
            margin-top: 50px;
        }

        .newsFormat {
            display: flex;
            flex-direction: column;
            border: 1px solid black;
            width: 400px;
            height: 500px;
            margin: 0 10px;
            align-items: center;
            text-align: center;
        }

        .newsFormat img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            margin: 0;
        }

        .newsFormat h2 {
            margin-top: 10px;
        }

        .newsFormat a {
            border: 1px solid black;
            text-decoration: none;
            padding: 10px;
        }
    </style>
</head>

<body>
    <?php
    include 'assets/template/homeNavigation.php';
    ?>

    <h1>News & Updates</h1>

    <div id="newsList">
        <div class="newsFormat">
            <img src="assets/image/No_Image_Available.jpg" />
            <h2>Scholar Announcement</h2>
            <a href="scholarAnnouncement.php?page=scholar">View</a>
        </div>
        <div class="newsFormat">
            <img src="assets/image/No_Image_Available.jpg" />
            <h2>Applicant Announcement</h2>
            <a href="scholarAnnouncement.php?page=applicant">View</a>
        </div>
    </div>
</body>

</html>