<?php

// Your database connection code here...
include '../include/dbConnection.php';
include 'include/session.php';
// Get the applicant ID from the URL
if (isset($_GET['id'])) {
    $scholarId = $_GET['id'];
    $actions = $_GET['action'];
    $page = $_GET['page'];

    // Step 2: Construct and execute the SQL query to select the row with the specified ID


    $sql = "SELECT renewal_process.*, renewal.*, scholar.*
        FROM renewal
        JOIN scholar ON scholar.scholar_id = renewal.scholar_id
        JOIN renewal_process ON renewal_process.renewal_id = renewal.renewal_id
        WHERE renewal.renewal_id = '$scholarId'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Step 3: Check if the row exists
        if (mysqli_num_rows($result) > 0) {
            // Step 4: Fetch the row
            $row = mysqli_fetch_assoc($result);

            // Step 5: Access the values of the row
            extract($row);
            // ...

            // Process the retrieved row as needed
            // For example, you can display the values or perform any other operations

            // Free the result set
            mysqli_free_result($result);
        } else {
            echo "No row found with the specified ID.";
        }
    } else {
        echo "Error executing the query: " . mysqli_error($conn);
    }
}

// // Close the database connection and perform any other necessary cleanup...
// 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="../../style/addStaff.css">
    <link rel="stylesheet" href="../../style/scholarStatus.css">
    <link rel="stylesheet" href="../../style/lightbox.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Scholar Status</title>

</head>

