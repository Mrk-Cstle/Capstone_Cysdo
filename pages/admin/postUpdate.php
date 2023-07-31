<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="include/nav.css">
    <title>Manage Post</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0px;
            padding: 0px;
        }

        form {
            margin: 2px;
            padding: 10px;
            border: 1px solid black;
            display: flex;
            width: 90%;

            justify-content: end;
            flex-direction: column;
        }

        textarea {
            padding: 10px;
        }

        #submitBtn {
            margin-top: 10px;
            display: flex;
            flex-direction: row-reverse;
            justify-content: flex-start;
            gap: 20px;

        }

        button {
            width: 100px;
            height: 30px;
            border: 1px solid black;
            margin-bottom: 5px;
        }

        .postFormat {
            border: 1px solid black;
            margin-top: 20px;
            height: auto;
            width: 90%;
        }

        .postFormat section {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin: 10px 20px;
        }

        main {
            margin: 10px 20px;
        }

        .aBtn {
            border: 1px solid black;
            width: 20%;
            text-align: center;
            text-decoration: none;

        }

        footer {
            margin-top: 10px;
            display: flex;

            justify-content: end;
            gap: 20px;
            margin: 20px;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: white;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .alert {
            position: fixed;
            top: 10px;
            right: 10px;
            padding: 10px;
            background-color: #dff0d8;
            color: #3c763d;
            border: 1px solid #d6e9c6;
            border-radius: 4px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <?php

    include '../include/selectDb.php';
    ?>
    <?php
    include 'include/session.php';
    if ($_SESSION['role'] === 'admin') {
        include '../../assets/template/profileNav.php';
    } elseif ($_SESSION['role'] === 'staff') {
        include '../../assets/template/staffNav.php';
    }
    ?>
    <section class="home-section">


        <form method="POST" action="postUpdateDb.php">

            <label for="postText">Post Announcements</label><br>
            <textarea id="postText" name="postText" rows="5" cols="50"></textarea><br>

            <div id="submitBtn">
                <button type="submit">Submit</button>
                <button type="reset">Reset</button>
            </div>


        </form>


        <div id="manageStyle">
            <h1>Manage Post</h1>

            <?php
            if ($resultGetPost->num_rows > 0) {

                while ($row = $resultGetPost->fetch_assoc()) {
                    echo "<div class='postFormat'><section><h3>Uploader:" . $row['uploader'] . "</h3><h3>Upload Date:" . $row['uploadDate'] . "</h3></section><main><p>" . $row['announcement'] . "</p></main>" ?>
                    <footer>
                        <a class="aBtn edit-btn" href="#" data-id="<?php echo $row['uploadId']; ?>">Edit</a>
                        <a class="aBtn delete-btn" href="#" data-id="<?php echo $row['uploadId']; ?>">Delete</a>
                    </footer>
        </div> <?php
                }
            }
                ?>
</div>

<!-- Edit Post Modal -->
<div id="editModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <form id="editForm" method="POST" action="postEditDb.php">
            <input type="hidden" id="editPostId" name="postId" value="">
            <label for="editPostText">Edit Post Announcements</label><br>
            <textarea id="editPostText" name="postText" rows="5" cols="50"></textarea><br>
            <div id="editSubmitBtn">
                <button type="button" id="editSaveBtn">Save</button>
                <button type="button" class="close-modal">Cancel</button>
            </div>
        </form>
    </div>
</div>

    </section>

    <script>
        // Submit button click event
        $('#submitBtn button[type="submit"]').click(function(e) {
            e.preventDefault();
            var postText = $('#postText').val();
            // Perform your Ajax request here to handle the submit functionality
            $.ajax({
                type: 'POST',
                url: 'action/postUpdateDb.php',
                data: {
                    postText: postText
                },
                dataType: 'json',
                success: function(response) {
                    // Handle the response from the server
                    console.log('Post submitted successfully');
                    // Add the new post to the DOM dynamically
                    var postFormat = '<div class="postFormat"><section><h3>Uploader: ' + response.uploader + '</h3><h3>Upload Date: ' + response.uploadDate + '</h3></section><main><p>' + response.announcement + '</p></main><footer><a class="aBtn edit-btn" href="#" data-id="' + response.uploadId + '">Edit</a><a class="aBtn delete-btn" href="#" data-id="' + response.uploadId + '">Delete</a></footer></div>';
                    $('#manageStyle').append(postFormat);
                    // Reset the form
                    $('#postText').val('');

                    // Show success message
                    showMessage('Successfully Submitted');
                },
                error: function(xhr, status, error) {
                    // Handle any errors
                    console.error('Error submitting post:', error);
                }
            });
        });

        // Delete button click event
        $('.delete-btn').click(function(e) {
            e.preventDefault();
            var postId = $(this).data('id');
            // Perform your Ajax request here to handle the delete functionality
            $.ajax({
                type: 'POST',
                url: 'action/postDelete.php?id=' + postId,
                success: function(response) {
                    // Handle the response from the server
                    console.log('Post deleted successfully');
                    // Remove the deleted post from the DOM
                    $('.delete-btn[data-id="' + postId + '"]').closest('.postFormat').remove();

                    // Show success message
                    showMessage('Successfully Deleted');
                },
                error: function(xhr, status, error) {
                    // Handle any errors
                    console.error('Error deleting post:', error);
                }
            });
        });

        $('.edit-btn').click(function(e) {
            e.preventDefault();
            var postId = $(this).data('id');
            var postText = $(this).closest('.postFormat').find('main p').text();
            $('#editPostId').val(postId);
            $('#editPostText').val(postText);
            $('#editModal').css('display', 'block');
        });

        // Edit form submission
        $('#editSaveBtn').click(function(e) {
            e.preventDefault();
            var postId = $('#editPostId').val();
            var newPostText = $('#editPostText').val();
            // Perform your Ajax request here to handle the edit functionality
            $.ajax({
                type: 'POST',
                url: 'action/postEditDb.php?id=' + postId,
                data: {
                    postId: postId,
                    postText: newPostText
                },
                success: function(response) {
                    // Handle the response from the server
                    console.log('Post updated successfully');
                    // Close the edit modal
                    $('#editModal').css('display', 'none');
                    // Update the post content in the DOM
                    $('.edit-btn[data-id="' + postId + '"]').closest('.postFormat').find('main p').text(newPostText);

                    // Show success message
                    showMessage('Successfully Edited');
                },
                error: function(xhr, status, error) {
                    // Handle any errors
                    console.error('Error updating post:', error);
                }
            });
        });

        // Show alert message
        function showMessage(message) {
            var alertDiv = $('<div>').text(message);
            alertDiv.addClass('alert');
            $('body').append(alertDiv);
            setTimeout(function() {
                alertDiv.remove();
            }, 2000);
        }
    </script>
</body>

</html>