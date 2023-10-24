<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Home</title>


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
        padding-top: 20px;
        padding-bottom: 10px;
        display: block;
        text-align: center;
        font-size: 24px;
        width: 100%;
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
        box-shadow: 0px 2px 8px 0px rgba(0, 0, 0, 0.2);
        width: 1300px;
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

        .box-info li {
            width: 100%;
        }
    }

    @media (max-width: 770px) {
        .textBody {
            display: flex;
        }

        .Post {
            font-size: 14px;
        }

        .box-info li {
            width: 100%;
        }

        .caption {
            font-size: 16px;
        }

        .date {
            font-size: 16px;
        }
    }

    @media (max-width: 550px) {
        .caption {
            display: block;
        }

        .uploaderName {
            display: block;
        }

        .textAlign {
            font-size: 18px;
            background-color: whitesmoke;
        }

        .box-info li {
            width: 100%;
        }

        .caption {
            font-size: 12px;
        }

        .date {
            font-size: 12px;
        }
    }
</style>

<body>
    <?php


    include '../../assets/template/scholarNav.php';



    ?>
    <!--========== HEADER ==========-->


    <!--========== CONTENTS ==========-->
    <main>

        <section>
            <?php
            include '../include/dbConnection.php';



            $query = "SELECT * FROM announcements WHERE category = 'scholar' ORDER BY uploadDate DESC ";
            $resultGetPost = mysqli_query($conn, $query);
            $postCounter = 0;

            ?>
            <div class='textAlign'>
                <p style="text-transform: capitalize;" class='bold d-block w-auto'>
                    Scholar Announcements
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
                    <i id='uploadDate' class='date p-3'>" . $row['uploadDate'] . "</i>
                    <div>
                        <i id='uploaderName' class='textCap text-black-50 ms-5'>" . $row['uploader'] . "</i>
                    </div>

                    <hr class='mb-3 mt-4'>

                    <div class='content w-100'>
                        <p id='uploaderPost' class='Post lh-base'>" . nl2br($row['announcement']) . "
                        </p>
                    </div>
                </li>
            </ul>
             </div>
       ";
                    }
                    if ($postCounter > 5) {
                        echo '<div class="see-more-container float-end me-5 mb-3"><a class="see-more-btn btn btn-primary">See more</a></div>';
                    }
                } else {
                    echo "No announcements found.";
                }
            } else {
                echo "An error occurred while retrieving announcements.";
            }


            ?>





            <script type="text/javascript">
                $(document).ready(function() {
                    //jquery for toggle sub menus
                    $('.sub-btn').click(function() {
                        $(this).next('.sub-menu').slideToggle();
                        $(this).find('.dropdown').toggleClass('rotate');
                    });

                });

                //see more function
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


        </section>
    </main>

</body>

</html>