<body>



    <section id="content" class="home-section">
        <div class="container">

            <div class="profileBar">
                <div class="portlet light profileBar-portlet">
                    <div class='textAlign'>
                        <p style="text-transform: capitalize;" class='bold d-block mt-3'><a href='renewalList.php' class='mouse bi bi-chevron-left text-black float-start ms-5'></a></p>
                        <h1></h1>
                    </div>
                    <div class="profile-pic ms-3">
                        <?php
                        $signaturePicPath = "../../uploads/scholar/" . $image;


                        // Check if the image file exists
                        if (!empty($image) && file_exists($signaturePicPath)) {
                            // Display the image with an id
                            echo '<img id="profilePicImage" src="' . $signaturePicPath . '" class="img-responsive" alt="image">';
                        } else {
                            // Display a default image or a placeholder image with an id
                            echo '<img id="profilePicImage" src="../../uploads/applicant/2x2/No_Image_Available.jpg" class="img-responsive" alt="Default Image">';
                        }
                        ?>
                    </div>
                    <div class="profile-usertab ms-3 me-3">

                        <div class="profile-user-name text-uppercase">
                            <h5>Name: <?php echo $full_name ?></h5>
                        </div>
                        <div class="profile-user-name text-uppercase">
                            <h5>Status: <?php if ($process_status == null) {
                                            echo ' For Review';
                                        } else {
                                            echo $process_status;
                                        }  ?></h5>
                        </div>
                        <div class="profile-user-name text-uppercase">
                            <h5>Semester: <?php echo $actions ?></h5>
                        </div>
                        <div class="profile-user-name text-uppercase">
                            <h5>Academic Year: <?php echo $academic_year ?></h5>
                        </div>

                        <hr class="mb-2 mt-5 opacity-0">
                    </div>
                    <div class="res-btn col-md-12">
                        <?php
                        if ($page == 'renew') {
                            if ($process_status == null) {
                                $semesterYear = $actions . '_' . $academic_year;
                        ?>

                                <button style="float: right;" class="btn btn-danger btn-md mb-3 ms-3 me-2" onclick="sendAction('<?php echo $process_id; ?>', 'decline','<?php echo $semesterYear ?>')">Declined</button>
                                <button style="float: right;" class="btn btn-success btn-md mb-3 ms-3" onclick="sendAction('<?php echo $process_id; ?>', 'approve','<?php echo $semesterYear ?>')">Approve</button>

                            <?php } else { ?>
                                <button disabled style="float: right;" class="btn btn-danger btn-md mb-3 ms-3 me-2" onclick="sendAction('<?php echo $process_id; ?>', 'decline','<?php echo $semesterYear ?>')">Declined</button>
                                <button disabled style="float: right;" class="btn btn-success btn-md mb-3 ms-3" onclick="sendAction('<?php echo $process_id; ?>', 'approve','<?php echo $semesterYear ?>')">Approve</button>
                        <?php }
                        } elseif ($page == 'award') {
                        }

                        ?></h5>

                    </div>
                </div>
            </div>
            <div class=" portlet light">
                <!-- Nav tabs -->
                <div class="portlet-title tabbable-line">
                    <div class="caption caption-md">
                        <span class="caption-name font-color bold text-uppercase">Renewal</span>

                    </div>

                    <p id="response"></p>

                </div>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="year-1st">
                        <form id="renewalForm" class="renewal-form" role="form" autocomplete="off">
                            <div class="portletForm light bg-inverse">
                                <div class="portlet-body form">
                                    <div class="row">
                                        <h3 class="header-title"></h3>
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                                <label class="control-label bold font-xs">Previous Registration Form (COR)</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $previous_cor ?>" data-lightbox="Renewal" data-title="Previous Registration Form (COR)"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog" value="">
                                                <label class="control-label bold font-xs mt-3">Certificate of Grades</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $cog ?>" data-lightbox="Renewal" data-title="Certificate of Grades"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                                <label class="control-label bold font-xs mt-3">Current Registration Form (COR)</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $current_cor ?>" data-lightbox="Renewal" data-title="Current Registration Form (COR)"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                                <label class="control-label bold font-xs mt-3">Curriculum</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $curriculum ?>" data-lightbox="Renewal" data-title="Curriculum"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <!-- <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="v-stub" id="v-stub" value="">
                                                <label class="control-label bold font-xs mt-3">Voter's Stub/Certification</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php  ?>" data-lightbox="Renewal" data-title="Voter's Stub/Certification"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                        </div>
                                    </div> -->
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                                <label class="control-label bold font-xs mt-3">Fully Accomplished Community Service DTR Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $dtr ?>" data-lightbox="Renewal" data-title="Fully Accomplished Community Service DTR Form"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="ATM" id="ATM" value="">
                                                <label class="control-label bold font-xs mt-3">ATM Photocopy</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $atm ?>" data-lightbox="Renewal" data-title="ATM Photocopy"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="E3-form" id="E3-form" value="">
                                                <label class="control-label bold font-xs mt-3">Renewal E3 Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $e3_form ?>" data-lightbox="Renewal" data-title="Renewal E3 Form"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="././script/lightbox-plus-jquery.js"></script>
    <!--script for image update-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#imageUpdateForm").submit(function(event) {
                event.preventDefault(); // Prevent the default form submission

                var formData = new FormData(this); // Create a FormData object to handle file upload

                $.ajax({
                    url: "action/updateProfile.php", // Replace with your server-side script to handle the request
                    type: "POST",
                    data: formData,
                    contentType: false, // Set content type to false for FormData
                    processData: false, // Prevent automatic data processing for FormData
                    success: function(response) {
                        // Handle the success response here
                        $('#response').text(response);
                        var image = '<?php echo $image ?>';
                        var timestamp = new Date().getTime();
                        var imagePath = '../../uploads/admin/' + image + '?timestamp=' + timestamp;

                        // Update the src attribute of the image with the new image path
                        $('#profilePicImage').attr('src', imagePath);
                        $('#profileImage').attr('src', imagePath);


                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // Handle any errors here
                        $('#response').text(response);
                        console.error("Error: " + textStatus, errorThrown);
                    }
                });
            });
        });
        $(document).ready(function() {
            $("#profileForm").submit(function(event) {
                event.preventDefault(); // Prevent the default form submission

                var formData = new FormData(this); // Create a FormData object to handle file upload

                $.ajax({
                    url: "action/updateProfilePersonalInfo.php", // Replace with your server-side script to handle the request
                    type: "POST",
                    data: formData,
                    contentType: false, // Set content type to false for FormData
                    processData: false, // Prevent automatic data processing for FormData
                    success: function(response) {
                        // Handle the success response here
                        $('#response').text(response);





                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // Handle any errors here
                        $('#response').text(response);
                        console.error("Error: " + textStatus, errorThrown);
                    }
                });
            });
        });
        $(document).ready(function() {
            $("#updateAccount").submit(function(event) {
                event.preventDefault(); // Prevent the default form submission

                var formData = new FormData(this); // Create a FormData object to handle file upload

                $.ajax({
                    url: "action/updateProfileAccount.php", // Replace with your server-side script to handle the request
                    type: "POST",
                    data: formData,
                    contentType: false, // Set content type to false for FormData
                    processData: false, // Prevent automatic data processing for FormData
                    success: function(response) {
                        // Handle the success response here
                        $('#response').text(response);






                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // Handle any errors here
                        $('#response').text(response);
                        console.error("Error: " + textStatus, errorThrown);
                    }
                });
            });
        });
    </script>


    <!-- di ma click nav pag nakalagay script src jquery -->

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

    <!-- Include Bootstrap Datepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <!-- Initialize the Datepicker -->
    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
                format: 'yyyy/mm/dd',
                autoclose: true
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
        const triggerTabList = document.querySelectorAll('#myTab button')
        triggerTabList.forEach(triggerEl => {
            const tabTrigger = new bootstrap.Tab(triggerEl)

            triggerEl.addEventListener('click', event => {
                event.preventDefault()
                tabTrigger.show()
            })
        })

        const triggerFirstTabEl = document.querySelector('#myTab li:first-child button')
        bootstrap.Tab.getInstance(triggerFirstTabEl).show() // Select first tab

        $(document).on('click', '#acceptBtn', function() {

            // var data = {
            //      applicantId = <?php echo $applicant_id ?>,

            //     };
            console.log($applicantId);
        });
    </script>
    <script>
        function sendAction(applicantId, action, semesterYear) {
            // Create an AJAX request
            $.ajax({
                type: 'POST', // You can use 'GET' if preferred
                url: 'action/renewalViewDb.php', // Replace 'process_action.php' with the server-side script that will handle the approval/decline
                data: {
                    id: applicantId,
                    action: action,
                    semesterYear: semesterYear
                },
                success: function(response) {
                    // Handle the response from the server if needed
                    $('h1').text(response);
                    console.log(semesterYear);
                    // For example, you can display a success message or update the UI
                    if (action === 'approve') {
                        alert('Applicant approved successfully!');
                        $('#approveBtn').hide();
                        $('#declineBtn').hide();
                    } else if (action === 'decline') {
                        alert('Applicant declined successfully!');
                        $('#approveBtn').hide();
                        $('#declineBtn').hide();
                    }
                },
                error: function(xhr, status, error) {
                    // Handle the error if the request fails
                    console.error('Error sending action:', error);
                }
            });
        }
    </script>

</body>

</html>