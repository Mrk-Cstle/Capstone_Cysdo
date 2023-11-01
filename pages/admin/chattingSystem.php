<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Message</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
</head>

<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: "Poppins", sans-serif;
}

body {
  padding: 3%;
  background-color: #F5F5F5;
}

.container {
  padding: 0;
  background-color: #FFF; 
  box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
  height: 850px;
  width: 100%;
}

.textAlign {
    display: flex;
    font-size: 26px;
    margin-bottom: 5px;
 }

/* === CONVERSATIONS === */

.discussions {
  width: 25%;
  height: 850px;
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
  width: 80%;
  padding-left: 15px;
  border-radius: 50px;
  margin-right: 20px;
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
  width: 50%;
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
  width: 110%;
  height: 90px;
  box-shadow: 0px 2px 0px rgba(0,0,0,0.100);
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

.mouse {
  margin-right: 60px;
  margin-top: 5px;
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
  width: 74.5%;
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
  right: 100px;
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
  width: 60%;
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
    max-height: 1000px; /* Set a maximum height for chat messages */
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
/* Style for sent messages */
.chat .messages-chat .message.sent {
  justify-content: flex-end; /* Align sent messages to the right */
  text-align: right; /* Align text in sent messages to the right */
  margin-left: auto; /* Push sent messages to the right */
  color: #fff; /* White text for sent messages */
}

/* Style for received messages */
.chat .messages-chat .message.received {
  justify-content: flex-start; /* Align received messages to the left */
  text-align: left; /* Align text in received messages to the left */
  margin-right: auto; /* Push received messages to the left */
  color: #000; /* Black text for received messages */
}

</style>
<body>
<!-- partial:index.partial.html -->
<body>
  <div class="container">
    <div class="row">
      <section class="discussions">
        <div class="discussion search">
        <div class='textAlign'>
          <p style="text-transform: capitalize;" class='bold mt-3'><a href='adminHome.php' class='mouse bi bi-chevron-left text-black float-start ms-5'></a></p>
        </div>
          <div class="searchbar">
            <i class="fa fa-search" aria-hidden="true"></i>
            <input type="text" placeholder="Search..."></input>
          </div>
        </div>
        <div class="discussion">
          <div class="photo"  img src="/assets/image/1x1.jpg">
            <div class="online"></div>
          </div>
          <div class="desc-contact">
            <p class="name font-weight-bold">Mark David</p>
            <p class="message">9 pm at the bar if possible 😳</p>
          </div>
          
        </div>

        <div class="discussion">
          <div class="photo">
            <div class="online"></div>
          </div>
          <div class="desc-contact">
            <p class="name font-weight-bold">Rosemarie</p>
            <p class="message">Let's meet for a coffee or something today ?</p>
          </div>
          
        </div>

        <div class="discussion">
          <div class="photo" style="background-image: 1">
          </div>
          <div class="desc-contact">
            <p class="name font-weight-bold">Jeremiah</p>
            <p class="message">I've sent you the annual report</p>
          </div>
          
        </div>

        <div class="discussion">
          <div class="photo" style="background-image: 2">
            <div class="online"></div>
          </div>
          <div class="desc-contact">
            <p class="name font-weight-bold">John Martin</p>
            <p class="message">See you tomorrow ! 🙂</p>
          </div>
          
        </div>

        <div class="discussion">
          <div class="photo" style="background-image: 3">
          </div>
          <div class="desc-contact">
            <p class="name font-weight-bold">Andrei</p>
            <p class="message">What the f**k is going on ?</p>
          </div>
          
        </div>

        <div class="discussion">
          <div class="photo" style="background-image: 4">
          </div>
          <div class="desc-contact">
            <p class="name font-weight-bold">Ron Russel</p>
            <p class="message">Ahahah 😂</p>
          </div>
          
        </div>

        <div class="discussion">
          <div class="photo" style="background-image: 5">
            <div class="online"></div>
          </div>
          <div class="desc-contact">
            <p class="name font-weight-bold">Paul</p>
            <p class="message">You can't see me</p>
          </div>
          
        </div>

        <div class="discussion">
          <div class="photo" style="background-image: 5">
            <div class="online"></div>
          </div>
          <div class="desc-contact">
            <p class="name font-weight-bold">Bris</p>
            <p class="message">Loooooooooool</p>
          </div>
          
        </div>
      </section>
      <section class="chat" style="display: none;">
        <div class="header-chat">
          <i class="icon fa fa-user-o" aria-hidden="true"></i>
          <p class="name"></p>
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
    <!-- Add a class "sent" to sent messages and "received" to received messages -->
          <div class="message sent">
            <div class="photo" style="background-image: url(https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);">
              <div class="online"></div>
            </div>
              <p class="text">This is a sent message.</p>
          </div>
    <!-- Add a class "received" to received messages -->
          <div class="message received">
            <div class="photo" style="background-image: url(https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);">
              <div class="online"></div>
            </div>
              <p class="text">This is a received message.</p>
          </div>
       </div>
        <div class="footer-chat">
          <input type="text" class="write-message" id="messageInput" placeholder="Type your message here"></input>
          <input type="file" id="imageInput" accept="image/*" style="display: none;"></input>
          <i id="sendMessageButton" class="icon send1 fa fa-paper-plane-o clickable" aria-hidden="true"></i>
          
        </div>
      </section>
    </div>
  </div>
</body>
<!-- partial -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  <script>
  // Get a reference to the send message button
const sendMessageButton = document.getElementById("sendMessageButton");
const messageInput = document.getElementById("messageInput");

// Add a click event listener to the send message button
sendMessageButton.addEventListener("click", sendMessage);

// Add an event listener for Enter key press in the message input field
messageInput.addEventListener("keydown", function (event) {
  if (event.key === "Enter") {
    // Prevent the default Enter key behavior (e.g., line break)
    event.preventDefault();
    sendMessage();
  }
});

// Function to send a text message
function sendMessage() {
  // Get the value of the message input
  const messageText = messageInput.value;

  // Check if the message is not empty
  if (messageText.trim() !== "") {
    // Create a new text message element for sent messages
    const newTextMessage = createMessageElement(messageText, "sent");

    // Get the messages chat container
    const messagesChat = document.querySelector(".messages-chat");

    // Append the new text message to the chat container
    messagesChat.appendChild(newTextMessage);
    

    // Clear the message input field
    messageInput.value = "";

    // Simulate receiving a message (for testing purposes)
    setTimeout(function () {
      receiveMessage("This is a received message.");
    }, 1000); // Simulate receiving a message after 1 second (you can replace this with actual received messages)
  }
}

// Function to create a message element
function createMessageElement(messageText, messageType) {
  // Create a new message element
  const newMessage = document.createElement("div");
  newMessage.className = `message ${messageType}`;

  

  // Create a new message content element
  const messageContent = document.createElement("p");
  messageContent.className = "text";
  messageContent.textContent = messageText;

  if (messageType === "sent") {
    messageContent.style.backgroundColor = "#007bff";
  }

  if (messageType === "received") {
    messageContent.style.backgroundColor = "#f6f6f6";
  }

  // Create a photo element (you can customize the photo for sent and received messages)
  const photoElement = document.createElement("div");
  photoElement.className = "photo";
  photoElement.style.backgroundImage =
    'url(https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80)';

  // Create an online status element (you can customize the online status)
  const onlineStatusElement = document.createElement("div");
  onlineStatusElement.className = "online";

  // Append the photo and online status to the message element
  photoElement.appendChild(onlineStatusElement);
  newMessage.appendChild(photoElement);

  // Append the message content to the message element
  newMessage.appendChild(messageContent);

  return newMessage;
}

// Function to receive a text message
function receiveMessage(messageText) {
  // Create a new text message element for received messages
  const newReceivedMessage = createMessageElement(messageText, "received");

  // Get the messages chat container
  const messagesChat = document.querySelector(".messages-chat");
  
  // Append the new received message to the chat container
  messagesChat.appendChild(newReceivedMessage);
}
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Get all discussion elements
    const discussions = document.querySelectorAll(".discussion");
    const chatHeaderName = document.querySelector(".name");
    const messagesChat = document.querySelector(".messages-chat");
    let activeDiscussion = null;

    // Add click event listeners to each discussion element
    discussions.forEach((discussion) => {
      discussion.addEventListener("click", function () {
        // Remove the "message-active" class from the previously active discussion
        if (activeDiscussion) {
          activeDiscussion.classList.remove("message-active");
        }

        // Get the name and message from the clicked discussion
        const name = discussion.querySelector(".name").textContent;
        const message = discussion.querySelector(".message").textContent;

        // Clear the messages chat container
        messagesChat.innerHTML = "";

        // Create a new message element for the initial message
        const initialMessage = document.createElement("div");
        initialMessage.className = "message";
        initialMessage.innerHTML = `
          <div class="photo" style="background-image: ${discussion.querySelector(".photo").style.backgroundImage};">
            <div class="online"></div>
          </div>
          <p class="text">${message}</p>
        `;

        // Append the initial message to the messages chat container
        messagesChat.appendChild(initialMessage);

        // Add the "message-active" class to the clicked discussion
        discussion.classList.add("message-active");
        activeDiscussion = discussion;

        // Show the chat section
        const chatSection = document.querySelector(".chat");
        chatSection.style.display = "block";

        // Update the chat header name
        const names = discussion.querySelector(".name").textContent;
        const chatHeaderName = document.querySelector(".chat .header-chat .name");
        chatHeaderName.textContent = name;

        // Show the footer chat
        const footerChat = document.querySelector(".footer-chat");
        footerChat.style.display = "flex";
      });
    });

    // Select the first discussion by default
    if (discussions.length > 0) {
      discussions[0].click();
    } else {
      // If there are no discussions, hide the chat section and footer chat
      const chatSection = document.querySelector(".chat");
      chatSection.style.display = "none";
      const footerChat = document.querySelector(".footer-chat");
      footerChat.style.display = "none";
    }
  });
  
</script>

<script>
 
</script>

</body>
</html>
