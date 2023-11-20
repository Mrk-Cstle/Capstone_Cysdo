<?php
include '../include/dbConnection.php';
if (isset($_GET['id'])) {
    $scholarId = $_GET['id'];

    // Step 2: Construct and execute the SQL query to select the row with the specified ID
    $sql = "SELECT registration.*, registration_approval.*, examination.*, registration_requirements.*
        FROM registration
        JOIN registration_approval ON registration.applicant_id = registration_approval.application_id
        JOIN examination ON examination.action_id = registration_approval.action_id
        JOIN registration_requirements ON registration_requirements.examination_id = examination.examination_id
        WHERE registration_requirements.examination_id = '$scholarId'";

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
    <link rel="stylesheet" href="../../style/lightbox.css">
    <link rel="stylesheet" href="../../node_modules/ldloader/index.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Applicant Form</title>

</head>
<style>
    .header-title {
        margin-left: 120px;
    }

    .input-box {
        margin-left: 35%;
    }

    .portlet-body {
        display: flex;
        flex-wrap: wrap;
        margin-left: 50px;
    }

    .portletForm.light .portlet-body {
        padding-top: 8px;
        display: flex;
        flex-direction: column;
        margin-left: 200px;
    }

    .aName {
        display: block;
        font-weight: 500;
        font-size: 22px;
    }

    @media screen and (max-width: 769px) {
        .portlet-body {
            display: flex;
            flex-wrap: nowrap;
            margin-left: 0px;
        }

        .portletForm.light .portlet-body {
            display: flex;
            flex-direction: column;
        }

        .portletForm {
            display: block;
        }

        .input-box {
            margin-left: 0px;
        }

        .portletForm.light .portlet-body {
            padding-top: 8px;
            display: flex;
            flex-direction: column;
            margin-left: 60px;
        }

    }
</style>

<body>

    <section id="content" class="home-section">
        <h1></h1>
        <div class="container">
            <div class="ldld full z-3"></div>
            <div class="portlet light">
                <!-- Nav tabs -->
                <div class="portlet-title tabbable-line">
                    <div class="caption caption-md">
                        <span class="caption-name font-color bold text-uppercase">Applicant Requirements</span>
                        <label class="aName d-block mb-3 mt-3">Name : <?php echo $fullName ?></label>
                        <label class="aName d-block mb-3 mt-3">Status : <?php echo $req_status ?></label>
                    </div>

                    <p id="response"></p>
                    <?php
                    if ($req_status == 'Uploaded') { ?>
                        <a class="resetPassword btn btn-sm btn-success me-3 mt-3" onclick="sendAction('<?php echo $examination_id ?>', 'approve')">Approve to Scholar</a>
                        <a class="resetPassword btn btn-sm btn-danger mt-3" onclick="sendAction('<?php echo $examination_id ?>', 'denied')">Failed Requirements</a>
                    <?php } else { ?>

                    <?php }
                    ?>

                    <ul class="portletNavi nav nav-tabs justify-content-end" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="applicant" data-bs-toggle="tab" data-bs-target="#applicant" type="button" role="tab" aria-controls="ap-1" aria-selected="true">Applicant Form</button>
                        </li>
                    </ul>
                </div>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="applicant">
                        <form id="applicantForm" class="applicant-form" role="form" autocomplete="off" enctype="multipart/form-data">
                            <div class="portletForm light bg-inverse">
                                <div class="portlet-body form">
                                    <div class="row">
                                        <h3 class="header-title"></h3>
                                        </h3>
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="a-2x2" id="a-2x2" value="">
                                                <label class="control-label bold font-xs mt-3">2x2 Picture</label>
                                            </div>
                                            <a href="../../uploads/applicant/requirements/<?php echo $image2x2 ?>" data-lightbox="Requirements" data-title="2x2 Picture"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                        </div>
                                        </br>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="birth" id="birth" value="">
                                                <label class="control-label bold font-xs d-block">Birth Certificate</label>
                                                <a href="../../uploads/applicant/requirements/<?php echo $birth ?>" data-lightbox="Requirements" data-title="Birth Certificate"> <input type="button" class="btn btn-info btn-md ms-5 mt-2" name="birth" id="birth" value="View"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="bir" id="bir">
                                                <label class="control-label bold font-xs d-block">BIR</label>
                                                <a href="../../uploads/applicant/requirements/<?php echo $bir ?>" data-lightbox="Requirements" data-title="BIR"> <input type="button" class="btn btn-info btn-md ms-5 mt-2" name="bir" id="bir" value="View"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="cedula" id="cedula" value="">
                                                <label class="control-label bold font-xs d-block">Cedula </label>
                                                <a href="../../uploads/applicant/requirements/<?php echo $cedula ?>" data-lightbox="Requirements" data-title="Cedula"> <input type="button" class="btn btn-info btn-md ms-5 mt-2" name="cedula" id="cedula" value="View"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="health-cert" id="health-cert" value="">
                                                <label class="control-label bold font-xs d-block">Health Certificate </label>
                                                <a href="../../uploads/applicant/requirements/<?php echo $health ?>" data-lightbox="Requirements" data-title="Health Certificate"> <input type="button" class="btn btn-info btn-md ms-5 mt-2" name="health-cert" id="health-cert" value="View"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                                <label class="control-label bold font-xs d-block">Curriculum </label>
                                                <a href="../../uploads/applicant/requirements/<?php echo $curriculum ?>" data-lightbox="Requirements" data-title="Curriculum"> <input type="button" class="btn btn-info btn-md ms-5 mt-2" name="curriculum" id="curriculum" value="View"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="cert-of-residency" id="cert-of-residency" value="">
                                                <label class="control-label bold font-xs d-block">Certificate of Residency </label>
                                                <a href="../../uploads/applicant/requirements/<?php echo $residency ?>" data-lightbox="Requirements" data-title="Certificate of Residency"> <input type="button" class="btn btn-info btn-md ms-5 mt-2" name="certificate-residency" id="certificate-residency" value="View"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="house-map" id="house-map" value="">
                                                <label class="control-label bold font-xs d-block">House Map from Barangay </label>
                                                <a href="../../uploads/applicant/requirements/<?php echo $map ?>" data-lightbox="Requirements" data-title="House Map from Barangay"> <input type="button" class="btn btn-info btn-md ms-5 mt-2" name="house-map" id="house-map" value="View"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="house-photo" id="house-photo" value="">
                                                <label class="control-label bold font-xs d-block">House Photo </label>
                                                <a href="../../uploads/applicant/requirements/<?php echo $house ?>" data-lightbox="Requirements" data-title="House Photo"> <input type="button" class="btn btn-info btn-md ms-5 mt-2" name="house-photo" id="house-photo" value="View"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <div class="row">
                                        <h3 class="header-title"></h3>
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="good-moral" id="good-moral" value="">
                                                <label class="control-label bold font-xs d-block mt-4">Good Moral </label>
                                                <a href="../../uploads/applicant/requirements/<?php echo $moral ?>" data-lightbox="Requirements" data-title="Good Moral"> <input type="button" class="btn btn-info btn-md ms-5 mt-2" name="good-moral" id="good-moral" value="View"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="prev-cor" id="prev-cor" value="">
                                                <label class="control-label bold font-xs d-block">Previous COR </label>
                                                <a href="../../uploads/applicant/requirements/<?php echo $cor ?>" data-lightbox="Requirements" data-title="Previous COR"> <input type="button" class="btn btn-info btn-md ms-5 mt-2" name="prev-cor" id="prev-cor" value="View"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="prev-cog" id="prev-cog" value="">
                                                <label class="control-label bold font-xs d-block">Previous COG </label>
                                                <a href="../../uploads/applicant/requirements/<?php echo $cog ?>" data-lightbox="Requirements" data-title="Previous COG"> <input type="button" class="btn btn-info btn-md ms-5 mt-2" name="prev-cog" id="prev-cog" value="View"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="latest-coe" id="latest-coe" value="">
                                                <label class="control-label bold font-xs d-block">Latest COE </label>
                                                <a href="../../uploads/applicant/requirements/<?php echo $coe ?>" data-lightbox="Requirements" data-title="Latest COE"> <input type="button" class="btn btn-info btn-md ms-5 mt-2" name="latest-coe" id="latest-coe" value="View"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="comelec-stub" id="comelec-stub" value="">
                                                <label class="control-label bold font-xs d-block">Comelec Stub </label>
                                                <a href="../../uploads/applicant/requirements/<?php echo $stub ?>" data-lightbox="Requirements" data-title="Comelec Stub"> <input type="button" class="btn btn-info btn-md ms-5 mt-2" name="comelec-stub" id="comelec-stub" value="View"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="landbank" id="landbank" value="">
                                                <label class="control-label bold font-xs d-block">Landbank Form </label>
                                                <a href="../../uploads/applicant/requirements/<?php echo $landbank ?>" data-lightbox="Requirements" data-title="Landbank Form"> <input type="button" class="btn btn-info btn-md ms-5 mt-2" name="landbank" id="landbank" value="View"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="id-photocopy" id="id-photocopy" value="">
                                                <label class="control-label bold font-xs d-block">ID Photocopy </label>
                                                <a href="../../uploads/applicant/requirements/<?php echo $photocopy ?>" data-lightbox="Requirements" data-title="ID Photocopy"> <input type="button" class="btn btn-info btn-md ms-5 mt-2" name="id-photocopy" id="id-photocopy" value="View"></a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="letter-of-intent" id="letter-of-intent" value="">
                                                <label class="control-label bold font-xs d-block">Letter of Intent </label>
                                                <a href="../../uploads/applicant/requirements/<?php echo $letter ?>" data-lightbox="Requirements" data-title="Letter of Intent"> <input type="button" class="btn btn-info btn-md ms-5 mt-2" name="letter-intent" id="letter-intent" value="View"></a>
                                            </div>
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

    <script src="./script/lightbox-plus-jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/loadingio/ldLoader@v1.0.0/dist/ldld.min.js"></script>
    <script src="../../node_modules/ldloader/index.js"></script>
    <script script script script script script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function sendAction(applicantId, action) {
            new ldLoader({
                root: ".ldld.full"
            }).on();
            $.ajax({
                type: 'POST', // You can use 'GET' if preferred
                url: 'action/applicantExaminerPassAction.php', // Replace 'process_action.php' with the server-side script that will handle the approval/decline
                data: {
                    id: applicantId,
                    action: action
                },
                success: function(response) {
                    new ldLoader({
                        root: ".ldld.full"
                    }).off();
                    $('#response').text(response);
                    setTimeout(function() {
                        $('#response').text('');
                    }, 5000);
                    loadTableData(currentPage);
                    // For example, you can display a success message or update the UI
                    if (action === 'pass') {
                        alert(response);
                        $('#approveBtn').hide();
                        $('#declineBtn').hide();
                    } else if (action === 'failed') {
                        alert(response);
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