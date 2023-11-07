<?php
session_start();

// Include your database connection script
include '../include/selectDb.php';

// Handle sending chat messages from the admin
if (isset($_POST['message'])) {
    $message = $_POST['message'];
    $admin_id = $_SESSION['user_id']; // Get the admin's ID
    $scholar_id = 1; // Replace with the actual scholar's user ID

    // Insert the message into the chat_messages table
    $query = "INSERT INTO chat_messages (sender, message) VALUES ('Admin', '$message')";
    mysqli_query($conn, $query);

    // Add a record to a table that tracks which admin sent the message
    $query = "INSERT INTO admin_messages (admin_id, message_id) VALUES ($admin_id, LAST_INSERT_ID())";
    mysqli_query($conn, $query);
}

// Fetch and display chat messages
$query = "SELECT sender, message FROM chat_messages ORDER BY timestamp DESC LIMIT 10"; // Fetch the last 10 messages
$result = mysqli_query($conn, $query);

$chat_messages = array();
while ($row = mysqli_fetch_assoc($result)) {
    $chat_messages[] = $row;
}

mysqli_close($conn);


?>






<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Message</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>


<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: "Poppins", sans-serif;
}

body {
  padding: 2%;
  background-color: #F5F5F5;
}

.container {
  padding: 0;
  background-color: #FFF; 
  box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
  height: 800px;
}

.textAlign {
    display: flex;
    font-size: 26px;
    margin-bottom: 5px;
 }

/* === CONVERSATIONS === */

.discussions {
  width: 35%;
  height: 800px;
  box-shadow: 0px 8px 10px rgba(0,0,0,0.20);
  overflow: hidden;
  background-color: #FF5F9E;
  display: inline-block;
  padding: 0;
}

.discussions .discussion {
  width: 100%;
  height: 90px;
  background-color: #FAFAFA;
  border-bottom: solid 1px #E0E0E0;
  display:flex;
  align-items: center;
  cursor: pointer;
}

.discussions .search {
  display:flex;
  align-items: center;
  justify-content: center;
  color: #E0E0E0;
}

.discussions .search .searchbar {
  height: 40px;
  background-color: #FFF;
  width: 70%;
  padding-left: 15px;
  border-radius: 50px;
  border: 1px solid #EEEEEE;
  display:flex;
  align-items: center;
  cursor: pointer;
}

.discussions .search .searchbar input {
  margin-left: 10px;
  border-radius: 50px;
  height:38px;
  padding: 0 20px;
  width: 100%;
  display:flex;
  border:none;
  font-family: 'Montserrat', sans-serif;;
}

.discussions .search .searchbar *::-webkit-input-placeholder {
    color: #E0E0E0;
}
.discussions .search .searchbar input *:-moz-placeholder {
    color: #E0E0E0;
}
.discussions .search .searchbar input *::-moz-placeholder {
    color: #E0E0E0;
}
.discussions .search .searchbar input *:-ms-input-placeholder {
    color: #E0E0E0;
}

.discussions .message-active {
  width: 98.5%;
  height: 90px;
  background-color: #FFF;
  border-bottom: solid 1px #E0E0E0;
}

.discussions .discussion .photo {
    margin-left:20px;
    display: block;
    width: 45px;
    height: 45px;
    background: #E6E7ED;
    -moz-border-radius: 50px;
    -webkit-border-radius: 50px;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}

.online {
  position: relative;
  top: 30px;
  left: 35px;
  width: 13px;
  height: 13px;
  background-color: #8BC34A;
  border-radius: 13px;
  border: 3px solid #FAFAFA;
}

