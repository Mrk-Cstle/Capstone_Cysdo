<?php
include 'include/session.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Side Menu Bar | Dashboard</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

    * {
      margin: 0;
      padding: 0;
      outline: none;
      border: none;
      text-decoration: none;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      background: #dfe9f5;
      margin-left: 300px;
    }

    nav {
      position: absolute;
      top: 0;
      bottom: 0;
      height: 100%;
      left: 0;
      background: #fff;
      width: 90px;
      overflow: hidden;
      transition: width 0.2s linear;
      box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
    }

    .logo {
      text-align: center;
      display: flex;
      transition: all 0.5s ease;
      margin: 10px 0 0 10px;
    }

    .logo img {
      width: 45px;
      height: 45px;
      border-radius: 50%;
    }

    .logo span {
      font-weight: bold;
      padding-left: 15px;
      font-size: 18px;
      text-transform: uppercase;
    }

    a {
      position: relative;
      color: rgb(85, 83, 83);
      font-size: 14px;
      display: table;
      width: 300px;
      padding: 10px;
    }

    .fas {
      position: relative;
      width: 70px;
      height: 40px;
      top: 14px;
      font-size: 20px;
      text-align: center;
    }

    .nav-item {
      position: relative;
      top: 12px;
      margin-left: 10px;
    }

    a:hover {
      background: #eee;
    }

    nav:hover {
      width: 280px;
      transition: all 0.5s ease;
    }

    .logout {
      position: absolute;
      bottom: 0;
    }
  </style>
</head>

<body>
  <nav>
    <ul>
      <li>
        <a href="#" class="logo">
          <img src="/logo.jpg" alt="" />
          <span class="nav-item">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-home"></i>
          <span class="nav-item">Home</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-user"></i>
          <span class="nav-item">Profile</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-table"></i>
          <span class="nav-item">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="postUpdate.php">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Manage Post</span>
        </a>
      </li>
      <ul>
        <a href="createStaff.php">
          <i class="fas fa-tasks"></i>
          <span class="nav-item">Manage Staff</span>
        </a>

      </ul>
      <li>
        <a href="#">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Settings</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">Help</span>
        </a>
      </li>
      <li>
        <a href="logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a>
      </li>
    </ul>
  </nav>
</body>

</html>