<?php
include '../include/dbConnection.php';
if (isset($_GET['id'])) {
    $scholarId = $_GET['id'];

    // Step 2: Construct and execute the SQL query to select the row with the specified ID
    $sql = "SELECT registration.*, registration_approval.*, examination.*
        FROM registration
        JOIN registration_approval ON registration.applicant_id = registration_approval.application_id
        JOIN examination ON examination.action_id = registration_approval.action_id
        WHERE examination.examination_id = '$scholarId'";
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

        } else {
            echo "No row found with the specified ID.";
        }
    } else {
        echo "Error executing the query: " . mysqli_error($conn);
    }
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style/addStaff.css">
    <link rel="stylesheet" href="../../style/applicantForm.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Applicant Form</title>

</head>

<body>

    <section id="content" class="home-section">
        <h1></h1>
        <div class="container">

            <div class="portlet light">
                <!-- Nav tabs -->
                <div class="portlet-title tabbable-line">
                    <div class="caption caption-md">
                        <label class="d-block fs-5 fw-bold mb-2">Name : <?php echo $fullName ?></label>
                        <span class="caption-name font-color bold text-uppercase">Applicant Requirements</span>
                    </div>

                    <p id="response"></p>

                    <ul class="portletNavi nav nav-tabs justify-content-end" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="applicant" data-bs-toggle="tab" data-bs-target="#applicant" type="button" role="tab" aria-controls="ap-1" aria-selected="true">Applicant Form</button>
                        </li>
                    </ul>
                </div>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="applicant">
                        <form id="applicantForm" class="renewal-form" role="form" autocomplete="off" enctype="multipart/form-data">
                            <div class="portletForm light bg-inverse">
                                <div class="portlet-body form">
                                    <div class="row">
                                        <h3 class="header-title"></h3>
                                        </h3>
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="2x2-pic" id="2x2-pic" value="">
                                                <label class="control-label bold font-xs">2x2 Picture <strong class="text-danger ms-1">*</strong></label>
                                                <input type="file" class="form-control" name="f2x2-pic" id="f2x2-pic" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="birth" id="birth" value="">
                                                <label class="control-label bold font-xs">Birth Certificate <strong class="text-danger ms-1">*</strong></label>
                                                <input type="file" class="form-control" name="birth" id="birth" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="bir" id="bir">
                                                <label class="control-label bold font-xs">BIR <strong class="text-danger ms-1">*</strong></label>
                                                <input type="file" class="form-control" name="bir" id="bir" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="cedula" id="cedula" value="">
                                                <label class="control-label bold font-xs">Cedula <strong class="text-danger ms-1">*</strong></label>
                                                <input type="file" class="form-control" name="cedula" id="cedula" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="health-cert" id="health-cert" value="">
                                                <label class="control-label bold font-xs">Health Certificate <strong class="text-danger ms-1">*</strong></label>
                                                <input type="file" class="form-control" name="health-cert" id="health-cert" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                                <label class="control-label bold font-xs">Curriculum <strong class="text-danger ms-1">*</strong></label>
                                                <input type="file" class="form-control" name="curriculum" id="curriculum" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="cert-of-residency" id="cert-of-residency" value="">
                                                <label class="control-label bold font-xs">Certificate of Residency <strong class="text-danger ms-1">*</strong></label>
                                                <input type="file" class="form-control" name="cert-of-residency" id="cert-of-residency" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="house-map" id="house-map" value="">
                                                <label class="control-label bold font-xs">House Map from Barangay <strong class="text-danger ms-1">*</strong></label>
                                                <input type="file" class="form-control" name="house-map" id="house-map" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="house-photo" id="house-photo" value="">
                                                <label class="control-label bold font-xs">House Photo <strong class="text-danger ms-1">*</strong></label>
                                                <input type="file" class="form-control" name="house-photo" id="house-photo" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <div class="row">
                                        <h3 class="header-title"></h3>
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="good-moral" id="good-moral" value="">
                                                <label class="control-label bold font-xs">Good Moral <strong class="text-danger ms-1">*</strong></label>
                                                <input type="file" class="form-control" name="good-moral" id="good-moral" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="prev-cor" id="prev-cor" value="">
                                                <label class="control-label bold font-xs">Previous COR <strong class="text-danger ms-1">*</strong></label>
                                                <input type="file" class="form-control" name="prev-cor" id="prev-cor" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="prev-cog" id="prev-cog" value="">
                                                <label class="control-label bold font-xs">Previous COG <strong class="text-danger ms-1">*</strong></label>
                                                <input type="file" class="form-control" name="prev-cog" id="prev-cog" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="latest-coe" id="latest-coe" value="">
                                                <label class="control-label bold font-xs">Latest COE <strong class="text-danger ms-1">*</strong></label>
                                                <input type="file" class="form-control" name="latest-coe" id="latest-coe" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="comelec-stub" id="comelec-stub" value="">
                                                <label class="control-label bold font-xs">Comelec Stub <strong class="text-danger ms-1">*</strong></label>
                                                <input type="file" class="form-control" name="comelec-stub" id="comelec-stub" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="landbank" id="landbank" value="">
                                                <label class="control-label bold font-xs">Landbank Form <strong class="text-danger ms-1">*</strong></label>
                                                <input type="file" class="form-control" name="landbank" id="landbank" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="id-photocopy" id="id-photocopy" value="">
                                                <label class="control-label bold font-xs">ID Photocopy <strong class="text-danger ms-1">*</strong></label>
                                                <input type="file" class="form-control" name="id-photocopy" id="id-photocopy" required>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="letter-of-intent" id="letter-of-intent" value="">
                                                <label class="control-label bold font-xs">Letter of Intent <strong class="text-danger ms-1">*</strong></label>
                                                <input type="file" class="form-control" name="letter-of-intent" id="letter-of-intent" required>
                                            </div>
                                            <button style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $examination_id ?>','applicantForm')">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--script for image update-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function sendAction(scholar_id, action) {
            // Create an AJAX request
            event.preventDefault();
            var formData = new FormData(document.getElementById(action));
            formData.append('scholar_id', scholar_id);
            formData.append('action', action);

            $.ajax({
                type: 'POST', // You can use 'GET' if preferred
                url: 'applicantFormDb.php', // Replace 'process_action.php' with the server-side script that will handle the approval/decline
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    // Handle the response from the server if needed

                    var actions = action;
                    var form = document.getElementById(actions);
                    console.log(response);
                    // Find the submit button within the form
                    var button = form.querySelector('button.btn-success');

                    if (button) {

                        button.disabled = true;
                    }
                    const buttonsToUpdatePersonalInfo = document.querySelectorAll('.btnUpdate-peronalInfo');

                    // Loop through the selected buttons and disable them
                    buttonsToUpdatePersonalInfo.forEach(button => {
                        button.disabled = true;
                    });


                },
                error: function(xhr, status, error) {
                    // Handle the error if the request fails
                    console.error('Error sending action:', error);
                }
            });
        }
    </script>




    <script>

    </script>

</body>

</html>