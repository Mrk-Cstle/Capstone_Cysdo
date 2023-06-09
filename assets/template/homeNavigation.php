<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>

    <style>
        * {
            box-sizing: border-box;
            margin: auto;
        }

        /* Navigation */
        #header {
            display: flex;
            flex-direction: row;
            align-items: center;
            background: #f26686;
            box-shadow: 0px 10px 50px #000000;
            margin-bottom: 5px;
        }

        #pic {

            margin-left: 20px;
            display: flex;
            flex-direction: row;
        }

        #headImg {
            mix-blend-mode: multiply;
        }

        #pic img {
            height: 60px;
            width: auto;
            margin-top: 10px;
            margin-left: 20px;

            margin-bottom: 10px;

        }

        #menu {
            width: 80%;
            overflow: hidden;
            display: flex;
            flex-wrap: nowrap;
            padding-left: 250px;
            padding-right: 150px;
        }

        #menu a {
            text-decoration: none;
            color: black;
            font-size: 20px;
            padding: 20px 20px;
            text-align: center;
            width: 190px;
            height: 70px;
        }

        #menu a:hover {
            border-bottom: black solid 1px;
            font-weight: bolder;
            font-size: 18px;
        }

        .DropDownMenu {
            overflow: hidden;
        }

        .DropDownMenu .DropDownBtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: black;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .DropDownContent a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .DropDownContent a:hover {
            background-color: #ddd;
        }

        .DropDownMenu:hover .DropDownContent {
            display: block;
        }

        .DropDownContent {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .DropDownBtn {}

        /* End Of Navigation */
    </style>
</head>

<body>
    <div id="header">
        <div id="pic">
            <img src="assets/image/CysdoLogo.png" />
            <img id="headImg" src="assets/image/CYSDOHeader.png" />
        </div>
        <div id="menu">
            <a href="index.php">Home</a>
            <a href="index.php#about">About</a>
            <a href="index.php#faqs">FAQS</a>
            <a href="index.php#contact">Contact</a>
            <a href="announcementTab.php">News & Upadates</a>

            <div class="DropDownMenu">
                <button class="DropDownBtn"><a>Login</a></button>
                <div class="DropDownContent">
                    <a href="pages/admin/adminLogin.php">Admin</a>
                    <a href="ScholarLogin.php">Scholar</a>
                    <a href="termsRegistration.php">Registration</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>