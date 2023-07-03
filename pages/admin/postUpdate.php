<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="include/nav.css">
    <link rel="stylesheet" href="../../style/managePost.css">
    <title>Manage Post</title>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <?php
    include '../include/selectDb.php';
    include 'include/session.php';
    if ($_SESSION['role'] === 'admin') {
        include '../../assets/template/nav.php';
    } elseif ($_SESSION['role'] === 'staff') {
        include '../../assets/template/staffNav.php';
    }
    ?>
    <section class="home-section">
        <form id="postForm" method="POST" action="postUpdateDb.php">
            <label for="postText" class="bold">Post Announcements</label><br>
            <textarea id="postText" name="postText" rows="5" cols="50"></textarea><br>

            <div class="col-md-5">
            <label for="category" class="bold dropDown">Category:&nbsp;</label>
            <select id="category" name="category">
                <option value="applicant">Applicant</option>
                <option value="scholar">Scholar</option>
            </select>
            </div>
            <div id="submitBtn">
                <button class="btn btn-outline-success" type="submit">Submit</button>
                <button class="btn btn-outline-dark" type="reset">Reset</button>
            </div>
        </form>

        <div class="portlet-title tabbable-line mt-3">
                <div class="caption caption-md">
                    <span class="caption-name font-color bold text-uppercase">Manage Post</span>
                </div>
            <ul class="portletNav nav nav-tabs mt-1" id="categoryButtons" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="category-btn" data-bs-toggle="tab" data-bs-target="#scholar" type="button" role="tab" aria-controls="scholarTab" aria-selected="true">Scholar</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="category-btn-2" data-bs-toggle="tab" data-bs-target="#applicant" type="button" role="tab" aria-controls="ApplicantTab" aria-selected="false">Applicant</button>
                    </li>
                    
            </ul>
        </div>
    <div class="container">
        <div class="tab-content">
            <div class="tab-pane active" id="scholar">
                    <div id="manageStyle">

        <!-- Display scholar announcements here -->
                    <?php
                    if ($resultGetPost->num_rows > 0) {
                        while ($row = $resultGetPost->fetch_assoc()) {
                    if ($row['category'] === 'scholar') {
                        echo "<div class='postFormat scholar'><section><h3 class='d-block me-3'>Uploader: " . $row['uploader'] . "</h3><h3 class='d-block me-3'>Upload Date: " . $row['uploadDate'] . "</h3><h3 class='d-block'>Category: " . $row['category'] . "</h3></section><main><p>" . $row['announcement'] . "</p></main><footer><a class='edit-btn btn btn-primary mt-3' href='#' data-id='" . $row['uploadId'] . "'>Edit</a><a class='delete-btn btn btn-danger mt-3' href='#' data-id='" . $row['uploadId'] . "'>Delete</a></footer></div>";
                        }
                    }
                    } else {
                        echo "No scholar announcements found.";
                    }
                    ?>
    
                    </div>
            </div>
            <div class="tab-pane" id="applicant">
                <div id="manageStyle">
    
        <!-- Display applicant announcements here -->
                        <?php
        // Reset the internal pointer of the result set
                            mysqli_data_seek($resultGetPost, 0);

                        if ($resultGetPost->num_rows > 0) {
                            while ($row = $resultGetPost->fetch_assoc()) {
                        if ($row['category'] === 'applicant') {
                            echo "<div class='postFormat applicant'><section class='formatAppli'><h3 class='d-block me-3'>Uploader: " . $row['uploader'] . "</h3><h3 class='d-block me-3'>Upload Date: " . $row['uploadDate'] . "</h3><h3 class='d-block me-3'>Category: " . $row['category'] . "</h3></section><main><p>" . $row['announcement'] . "</p></main><footer><a class='edit-btn btn btn-primary mt-3' href='#' data-id='" . $row['uploadId'] . "'>Edit</a><a class='delete-btn btn btn-danger mt-3' href='#' data-id='" . $row['uploadId'] . "'>Delete</a></footer></div>";
                            }
                        }
                        } else {
                            echo "No applicant announcements found.";
                        }
                        ?>
   
                </div>
            </div>
        </div>
    </div>


        <!-- Edit Post Modal -->
        <div id="editModal" class="modal">
            <div class="modal-content">
                <a class="close">&times;</a>
                <form id="editForm" method="POST" action="postEditDb.php">
                    <input type="hidden" id="editPostId" name="postId" value="">
                    <label for="editPostText">Edit Post Announcements</label><br>
                    <textarea id="editPostText" name="postText" rows="5" cols="50"></textarea><br>
                    <div id="editSubmitBtn">
                        <button class="btn btn-outline-success m-lg-2" type="button" id="editSaveBtn">Save</button>
                        <button type="button" class="close-modal btn btn-outline-dark">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    
    
    
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>

        $(document).ready(function() {
        // Submit button click event
        $('#postForm').submit(function(e) {
    e.preventDefault();
    var postText = $('#postText').val();
    var category = $('#category').val();

    // Perform your Ajax request here to handle the submit functionality
    $.ajax({
        type: 'POST',
        url: 'action/postUpdateDb.php',
        data: {
            postText: postText,
            category: category
        },
        dataType: 'json',
        success: function(response) {
            // Handle the response from the server
            console.log('Post submitted successfully');

            // Add the new category button dynamically
            if (!$('.category-btn[data-category="' + category + '"]').length) {
                var newCategoryButton = $('<button>')
                    .addClass('category-btn')
                    .attr('data-category', category)
                    .text(category.charAt(0).toUpperCase() + category.slice(1) + ' Announcements');
            }

            // Add the new post to the DOM dynamically
            var postFormat = '<div class="postFormat ' + category + '"><section><h3 class="d-block me-3">Uploader: ' + response.uploader + '</h3><h3 class="d-block me-3">Upload Date: ' + response.uploadDate + '</h3><h3 class="d-block me-3">Category: ' + response.category + '</h3></section><main><p>' + response.announcement + '</p></main><footer><a class="edit-btn btn btn-primary mt-3" href="#" data-id="' + response.uploadId + '">Edit</a><a class="delete-btn btn btn-danger mt-3" href="#" data-id="' + response.uploadId + '">Delete</a></footer></div>';
            $('#manageStyle').append(postFormat);

            // Reset the form
            $('#postText').val('');
            $('#category').val('');

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
            $(document).on('click', '.delete-btn', function(e) {
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

            $(document).on('click', '.edit-btn', function(e) {
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

            // Close modal on close button click
            $('.close').click(function() {
                $('#editModal').css('display', 'none');
            });

            // Close modal on cancel button click
            $('.close-modal').click(function() {
                $('#editModal').css('display', 'none');
            });

            // Close modal when clicking outside the modal content
            $(window).click(function(e) {
                if (e.target == $('#editModal')[0]) {
                    $('#editModal').css('display', 'none');
                }
            });

            // Show alert message
            function showMessage(message) {
                var alertDiv = $('<div>').text(message);
                alertDiv.addClass('alert');
                $('body').append(alertDiv);
                setTimeout(function() {
                    alertDiv.fadeOut('slow', function() {
                        alertDiv.remove();
                    });
                }, 3000);
            }
        });

          // Show or hide announcements based on category button click
          $('.category-btn').click(function() {
                var selectedCategory = $(this).data('category');
                $('.postFormat').each(function() {
                    if ($(this).hasClass(selectedCategory)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });

            $(document).ready(function () {
        // Show the default tab on page load
        $('.tab').first().addClass('active');

        // Handle tab button click
        $('.category-btn').click(function () {
            var category = $(this).data('category');

            // Remove active class from all tabs and buttons
            $('.category-btn').removeClass('active');
            $('.tab').removeClass('active');

            // Add active class to the clicked button
            $(this).addClass('active');

            // Show the corresponding tab
            $('.tab.' + category).addClass('active');
        });
    });
    </script>
</body>

</html>
