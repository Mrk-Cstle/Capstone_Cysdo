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
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

* {
    margin: 0;
    padding: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    min-height: 100vh;
    background: whitesmoke;
}

header {
    position: absolute;
    width: 100%;
    min-height: 66px;
    background: #FF5F9E;
    padding: 0 20px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
}

header .logo {
    color: #fff;
    font-size: 1.75rem;
    font-weight: 600;
    text-decoration: none;
}

header ul {
    position: relative;
}

header ul li {
    position: relative;
    list-style: none;
    float: left;
    padding-right: 70px;
}

header ul li a {
    color: #fff;
    font-size: 1.1rem;
    padding: 20px 20px;
    text-decoration: none;
    display: flex;
    justify-content: space-between;
    color: #000;
}


header ul li a:hover {
    background: #C23373;
}

header ul li ul {
    position: absolute;
    left: 0;
    width: 250px;
    background: #FEA1BF;
    display: none;
}

header ul li:hover > ul {
    display: block;
    padding: 0;
}

header ul li ul li {
    position: relative;
    width: 320px;
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
    margin-top: 5px;
    margin-left: 5px;
    margin-bottom: 10px;     
}

@media (max-width: 1002px) {
    .log {
    padding: 15px 90px;
    }
}

@media (max-width: 928px) {
    nav {
        margin-left: 10px;
        padding: 0;
    }

}

@media (max-width: 931px)
{
    header {
        padding: 10px 20px;
    }
    header nav {
        position: absolute;
        z-index: 10;
        width: 300px;
        right: 0;
        top: 80px;
        background: #FEA1BF;
        display: none;
    }
    header.active nav {
        display: initial;
    }
    header nav ul li {
        width: 240px;
        padding: 0;
    }

    header ul li a {
        justify-content: center;
        width: 240px;
    }

    header nav ul li ul {
        position: relative;
        width: 100%;
        left: 0;
        top: 0;
    }

    .menuToggle {
        position: relative;
        z-index: 10;
        width: 30px;
        height: 40px;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .menuToggle::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 3px;
        background: #fff;
        transform: translateY(-12px);
        box-shadow: 0 12px #fff;
    }
    .menuToggle::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 3px;
        background: #fff;
        transform: translateY(12px);
    }
    header.active .menuToggle::before {
        transform: rotate(45deg);
        box-shadow: 0 0 #fff;
    }
    header.active .menuToggle::after {
        transform: rotate(315deg);
    }
}

@media(max-width: 700px) {

    #headImg {
            display: none;
    }

    #pic {
            margin-left: 20px;
    }

}

        /* End Of Navigation */
    </style>
</head>

<body>
<header>
    <div id="pic">
        <img src="assets/image/CysdoLogo.png" class="img-fluid"/>
        <img id="headImg" src="assets/image/CYSDOHeader.png" class="img-fluid"/>
    </div>
        <div class="menuToggle"></div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#about">About</a></li>
                <li><a href="index.php#faqs">Faqs</a></li>
                <li><a href="index.php#contact">Contact</a></li>
                <li><a href="announcementTab.php">News & Upadates</a></li>
                <li><a href="#">Login</a>
                    <ul>
                        <li><a class="log" href="pages/admin/adminLogin.php">Admin</a></li>
                        <li><a class="log" href="pages/admin/staffLogin.php">Staff</a></li>
                        <li><a class="log" href="pages/scholar/ScholarLogin.php">Scholar</a></li>
                        <li><a class="log" href="pages/applicant/termsRegistration.php">Registration</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <script>
        let menuToggle = document.querySelector('.menuToggle');
        let header = document.querySelector('header');
        menuToggle.onclick = function(){
            header.classList.toggle('active');
        }
    </script>
    <!--
    <header>
    <div class="header">
        <div id="pic">
            <img src="assets/image/CysdoLogo.png" class="img-fluid"/>
            <img id="headImg" src="assets/image/CYSDOHeader.png" class="img-fluid"/>
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
    </script>   -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>