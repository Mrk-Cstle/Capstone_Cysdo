<?php

// Your database connection code here...
include '../include/dbConnection.php';

// Get the applicant ID from the URL
$adminId = $_SESSION['user_id'];

// Step 2: Construct and execute the SQL query to select the row with the specified ID
$sql = "SELECT * FROM staff WHERE staffId = '$adminId'";
$result = mysqli_query($conn, $sql);

if ($result) {
  // Step 3: Check if the row exists
  if (mysqli_num_rows($result) > 0) {
    // Step 4: Fetch the row
    $row = mysqli_fetch_assoc($result);

    // Step 5: Access the values of the row
    extract($row);
    // ...

    // Process the retrieved row as needed
    // For example, you can display the values or perform any other operations

    // Free the result set
    mysqli_free_result($result);
  } else {
    echo "No row found with the specified ID.";
  }
} else {
  echo "Error executing the query: " . mysqli_error($conn);
}


// // Close the database connection and perform any other necessary cleanup...
// 
?>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
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
    background-color: #ddd;
    background-size: cover;
    background-position: center;
    margin: 0;
    padding: 0;
  }

  .side-bar {
    position: fixed;
    width: 290px;
    height: 100%;
    top: 75px;
    background: rgb(255, 255, 255);
    background: linear-gradient(356deg, rgba(255, 255, 255, 1) 0%, rgba(236, 77, 155, 1)80%);
    overflow-y: auto;
    z-index: 999;
  }

  .navi-Bar {
    display: flex;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 76px;
    background: #F875AA;
    padding-bottom: 10px;
    z-index: 999;
    justify-content: flex-end;
  }

  .navProfile {
    display: flex;
    justify-content: flex-end;
    margin-top: 10px;
    margin-right: 30px;
    align-items: center;
  }

  .header__img {
    width: 40px;
    height: 40px;
    margin-right: 3px;
    border-radius: 50%;
  }

  .staffList {
    margin-bottom: 70px;
  }

  .adminList {
    margin-bottom: 70px;
  }

  .scholarList {
    margin-bottom: 70px;
  }

  .applicantList {
    margin-bottom: 70px;
  }

  .examinersList {
    margin-bottom: 70px;
  }

  .newscholarsList {
    margin-bottom: 70px;
  }

  .approvedList {
    margin-bottom: 70px;
  }

  .deniedList {
    margin-bottom: 70px;
  }

  .passedList {
    margin-bottom: 70px;
  }

  .failedList {
    margin-bottom: 70px;
  }

  .renewalList {
    margin-bottom: 70px;
  }

  .cashAllowance {
    margin-bottom: 70px;
  }

  .scholarArchiveList{
    margin-bottom: 70px;
  }

  .side-bar.active {
    left: 0;
  }

  .side-bar .menu {
    width: 100%;
    margin-top: 30px;
  }

  .side-bar .menu .item {
    position: relative;
    cursor: pointer;
  }

  .side-bar .menu .item a {
    color: #000;
    font-size: 16px;
    text-decoration: none;
    display: block;
    padding: 5px 30px;
    line-height: 60px;
  }

  .side-bar .menu .item a:hover {
    background: #F875AA;
    transition: 0.3s ease;
  }

  .side-bar .menu .item i {
    margin-right: 15px;
  }

  .side-bar .menu .item a .dropdown {
    position: absolute;
    right: 0;
    margin: 20px;
    transition: 0.3s ease;
  }

  .side-bar .menu .item .sub-menu {
    background: rgba(255, 255, 255, 0.1);
    display: none;
  }

  .side-bar .menu .item .sub-menu a {
    padding-left: 80px;
  }

  .rotate {
    transform: rotate(90deg);
  }

  .menu-btn {
    position: absolute;
    color: #000;
    font-size: 20px;
    margin: 25px;
    cursor: pointer;
  }

  .caption {
    margin-top: 30px;
    margin-left: 10px;
    font-size: 22px;
  }

  .sideLogo {
    margin-left: 10px;
  }

  .sideHead {
    margin-top: 15px;
    margin-left: 30px;
  }

  .home-section {
    position: relative;
    background: #ddd;
    margin-left: 20px;
    left: 270px;
    width: calc(100% - 290px);
    transition: all 0.5s ease;
    padding-right: 50px;
    margin-top: 30px;
  }

  .container {
    padding: 10px 10px;
  }

  .home-content {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
  }

  .home-section .home-content .bx-menu,
  .home-section .home-content .text {
    color: #11101d;
    font-size: 35px;
  }

  .home-section .home-content .bx-menu {
    cursor: pointer;
    margin-right: 10px;
  }

  .home-section .home-content .text {
    font-size: 26px;
    font-weight: 600;
  }

  .fontWeight {
    font-weight: 500;
  }

  .header__toggle {
    display: inline-flex;
    font-size: 28px;
  }

  .header__toggle {
    margin-left: 10px;
    margin-top: 25px;
    color: #19181B;
    cursor: pointer;
  }

  .header__toggle {
    display: none;
  }

  .show-menu {
    left: 0;
  }

  .side_icon {
    font-size: 20px;
  }

  .side-bar .menu .item .sub-menu .applicant-menu  {
    line-height: 2.3;
  }
  
  @media screen and (max-width: 779px) {
    .side-bar {
      display: block;
      left: 0;
      width: 220px;
      transition: .4s;
      z-index: 100;
      font-size: 12px;
    }

    .navi-Bar {
      justify-content: space-between;
    }

    .show-menu {
      left: 0;
    }

    .Navi:hover {
      width: 160px;
      text-decoration: none;
    }

    .home-section {
      position: relative;
      background: #ddd;
      margin-left: 20px;
      left: 0px;
      width: 100%;
      transition: all 0.5s ease;
      padding-right: 50px;
      margin-top: 40px;
    }

    .header__toggle {
      display: flex;
      left: 0;
      justify-content: flex-start;
    }

    #menu-side{
      margin-top: 40px;
    }

    .content {
      margin-left: 0;
    }

    .side-bar .menu .item a {
      color: #000;
      font-size: 14px;
      text-decoration: none;
      padding: 2px 20px;
      line-height: 55px;
    }

    .caption {
      margin-left: 5px;
      font-size: 18px;
    }

    .sideLogo {
      margin-left: 10px;
    }

    .side_icon {
    font-size: 16px;
  }
  }

  @media screen and (max-width: 1831px) {
    .scholarList {
      margin-bottom: 50px;
      margin-right: 350px
    }

    .staffList {
      margin-bottom: 50px;
      margin-right: 450px;
    }

    .adminList {
      margin-bottom: 50px;
      margin-right: 400px;
    }

    .applicantList {
      margin-bottom: 50px;
      margin-right: 100px;
    }

    .examinersList {
      margin-bottom: 50px;
      margin-right: 200px;
    }

    .newscholarsList {
      margin-bottom: 50px;
      margin-right: 300px;
    }

    .approvedList {
      margin-bottom: 50px;
      margin-right: 10px;
    }

    .deniedList {
      margin-bottom: 50px;
      margin-right: 10px;
    }

    .passedList {
      margin-bottom: 50px;
      margin-right: 10px;
    }

    .failedList {
      margin-bottom: 50px;
      margin-right: 10px;
    }

    .renewalList {
      margin-bottom: 50px;
      margin-right: 400px;
    }

    .cashAllowance {
      margin-bottom: 50px;
      margin-right: 180px;
    }

    .scholarArchiveList{
    margin-bottom: 50px;
    margin-right: 230px;
    }
  }

  @media screen and (max-width: 1631px) {
    .scholarList {
      margin-bottom: 50px;
      margin-right: 240px
    }

    .staffList {
      margin-bottom: 50px;
      margin-right: 345px;
    }

    .adminList {
      margin-bottom: 50px;
      margin-right: 300px;
    }

    .applicantList {
      margin-bottom: 50px;
      margin-right: 5px;
    }

    .examinersList {
      margin-bottom: 50px;
      margin-right: 40px;
    }

    .newscholarsList {
      margin-bottom: 50px;
      margin-right: 190px;
    }

    .scholarArchiveList{
    margin-bottom: 50px;
    margin-right: 130px;
  }
  }

  @media screen and (max-width: 1527px) {
    .scholarList {
      margin-bottom: 50px;
      margin-right: 150px
    }

    .staffList {
      margin-bottom: 50px;
      margin-right: 240px;
    }

    .adminList {
      margin-bottom: 50px;
      margin-right: 200px;
    }

    .applicantList {
      margin-bottom: 50px;
      margin-right: 5px;
    }

    .examinersList {
      margin-bottom: 50px;
      margin-right: 10px;
    }

    .newscholarsList {
      margin-bottom: 50px;
      margin-right: 100px;
    }
  }
