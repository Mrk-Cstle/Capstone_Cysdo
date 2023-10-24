<!DOCTYPE html>
<html lang="en">

<?php
include 'include/session.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Home</title>
</head>
<style>
    /*========== GOOGLE FONTS ==========*/
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");

    /*========== VARIABLES CSS ==========*/
    :root {
        --header-height: 3.5rem;
        --nav-width: 219px;

        /*========== Colors ==========*/
        --first-color: #E4E9F7;
        --first-color-light: #C23373;
        --title-color: #19181B;
        --text-color: #000;
        --text-color-light: #000;
        --body-color: #E4E9F7;
        --container-color: #FF5F9E;

        /*========== Font and typography ==========*/
        --body-font: 'Poppins', sans-serif;
        --normal-font-size: .938rem;
        --small-font-size: .75rem;
        --smaller-font-size: .75rem;

        /*========== Font weight ==========*/
        --font-medium: 500;
        --font-semi-bold: 600;

        /*========== z index ==========*/
        --z-fixed: 100;
    }

    @media screen and (min-width: 1024px) {
        :root {
            --normal-font-size: 1rem;
            --small-font-size: .875rem;
            --smaller-font-size: .813rem;
        }
    }

    /*========== BASE ==========*/
    *,
    ::before,
    ::after {
        box-sizing: border-box;
    }

    body {
        margin: var(--header-height) 0 0 0;
        padding: 1rem 1rem 0;
        font-family: var(--body-font);
        font-size: var(--normal-font-size);
        background-color: var(--body-color);
        color: var(--text-color);
    }

    section {
        margin-top: 40px;
        margin-left: 30px;
    }

    a {
        text-decoration: none;
        padding-top: 5px;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    /*========== HEADER ==========*/
    .header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 73px;
        background-color: var(--container-color);
        box-shadow: 0 1px 0 rgba(22, 8, 43, 0.1);
        padding: 0 1rem;
        z-index: var(--z-fixed);
    }

    .header__container {
        display: block;

        justify-content: space-between;
    }

    .header__img {
        width: 35px;
        height: 35px;
        border-radius: 50%;
    }

    .navProfile {
        display: inline;
        float: right;
        margin-top: 17px;
        margin-right: 40px;
    }

    .sideLogo {
        margin-right: 10px;
        display: none;
    }

    .header__logo {
        color: var(--title-color);
        font-weight: var(--font-medium);
        display: none;
    }

    .header__input::placeholder {
        font-family: var(--body-font);
        color: var(--text-color);
    }

    .header__icon,
    .header__toggle {
        display: inline-flex;
        font-size: 1.5rem;
        margin-top: 23px;

    }

    .header__toggle {
        color: var(--title-color);
        cursor: pointer;
    }

    /*========== NAV ==========*/
    .nav {
        position: fixed;
        top: 1;
        left: -100%;
        height: 100%;
        padding: 1rem 1rem 0;
        background-color: var(--container-color);
        box-shadow: 1px 0 0 rgba(22, 8, 43, 0.1);
        z-index: var(--z-fixed);
        transition: .4s;
    }

    .nav__container {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding-bottom: 3rem;
        overflow: auto;
        scrollbar-width: none;
        /* For mozilla */
    }

    /* For Google Chrome and others */
    .nav__container::-webkit-scrollbar {
        display: none;
    }

    .nav__logo {
        font-weight: var(--font-semi-bold);
        margin-bottom: 2.5rem;
    }

    .nav__list,
    .nav__items {
        display: grid;
    }

    .nav__list {
        row-gap: 2.5rem;
    }

    .nav__items {
        row-gap: 1.5rem;
    }

    .nav__subtitle {
        font-size: var(--normal-font-size);
        text-transform: uppercase;
        letter-spacing: .1rem;
        color: var(--text-color-light);
    }

    .nav__link {
        display: flex;
        align-items: center;
        color: var(--text-color);
    }

    .nav__link:hover {
        color: var(--first-color);
    }

    .nav__icon {
        font-size: 1.2rem;
        margin-right: .5rem;
    }

    .nav__name {
        font-size: var(--small-font-size);
        font-weight: var(--font-medium);
        white-space: nowrap;
    }

    /* Dropdown */
    .nav__dropdown {
        overflow: hidden;
        max-height: 21px;
        transition: .4s ease-in-out;
    }

    .nav__dropdown-collapse {
        background-color: var(--first-color-light);
        border-radius: .25rem;
        margin-top: 1rem;
    }

    .nav__dropdown-content {
        display: grid;
        row-gap: .5rem;
        padding: .75rem 2.5rem .75rem 1.8rem;
    }

    .nav__dropdown__item {
        font-size: var(--smaller-font-size);
        font-weight: var(--font-medium);
        color: var(--text-color);
    }

    .nav__dropdown__item:hover {
        color: var(--first-color);
    }

    .nav__dropdown-icon {
        margin-left: auto;
        transition: .4s;
    }

    /* Show dropdown collapse */
    .nav__dropdown:hover {
        max-height: 100rem;
    }

    /* Rotate icon arrow */
    .nav__dropdown:hover .nav__dropdown-icon {
        transform: rotate(180deg);
    }


    /*===== Show menu =====*/
    .show-menu {
        left: 0;
    }

    /*===== Active link =====*/
    .active {
        color: var(--first-color);
    }

    /* ========== MEDIA QUERIES ==========*/
    @media screen and (min-width: 768px) {
        body {
            padding: 1rem 3rem 0 6rem;
        }

        .header {
            padding: 0 3rem 0 6rem;
        }

        .header__container {
            height: calc(var(--header-height) + .5rem);
        }

        .header__toggle {
            display: none;

        }

        .header__logo {
            display: inline-flex;
            margin-top: 20px;
            text-align: start;
        }

        .header__img {
            width: 40px;
            height: 40px;
        }

        .nav {
            left: 0;
            padding: 1.2rem 1.5rem 0;
            width: 68px;
            /* Reduced navbar */
        }

        .nav__items {
            row-gap: 1.7rem;
        }

        .nav__icon {
            font-size: 1.3rem;
        }

        /* Element opacity */
        .nav__logo-name,
        .nav__name,
        .nav__subtitle,
        .nav__dropdown-icon {
            opacity: 0;
            transition: .3s;
        }

        /* Navbar expanded */
        .nav:hover {
            width: var(--nav-width);
        }

        /* Visible elements */
        .nav:hover .nav__logo-name {
            opacity: 1;
        }

        .nav:hover .nav__subtitle {
            opacity: 1;
        }

        .nav:hover .nav__name {
            opacity: 1;
        }

        .nav:hover .nav__dropdown-icon {
            opacity: 1;
        }

        .nav:hover .nav__link.nav__logo .sideLogo {
            display: flex;
        }
    }

    .container {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 10px;
    }

    .content-section {
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        margin-top: 40px;
    }

    .content-section .card {
        flex: 1;
        width: 200px;
        padding: 20px;
        margin: 30px 20px;
        box-shadow: 0px 2px 8px 0px rgba(0, 0, 0, 0.2);
    }

    .content-section .card h2 {
        margin: 15px 0px;
        font-size: 20px;
        font-family: sans-serif;
    }

    @media screen and (max-width: 768px) {
        .content-section {
            flex-direction: column;
        }
    }

    @media screen and (max-width: 992px) {
        .content-section {
            width: 100%;
        }
    }
