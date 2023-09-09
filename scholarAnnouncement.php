<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        background-color: whitesmoke;
        background-size: cover;
        background-position: center;
    }

    .navBar {
        background: #FBA1B7;
        padding-top: 0px;
        padding-bottom: 0px;
        justify-content: end;

    }

    .navProfile {
        margin-right: 20px;
    }

    .rotate {
        transform: rotate(90deg);
    }

    .caption {
        margin-top: 20px;
        margin-left: 10px;
        font-size: 20px;
    }

    .sideLg {
        margin-top: 5px;
        margin-bottom: 4px;
        margin-right: 1200px;
    }

    .textAlign {
        background: #FBA1B7;
        padding-top: 20px;
        padding-bottom: 10px;
        display: block;
        text-align: center;
        font-size: 24px;
        display: block;
    }

    .bold {
        font-weight: 600;
    }

    .mouse {
        cursor: pointer;
    }

    .textBody {
        margin-top: 50px;
    }

    .box-info {
        display: grid;
        grid-gap: 24px;
        margin-top: 36px;
        padding: 20px;

    }



    .box-info li {
        padding: 80px;
        border-radius: 20px;
        border: 1px solid black;
        display: block;
        align-items: center;
        grid-gap: 24px;
        height: 100%;
        width: 100%;
    }

    .box-info li {
        font-size: 24px;
        font-weight: 500;
    }

    .textCap {
        font-size: 16px;
    }

    .date {
        float: right;
        font-size: 20px;
    }

    .Post {
        font-size: 18px;
        text-align: justify;
        margin-top: 60px;
    }

    @media (max-width: 1015px) {
        .date {
            display: block;
        }
    }

    @media (max-width: 770px) {
        .textBody {
            display: flex;
        }

        .Post {
            font-size: 14px;
        }
    }

    @media (max-width: 550px) {
        .caption {
            display: block;
        }

        .uploaderName {
            display: block;
        }

    }
</style>

<body>
    <!--<div class="navBar">

        <ul class="navProfile nav nav-pills justify-content-start">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-black" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img src="../image/CysdoLogo.png" style="height: 40px; width: 40px;">John Martin M</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="logout.php">Logout</a></li>
        </ul>
      </li>
        <div class="sideLg">
            <a class="nav-link text-black ms-2" role="none" aria-expanded="false"><img src="./assets/image/CysdoLogo.png" style="height: 50px; width: 50px;" class="sideLogo"><i class="caption">CYSDO</i></a>
        </div>

        <li class="nav-item">
            <a class="nav-link text-black mt-3 me-3 " href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-black mt-3 me-3" href="#">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-black mt-3 me-3" href="#">Faqs</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-black mt-3 me-3" href="#">Contacts</a>
        </li>

        </ul>
        
      </div> -->
    <?php
    include 'pages/include/dbConnection.php';
    if (isset($_GET['page'])) {

        $pageCheck = $_GET['page'];


        $query = "SELECT * FROM announcements WHERE category = '$pageCheck'";
        $resultGetPost = mysqli_query($conn, $query);
        $postCounter = 0;
        echo 'Value matches the desired value';
    ?>
        <div class='textAlign'>
            <p style="text-transform: capitalize;" class='bold'><a href='newsTab.php' class='mouse bi bi-chevron-left text-black float-start ms-5'></a>
                <?php echo $pageCheck; ?> Announcements
            </p>
        </div>
    <?php
        if ($resultGetPost) {
            if ($resultGetPost->num_rows > 0) {
                while ($row = $resultGetPost->fetch_assoc()) {
                    $postCounter++;

                    if ($postCounter <= 5) {
                        echo '<div class="textBody">';
                    } else {
                        echo '<div class="textBody" style="display: none;">';
                    }
                    echo "

      
            <ul class='box-info justify-content-center'>
                <li class='responsive'>
                    <img src='./assets/image/CysdoLogo.png' style='height: 50px; width: 50px;' class='sideLogo'><i class='caption'>City Youth Sports Development Office</i></a>
                    <i id='uploadDate' class='date'>" . $row['uploadDate'] . "</i>
                    <div>
                        <i id='uploaderName' class='textCap text-black-50 ms-5'>" . $row['uploader'] . "</i>
                    </div>

                    <hr class='mb-3 mt-3'>

                    <div>
                        <p id='uploaderPost' class='Post lh-lg'>" . nl2br($row['announcement']) . "
                        </p>
                    </div>
                </li>

            </ul>
             </div>
       ";
                }
                if ($postCounter > 5) {
                    echo '<div class="see-more-container"><button class="see-more-btn btn btn-primary">See more</button></div>';
                }
            } else {
                echo "No scholar announcements found.";
            }
        } else {
            echo "An error occurred while retrieving announcements.";
        }


        // for applicant announcement


        // Assuming you already have a valid database connection and session


    }

    ?>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            //jquery for toggle sub menus
            $('.sub-btn').click(function() {
                $(this).next('.sub-menu').slideToggle();
                $(this).find('.dropdown').toggleClass('rotate');
            });

        });

        $(document).ready(function() {
            var displayedAnnouncements = 5; // Initial number of displayed announcements
            var totalAnnouncements = <?php echo mysqli_num_rows($resultGetPost); ?>; // Total number of announcements

            // Handle "See more" button click
            $('.see-more-btn').click(function() {
                var hiddenAnnouncements = $('.textBody:hidden');
                var nextAnnouncements = hiddenAnnouncements.slice(0, 5);

                nextAnnouncements.slideDown();
                displayedAnnouncements += nextAnnouncements.length;

                // Hide the "See more" button when all announcements are displayed
                if (displayedAnnouncements >= totalAnnouncements) {
                    $('.see-more-container').hide();
                }
            });
        });
    </script>
</body>

</html>