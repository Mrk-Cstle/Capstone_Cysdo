<?php

// Your database connection code here...
include '../include/dbConnection.php';

// Get the applicant ID from the URL
$adminId = $_SESSION['user'];

// Step 2: Construct and execute the SQL query to select the row with the specified ID
$sql = "SELECT * FROM admin WHERE full_name = '$adminId'";
$result = mysqli_query($conn, $sql);

if ($result) {
  // Step 3: Check if the row exists
  if (mysqli_num_rows($result) > 0) {
    // Step 4: Fetch the row
    $row = mysqli_fetch_assoc($result);
    // ...
    $imageData = $row['image'];
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
    background-color: whitesmoke;
    background-size: cover;
    background-position: center;
  }

  .side-bar {
    background: #FF5F9E;
    width: 290px;
    height: 100%;
    position: fixed;
    top: 0;
    overflow-y: auto;
  }

  .navBar {
    background: #FF5F9E;
    margin-top: -25px;
    padding-top: 10px;
    padding-bottom: 10px;
    justify-content: end;
    position: relative;

  }

  .navProfile {
    margin-right: 30px;
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
    background: #C23373;
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
    margin-top: 20px;
    margin-left: 10px;
    font-size: 22px;
  }

  .sideLogo {
    margin-left: 20px;
  }

  .sideHead {
    margin-top: 40px;
    margin-left: 30px;
  }

  .home-section {
    position: relative;
    background: #E4E9F7;
    margin-left: 20px;
    left: 270px;
    width: calc(100% - 280px);
    transition: all 0.5s ease;
    padding: 12px;
    padding-right: 50px;
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
</style>

<body>

  <div class="navBar">
    <div class="messageBtn me-2">
      <a class="msgBtn bi bi-chat-dots-fill text-black fs-4" href="chattingSystem.php"></a>
    </div>
    <ul class="navProfile nav nav-pills justify-content-end">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-black" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img id="profileImage" src="../../uploads/admin/<?php echo $imageData ?>" style="height: 40px; width: 40px;"><?php echo $_SESSION['user']; ?></a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="profile.php">Profile</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="logout.php">Logout</a></li>
        </ul>
      </li>
    </ul>
  </div>

  <div class="side-bar">
    <div>
      <a class="sideHead nav-link text-black" role="none" aria-expanded="false"><img src="../../assets/image/CysdoLogo.png" style="height: 50px; width: 50px;" class="sideLogo"><i class="caption">CYSDO</i></a>
    </div>
    <div class="menu">
      <div class="item"><a href="adminHome.php"><i class="fas fa-desktop"></i>Dashboard</a></div>
      <div class="item">
        <a class="sub-btn"><i class="fas fa-table"></i>Manage Users<i class="fas fa-angle-right dropdown"></i></a>
        <div class="sub-menu">
          <a href="addStaff.php" class="sub-item">Manage Staff</a>
          <a href="addAdmin.php" class="sub-item">Manage Admin</a>
        </div>
      </div>
      <div class="item">
        <a class="sub-btn"><i class="fas fa-table"></i>Manage Scholar<i class="fas fa-angle-right dropdown"></i></a>
        <div class="sub-menu">
          <a href="scholar.php" class="sub-item">Scholar List</a>
          <a href="renewalList.php" class="sub-item">Renewal Process</a>

        </div>
      </div>
      <div class="item">
        <a class="sub-btn"><i class="bi bi-person-lines-fill"></i></i>Manage Applicants<i class="fas fa-angle-right dropdown"></i></a>
        <div class="sub-menu">

          <a href="applicantList.php" class="sub-item"><i class="bi bi-person-lines-fill"></i>Step 1 </br>List of Applicants</a>
          <a href="applicantExaminers.php" class="sub-item"><i class="bi bi-person-lines-fill"></i>Step 2 </br>List of Examiners</a>
          <a href="applicantScholar.php" class="sub-item"><i class="bi bi-person-lines-fill"></i>Step 3 </br>List of New Scholar</a>
        </div>
      </div>
      <div class="item"><a href="postUpdate.php"><i class="bi bi-file-earmark-ppt-fill"></i></i>Manage Post</a></div>
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


</body>

</html>