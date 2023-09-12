<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Announcement</title>
</head>

<style>
  body {
    background-color: #f7f7f7;
  }

 *{
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
 }

 .textAlign {
    display: flex;
    padding-top: 150px;
    padding-left: 20px;
    font-size: 26px;
 }

 .container {
  width: 100%;
  background-color: #f7f7f7;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 90px;
 }

 .content-section {
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  width: 60%;
 }

 .content-section .card {
  flex: 1;
  margin: 20px 20px;
  box-shadow: 0px 2px 8px 0px rgba(0, 0, 0, 0.2);
 }

 .content-section .card img {
  width: 100%;
  height: auto;
 }

 .content-section .card h2 {
  margin: 15px 0px;
  font-size: 20px;
  font-family: sans-serif;
 }

 @media screen and (max-width: 768px) {
  .content-section {
    margin-top: 100px;
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
  <?php
    include 'assets/template/homeNavigation.php';
    ?>
  <div class='textAlign'>
    <p style="text-transform: capitalize;" class='bold d-block w-auto'><a href='announcementTab.php' class='mouse bi bi-chevron-left text-black float-start ms-5'></a></p>
  </div>
    <div class="container">
      <div class="content-section">
        <div class="card">
          <img src="./assets/image/No_Image_Available.jpg" alt="No img">
         <div class="card-body">
          <h2>Scholar Announcement</h2>
          <a href="scholarAnnouncement.php?page=scholar" class="btn btn-outline-primary mb-4">View</a>
         </div>
        </div>
        <div class="card">
          <img src="./assets/image/No_Image_Available.jpg" alt="No img">
         <div class="card-body">
          <h2>Applicant Announcement</h2>
          <a href="scholarAnnouncement.php?page=applicant" class="btn btn-outline-primary mb-4">View</a>
         </div>
        </div>
      </div>
    </div>
</body>
</html>