</style>

<body>

  <div class="navi-Bar">
  <div class="header__toggle float-start">
      <a class="Button_toggle text-black" onclick="toggleNav()"><i class='bx bx-menu' id="header-toggle"></i></a>
    </div>
    <ul class="navProfile nav nav-pills justify-content-end">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-black" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
          <img src="../../uploads/admin/<?php echo $image ?>"class="header__img"><?php echo $_SESSION['user']; ?></a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="profileStaff.php">Profile</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="logout.php">Logout</a></li>
        </ul>
      </li>
    </ul>
  </div>

  <div class="side-bar" id="bar-side">
    <div>
      <a class="sideHead nav-link text-black" role="none" aria-expanded="false"><img src="../../assets/image/CysdoLogo.png" style="height: 50px; width: 50px;" class="sideLogo"><i class="caption">CYSDO</i></a>
    </div>
    <div class="menu">
      <div class="item fontWeight">
        <a href="adminHome.php">
          <i class="bx bxs-dashboard side_icon"></i>
          <span class="nav_label">Dashboard</span>
    </a>
      </div>

      <div class="item fontWeight">
        <a href="staffChat.php">
          <i class="bi bi-chat-dots-fill side_icon"></i>
          <span class="nav_label">Messages</span>
        </a>
      </div>

      <div class="item">
        <a class="sub-btn fontWeight">
          <i class="bi-person-fill-gear side_icon"></i>
          <i class="fas fa-angle-right dropdown"></i>
        <span class="nav_label">Manage Scholar</span>
      </a>
        <div class="sub-menu">
          <a href="scholar.php" class="sub-item">Scholar List</a>
          <a href="scholarArchive.php" class="sub-item">Scholar Archive List</a>
          <a href="renewalList.php" class="sub-item">Renewal Process</a>
          <a href="renewalAward.php" class="sub-item">Cash Allowance</a>
        </div>
      </div>
      <div class="item">
        <a class="sub-btn fontWeight">
          <i class="bi bi-person-lines-fill side_icon"></i>
          <i class="fas fa-angle-right dropdown"></i>
        <span class="nav_label">Manage Applicants</span>
      </a>
        <div class="sub-menu">

          <a href="applicantList.php" class="sub-item applicant-menu"><i class="bi bi-person-lines-fill"></i>Step 1 </br>List of Applicants</a>
          <a href="applicantExaminers.php" class="sub-item applicant-menu"><i class="bi bi-person-lines-fill"></i>Step 2 </br>List of Examiners</a>
          <a href="applicantScholar.php" class="sub-item applicant-menu"><i class="bi bi-person-lines-fill"></i>Step 3 </br>List of New Scholar</a>
        </div>
      </div>
      <div class="item fontWeight">
        <a href="postUpdate.php">
          <i class="bi bi-file-earmark-ppt-fill side_icon"></i>
          <span class="nav_label">Manage Post</span>
        </a>
        </div>
    </div>
  </div>

  <section class="home-section">
    <div class="home-content">
      <span class="text"></span>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      //jquery for toggle sub menus
      $('.sub-btn').click(function() {
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.dropdown').toggleClass('rotate');
      });

    });
  </script>

<script>
    /*==================== SHOW NAVBAR ====================*/
    const showMenu = (headersToggle, navbarId) => {
      const toggleBtn = document.getElementById(headersToggle),
        nav = document.getElementById(navbarId)

        // Validate that variables exist
      if (headersToggle && navbarId) {
        toggleBtn.addEventListener('click', () => {
            // We add the show-menu class to the div tag with the nav__menu class
          nav.classList.toggle('show-menu')
            // change icon
          toggleBtn.classList.toggle('bx-x')
          })
        }
    }
    showMenu('header-toggle', 'bar-side')
  </script>

<script>
    function toggleNav() {
    var sidenav = document.querySelector('.side-bar');
    var content = document.querySelector('.content');
    sidenav.style.left = (sidenav.style.left === '0px') ? '-250px' : '0';
    content.style.marginLeft = (content.style.marginLeft === '250px') ? '0' : '250px';

    if (headersToggle && navbarId) {
        toggleBtn.addEventListener('click', () => {
            // We add the show-menu class to the div tag with the nav__menu class
          nav.classList.toggle('show-menu')
            // change icon
          toggleBtn.classList.toggle('bx-x')
          })
        }
}
</script>

</body>

</html>