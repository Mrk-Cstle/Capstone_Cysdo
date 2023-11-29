<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../style/addStaff.css">
    <title>Post Announcement</title>
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
        background-color: #ddd;
        background-size: cover;
        background-position: center;
    }

    .container {
        border-radius: 5px;
        background-color: #ddd;
        padding: 20px 0;
    }

    .rotate {
        transform: rotate(90deg);
    }

    .caption {
        margin-top: 20px;
        margin-left: 10px;
        font-size: 20px;
    }

    .textAlign {
        padding-top: 30px;
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
        margin-top: 10px;
        padding: 15px;
    }

    .box-info li {
        padding: 35px;
        background-color: #fff;
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
        box-shadow: 0px 2px 8px 0px rgba(0, 0, 0, 0.3);
        width: 1100px;
    }

    .textCap {
        font-size: 16px;
    }

    .date {
        float: right;
        font-size: 20px;
    }

    .Post {
        width: 100%;
        height: auto;
        max-height: 500px;
        object-fit: contain;
        margin-top: 10px;
    }

    .post-btn {
        text-align: end;

    }

    @media (max-width: 1473px) {
        .box-info li {
            width: 100%;
        }
    }

    @media (max-width: 1015px) {
        .date {
            display: block;
        }

        .box-info li {
            width: 100%;
        }

        .textAlign {
            padding-top: 15px;
        }
    }

    @media (max-width: 770px) {
        .textBody {
            display: flex;
        }

        .textAlign {
            padding-top: 15px;
        }

        .Post {
            font-size: 12px;
        }

        .box-info li {
            width: 100%;
        }

        .caption {
            font-size: 16px;
        }

        .date {
            font-size: 14px;
        }
    }

    @media (max-width: 550px) {
        .caption {
            display: block;
        }

        .textAlign {
            font-size: 18px;
            padding-top: 10px;
        }

        .box-info li {
            width: 100%;
        }

        .caption {
            font-size: 14px;
        }

        .date {
            font-size: 10px;
        }
    }
</style>

<body>
    <?php
    include 'include/session.php';
    if ($_SESSION['role'] === 'admin') {
        include '../../assets/template/profileNav.php';
    } elseif ($_SESSION['role'] === 'staff') {
        include '../../assets/template/staffNavi.php';
    }
    ?>
    <section id="content" class="home-section">
        <div class="container">

            <div class='textAlign'>
                <p class='bold d-block w-auto'>Upload Announcements</p>
            </div>
            <div class="post-img">
                <ul class='box-info justify-content-center'>
                    <li class='responsive'>
                        <form class="announcementForm" role="form" autocomplete="off" enctype="multipart/form-data" id="form1">
                            <i class="caption">Announcement #1</i></a>
                            <i id='uploadDate' class='date text-danger-emphasis'>2023</i>

                            <hr class='mb-3 mt-3'>
                            <div class=v>
                                <img src="../../uploads/announcement/form1.jpeg" id='uploadAnnouncement-1' class='Post lh-base'></img>
                            </div>
                            <hr class='mb-3 mt-4'>
                            <div class="post-btn">
                                <input type="file" name="announcement1" accept=".jpeg, image/jpeg">
                                <button onclick="submitForm('form1')" class="btn btn-success">Edit</button>
                        </form>
            </div>
            </li>
            </ul>
        </div>
        <div class="post-img">
            <ul class='box-info justify-content-center'>
                <li class='responsive'>
                    <form class="announcementForm" role="form" autocomplete="off" enctype="multipart/form-data" id="form2">
                        <i class="caption">Announcement #2</i></a>
                        <i id='uploadDate' class='date text-danger-emphasis'>2023</i>

                        <hr class='mb-3 mt-3'>
                        <div class="">
                            <img src="../../uploads/announcement/form2.jpeg" id='uploadAnnouncement-2' class='Post lh-base'></img>
                        </div>
                        <hr class='mb-3 mt-4'>
                        <div class="post-btn">
                            <input type="file" name="announcement1" accept=".jpeg, image/jpeg">
                            <button onclick="submitForm('form2')" type="submit" class="btn btn-success">Edit</button>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
        <div class="post-img">
            <ul class='box-info justify-content-center'>
                <li class='responsive'>
                    <form role="form" autocomplete="off" enctype="multipart/form-data" id="form3">
                        <i class="caption">Announcement #3</i></a>
                        <i id='uploadDate' class='date text-danger-emphasis'>2023</i>

                        <hr class='mb-3 mt-3'>
                        <div class="">
                            <img src="../../uploads/announcement/form3.jpeg" id='uploadAnnouncement-3' class='Post lh-base'></img>
                        </div>
                        <hr class='mb-3 mt-4'>
                        <div class="post-btn">
                            <input type="file" name="announcement1" accept=".jpeg, image/jpeg">
                            <button onclick="submitForm('form3')" type="submit" class="btn btn-success">Edit</button>

                        </div>
                    </form>
                </li>
            </ul>
        </div>
        <div class="post-img">
            <ul class='box-info justify-content-center'>
                <li class='responsive'>
                    <form role="form" autocomplete="off" enctype="multipart/form-data" id="form4">
                        <i class="caption">Announcement #4</i></a>
                        <form>
                            <i id='uploadDate' class='date text-danger-emphasis'>2023</i>

                            <hr class='mb-3 mt-3'>
                            <div class="">
                                <img src="../../uploads/announcement/form4.jpeg" id='uploadAnnouncement-4' class='Post lh-base'></img>
                            </div>
                            <hr class='mb-3 mt-4'>
                            <div class="post-btn">
                                <input type="file" name="announcement1" accept=".jpeg, image/jpeg">
                                <button onclick="submitForm('form4')" type="submit" class="btn btn-success">Edit</button>
                        </form>
                    </form>
        </div>
        </li>
        </ul>
        </div>
        <div class="post-img">
            <ul class='box-info justify-content-center'>
                <li class='responsive'>
                    <form role="form" autocomplete="off" enctype="multipart/form-data" id="form5">
                        <i class="caption">Announcement #5</i></a>
                        <i id='uploadDate' class='date text-danger-emphasis'>2023</i>

                        <hr class='mb-3 mt-3'>
                        <div class="">
                            <img src="../../uploads/announcement/form5.jpeg" id='uploadAnnouncement-5' class='Post lh-base'></img>
                        </div>
                        <hr class='mb-3 mt-4'>
                        <div class="post-btn">
                            <input type="file" name="announcement1" accept=".jpeg, image/jpeg">

                            <button onclick="submitForm('form5')" type="submit" class="btn btn-success">Edit</button>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        function submitForm(formId) {
            event.preventDefault();
            var formData = new FormData($("#" + formId)[0]);
            formData.append("formID", formId);

            $.ajax({
                type: "POST",
                url: "action/postAnnouncementDb.php", // Change this to your server endpoint
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    // Handle success response
                    console.log(response);
                },
                error: function(error) {
                    // Handle error response
                    console.log(error);
                }
            });
        }
    </script>

</body>

</html>