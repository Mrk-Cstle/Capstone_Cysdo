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
    </style>
</head>

<body>
    <?php
    include 'include/nav.php';
    include 'include/selectDb.php';
    ?>
    <section class="home-section">

        <form id="announcementForm" method="POST" action="postUpdateDb.php">
            <label for="postText">Post Announcements</label><br>
            <textarea id="postText" name="postText" rows="5" cols="50"></textarea><br>

            <div id="submitBtn">
                <button type="button" id="submitPostBtn">Submit</button>
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
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        

        $(document).ready(function() {
        // Submit button click event
        $('#submitPostBtn').click(function(e) {
            e.preventDefault();
            var form = $('#announcementForm');
            var postData = form.serialize();
            // Perform your Ajax request here to handle the submission
            $.ajax({
                type: 'POST',
                url: form.attr('action'),
                data: postData,
                success: function(response) {
                    // Handle the response from the server
                    console.log('Announcement posted successfully');
                    // Reload the updated announcement section
                    $('#manageStyle').load('postUpdate.php');
                },
                error: function(xhr, status, error) {
                    // Handle any errors
                    console.error('Error posting announcement:', error);
                }
            });
        });
    });

            // Edit button click event
            $('.edit-btn').click(function(e) {
                e.preventDefault();
                var postId = $(this).data('id');
                // Perform your Ajax request here to handle the edit functionality
                $.ajax({
                    type: 'POST',
                    url: 'postEditDB.php?id=' + postId,
                    success: function(response) {
                        // Handle the response from the server
                        console.log('Post edited successfully');
                        // Do something with the response if needed
                    },
                    error: function(xhr, status, error) {
                        // Handle any errors
                        console.error('Error editing post:', error);
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
                    url: 'postDelete.php?id=' + postId,
                    success: function(response) {
                        // Handle the response from the server
                        console.log('Post deleted successfully');
                        // Remove the deleted post from the DOM
                        $('.delete-btn[data-id="' + postId + '"]').closest('.postFormat').remove();
                    },
                    error: function(xhr, status, error) {
                        // Handle any errors
                        console.error('Error deleting post:', error);
                    }
                });
            });
        
    </script>
</body>



</html>