<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style/managePost.css">
    <title>Manage Post</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<style>
    form {
    margin: 10px;
    padding: 10px;
    border: 1px solid black;
    display: flex;
    width: 90%;
    justify-content: flex-end;
    flex-direction: column;
    background: #fff;
    border-radius: 6px;
    box-shadow: 0px 2px 8px 0px rgba(0, 0, 0, 0.2);
    }
    
</style>
<body>
    <?php
    include '../include/selectDb.php';
    include 'include/session.php';
    if ($_SESSION['role'] === 'admin') {
        include '../../assets/template/profileNav.php';
    } elseif ($_SESSION['role'] === 'staff') {
        include '../../assets/template/staffNavi.php';
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
        <!-- For Scholar Announcements -->
        <div id="scholarAnnouncementsContainer">
    <!-- Display scholar announcements here -->
    <?php
    $scholarAnnouncements = mysqli_query($conn, "SELECT * FROM announcements WHERE category = 'scholar'");
    $postCounter = 0; // Initialize a post counter for scholar announcements

    if (mysqli_num_rows($scholarAnnouncements) > 0) {
        while ($row = mysqli_fetch_assoc($scholarAnnouncements)) {
            $postCounter++;

            if ($postCounter <= 5) {
                echo '<div class="postFormat scholar">';
            } else {
                echo '<div class="postFormat scholar" style="display: none;">';
            }

            echo "<section>";
            echo "<h3>Uploader: " . $row['uploader'] . "</h3>";
            echo "<h3>Upload Date: " . $row['uploadDate'] . "</h3>";
            echo "<h3>Category: " . $row['category'] . "</h3>";
            echo "</section>";
            echo "<main><p>" . nl2br($row['announcement']) . "</p></main>";
            echo "<footer>";
            echo "<a class='aBtn edit-btn btn btn-primary' href='#' data-id='" . $row['uploadId'] . "'>Edit</a>";
            echo "<a class='aBtn delete-btn btn btn-danger' href='#' data-id='" . $row['uploadId'] . "'>Delete</a>";
            echo "</footer></div>";
        }

        // Show the "See more" button after displaying the first 5 announcements
        if ($postCounter > 5) {
            echo '<div class="see-more-container"><button class="see-more-btn btn btn-primary">See more</button></div>';
        }
    } else {
        echo "No scholar announcements found.";
    }
    ?>
</div>


        </div>
        <div class="tab-pane" id="applicant">
<!-- For Applicant Announcements -->
<div id="applicantAnnouncementsContainer">
    <!-- Display applicant announcements here -->
    <?php
    $applicantAnnouncements = mysqli_query($conn, "SELECT * FROM announcements WHERE category = 'applicant'");
    $postCounter = 0; // Initialize a post counter for applicant announcements

    if (mysqli_num_rows($applicantAnnouncements) > 0) {
        while ($row = mysqli_fetch_assoc($applicantAnnouncements)) {
            $postCounter++;

            if ($postCounter <= 5) {
                echo '<div class="postFormat applicant">';
            } else {
                echo '<div class="postFormat applicant" style="display: none;">';
            }

            echo "<section>";
            echo "<h3>Uploader: " . $row['uploader'] . "</h3>";
            echo "<h3>Upload Date: " . $row['uploadDate'] . "</h3>";
            echo "<h3>Category: " . $row['category'] . "</h3>";
            echo "</section>";
            echo "<main><p>" . nl2br($row['announcement']) . "</p></main>";
            echo "<footer>";
            echo "<a class='aBtn edit-btn btn btn-primary' href='#' data-id='" . $row['uploadId'] . "'>Edit</a>";
            echo "<a class='aBtn delete-btn btn btn-danger' href='#' data-id='" . $row['uploadId'] . "'>Delete</a>";
            echo "</footer></div>";
        }

        // Show the "See more" button after displaying the first 5 announcements
        if ($postCounter > 5) {
            echo '<div class="applicant-see-more-container"><button class="applicant-see-more-btn btn btn-primary">See more</button></div>';
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

                    // Add the new post to the DOM dynamically
                                        var postFormat = '<div class="postFormat ' + category + '"><section><h3>Uploader: ' + response.uploader + '</h3><h3>Upload Date: ' + response.uploadDate + '</h3><h3>Category: ' + response.category + '</h3></section><main><p>' + response.announcement + '</p></main><footer><a class="aBtn edit-btn btn btn-primary" href="#" data-id="' + response.uploadId + '">Edit</a><a class="aBtn delete-btn btn btn-danger" href="#" data-id="' + response.uploadId + '">Delete</a></footer></div>';
                    $('#' + category + 'AnnouncementsContainer').prepend(postFormat);

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

        var isEditModalDirty = false; // Flag to track if the edit modal is dirty (i.e., changes have been made)

    // ...

    // Edit button click event
    $(document).on('click', '.edit-btn', function(e) {
        e.preventDefault();
        var postId = $(this).data('id');
        var postText = $(this).closest('.postFormat').find('main p').text();
        $('#editPostId').val(postId);
        $('#editPostText').val(postText);
        $('#editModal').css('display', 'block');
        isEditModalDirty = false; // Reset the dirty flag when opening the edit modal
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

    $(document).ready(function() {
    var displayedAnnouncements = 5; // Initial number of displayed announcements
    var totalAnnouncements = <?php echo mysqli_num_rows($scholarAnnouncements); ?>; // Total number of announcements

    // Handle "See more" button click
    $('.see-more-btn').click(function() {
        var hiddenAnnouncements = $('.postFormat.scholar:hidden');
        var nextAnnouncements = hiddenAnnouncements.slice(0, 5);

        nextAnnouncements.slideDown();
        displayedAnnouncements += nextAnnouncements.length;

        // Hide the "See more" button when all announcements are displayed
        if (displayedAnnouncements >= totalAnnouncements) {
            $('.see-more-container').hide();
        }
    });
});


$(document).ready(function() {
    var displayedApplicantAnnouncements = 5; // Initial number of displayed applicant announcements
    var totalApplicantAnnouncements = <?php echo mysqli_num_rows($applicantAnnouncements); ?>; // Total number of applicant announcements

    // Handle "See more" button click for applicant announcements
    $('.applicant-see-more-btn').click(function() {
        var hiddenAnnouncements = $('.postFormat.applicant:hidden');
        var nextAnnouncements = hiddenAnnouncements.slice(0, 5);

        nextAnnouncements.slideDown();
        displayedApplicantAnnouncements += nextAnnouncements.length;

        // Hide the "See more" button for applicant announcements when all announcements are displayed
        if (displayedApplicantAnnouncements >= totalApplicantAnnouncements) {
            $('.applicant-see-more-container').hide();
        }
    });
});




    // Close modal on close button click
    $('.close-modal').click(function() {
        if (isEditModalDirty) {
            // Prompt the editor to save or discard changes before closing the modal
            var confirmDiscard = confirm('You have unsaved changes. Do you want to discard them?');
            if (confirmDiscard) {
                $('#editModal').css('display', 'none');
            }
        } else {
            $('#editModal').css('display', 'none');
        }
    });

    // Close modal when clicking outside the modal content
    $(window).click(function(e) {
        if (e.target == $('#editModal')[0]) {
            if (isEditModalDirty) {
                // Prompt the editor to save or discard changes before closing the modal
                var confirmDiscard = confirm('You have unsaved changes. Do you want to discard them?');
                if (confirmDiscard) {
                    $('#editModal').css('display', 'none');
                }
            } else {
                $('#editModal').css('display', 'none');
            }
        }
    });

    // Edit form input change event
    $('#editForm :input').change(function() {
        isEditModalDirty = true; // Set the dirty flag when changes are made in the edit modal
    });

    // ...

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

    $(document).ready(function() {
        // Show the default tab on page load
        $('.tab').first().addClass('active');

        // Handle tab button click
        $('.category-btn').click(function() {
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
