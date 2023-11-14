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


<body>
  <?php


  include '../../assets/template/scholarNav.php';

  ?>
  <!--========== HEADER ==========-->


  <!--========== CONTENTS ==========-->
  <main>
    <section>
      <h3 class="ms-5">Dashboard</h3>
      <div class="container">
        <div class="content-section">
          <div class="card-1">
            <h2>Status:</h2>
            <div class="card-body">
              <p class="text-success">Scholar</p>
            </div>
          </div>
          <div class="card-2">
            <h2>No. Community Service:</h2>
            <div class="card-body">
              <p class="text-danger">3</p>
            </div>
          </div>
          <div class="card-3">
            <h2>Renewal Status:</h2>
            <div class="card-body">
              <p class="text-success">Ongoing</p>
            </div>
          </div>
          <div class="card-4">
            <h2>Message:</h2>
            <div class="card-body">
              <p class="text-danger">2</p>
            </div>
          </div>
          <div class="card-5">
            <h2>Cash Allowance</h2>
            <div class="card-body">
              <p class="text-success">Ongoing</p>
            </div>
          </div>
        </div>
      </div>

    </section>
  </main>

</body>

</html>