</style>

<body>
    <!--========== HEADER ==========-->
    <header class="header">
        <div class="header__container">
            <a class="navProfile nav-link dropdown-toggle text-black" type="button" data-bs-toggle="dropdown" href="#" aria-expanded="false"><img src="../../assets/image/1x1.jpg" class="header__img"><?php echo $_SESSION['user']; ?></a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
            <a href="#" class="header__logo">CYSDO</a>

            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>

            </div>

        </div>

    </header>

    <!--========== NAV ==========-->
    <div class="nav" id="navbar">
        <nav class="nav__container">
            <div>
                <a href="#" class="nav__link nav__logo">
                    <img src="../../assets/image/CysdoLogo.png" style="height: 50px; width: 50px;" class="sideLogo">
                    <span class="nav__logo-name">CYSDO</span>
                </a>

                <div class="nav__list">
                    <div class="nav__items">

                        <a href="scholarHome.php" class="nav__link">
                            <i class='bx bxs-dashboard nav__icon'></i>
                            <span class="nav__name">Dashboard</span>
                        </a>

                        <a href="scholarMessage.php" class="nav__link">
                            <i class='bx bx-message-rounded nav__icon'></i>
                            <span class="nav__name">Messages</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class="bi bi-arrow-clockwise nav__icon"></i>
                            <span class="nav__name">Renewal</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-cog nav__icon'></i>
                            <span class="nav__name">Community Service</span>
                        </a>

                        <a href="scholarAnnouncement.php" class="nav__link">
                            <i class='bx bx-news nav__icon'></i>
                            <span class="nav__name">News & Update</span>
                        </a>

                    </div>

                </div>
            </div>

        </nav>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!--========== MAIN JS ==========-->
    <script>
        /*==================== SHOW NAVBAR ====================*/
        const showMenu = (headerToggle, navbarId) => {
            const toggleBtn = document.getElementById(headerToggle),
                nav = document.getElementById(navbarId)

            // Validate that variables exist
            if (headerToggle && navbarId) {
                toggleBtn.addEventListener('click', () => {
                    // We add the show-menu class to the div tag with the nav__menu class
                    nav.classList.toggle('show-menu')
                    // change icon
                    toggleBtn.classList.toggle('bx-x')
                })
            }
        }
        showMenu('header-toggle', 'navbar')

        /*==================== LINK ACTIVE ====================*/
        const linkColor = document.querySelectorAll('.nav__link')

        function colorLink() {
            linkColor.forEach(l => l.classList.remove('active'))
            this.classList.add('active')
        }

        linkColor.forEach(l => l.addEventListener('click', colorLink))
    </script>

    <script>
        const dropdownElementList = document.querySelectorAll('.dropdown-toggle')
        const dropdownList = [...dropdownElementList].map(dropdownToggleEl => new bootstrap.Dropdown(dropdownToggleEl))
    </script>