<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>

    <style>
        * {
            padding: 0;
            margin: auto;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
        }
        body {
            height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
        }

        li {
            list-style: none;
        }

        a {
            padding: 4px;
            text-decoration: none;
            color: #000000;
            font-size: 1.3rem;
        }

        

        /* Navigation & Header*/
        header {
            position: relative;
            padding: 0 2rem;
            background: #f26686;
            box-shadow: 0px 10px 50px #000000;
            margin-bottom: 5px;
        }

        .header {
            width: 100%;
            height: 70px;
            max-width: 2000px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header .links {
            width: auto;
            padding: 4px;
            display: flex;
            gap: 3rem;
        }

        .header .toggle_btn {
            color: #000000;
            font-size: 1.5rem;
            cursor: pointer;
            display: none;
        }

        /* Dropdown */

        .dropdown_menu {
            position: absolute;
            right: 6rem;
            top: 60px;
            height: 0px;
            width: 300px;
            backdrop-filter: blur(6px);
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            overflow: hidden;
            transition: height .2s cubic-bezier(0.175, 0.885, 0.32, 1.275)
        }

        .dropdown_menu.open{
            height: 650px;
        }

        .dropdown_menu li {
            padding: 0.7rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #pic {
            display: flex;
            flex-direction: row;
        }

        #headImg {
            mix-blend-mode: multiply;
            display: block;
        }

        #pic img {
            height: 50px;
            width: auto;
            margin-top: 10px;
            margin-left: 5px;
            margin-bottom: 10px;

}
        /* Responsiveness */

        @media(max-width: 1402px) {
            .header .links,
            .header .action {
                display: none;
            }

            .header .toggle_btn {
                display: block;
            }

            .dropdown_menu {
                display: block;
            }
        }

        @media(max-width: 586px) {

            .dropdown_menu {
                left: 2rem;
                width: unset;
            }

        }



        /* Hover */

        #menu a:hover {
            border-bottom: black solid 1px;
            font-weight: bolder;
            font-size: 18px;
        }

        .DropDownMenu {
            overflow: hidden;
        }

        .DropDownMenu {
            font-size: 16px;
            border: none;
            outline: none;
            color: black;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .DropDownBtn {
            list-style: none;
            padding: 4px;
            text-decoration: none;
            color: #000000;
            font-size: 1.3rem;
        }

        .DropDownBtn a:hover {
            display: block;
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

        /* End Of Navigation */
    </style>
</head>

<body>
    <header>
    <div class="header">
        <div id="pic">
            <img src="../image/CysdoLogo.png"/>
            <img id="headImg" src="../image/CYSDOHeader.png"/>
        </div>
        <div id="menu">
        <ul class="links">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php#about">About</a></li>
            <li><a href="index.php#faqs">FAQS</a></li>
            <li><a href="index.php#contact">Contact</a></li>
            <li><a href="announcementTab.php">News & Upadates</a></li>
        
            <div class="DropDownMenu">
                <li><a class="DropDownBtn">Login</a></li>
                <div class="DropDownContent">
                    <a href="pages/admin/adminLogin.php">Admin</a>
                    <a href="pages/admin/staffLogin.php">Staff</a>
                    <a href="ScholarLogin.php">Scholar</a>
                    <a href="pages/applicant/termsRegistration.php">Registration</a>
                    </div>
                </div>
        </ul>
                <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
                </div>  
        

        <div class="dropdown_menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php#about">About</a></li>
            <li><a href="index.php#faqs">FAQS</a></li>
            <li><a href="index.php#contact">Contact</a></li>
            <li><a href="announcementTab.php">News & Upadates</a></li>
            <div class="DropDownMenu">

            <li><a class="DropDownBtn">Login</a></li>
                <div class="DropDownContent">
                    <a href="pages/admin/adminLogin.php">Admin</a>
                    <a href="pages/admin/staffLogin.php">Staff</a>
                    <a href="ScholarLogin.php">Scholar</a>
                    <a href="pages/applicant/termsRegistration.php">Registration</a>
                </div>   
            </div>

            </div>
        </div>
    </div>
    </header>

    <script>
        const toggleBtn = document.querySelector('.toggle_btn')
        const toggleBtnIcon = document.querySelector('.toggle_btn i')
        const dropDownMenu = document.querySelector('.dropdown_menu')

        toggleBtn.onclick = function () {
            dropDownMenu.classList.toggle('open')
            const isOpen = dropDownMenu.classList.contains('open')

            toggleBtnIcon.classList = isOpen
            ? 'fa-solid fa-xmark'
            : 'fa-solid fa-bars'
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>