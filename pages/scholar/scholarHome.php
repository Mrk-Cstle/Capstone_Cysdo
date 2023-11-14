<!DOCTYPE html>
<?php
include 'include/session.php';
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
  <title>Home</title>

  <style>
    .bell-container {
      position: relative;
      display: inline-block;
    }

    .icon {
      font-size: 24px;
      cursor: pointer;
    }

    .counter {
      position: absolute;
      top: 0;
      right: 0;
      background-color: red;
      color: white;
      border-radius: 50%;
      padding: 3px 6px;
      font-size: 12px;
    }

    .notification {
      overflow-y: auto;
      max-height: 150px;
      /* Set the maximum height as needed */
    }

    .notification-item {
      padding: 10px;
      border-bottom: 1px solid #e0e0e0;
      /* Add a separating line */
    }
  </style>
</head>


<body>
  <?php


  include '../../assets/template/scholarNav.php';
  // Include your database connection script
  include '../include/selectDb.php';

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
              <p class="text-danger"><?php echo $c_service1st ?></p>
            </div>
          </div>
          <div class="card-3">
            <h2>Renewal Status:</h2>
            <div class="card-body">
              <p class="text-success"><?php echo $status_lastsem ?></p>
            </div>
          </div>
          <div class="card-4">
            <h2>Message:</h2>
            <div class="card-body">
              <div class="bell-container">
                <i class="icon fa fa-bell dropdown-toggle" aria-hidden="true" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="counter clickable">0</span>
                </i>

                <div class="dropdown-menu overflow-h-menu dropdown-menu-right">
                  <div class="notification">
                    <div class="notification-item">New message from Scholar</div>
                    <div class="notification-item">Another message from Scholar</div>
                    <!-- Add more notification items dynamically -->
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="card-5">
            <h2>Cash Allowance</h2>
            <div class="card-body">
              <p class="text-success"><?php echo $status_lastsem ?></p>
            </div>
          </div>
        </div>
      </div>

    </section>
  </main>

  <!-- Include jQuery library here -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
    $(document).ready(function() {

      function updateNotifications() {
        $.ajax({
          type: "GET",
          url: "fetch_notifications.php",
          success: function(response) {
            var data = JSON.parse(response);
            var notifications = data.notifications;
            var unreadCount = data.unread_count;

            $('.counter').text(unreadCount);

            var notificationContainer = $('.notification');
            notificationContainer.empty();

            notifications.forEach(function(notification) {
              var senderName = notification.sender || 'Admin'; // or 'Staff' depending on the case

              notificationContainer.append('<div class="notification-item">New message from ' + senderName + '</div>');
            });
          }
        });
      }



      $('.clickable').click(function() {
        markNotificationsAsRead();
      });

      updateNotifications();

      setInterval(updateNotifications, 5000);

    });
  </script>
</body>

</html>