.desc-contact {
  height: 43px;
  width:50%;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.discussions .discussion .name {
  margin: 0 0 0 20px;
  font-family:'Montserrat', sans-serif;
  font-size: 11pt;
  color:#515151;
}

.discussions .discussion .message {
  margin: 6px 0 0 20px;
  font-family:'Montserrat', sans-serif;
  font-size: 9pt;
  color:#515151;
}

.timer {
  margin-left: 15%;
  font-family:'Open Sans', sans-serif;
  font-size: 11px;
  padding: 3px 8px;
  color: #BBB;
  background-color: #FFF;
  border: 1px solid #E5E5E5;
  border-radius: 15px;
}

.chat {
  width: calc(70% - 62px);
}

.header-chat {
  background-color: #FFF;
  width: 100%;
  height: 90px;
  box-shadow: 0px 3px 2px rgba(0,0,0,0.100);
  display: flex;
  align-items: center;
}

.chat .header-chat .icon {
  margin-left: 30px;
  color:#515151;
  font-size: 14pt;
}

.chat .header-chat .name {
  margin: 0 0 0 20px;
  text-transform: uppercase;
  font-family:'Montserrat', sans-serif;
  font-size: 13pt;
  color:#515151;
}

.chat .header-chat .right {
  position: absolute;
  right: 40px;
}

.chat .messages-chat {
  padding: 25px 35px;
}

.chat .messages-chat .message {
  display:flex;
  align-items: center;
  margin-bottom: 8px;
}

.chat .messages-chat .message .photo {
    display: block;
    width: 45px;
    height: 45px;
    background: #E6E7ED;
    -moz-border-radius: 50px;
    -webkit-border-radius: 50px;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}

.chat .messages-chat .text {
  margin: 0 35px;
  background-color: #f6f6f6;
  padding: 15px;
  border-radius: 12px;
}

.text-only {
  margin-left: 45px;
}

.time {
  font-size: 10px;
  color:lightgrey;
  margin-bottom:10px;
  margin-left: 85px;
}

.response-time {
  float: right;
  margin-right: 40px !important;
}

.response {
  float: right;
  margin-right: 0px !important;
  margin-left:auto; /* flexbox alignment rule */
}

.response .text {
  background-color: #e3effd !important;
}

.footer-chat {
  width: 60%;
  height: 80px;
  display:flex;
  align-items: center;
  position:absolute;
  bottom: 0;
  background-color: transparent;
  border-top: 2px solid #EEE;
}

.chat .footer-chat .icon {
  margin-left: 30px;
  color:#C0C0C0;
  font-size: 14pt;
}

.chat .footer-chat .send1 {
  color:#fff;
  background-color: #4f6ebd;
  position: absolute;
  right: 40px;
  padding: 12px 12px 12px 12px;
  border-radius: 50px;
  font-size: 14pt;
}


.chat .footer-chat .name {
  margin: 0 0 0 20px;
  text-transform: uppercase;
  font-family:'Montserrat', sans-serif;
  font-size: 13pt;
  color:#515151;
}

.chat .footer-chat .right {
  position: absolute;
  right: 40px;
}

.write-message {
  border:none !important;
  width:60%;
  height: 50px;
  margin-left: 20px;
  padding: 10px;
}

.footer-chat *::-webkit-input-placeholder {
  color: #C0C0C0;
  font-size: 13pt;
}
.footer-chat input *:-moz-placeholder {
  color: #C0C0C0;
  font-size: 13pt;
}
.footer-chat input *::-moz-placeholder {
  color: #C0C0C0;
  font-size: 13pt;
  margin-left:5px;
}
.footer-chat input *:-ms-input-placeholder {
  color: #C0C0C0;
  font-size: 13pt;
}

.clickable {
  cursor: pointer;
}
  /* Add your custom responsive styles here */
  @media (max-width: 768px) {
    .container {
      flex-direction: column;
    }
    .discussions {
      width: 100%;
    }
    .chat {
      width: 100%;
    }
  }

  .discussions {
    max-height: 800px; /* Set a maximum height for chat messages */
    overflow-y: auto; /* Enable vertical scrolling when content overflows */
  }
  .messages-chat {
    max-height: 500px; /* Set a maximum height for chat messages */
    overflow-y: auto; /* Enable vertical scrolling when content overflows */
  }

  @media (max-width: 768px) {
  .container {
    flex-direction: column;
    width: 100%;
    height: auto;

  }
  .textAlign {
    display: none;
  }
  .discussions {
    width: 40%;
    max-width: 100%;
  }
  .chat {
    width: 56%;
    max-width: 100%;
  }
  .footer-chat {
    width: 55%;
    bottom: 0;
    box-sizing: border-box;
    padding: 10px;
  }
  .chat .footer-chat .send1 {
    color:#fff;
    background-color: #4f6ebd;
    position: absolute;
    right: 4px;
    padding: 12px 12px 12px 12px;
    border-radius: 50px;
    font-size: 12pt;
  }
  
  .write-message {
    width: 70%;
    margin-left: 0;
    padding: 10px;
    font-size: 14px;
  }

  .footer-chat .icon {
    margin-left: 10px;
    font-size: 24px;
  }
  .messages-chat {
    max-height: 100%;
    overflow-y: auto;
  }
  .header-chat .right {
    right: 10px;
  }
  .chat .footer-chat {
    padding: 10px;
  }
  .discussions .discussion .message {
    font-size: 14px;
  }
  .chat .header-chat .icon {
    font-size: 20px;
  }
}
/* Add styles for sent messages */


</style>
</head>


<body>
<?php
include '../include/selectDb.php'; 
?>
  <div class='textAlign'>
    <p style="text-transform: capitalize;" class='bold d-block w-auto'><a href='adminHome.php' class='mouse bi bi-chevron-left text-black float-start ms-5'></a></p>
  </div>
  <div class="container">
    <div class="row">
        <section class="discussions">
            <div class="discussion search">
                <div class="searchbar">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input type="text" placeholder="Search..."></input>
                </div>
            </div>
            
            <?php
            // Include your database connection script
            include '../include/selectDb.php';

            // Get the admin's ID (assuming it's stored in a session variable)
            $admin_id = $_SESSION['user_id'];

            // Fetch the admin's full name from the admin table
            $query = "SELECT full_name FROM admin WHERE admin_id = $admin_id";
            $result = mysqli_query($conn, $query);
            $admin = mysqli_fetch_assoc($result);

            // Fetch the list of scholars associated with the admin from the scholar table
            $query = "SELECT scholar_id, full_name FROM scholar";
            $result = mysqli_query($conn, $query);

            while ($scholar = mysqli_fetch_assoc($result)) {
              // Display chat head for each scholar
              echo '<div class="discussion" data-scholar-id="' . $scholar['scholar_id'] . '">';
              echo '<div class="photo" style="background-image: url(\'/assets/image/1x1.jpg\');">';
              echo '<div class="online"></div>';
              echo '</div>';
              echo '<div class="desc-contact">';
              echo '<p class="name font-weight-bold">' . $scholar['full_name'] . '</p>';
              echo '<p class="message">Last message goes here</p>';
              echo '</div>';
              echo '</div>';
          }
          
            ?>
        </section>
        <section class="chat" style="display: block;">
            <div class="header-chat">
                <i class="icon fa fa-user-o" aria-hidden="true"></i>
                <p class="name"><?php echo $_SESSION['user']; ?></p>
                <i class="icon clickable fa fa-ellipsis-h right" aria-hidden="true" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="btn-group dropstart">
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Delete Message</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </i>
            </div>
            <div class="messages-chat">
                <!-- Placeholder for displaying chat messages -->
                <div class="chat-box" id="chat-box">
                    <!-- Messages will be displayed here -->
                </div>
            </div>
            <div class="footer-chat">
                <input type="text" class="write-message" id="messageInput" placeholder="Type your message here">
                <i id="send" class="icon send1 fa fa-paper-plane-o clickable" aria-hidden="true"></i>
            </div>
        </section>
    </div>
</div>

<!-- Include jQuery library here -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function () {
    function fetchMessages(scholarId) {
        // Fetch messages for the specified scholar (use scholarId in the request)
        $.ajax({
            url: 'fetch_message.php',
            method: 'GET',
            data: { scholar_id: scholarId },
            success: function (data) {
                $('#chat-box').html(data);
            }
        });
    }

    $('#send').click(function () {
        var message = $('#messageInput').val();

        if (message !== '') {
            // Send the message to the active scholar (use activeDiscussion.getAttribute('data-scholar-id'))
            $.ajax({
                url: 'send_message.php',
                method: 'POST',
                data: {
                    message: message,
                    scholar_id: activeDiscussion.getAttribute('data-scholar-id')
                },
                success: function () {
                    $('#messageInput').val(''); // Clear input field
                    fetchMessages(activeDiscussion.getAttribute('data-scholar-id')); // Refresh messages for the active scholar
                }
            });
        }
    });

    const discussions = document.querySelectorAll(".discussion");
    let activeDiscussion = null;

    discussions.forEach((discussion) => {
        discussion.addEventListener("click", function () {
            if (activeDiscussion) {
                activeDiscussion.classList.remove("message-active");
            }

            const name = discussion.querySelector(".name").textContent;

            discussion.classList.add("message-active");
            activeDiscussion = discussion;

            // Update the chat header name and show the chat section
            const chatHeaderName = document.querySelector(".chat .header-chat .name");
            chatHeaderName.textContent = name;
            const chatSection = document.querySelector(".chat");
            chatSection.style.display = "block";

            // Show the footer chat
            const footerChat = document.querySelector(".footer-chat");
            footerChat.style.display = "flex";

            // Fetch messages for the selected scholar
            fetchMessages(discussion.getAttribute('data-scholar-id'));
        });
    });
});



</script>
</body>
</html>