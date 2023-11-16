<?php

// Your database connection code here...
include '../include/dbConnection.php';
include 'include/session.php';
// Get the applicant ID from the URL
if (isset($_GET['id'])) {
    $scholarId = $_GET['id'];

    // Step 2: Construct and execute the SQL query to select the row with the specified ID
    $sql = "SELECT *FROM scholar WHERE scholar_id= '$scholarId'";
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
    <link rel="stylesheet" href="../../style/addStaff.css">
    <link rel="stylesheet" href="../../style/scholarProfile.css">
    <link rel="stylesheet" href="../../style/lightbox.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Application Form</title>

</head>
<style>
    .profile-pic img {
        float: none;
        margin: 0;
        object-fit: contain;
        width: 250px;
        height: 250px;
        border-radius: 50% !important;
        margin-top: 10px;
    }

    .profileBar-portlet {
        padding: 10px 0 0 0 !important;
        display: flex;
        flex-wrap: wrap;
    }

    .profile-nm {
        padding-top: 50px;
        padding-left: 10px;
        margin-left: 120px;
    }

    .actionBtn {
        margin-left: 70%;
        margin-bottom: 10px;
    }

    .profile-nm {
        padding-top: 30px;
        padding-left: 50px;
        margin-left: 150px;
        font-size: 20px;
        font-weight: 600;
    }

    @media screen and (max-width: 779px) {
        .profile-nm {
            padding-top: 10px;
            padding-left: 20px;
            margin-left: 0px;
            font-size: 14px;
        }
    }

    @media screen and (max-width: 938px) {
        .profile-nm {
            margin-right: 200px;
            padding-top: 20px;
            padding-left: 20px;
            margin-left: 0px;
            font-size: 14px;
        }
        .actionBtn {
        margin-left: 0;
        margin-bottom: 10px;
        }
    }

    @media screen and (max-width: 1280px) {
        .profile-nm {
            padding-top: 30px;
            padding-left: 30px;
            margin-left: 10px;
            font-size: 14px;
        }
    }

    @media screen and (max-width: 1333px) {
        .actionBtn {
        margin-left: 50%;
        margin-bottom: 10px;
        }
    }

    @media screen and (max-width: 939px) {
        .actionBtn {
            margin-left: 20px;
            margin-bottom: 10px;
        }
    }

</style>

<body>

    <?php

    include '../../assets/template/profileNav.php';

    ?>

    <section id="content" class="home-section">

        <div class="container">
            <div class="profileBar">
                <div class="portlet light profileBar-portlet">
                    <div class="profile-pic">
                        <?php
                        $signaturePicPath = "../../uploads/scholar/" . $image;


                        // Check if the image file exists
                        if (!empty($image) && file_exists($signaturePicPath)) {
                            // Display the image with an id
                            echo '<img id="profilePicImage" src="' . $signaturePicPath . '" class="img-responsive ms-3" alt="image">';
                        } else {
                            // Display a default image or a placeholder image with an id
                            echo '<img id="profilePicImage" src="../../uploads/applicant/2x2/No_Image_Available.jpg" class="img-responsive" alt="Default Image">';
                        }
                        ?>
                        <div class="profile-usertab">

                            <div class="profile-user-name text-uppercase">
                                <h1></h1>
                            </div>

                            <hr class="mb-2 mt-5 opacity-0">
                        </div>
                    </div>
                    <div class="profile-nm">
                        <div>
                            <p>Name : <?php echo $full_name; ?></p>
                            <p>Community Service : <?php echo $c_service1st; ?></p>
                            <p>Status Last Sem : <?php echo $status_lastsem; ?></p>
                            <p>Approve Date : <?php echo $approve_date; ?></p>
                        </div>
                    </div>
                    <div class="actionBtn">
                        <button type="button" id="approveBtn" class="btnApprove btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'graduate')">Graduated Scholar</button>
                        <button type="button" id="declineBtn" class="btnDecline btn btn-danger btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'remove')">Remove Scholar</button>
                    </div>
                </div>


            </div>
            <div class="portlet light">
                <!-- Nav tabs -->
                <div class="portlet-title tabbable-line">
                    <div class="caption caption-md">
                        <span class="caption-name font-color bold text-uppercase">Application Form</span>

                    </div>

                    <p id="response"></p>

                    <ul class="portletNavi nav nav-tabs justify-content-end" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="person-info" data-bs-toggle="tab" data-bs-target="#personInfo" type="button" role="tab" aria-controls="p-info" aria-selected="true">Personal Information</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="educ-bg" data-bs-toggle="tab" data-bs-target="#educBg" type="button" role="tab" aria-controls="e-background" aria-selected="false">Account Information</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="renewal-tab" data-bs-toggle="tab" data-bs-target="#renewalTab" type="button" role="tab" aria-controls="renew-tab" aria-selected="false">Renewal</button>
                        </li>

                    </ul>
                </div>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="personInfo">
                        <form id="profileForm" class="profile-form" role="form" autocomplete="on">
                            <div class="portletForm light bg-inverse">
                                <div class="portlet-body form">
                                    <h4 class="form-section bold font">Full Name</h4>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-4">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" name="userid" id="userid" value="<?php echo $scholar_id; ?> ">
                                                <label class="control-label bold font-xs">Last Name</label>
                                                <input type="text" class="form-control" name="l-name" id="l-name" value="<?php echo $last_name ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label bold font-xs">First Name</label>
                                                <input type="text" class="form-control" name="f-name" id="f-name" value="<?php echo $first_name ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label bold font-xs">Middle Name</label>
                                                <input type="text" class="form-control" name="m-name" id="m-name" value="<?php echo $middle_name ?>">
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row">

                                        <div class="col-md-3 col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label bold font-xs">Gender</label>
                                                <input type="text" class="form-control" name="gender" id="gender" value="<?php echo $gender ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label bold font-xs">Voter</label>
                                                <input type="text" class="form-control" name="voter" id="voter" value="<?php echo $voter ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label bold font-xs">Age</label>
                                                <input type="text" class="form-control" name="age" id="age" value="<?php echo $age ?>">
                                            </div>
                                        </div>

                                        <h4 class="form-section bold font">Complete Address</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label bold font-xs">Address</label>
                                                    <input type="text" class="form-control" name="add-ress" id="add-ress" value="<?php echo $full_address ?>">
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label bold font-xs">Barangay</label>
                                                    <input type="text" class="form-control" name="barangay" id="barangay" value="<?php echo $barangay ?>">
                                                </div>

                                            </div>

                                        </div>
                                        <h4 class="form-section bold font">Status</h4>
                                        <div class="row">
                                            <div class=" col-md-3 col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label bold font-xs">Email</label>
                                                    <input type="text" class="form-control" name="email" id="email" value="<?php echo $email ?>">
                                                </div>
                                            </div>


                                            <div class="col-md-3 col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label bold font-xs">Contact Number 1</label>
                                                    <input type="text" class="form-control" name="contactNum1" id="contactNum1" title="Please enter a valid numeric contact number" oninput="this.value = this.value.replace(/[^0-9]/g, '');" value="<?php echo $contact_num1 ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label bold font-xs">Contact Number 2</label>
                                                    <input type="text" class="form-control" name="contactNum2" id="contactNum2" title="Please enter a valid numeric contact number" oninput="this.value = this.value.replace(/[^0-9]/g, '');" value="<?php echo $contact_num2 ?>">
                                                </div>
                                            </div>




                                        </div>
                                        <div class="row">
                                            <div class=" col-md-3 col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label bold font-xs">Telegram</label>
                                                    <input type="text" class="form-control" name="telegram" id="telegram" value="<?php echo $telegram ?>">
                                                </div>
                                            </div>
                                            <div class=" col-md-3 col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label bold font-xs">Facebook</label>
                                                    <input type="text" class="form-control" name="facebook" id="facebook" value="<?php echo $facebook ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="form-section bold font">School</h4>
                                        <div class="row">
                                            <div class=" col-md-3 col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label bold font-xs">Current Year</label>
                                                    <input type="text" class="form-control" name="current_year" id="current_year" value="<?php echo $current_yr ?>">
                                                </div>
                                            </div>
                                            <div class=" col-md-3 col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label bold font-xs">Course</label>
                                                    <input type="text" class="form-control" name="course" id="course" value="<?php echo $course ?>">
                                                </div>
                                            </div>


                                            <div class="col-md-3 col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label bold font-xs">Years of Course</label>
                                                    <input type="text" class="form-control" name="years_course" id="years_course" value="<?php echo $years_course ?>">
                                                </div>
                                            </div>



                                        </div>
                                        <div class="row">


                                            <div class="col-md-3 col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label bold font-xs">Degree or Non Degree</label>
                                                    <input type="text" class="form-control" name="degree_or_non" id="degree_or_non" value="<?php echo $degree_or_non ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label bold font-xs">School Name</label>
                                                    <input type="text" class="form-control" name="school_name" id="school_name" value="<?php echo $school_name ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label bold font-xs">School Address</label>
                                                    <input type="text" class="form-control" name="school_address" id="school_address" value="<?php echo $school_address ?>">
                                                </div>
                                            </div>



                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label bold font-xs">Community Service</label>
                                                    <input type="number" class="form-control" name="community" id="community" value="<?php echo $c_service1st ?>">
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <hr class="mb-3 mt-3">
                            <div class="form-actions right">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" style="float: right;" class="btnUpdate-peronalInfo btn btn-success btn-sm">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="educBg">
                        <form id="updateAccount" class="updateImageForm" role="form" autocomplete="off">
                            <div class="portletForm light bg-inverse">
                                <div class="portlet-body form">
                                    <h4 class="form-section bold font">Account</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-11 col-sm-12">
                                                    <div class="form-group">
                                                        <input type="hidden" class="form-control" name="userid" id="userid" value="<?php echo $scholar_id; ?>">
                                                        <label class="control-label bold font-xs">User</label>
                                                        <input type="text" class="form-control" name="user" id="user" value="<?php echo $user ?>">
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-md-11 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="control-label bold font-xs">Password</label>
                                                        <input type="password" class="form-control" name="password" id="password">
                                                        </br>
                                                        <button type="button" id="declineBtn" class="btnDecline btn btn-dark btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'reset')">Reset Password</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-3 mt-3">
                            <div class="form-actions right">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" style="float: right;" class="btnUpdate-educBg btn btn-success btn-sm">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="familyBg">
                        <form id="imageUpdateForm" class="educ-info-form" role="form" autocomplete="off" enctype="multipart/form-data">
                            <div class="portletForm light bg-inverse">
                                <div class="portlet-body form">
                                    <h4 class="form-section bold font">Account</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-10 col-sm-11">
                                                            <div class="form-group">
                                                                <label class="control-label bold font-xs">Image</label>
                                                                <input type="file" class="form-control" name="imageUpdate" id="imageUpdate" accept="image/jpeg">
                                                                <input type="hidden" class="form-control" name="userid" id="userid" value="<?php echo $_SESSION['user_id']; ?> ">





                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-3 mt-3">
                            <div class="form-actions right">
                                <div class="row">
                                    <div class="col-md-12">

                                        <button type="submit" style="float: right;" class="btnUpdate-educBg btn btn-success btn-sm">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="renewalTab">
                        <form id="renewalForm" class="renewal-form" role="form" autocomplete="off" enctype="multipart/form-data">
                            <div class="portlet-title tabbable-line mt-5">
                                <div class="caption caption-md">

                                </div>

                                <p id="response"></p>

                                <ul class="portletNavi nav nav-tabs justify-content-end" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="year1st" data-bs-toggle="tab" data-bs-target="#year-1st" type="button" role="tab" aria-controls="yr-1" aria-selected="true">1st yr</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="year2nd" data-bs-toggle="tab" data-bs-target="#year-2nd" type="button" role="tab" aria-controls="yr-2" aria-selected="false">2nd yr</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="year3rd" data-bs-toggle="tab" data-bs-target="#year-3rd" type="button" role="tab" aria-controls="yr-3" aria-selected="false">3rd yr</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="year4th" data-bs-toggle="tab" data-bs-target="#year-4th" type="button" role="tab" aria-controls="yr-4" aria-selected="false">4th yr</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="year5th" data-bs-toggle="tab" data-bs-target="#year-5th" type="button" role="tab" aria-controls="yr-5" aria-selected="false">5th yr</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="year6th" data-bs-toggle="tab" data-bs-target="#year-6th" type="button" role="tab" aria-controls="yr-6" aria-selected="false">6th yr</button>
                                    </li>

                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="year-1st">
                                    <form id="renewalForm" class="renewal-form" role="form" autocomplete="off">
                                        <div class="portletForm light bg-inverse">
                                            <div class="portlet-body form">
                                                <div class="row">
                                                    <?php
                                                    $scholarId = $_GET['id'];

                                                    // First query for 1st semester
                                                    $sql1 = "SELECT renewal.*, scholar.*
                                                        FROM renewal
                                                        JOIN scholar ON scholar.scholar_id = renewal.scholar_id
                                                        WHERE scholar.scholar_id = '$scholarId' AND renewal.semester = 'renew_1stYr_1stSem' ";
                                                    $result1 = mysqli_query($conn, $sql1);

                                                    if ($result1) {
                                                        // Check if the row exists
                                                        if (mysqli_num_rows($result1) > 0) {
                                                            // Fetch the row
                                                            $row1 = mysqli_fetch_assoc($result1);

                                                            // Access the values of the row
                                                            $row1PreviousCor = $row1['previous_cor'];
                                                            $row1Cog = $row1['cog'];
                                                            $row1Atm = $row1['atm'];
                                                            $row1CurrentCor = $row1['current_cor'];
                                                            $row1Dtr = $row1['dtr'];
                                                            $row1E3 = $row1['e3_form'];
                                                            $row1Curriculum = $row1['curriculum'];

                                                            // Process the retrieved row as needed
                                                            // ...
                                                            // Free the result set
                                                            mysqli_free_result($result1);
                                                        } else {
                                                            echo "No Uploaded Documents For 1st Year 1st Sem";
                                                        }
                                                    } else {
                                                        echo "Error executing the first query: " . mysqli_error($conn);
                                                    }
                                                    ?>
                                                    <h3 class="header-title">1st sem</h3>
                                                    <div class="col-md-8 col-sm-9 input-box">
                                                        <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                                            <label class="control-label bold font-xs">Previous Registration Form</label>
                                                        </div>
                                                        <a href="../../uploads/scholar/renewal/<?php echo $row1PreviousCor ?>" data-lightbox="Renewal" data-title="Previous Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-9 input-box">
                                                        <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog" value="">
                                                            <label class="control-label bold font-xs mt-3">Certificate of Grades</label>
                                                        </div>
                                                        <a href="../../uploads/scholar/renewal/<?php echo $row1Cog ?>" data-lightbox="Renewal" data-title="Certificate of Grades 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-9 input-box">
                                                        <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                                            <label class="control-label bold font-xs mt-3">Current Registration Form</label>
                                                        </div>
                                                        <a href="../../uploads/scholar/renewal/<?php echo $row1CurrentCor ?>" data-lightbox="Renewal" data-title="Current Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-9 input-box">
                                                        <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                                            <label class="control-label bold font-xs mt-3">Curriculum</label>
                                                        </div>
                                                        <a href="../../uploads/scholar/renewal/<?php echo $row1Curriculum ?>" data-lightbox="Renewal" data-title="Curriculum 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-8 col-sm-9 input-box">
                                                        <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                                            <label class="control-label bold font-xs mt-3">Fully Accomplished Community Service DTR Form</label>
                                                        </div>
                                                        <a href="../../uploads/scholar/renewal/<?php echo $row1Dtr ?>" data-lightbox="Renewal" data-title="Fully Accomplished Community Service DTR Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-9 input-box">
                                                        <div class="form-group"><input type="hidden" class="form-control" name="ATM" id="ATM" value="">
                                                            <label class="control-label bold font-xs mt-3">ATM Photocopy</label>
                                                        </div>
                                                        <a href="../../uploads/scholar/renewal/<?php echo $row1Atm ?>" data-lightbox="Renewal" data-title="ATM Photocopy"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-9 input-box">
                                                        <div class="form-group"><input type="hidden" class="form-control" name="E3-form" id="E3-form" value="">
                                                            <label class="control-label bold font-xs mt-3">Renewal E3 Form</label>
                                                        </div>
                                                        <a href="../../uploads/scholar/renewal/<?php echo $row1E3 ?>" data-lightbox="Renewal" data-title="Renewal E3 Form"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <div class="row">
                                                    <?php
                                                    // Second query for 2nd semester
                                                    $sql2 = "SELECT renewal.*, scholar.*
                                                        FROM renewal
                                                        JOIN scholar ON scholar.scholar_id = renewal.scholar_id
                                                        WHERE scholar.scholar_id = '$scholarId' AND renewal.semester = 'renew_1stYr_2ndSem' ";
                                                    $result2 = mysqli_query($conn, $sql2);

                                                    if ($result2) {
                                                        // Check if the row exists
                                                        if (mysqli_num_rows($result2) > 0) {
                                                            // Fetch the row
                                                            $row2 = mysqli_fetch_assoc($result2);

                                                            // Access the values of the row
                                                            $row2PreviousCor = $row2['previous_cor'];
                                                            $row2Cog = $row2['cog'];
                                                            $row2Atm = $row2['atm'];
                                                            $row2CurrentCor = $row2['current_cor'];
                                                            $row2Dtr = $row2['dtr'];
                                                            $row2E3 = $row2['e3_form'];
                                                            $row2Curriculum = $row2['curriculum'];

                                                            mysqli_free_result($result2);
                                                        } else {
                                                            echo "No Uploaded Documents For 1st Year 2nd Sem";
                                                        }
                                                    } else {
                                                        echo "Error executing the second query: " . mysqli_error($conn);
                                                    }
                                                    ?>
                                                    <h3 class="header-title">2nd sem</h3>
                                                    <div class="col-md-8 col-sm-9 input-box">
                                                        <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                                            <label class="control-label bold font-xs">Previous Registration Form</label>
                                                        </div>
                                                        <a href="../../uploads/scholar/renewal/<?php echo $row2PreviousCor ?>" data-lightbox="Renewal" data-title="Previous Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-9 input-box">
                                                        <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog" value="">
                                                            <label class="control-label bold font-xs mt-3">Certificate of Grades</label>
                                                        </div>
                                                        <a href="../../uploads/scholar/renewal/<?php echo $row2Cog ?>" data-lightbox="Renewal" data-title="Certificate of Grades 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-9 input-box">
                                                        <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                                            <label class="control-label bold font-xs mt-3">Current Registration Form</label>
                                                        </div>
                                                        <a href="../../uploads/scholar/renewal/<?php echo $row2CurrentCor ?>" data-lightbox="Renewal" data-title="Current Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-9 input-box">
                                                        <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                                            <label class="control-label bold font-xs mt-3">Curriculum</label>
                                                        </div>
                                                        <a href="../../uploads/scholar/renewal/<?php echo $row2Curriculum ?>" data-lightbox="Renewal" data-title="Curriculum 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-8 col-sm-9 input-box">
                                                        <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                                            <label class="control-label bold font-xs mt-3">Fully Accomplished Community Service DTR Form</label>
                                                        </div>
                                                        <a href="../../uploads/scholar/renewal/<?php echo $row2Dtr ?>" data-lightbox="Renewal" data-title="Fully Accomplished Community Service DTR Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-9 input-box">
                                                        <div class="form-group"><input type="hidden" class="form-control" name="ATM" id="ATM" value="">
                                                            <label class="control-label bold font-xs mt-3">ATM Photocopy</label>
                                                        </div>
                                                        <a href="../../uploads/scholar/renewal/<?php echo $row2Atm ?>" data-lightbox="Renewal" data-title="ATM Photocopy"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-9 input-box">
                                                        <div class="form-group"><input type="hidden" class="form-control" name="E3-form" id="E3-form" value="">
                                                            <label class="control-label bold font-xs mt-3">Renewal E3 Form</label>
                                                        </div>
                                                        <a href="../../uploads/scholar/renewal/<?php echo $row2E3 ?>" data-lightbox="Renewal" data-title="Renewal E3 Form"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="year-2nd">
                        <form id="renewalForm" class="renewal-form" role="form" autocomplete="off">
                            <div class="portletForm light bg-inverse">
                                <div class="portletForm light bg-inverse">
                                    <div class="portlet-body form">
                                        <div class="row">
                                            <?php
                                            $scholarId = $_GET['id'];

                                            // First query for 1st semester
                                            $sql3 = "SELECT renewal.*, scholar.*
                                                        FROM renewal
                                                        JOIN scholar ON scholar.scholar_id = renewal.scholar_id
                                                        WHERE scholar.scholar_id = '$scholarId' AND renewal.semester = 'renew_2ndYr_1stSem' ";
                                            $result3 = mysqli_query($conn, $sql3);

                                            if ($result3) {
                                                // Check if the row exists
                                                if (mysqli_num_rows($result3) > 0) {
                                                    // Fetch the row
                                                    $row3 = mysqli_fetch_assoc($result3);

                                                    // Access the values of the row
                                                    $row3PreviousCor = $row3['previous_cor'];
                                                    $row3Cog = $row3['cog'];
                                                    $row3Atm = $row3['atm'];
                                                    $row3CurrentCor = $row3['current_cor'];
                                                    $row3Dtr = $row3['dtr'];
                                                    $row3E3 = $row3['e3_form'];
                                                    $row3Curriculum = $row3['curriculum'];

                                                    // Process the retrieved row as needed
                                                    // ...
                                                    // Free the result set
                                                    mysqli_free_result($result3);
                                                } else {
                                                    echo "No Uploaded Documents For 2nd Year 1st Sem";
                                                }
                                            } else {
                                                echo "Error executing the first query: " . mysqli_error($conn);
                                            }
                                            ?>
                                            <h3 class="header-title">1st sem</h3>
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                                    <label class="control-label bold font-xs">Previous Registration Form</label>
                                                </div>
                                                <a href="../../uploads/scholar/renewal/<?php echo $row3PreviousCor ?>" data-lightbox="Renewal" data-title="Previous Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog" value="">
                                                    <label class="control-label bold font-xs mt-3">Certificate of Grades</label>
                                                </div>
                                                <a href="../../uploads/scholar/renewal/<?php echo $row3Cog ?>" data-lightbox="Renewal" data-title="Certificate of Grades 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                                    <label class="control-label bold font-xs mt-3">Current Registration Form</label>
                                                </div>
                                                <a href="../../uploads/scholar/renewal/<?php echo $row3CurrentCor ?>" data-lightbox="Renewal" data-title="Current Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                                    <label class="control-label bold font-xs mt-3">Curriculum</label>
                                                </div>
                                                <a href="../../uploads/scholar/renewal/<?php echo $row3Curriculum ?>" data-lightbox="Renewal" data-title="Curriculum 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                                    <label class="control-label bold font-xs mt-3">Fully Accomplished Community Service DTR Form</label>
                                                </div>
                                                <a href="../../uploads/scholar/renewal/<?php echo $row3Dtr ?>" data-lightbox="Renewal" data-title="Fully Accomplished Community Service DTR Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="ATM" id="ATM" value="">
                                                    <label class="control-label bold font-xs mt-3">ATM Photocopy</label>
                                                </div>
                                                <a href="../../uploads/scholar/renewal/<?php echo $row3Atm ?>" data-lightbox="Renewal" data-title="ATM Photocopy"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="E3-form" id="E3-form" value="">
                                                    <label class="control-label bold font-xs mt-3">Renewal E3 Form</label>
                                                </div>
                                                <a href="../../uploads/scholar/renewal/<?php echo $row3E3 ?>" data-lightbox="Renewal" data-title="Renewal E3 Form"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <div class="row">
                                            <?php
                                            // Second query for 2nd semester
                                            $sql4 = "SELECT renewal.*, scholar.*
                                                        FROM renewal
                                                        JOIN scholar ON scholar.scholar_id = renewal.scholar_id
                                                        WHERE scholar.scholar_id = '$scholarId' AND renewal.semester = 'renew_2ndYr_2ndSem' ";
                                            $result4 = mysqli_query($conn, $sql4);

                                            if ($result4) {
                                                // Check if the row exists
                                                if (mysqli_num_rows($result4) > 0) {
                                                    // Fetch the row
                                                    $row4 = mysqli_fetch_assoc($result4);

                                                    // Access the values of the row
                                                    $row4PreviousCor = $row4['previous_cor'];
                                                    $row4Cog = $row4['cog'];
                                                    $row4Atm = $row4['atm'];
                                                    $row4CurrentCor = $row4['current_cor'];
                                                    $row4Dtr = $row4['dtr'];
                                                    $row4E3 = $row4['e3_form'];
                                                    $row4Curriculum = $row4['curriculum'];

                                                    mysqli_free_result($result4);
                                                } else {
                                                    echo "No Uploaded Documents For 2nd Year 2nd Sem";
                                                }
                                            } else {
                                                echo "Error executing the second query: " . mysqli_error($conn);
                                            }
                                            ?>
                                            <h3 class="header-title">2nd sem</h3>
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                                    <label class="control-label bold font-xs">Previous Registration Form</label>
                                                </div>
                                                <a href="../../uploads/scholar/renewal/<?php echo $row4PreviousCor ?>" data-lightbox="Renewal" data-title="Previous Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog" value="">
                                                    <label class="control-label bold font-xs mt-3">Certificate of Grades</label>
                                                </div>
                                                <a href="../../uploads/scholar/renewal/<?php echo $row4Cog ?>" data-lightbox="Renewal" data-title="Certificate of Grades 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                                    <label class="control-label bold font-xs mt-3">Current Registration Form</label>
                                                </div>
                                                <a href="../../uploads/scholar/renewal/<?php echo $row4CurrentCor ?>" data-lightbox="Renewal" data-title="Current Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                                    <label class="control-label bold font-xs mt-3">Curriculum</label>
                                                </div>
                                                <a href="../../uploads/scholar/renewal/<?php echo $row4Curriculum ?>" data-lightbox="Renewal" data-title="Curriculum 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                                    <label class="control-label bold font-xs mt-3">Fully Accomplished Community Service DTR Form</label>
                                                </div>
                                                <a href="../../uploads/scholar/renewal/<?php echo $row4Dtr ?>" data-lightbox="Renewal" data-title="Fully Accomplished Community Service DTR Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="ATM" id="ATM" value="">
                                                    <label class="control-label bold font-xs mt-3">ATM Photocopy</label>
                                                </div>
                                                <a href="../../uploads/scholar/renewal/<?php echo $row4Atm ?>" data-lightbox="Renewal" data-title="ATM Photocopy"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="E3-form" id="E3-form" value="">
                                                    <label class="control-label bold font-xs mt-3">Renewal E3 Form</label>
                                                </div>
                                                <a href="../../uploads/scholar/renewal/<?php echo $row4E3 ?>" data-lightbox="Renewal" data-title="Renewal E3 Form"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </form>

                    </div>
                    <div class="tab-pane" id="year-3rd">
                        <form id="renewalForm" class="renewal-form" role="form" autocomplete="off">
                            <div class="portletForm light bg-inverse">
                                <div class="portlet-body form">
                                    <div class="row">
                                        <?php
                                        $scholarId = $_GET['id'];

                                        // First query for 1st semester
                                        $sql5 = "SELECT renewal.*, scholar.*
                                                        FROM renewal
                                                        JOIN scholar ON scholar.scholar_id = renewal.scholar_id
                                                        WHERE scholar.scholar_id = '$scholarId' AND renewal.semester = 'renew_3rdYr_1stSem' ";
                                        $result5 = mysqli_query($conn, $sql5);

                                        if ($result5) {
                                            // Check if the row exists
                                            if (mysqli_num_rows($result5) > 0) {
                                                // Fetch the row
                                                $row5 = mysqli_fetch_assoc($result5);

                                                // Access the values of the row
                                                $row5PreviousCor = $row5['previous_cor'];
                                                $row5Cog = $row5['cog'];
                                                $row5Atm = $row5['atm'];
                                                $row5CurrentCor = $row5['current_cor'];
                                                $row5Dtr = $row5['dtr'];
                                                $row5E3 = $row5['e3_form'];
                                                $row5Curriculum = $row5['curriculum'];

                                                // Process the retrieved row as needed
                                                // ...
                                                // Free the result set
                                                mysqli_free_result($result5);
                                            } else {
                                                echo "No Uploaded Documents For 3rd Year 1st Sem";
                                            }
                                        } else {
                                            echo "Error executing the first query: " . mysqli_error($conn);
                                        }
                                        ?>
                                        <h3 class="header-title">1st sem</h3>
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                                <label class="control-label bold font-xs">Previous Registration Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row5PreviousCor ?>" data-lightbox="Renewal" data-title="Previous Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog" value="">
                                                <label class="control-label bold font-xs mt-3">Certificate of Grades</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row5Cog ?>" data-lightbox="Renewal" data-title="Certificate of Grades 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                                <label class="control-label bold font-xs mt-3">Current Registration Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row5CurrentCor ?>" data-lightbox="Renewal" data-title="Current Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                                <label class="control-label bold font-xs mt-3">Curriculum</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row5Curriculum ?>" data-lightbox="Renewal" data-title="Curriculum 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                                <label class="control-label bold font-xs mt-3">Fully Accomplished Community Service DTR Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row5Dtr ?>" data-lightbox="Renewal" data-title="Fully Accomplished Community Service DTR Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="ATM" id="ATM" value="">
                                                <label class="control-label bold font-xs mt-3">ATM Photocopy</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row5Atm ?>" data-lightbox="Renewal" data-title="ATM Photocopy"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="E3-form" id="E3-form" value="">
                                                <label class="control-label bold font-xs mt-3">Renewal E3 Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row5E3 ?>" data-lightbox="Renewal" data-title="Renewal E3 Form"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <div class="row">
                                        <?php
                                        // Second query for 2nd semester
                                        $sql6 = "SELECT renewal.*, scholar.*
                                                        FROM renewal
                                                        JOIN scholar ON scholar.scholar_id = renewal.scholar_id
                                                        WHERE scholar.scholar_id = '$scholarId' AND renewal.semester = 'renew_3rdYr_2ndSem' ";
                                        $result6 = mysqli_query($conn, $sql6);

                                        if ($result6) {
                                            // Check if the row exists
                                            if (mysqli_num_rows($result6) > 0) {
                                                // Fetch the row
                                                $row6 = mysqli_fetch_assoc($result6);

                                                // Access the values of the row
                                                $row6PreviousCor = $row6['previous_cor'];
                                                $row6Cog = $row6['cog'];
                                                $row6Atm = $row6['atm'];
                                                $row6CurrentCor = $row6['current_cor'];
                                                $row6Dtr = $row6['dtr'];
                                                $row6E3 = $row6['e3_form'];
                                                $row6Curriculum = $row6['curriculum'];

                                                mysqli_free_result($result6);
                                            } else {
                                                echo "No Uploaded Documents For 3rd Year 2nd Sem";
                                            }
                                        } else {
                                            echo "Error executing the second query: " . mysqli_error($conn);
                                        }
                                        ?>
                                        <h3 class="header-title">2nd sem</h3>
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                                <label class="control-label bold font-xs">Previous Registration Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row6PreviousCor ?>" data-lightbox="Renewal" data-title="Previous Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog" value="">
                                                <label class="control-label bold font-xs mt-3">Certificate of Grades</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row6Cog ?>" data-lightbox="Renewal" data-title="Certificate of Grades 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                                <label class="control-label bold font-xs mt-3">Current Registration Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row6CurrentCor ?>" data-lightbox="Renewal" data-title="Current Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                                <label class="control-label bold font-xs mt-3">Curriculum</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row6Curriculum ?>" data-lightbox="Renewal" data-title="Curriculum 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                                <label class="control-label bold font-xs mt-3">Fully Accomplished Community Service DTR Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row6Dtr ?>" data-lightbox="Renewal" data-title="Fully Accomplished Community Service DTR Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="ATM" id="ATM" value="">
                                                <label class="control-label bold font-xs mt-3">ATM Photocopy</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row6Atm ?>" data-lightbox="Renewal" data-title="ATM Photocopy"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="E3-form" id="E3-form" value="">
                                                <label class="control-label bold font-xs mt-3">Renewal E3 Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row6E3 ?>" data-lightbox="Renewal" data-title="Renewal E3 Form"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </form>
                    </div>
                    <div class="tab-pane" id="year-4th">
                        <form id="renewalForm" class="renewal-form" role="form" autocomplete="off">
                            <div class="portletForm light bg-inverse">
                                <div class="portlet-body form">
                                    <div class="row">
                                        <?php
                                        $scholarId = $_GET['id'];

                                        // First query for 1st semester
                                        $sql7 = "SELECT renewal.*, scholar.*
                                                        FROM renewal
                                                        JOIN scholar ON scholar.scholar_id = renewal.scholar_id
                                                        WHERE scholar.scholar_id = '$scholarId' AND renewal.semester = 'renew_4thYr_1stSem' ";
                                        $result7 = mysqli_query($conn, $sql7);

                                        if ($result7) {
                                            // Check if the row exists
                                            if (mysqli_num_rows($result7) > 0) {
                                                // Fetch the row
                                                $row7 = mysqli_fetch_assoc($result7);

                                                // Access the values of the row
                                                $row7PreviousCor = $row7['previous_cor'];
                                                $row7Cog = $row7['cog'];
                                                $row7Atm = $row7['atm'];
                                                $row7CurrentCor = $row7['current_cor'];
                                                $row7Dtr = $row7['dtr'];
                                                $row7E3 = $row7['e3_form'];
                                                $row7Curriculum = $row7['curriculum'];

                                                // Process the retrieved row as needed
                                                // ...
                                                // Free the result set
                                                mysqli_free_result($result7);
                                            } else {
                                                echo "No Uploaded Documents For 4th Year 1st Sem";
                                            }
                                        } else {
                                            echo "Error executing the first query: " . mysqli_error($conn);
                                        }
                                        ?>
                                        <h3 class="header-title">1st sem</h3>
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                                <label class="control-label bold font-xs">Previous Registration Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row7PreviousCor ?>" data-lightbox="Renewal" data-title="Previous Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog" value="">
                                                <label class="control-label bold font-xs mt-3">Certificate of Grades</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row7Cog ?>" data-lightbox="Renewal" data-title="Certificate of Grades 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                                <label class="control-label bold font-xs mt-3">Current Registration Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row7CurrentCor ?>" data-lightbox="Renewal" data-title="Current Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                                <label class="control-label bold font-xs mt-3">Curriculum</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row7Curriculum ?>" data-lightbox="Renewal" data-title="Curriculum 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                                <label class="control-label bold font-xs mt-3">Fully Accomplished Community Service DTR Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row7Dtr ?>" data-lightbox="Renewal" data-title="Fully Accomplished Community Service DTR Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="ATM" id="ATM" value="">
                                                <label class="control-label bold font-xs mt-3">ATM Photocopy</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row7Atm ?>" data-lightbox="Renewal" data-title="ATM Photocopy"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="E3-form" id="E3-form" value="">
                                                <label class="control-label bold font-xs mt-3">Renewal E3 Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row7E3 ?>" data-lightbox="Renewal" data-title="Renewal E3 Form"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <div class="row">
                                        <?php
                                        // Second query for 2nd semester
                                        $sql8 = "SELECT renewal.*, scholar.*
                                                        FROM renewal
                                                        JOIN scholar ON scholar.scholar_id = renewal.scholar_id
                                                        WHERE scholar.scholar_id = '$scholarId' AND renewal.semester = 'renew_4thYr_2ndSem' ";
                                        $result8 = mysqli_query($conn, $sql8);

                                        if ($result8) {
                                            // Check if the row exists
                                            if (mysqli_num_rows($result8) > 0) {
                                                // Fetch the row
                                                $row8 = mysqli_fetch_assoc($result8);

                                                // Access the values of the row
                                                $row8PreviousCor = $row8['previous_cor'];
                                                $row8Cog = $row8['cog'];
                                                $row8Atm = $row8['atm'];
                                                $row8CurrentCor = $row8['current_cor'];
                                                $row8Dtr = $row8['dtr'];
                                                $row8E3 = $row8['e3_form'];
                                                $row8Curriculum = $row8['curriculum'];

                                                mysqli_free_result($result8);
                                            } else {
                                                echo "No Uploaded Documents For 4th Year 2nd Sem";
                                            }
                                        } else {
                                            echo "Error executing the second query: " . mysqli_error($conn);
                                        }
                                        ?>
                                        <h3 class="header-title">2nd sem</h3>
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                                <label class="control-label bold font-xs">Previous Registration Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row8PreviousCor ?>" data-lightbox="Renewal" data-title="Previous Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog" value="">
                                                <label class="control-label bold font-xs mt-3">Certificate of Grades</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row8Cog ?>" data-lightbox="Renewal" data-title="Certificate of Grades 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                                <label class="control-label bold font-xs mt-3">Current Registration Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row8CurrentCor ?>" data-lightbox="Renewal" data-title="Current Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                                <label class="control-label bold font-xs mt-3">Curriculum</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row8Curriculum ?>" data-lightbox="Renewal" data-title="Curriculum 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                                <label class="control-label bold font-xs mt-3">Fully Accomplished Community Service DTR Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row8Dtr ?>" data-lightbox="Renewal" data-title="Fully Accomplished Community Service DTR Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="ATM" id="ATM" value="">
                                                <label class="control-label bold font-xs mt-3">ATM Photocopy</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row8Atm ?>" data-lightbox="Renewal" data-title="ATM Photocopy"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="E3-form" id="E3-form" value="">
                                                <label class="control-label bold font-xs mt-3">Renewal E3 Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row8E3 ?>" data-lightbox="Renewal" data-title="Renewal E3 Form"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </form>

                    </div>
                    <div class="tab-pane" id="year-5th">
                        <form id="renewalForm" class="renewal-form" role="form" autocomplete="off">
                            <div class="portletForm light bg-inverse">
                                <div class="portlet-body form">
                                    <div class="row">
                                        <?php
                                        $scholarId = $_GET['id'];

                                        // First query for 1st semester
                                        $sql9 = "SELECT renewal.*, scholar.*
                                                        FROM renewal
                                                        JOIN scholar ON scholar.scholar_id = renewal.scholar_id
                                                        WHERE scholar.scholar_id = '$scholarId' AND renewal.semester = 'renew_5thYr_1stSem' ";
                                        $result9 = mysqli_query($conn, $sql9);

                                        if ($result9) {
                                            // Check if the row exists
                                            if (mysqli_num_rows($result9) > 0) {
                                                // Fetch the row
                                                $row9 = mysqli_fetch_assoc($result9);

                                                // Access the values of the row
                                                $row9PreviousCor = $row9['previous_cor'];
                                                $row9Cog = $row9['cog'];
                                                $row9Atm = $row9['atm'];
                                                $row9CurrentCor = $row9['current_cor'];
                                                $row9Dtr = $row9['dtr'];
                                                $row9E3 = $row9['e3_form'];
                                                $row9Curriculum = $row9['curriculum'];

                                                // Process the retrieved row as needed
                                                // ...
                                                // Free the result set
                                                mysqli_free_result($result9);
                                            } else {
                                                echo "No Uploaded Documents For 5th Year 1st Sem";
                                            }
                                        } else {
                                            echo "Error executing the first query: " . mysqli_error($conn);
                                        }
                                        ?>
                                        <h3 class="header-title">1st sem</h3>
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                                <label class="control-label bold font-xs">Previous Registration Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row9PreviousCor ?>" data-lightbox="Renewal" data-title="Previous Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog" value="">
                                                <label class="control-label bold font-xs mt-3">Certificate of Grades</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row9Cog ?>" data-lightbox="Renewal" data-title="Certificate of Grades 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                                <label class="control-label bold font-xs mt-3">Current Registration Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row9CurrentCor ?>" data-lightbox="Renewal" data-title="Current Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                                <label class="control-label bold font-xs mt-3">Curriculum</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row9Curriculum ?>" data-lightbox="Renewal" data-title="Curriculum 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                                <label class="control-label bold font-xs mt-3">Fully Accomplished Community Service DTR Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row9Dtr ?>" data-lightbox="Renewal" data-title="Fully Accomplished Community Service DTR Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="ATM" id="ATM" value="">
                                                <label class="control-label bold font-xs mt-3">ATM Photocopy</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row9Atm ?>" data-lightbox="Renewal" data-title="ATM Photocopy"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="E3-form" id="E3-form" value="">
                                                <label class="control-label bold font-xs mt-3">Renewal E3 Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row9E3 ?>" data-lightbox="Renewal" data-title="Renewal E3 Form"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <div class="row">
                                        <?php
                                        // Second query for 2nd semester
                                        $sql10 = "SELECT renewal.*, scholar.*
                                                        FROM renewal
                                                        JOIN scholar ON scholar.scholar_id = renewal.scholar_id
                                                        WHERE scholar.scholar_id = '$scholarId' AND renewal.semester = 'renew_5thYr_2ndSem' ";
                                        $result10 = mysqli_query($conn, $sql8);

                                        if ($result10) {
                                            // Check if the row exists
                                            if (mysqli_num_rows($result10) > 0) {
                                                // Fetch the row
                                                $row10 = mysqli_fetch_assoc($result10);

                                                // Access the values of the row
                                                $row10PreviousCor = $row10['previous_cor'];
                                                $row10Cog = $row10['cog'];
                                                $row10Atm = $row10['atm'];
                                                $row10CurrentCor = $row10['current_cor'];
                                                $row10Dtr = $row10['dtr'];
                                                $row10E3 = $row10['e3_form'];
                                                $row10Curriculum = $row10['curriculum'];

                                                mysqli_free_result($result10);
                                            } else {
                                                echo "No Uploaded Documents For 5th Year 2nd Sem";
                                            }
                                        } else {
                                            echo "Error executing the second query: " . mysqli_error($conn);
                                        }
                                        ?>
                                        <h3 class="header-title">2nd sem</h3>
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                                <label class="control-label bold font-xs">Previous Registration Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row10PreviousCor ?>" data-lightbox="Renewal" data-title="Previous Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog" value="">
                                                <label class="control-label bold font-xs mt-3">Certificate of Grades</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row10Cog ?>" data-lightbox="Renewal" data-title="Certificate of Grades 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                                <label class="control-label bold font-xs mt-3">Current Registration Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row10CurrentCor ?>" data-lightbox="Renewal" data-title="Current Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                                <label class="control-label bold font-xs mt-3">Curriculum</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row10Curriculum ?>" data-lightbox="Renewal" data-title="Curriculum 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                                <label class="control-label bold font-xs mt-3">Fully Accomplished Community Service DTR Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row10Dtr ?>" data-lightbox="Renewal" data-title="Fully Accomplished Community Service DTR Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="ATM" id="ATM" value="">
                                                <label class="control-label bold font-xs mt-3">ATM Photocopy</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row10Atm ?>" data-lightbox="Renewal" data-title="ATM Photocopy"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="E3-form" id="E3-form" value="">
                                                <label class="control-label bold font-xs mt-3">Renewal E3 Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row10E3 ?>" data-lightbox="Renewal" data-title="Renewal E3 Form"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </form>

                    </div>

                    <div class="tab-pane" id="year-6th">
                        <form id="renewalForm" class="renewal-form" role="form" autocomplete="off">
                            <div class="portletForm light bg-inverse">
                                <div class="portlet-body form">
                                    <div class="row">
                                        <?php
                                        $scholarId = $_GET['id'];

                                        // First query for 1st semester
                                        $sql11 = "SELECT renewal.*, scholar.*
                                                        FROM renewal
                                                        JOIN scholar ON scholar.scholar_id = renewal.scholar_id
                                                        WHERE scholar.scholar_id = '$scholarId' AND renewal.semester = 'renew_6thYr_1stSem' ";
                                        $result11 = mysqli_query($conn, $sql11);

                                        if ($result11) {
                                            // Check if the row exists
                                            if (mysqli_num_rows($result11) > 0) {
                                                // Fetch the row
                                                $row11 = mysqli_fetch_assoc($result11);

                                                // Access the values of the row
                                                $row11PreviousCor = $row11['previous_cor'];
                                                $row11Cog = $row11['cog'];
                                                $row11Atm = $row11['atm'];
                                                $row11CurrentCor = $row11['current_cor'];
                                                $row11Dtr = $row11['dtr'];
                                                $row11E3 = $row11['e3_form'];
                                                $row11Curriculum = $row11['curriculum'];

                                                // Process the retrieved row as needed
                                                // ...
                                                // Free the result set
                                                mysqli_free_result($result11);
                                            } else {
                                                echo "No Uploaded Documents For 6th Year 1st Sem";
                                            }
                                        } else {
                                            echo "Error executing the first query: " . mysqli_error($conn);
                                        }
                                        ?>
                                        <h3 class="header-title">1st sem</h3>
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                                <label class="control-label bold font-xs">Previous Registration Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row11PreviousCor ?>" data-lightbox="Renewal" data-title="Previous Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog" value="">
                                                <label class="control-label bold font-xs mt-3">Certificate of Grades</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row11Cog ?>" data-lightbox="Renewal" data-title="Certificate of Grades 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                                <label class="control-label bold font-xs mt-3">Current Registration Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row11CurrentCor ?>" data-lightbox="Renewal" data-title="Current Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                                <label class="control-label bold font-xs mt-3">Curriculum</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row11Curriculum ?>" data-lightbox="Renewal" data-title="Curriculum 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                                <label class="control-label bold font-xs mt-3">Fully Accomplished Community Service DTR Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row11Dtr ?>" data-lightbox="Renewal" data-title="Fully Accomplished Community Service DTR Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="ATM" id="ATM" value="">
                                                <label class="control-label bold font-xs mt-3">ATM Photocopy</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row11Atm ?>" data-lightbox="Renewal" data-title="ATM Photocopy"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="E3-form" id="E3-form" value="">
                                                <label class="control-label bold font-xs mt-3">Renewal E3 Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row11E3 ?>" data-lightbox="Renewal" data-title="Renewal E3 Form"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <div class="row">
                                        <?php
                                        // Second query for 2nd semester
                                        $sql12 = "SELECT renewal.*, scholar.*
                                                        FROM renewal
                                                        JOIN scholar ON scholar.scholar_id = renewal.scholar_id
                                                        WHERE scholar.scholar_id = '$scholarId' AND renewal.semester = 'renew_6thYr_2ndSem' ";
                                        $result12 = mysqli_query($conn, $sql12);

                                        if ($result12) {
                                            // Check if the row exists
                                            if (mysqli_num_rows($result12) > 0) {
                                                // Fetch the row
                                                $row12 = mysqli_fetch_assoc($result12);

                                                // Access the values of the row
                                                $row12PreviousCor = $row12['previous_cor'];
                                                $row12Cog = $row12['cog'];
                                                $row12Atm = $row12['atm'];
                                                $row12CurrentCor = $row12['current_cor'];
                                                $row12Dtr = $row12['dtr'];
                                                $row12E3 = $row12['e3_form'];
                                                $row12Curriculum = $row12['curriculum'];

                                                mysqli_free_result($result12);
                                            } else {
                                                echo "No Uploaded Documents For 6th Year 2nd Sem";
                                            }
                                        } else {
                                            echo "Error executing the second query: " . mysqli_error($conn);
                                        }
                                        ?>
                                        <h3 class="header-title">2nd sem</h3>
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                                <label class="control-label bold font-xs">Previous Registration Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row12PreviousCor ?>" data-lightbox="Renewal" data-title="Previous Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog" value="">
                                                <label class="control-label bold font-xs mt-3">Certificate of Grades</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row12Cog ?>" data-lightbox="Renewal" data-title="Certificate of Grades 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                                <label class="control-label bold font-xs mt-3">Current Registration Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row12CurrentCor ?>" data-lightbox="Renewal" data-title="Current Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                                <label class="control-label bold font-xs mt-3">Curriculum</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row12Curriculum ?>" data-lightbox="Renewal" data-title="Curriculum 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                                <label class="control-label bold font-xs mt-3">Fully Accomplished Community Service DTR Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row12Dtr ?>" data-lightbox="Renewal" data-title="Fully Accomplished Community Service DTR Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="ATM" id="ATM" value="">
                                                <label class="control-label bold font-xs mt-3">ATM Photocopy</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row12Atm ?>" data-lightbox="Renewal" data-title="ATM Photocopy"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="E3-form" id="E3-form" value="">
                                                <label class="control-label bold font-xs mt-3">Renewal E3 Form</label>
                                            </div>
                                            <a href="../../uploads/scholar/renewal/<?php echo $row12E3 ?>" data-lightbox="Renewal" data-title="Renewal E3 Form"> <input type="button" class="btn btn-info btn-md ms-5" name="user" id="user" value="View"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <script src="./script/lightbox-plus-jquery.js"></script>
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
                    url: "action/scholarUpdatePersonal.php", // Replace with your server-side script to handle the request
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
                    url: "action/scholarUpdateProfile.php", // Replace with your server-side script to handle the request
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

            var data = {
                applicantId = <?php echo $applicant_id ?>,

            };
            console.log($applicantId);
        });
    </script>
    <script>
        function sendAction(applicantId, action) {
            // Create an AJAX request
            $.ajax({
                type: 'POST', // You can use 'GET' if preferred
                url: 'action/scholarViewAction.php', // Replace 'process_action.php' with the server-side script that will handle the approval/decline
                data: {
                    id: applicantId,
                    action: action
                },
                success: function(response) {
                    // Handle the response from the server if needed
                    $('#response').text(response);
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