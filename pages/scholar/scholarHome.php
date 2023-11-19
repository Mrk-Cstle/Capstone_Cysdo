<!DOCTYPE html>
<html lang="en">

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
    max-height: 150px; /* Set the maximum height as needed */
}

.notification-item {
    padding: 10px;
    border-bottom: 1px solid #e0e0e0; /* Add a separating line */
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
      <h3>Dashboard</h3>
      <div class="container">
        <div class="content-section">
          <div class="card">
            <h2>Status:</h2>
            <div class="card-body">
              <p class="text-success">Scholar</p>
            </div>
          </div>
          <div class="card">
            <h2>No. Community Service:</h2>
            <div class="card-body">
              <p class="text-success">3</p>
            </div>
          </div>
          <div class="card">
            <h2>Renewal Status:</h2>
            <div class="card-body">
              <p class="text-danger">Ongoing</p>
            </div>
          </div>
          <div class="card">
            <h2>Message:</h2>
            <div class="card-body">
            <div class="bell-container">
            <i class="icon fa fa-bell dropdown-toggle" aria-hidden="true" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="counter clickable">0</span>
</i>

    <div class="dropdown-menu overflow-h-menu dropdown-menu-right">
    <div class="notification">
    <div class="notification-item">New message from Admin</div>
    <div class="notification-item">Another message from Admin</div>
    <!-- Add more notification items dynamically -->
</div>

                            </div>
</div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="content-section">
          <div class="card">
            <h2>Status:</h2>
            <div class="card-body">
              <p class="text-success">Ongoing</p>
            </div>
          </div>
          <div class="card">
            <h2>Status:</h2>
            <div class="card-body">
              <p class="text-danger">Ongoing</p>
            </div>
          </div>
          <div class="card">
            <h2>Status:</h2>
            <div class="card-body">
              <p class="text-success">Ongoing</p>
            </div>
          </div>
          <div class="card">
            <h2>Status:</h2>
            <div class="card-body">
              <p class="text-danger">Ongoing</p>
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
        $(document).ready(function () {

    function markMessagesAsRead(scholarId) {
    $.ajax({
        url: 'mark_messages_as_read.php',
        method: 'POST',
        data: { scholar_id: scholarId },
        success: function () {
            // Do something if needed after marking messages as read
        }
    });
}



        function updateNotifications() {
    $.ajax({
        type: "GET",
        url: "fetch_notifications.php",
        success: function (response) {
            try {
                var data = JSON.parse(response);

                // Use a set to keep track of unique notifications
                var uniqueNotifications = new Set();

                // Add admin notifications to the set
                data.admin.notifications.forEach(function (notification) {
                    uniqueNotifications.add(JSON.stringify(notification));
                });

                // Add staff notifications to the set
                data.staff.notifications.forEach(function (notification) {
                    uniqueNotifications.add(JSON.stringify(notification));
                });

                // Convert the set back to an array
                var uniqueNotificationsArray = Array.from(uniqueNotifications).map(function (notification) {
                    return JSON.parse(notification);
                });

                // Count notifications from 'City Youth and Sports Development Office - CSJDM'
                var cityOfficeNotifications = uniqueNotificationsArray.filter(function (notification) {
                    return notification.sender === 'City Youth and Sports Development Office - CSJDM';
                });

                // Count city office notifications
                var unreadCountCityOffice = cityOfficeNotifications.length;

                // Display city office unread count only
                $('.counter').text(unreadCountCityOffice);
                var notificationContainer = $('.notification');
                notificationContainer.empty();
                cityOfficeNotifications.forEach(function (notification) {
                    notificationContainer.append('<div class="notification-item">New message from ' + notification.sender + '</div>');
                });

                // Mark messages as read
                markMessagesAsRead();
            } catch (error) {
                console.error('Error parsing JSON:', error);
            }
        },
        error: function (xhr, status, error) {
            console.error('AJAX Error:', status, error);
        }
    });
}


function markNotificationsAsRead() {
    // Get the relevant information from notifications
    var notificationsToMarkRead = cityOfficeNotifications.map(function (notification) {
        return notification.message_id; // Adjust this based on the actual structure of your notification object
    });

    // Send the array of message IDs to mark as read
    $.ajax({
        type: "POST",
        url: "mark_as_read.php",
        data: { message_ids: notificationsToMarkRead },
        success: function (response) {
            if (response === 'success') {
                updateNotifications();
                $('.counter').text('0');
            } else {
                console.error('Failed to mark notifications as read. Server response:', response);
            }
        },
        error: function (xhr, status, error) {
            console.error('AJAX Error:', status, error);
        }
    });
}






        $('.clickable').click(function () {
    markNotificationsAsRead();
    $('.counter').text('0'); // Update counter to 0 after marking as read
});


        updateNotifications();

        setInterval(updateNotifications, 20000);

      });
  
    </script>
</body>

</html>