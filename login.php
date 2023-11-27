<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Login</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        flex-direction: column;
        background-image: url("assets/image/SanjoseBg.jpg");
        backdrop-filter: blur(8px);
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: scroll;
        background-size: cover;
    }

    /*------------ Login container ------------*/
    .box-area {
        width: 700px;
    }

    /*------------ Right box ------------*/
    .right-box {
        padding: 40px 30px 40px 40px;
    }

    /*------------ Custom Placeholder ------------*/
    ::placeholder {
        font-size: 16px;
    }

    .rounded-4 {
        border-radius: 20px;
    }

    .rounded-5 {
        border-radius: 30px;
    }

    /*------------ For small screens------------*/
    @media only screen and (max-width: 768px) {
        .box-area {
            margin: 0 10px;
        }

        .left-box {
            height: 240px;
            overflow: hidden;
        }

        .right-box {
            padding: 20px;
        }
    }
</style>

<body>
    <!----------------------- Main Container -------------------------->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <!----------------------- Login Container -------------------------->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <!--------------------------- Left Box ----------------------------->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #fff;">
                <div class="featured-image mb-3">
                    <img src="assets/image/CysdoLogo.png" class="img-fluid mt-3" style="width: 250px;">
                </div>
            </div>
            <!-------------------- ------ Right Box ---------------------------->

            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <form action="loginDb.php" method="POST">
                        <div class="header-text mb-4">
                            <h2>Login</h2>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" id="UserName" name="userName" placeholder="Username">
                        </div>

                        <div class="input-group mb-1">
                            <input type="password" class="form-control form-control-lg bg-light fs-6" id="Password" name="password" placeholder="Password">
                        </div>

                        <div class="input-group mb-5 d-flex justify-content-between">
                        </div>

                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                        </div>

                        <div class="input-group mb-3">
                            <a class="btn btn-lg btn-light w-100 fs-6" href="../../index.php"><small>Go Back</small></a>
                        </div>
                        <?php
                        if (isset($_GET['error']) && $_GET['error'] == 1) {
                            echo "<h5>Invalid login. Please try again.</h5>";
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>