<?php

// Your database connection code here...
include '../include/dbConnection.php';
include 'include/session.php';
// Get the applicant ID from the URL
$scholarId = $_SESSION['user'];

// Step 2: Construct and execute the SQL query to select the row with the specified ID
$sql = "SELECT * FROM scholar WHERE full_name = '$scholarId'";
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
    <title>Scholar Profile</title>

</head>

<body>

    <?php

    include '../../assets/template/scholarNav.php';

    ?>

    <section id="content" class="home-section">
        
        <div class="container">
            <div class="profileBar">
                <div class="portlet light profileBar-portlet">
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
                        <div class="profile-usertab">

                            <div class="profile-user-name text-uppercase">
                                <h1></h1>
                            </div>

                            <hr class="mb-2 mt-5 opacity-0">
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
                                <button class="nav-link" id="family-bg" data-bs-toggle="tab" data-bs-target="#familyBg" type="button" role="tab" aria-controls="f-background" aria-selected="false">Profile Image</button>
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
                                                    <input type="hidden" class="form-control" name="userid" id="userid" value="<?php echo $_SESSION['user_id']; ?> ">
                                                    <label class="control-label bold font-xs">Last Name</label>
                                                    <input type="text" class="form-control" name="l-name" id="l-name" value="<?php echo $last_name ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label bold font-xs">First Name</label>
                                                    <input type="text" class="form-control" name="f-name" id="f-name" value="<?php echo $first_name ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label bold font-xs">Middle Name</label>
                                                    <input type="text" class="form-control" name="m-name" id="m-name" value="<?php echo $middle_name ?>" readonly>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="row">

                                            <div class="col-md-3 col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label bold font-xs">Gender</label>
                                                    <input type="text" class="form-control" name="gender" id="gender" value="<?php echo $gender ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label bold font-xs">Voter</label>
                                                    <input type="text" class="form-control" name="voter" id="voter" value="<?php echo $voter ?>" readonly>
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
                                                        <input type="text" class="form-control" name="email" id="email" value="<?php echo $email ?> ">
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
                                        </div>
                                        <div class="row">



                                            <div class=" col-md-3 col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label bold font-xs">Facebook</label>
                                                    <input type="text" class="form-control" name="facebook" id="facebook" value="<?php echo $facebook ?>">
                                                </div>
                                            </div>
                                            <div class=" col-md-3 col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label bold font-xs">Telegram</label>
                                                    <input type="text" class="form-control" name="telegram" id="telegram" value="<?php echo $telegram ?>">
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
                                                            <input type="hidden" class="form-control" name="userid" id="userid" value="<?php echo $_SESSION['user_id'];?>">
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

                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="year-1st">
                            <form id="renewalForm" class="renewal-form" role="form" autocomplete="off">
                                <div class="portletForm light bg-inverse">
                                    <div class="portlet-body form">
                                        <div class="row">
                                            <h3 class="header-title">1st sem</h3>
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                                    <label class="control-label bold font-xs">Previous Registration Form</label></div>
                                                   <a href="../../assets/image/1x1.jpg" data-lightbox="Renewal" data-title="Previous Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog" value="">
                                                    <label class="control-label bold font-xs mt-3">Certificate of Grades</label></div>
                                                    <a href="../../assets/image/CysdoLogo.jpg" data-lightbox="Renewal" data-title="Certificate of Grades 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                                    <label class="control-label bold font-xs mt-3">Current Registration Form</label></div>
                                                    <a href="../../assets/image/1x1.jpg" data-lightbox="Renewal" data-title="Current Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                                    <label class="control-label bold font-xs mt-3">Curriculum</label></div>
                                                    <a href="../../assets/image/1x1.jpg" data-lightbox="Renewal" data-title="Curriculum 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="v-stub" id="v-stub" value="">
                                                    <label class="control-label bold font-xs mt-3">Voter's Stub/Certification</label></div>
                                                    <a href="../../assets/image/1x1.jpg" data-lightbox="Renewal" data-title="Voter's Stub/Certification 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                                    <label class="control-label bold font-xs mt-3">Fully Accomplished Community Service DTR Form</label></div>
                                                    <a href="../../assets/image/1x1.jpg" data-lightbox="Renewal" data-title="Fully Accomplished Community Service DTR Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                    <div class="row">
                                        <h3 class="header-title">2nd sem</h3>
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="prev-form-2" id="prev-form-2" value="">
                                                <label class="control-label bold font-xs">Previous Registration Form</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="Renewal-2nd-sem" data-title="Previous Registration Form 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="cog-2" id="cog-2" value="">
                                                <label class="control-label bold font-xs mt-3">Certificate of Grades</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="Renewal-2nd-sem" data-title="Certificate of Grades 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form-2" id="c-reg-form-2" value="">
                                                <label class="control-label bold font-xs mt-3">Current Registration Form</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="Renewal-2nd-sem" data-title="Current Registration Form 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="curriculum-2" id="curriculum-2" value="">
                                                <label class="control-label bold font-xs mt-3">Curriculum</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="Renewal-2nd-sem" data-title="Curriculum 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="v-stub-2" id="v-stub-2" value="">
                                                <label class="control-label bold font-xs mt-3">Voter's Stub/Certification</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="Renewal-2nd-sem" data-title="Voter's Stub/Certification 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form-2" id="DTR-form-2" value="">
                                                <label class="control-label bold font-xs mt-3">Fully Accomplished Community Service DTR Form</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="Renewal-2nd-sem" data-title="Fully Accomplished Community Service DTR Form 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="year-2nd">
                            <form id="renewalForm" class="renewal-form" role="form" autocomplete="off">
                                <div class="portletForm light bg-inverse">
                                    <div class="portlet-body form">
                                        <div class="row">
                                            <h3 class="header-title">1st sem</h3>
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                                    <label class="control-label bold font-xs">Previous Registration Form</label></div>
                                                   <a href="../../assets/image/1x1.jpg" data-lightbox="2nd yr Renewal" data-title="Previous Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog" value="">
                                                    <label class="control-label bold font-xs mt-3">Certificate of Grades</label></div>
                                                    <a href="../../assets/image/CysdoLogo.jpg" data-lightbox="2nd yr Renewal" data-title="Certificate of Grades 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                                    <label class="control-label bold font-xs mt-3">Current Registration Form</label></div>
                                                    <a href="../../assets/image/1x1.jpg" data-lightbox="2nd yr Renewal" data-title="Current Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                                    <label class="control-label bold font-xs mt-3">Curriculum</label></div>
                                                    <a href="../../assets/image/1x1.jpg" data-lightbox="2nd yr Renewal" data-title="Curriculum 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="v-stub" id="v-stub" value="">
                                                    <label class="control-label bold font-xs mt-3">Voter's Stub/Certification</label></div>
                                                    <a href="../../assets/image/1x1.jpg" data-lightbox="2nd yr Renewal" data-title="Voter's Stub/Certification 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                                    <label class="control-label bold font-xs mt-3">Fully Accomplished Community Service DTR Form</label></div>
                                                    <a href="../../assets/image/1x1.jpg" data-lightbox="2nd yr Renewal" data-title="Fully Accomplished Community Service DTR Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                    <div class="row">
                                        <h3 class="header-title">2nd sem</h3>
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="prev-form-2" id="prev-form-2" value="">
                                                <label class="control-label bold font-xs">Previous Registration Form</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="2nd yr Renewal-2nd-sem" data-title="Previous Registration Form 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="cog-2" id="cog-2" value="">
                                                <label class="control-label bold font-xs mt-3">Certificate of Grades</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="2nd yr Renewal-2nd-sem" data-title="Certificate of Grades 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form-2" id="c-reg-form-2" value="">
                                                <label class="control-label bold font-xs mt-3">Current Registration Form</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="2nd yr Renewal-2nd-sem" data-title="Current Registration Form 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="curriculum-2" id="curriculum-2" value="">
                                                <label class="control-label bold font-xs mt-3">Curriculum</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="2nd yr Renewal-2nd-sem" data-title="Curriculum 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="v-stub-2" id="v-stub-2" value="">
                                                <label class="control-label bold font-xs mt-3">Voter's Stub/Certification</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="2nd yr Renewal-2nd-sem" data-title="Voter's Stub/Certification 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form-2" id="DTR-form-2" value="">
                                                <label class="control-label bold font-xs mt-3">Fully Accomplished Community Service DTR Form</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="2nd yr Renewal-2nd-sem" data-title="Fully Accomplished Community Service DTR Form 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
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
                                            <h3 class="header-title">1st sem</h3>
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                                    <label class="control-label bold font-xs">Previous Registration Form</label></div>
                                                   <a href="../../assets/image/1x1.jpg" data-lightbox="3rd yr Renewal" data-title="Previous Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog" value="">
                                                    <label class="control-label bold font-xs mt-3">Certificate of Grades</label></div>
                                                    <a href="../../assets/image/CysdoLogo.jpg" data-lightbox="3rd yr Renewal" data-title="Certificate of Grades 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                                    <label class="control-label bold font-xs mt-3">Current Registration Form</label></div>
                                                    <a href="../../assets/image/1x1.jpg" data-lightbox="3rd yr Renewal" data-title="Current Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                                    <label class="control-label bold font-xs mt-3">Curriculum</label></div>
                                                    <a href="../../assets/image/1x1.jpg" data-lightbox="3rd yr Renewal" data-title="Curriculum 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="v-stub" id="v-stub" value="">
                                                    <label class="control-label bold font-xs mt-3">Voter's Stub/Certification</label></div>
                                                    <a href="../../assets/image/1x1.jpg" data-lightbox="3rd yr Renewal" data-title="Voter's Stub/Certification 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                                    <label class="control-label bold font-xs mt-3">Fully Accomplished Community Service DTR Form</label></div>
                                                    <a href="../../assets/image/1x1.jpg" data-lightbox="3rd yr Renewal" data-title="Fully Accomplished Community Service DTR Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                    <div class="row">
                                        <h3 class="header-title">2nd sem</h3>
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="prev-form-2" id="prev-form-2" value="">
                                                <label class="control-label bold font-xs">Previous Registration Form</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="3rd yr Renewal-2nd-sem" data-title="Previous Registration Form 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="cog-2" id="cog-2" value="">
                                                <label class="control-label bold font-xs mt-3">Certificate of Grades</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="3rd yr Renewal-2nd-sem" data-title="Certificate of Grades 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form-2" id="c-reg-form-2" value="">
                                                <label class="control-label bold font-xs mt-3">Current Registration Form</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="3rd yr Renewal-2nd-sem" data-title="Current Registration Form 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="curriculum-2" id="curriculum-2" value="">
                                                <label class="control-label bold font-xs mt-3">Curriculum</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="3rd yr Renewal-2nd-sem" data-title="Curriculum 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="v-stub-2" id="v-stub-2" value="">
                                                <label class="control-label bold font-xs mt-3">Voter's Stub/Certification</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="3rd yr Renewal-2nd-sem" data-title="Voter's Stub/Certification 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form-2" id="DTR-form-2" value="">
                                                <label class="control-label bold font-xs mt-3">Fully Accomplished Community Service DTR Form</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="3rd yr Renewal-2nd-sem" data-title="Fully Accomplished Community Service DTR Form 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
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
                                            <h3 class="header-title">1st sem</h3>
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                                    <label class="control-label bold font-xs">Previous Registration Form</label></div>
                                                   <a href="../../assets/image/1x1.jpg" data-lightbox="4th yr Renewal" data-title="Previous Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog" value="">
                                                    <label class="control-label bold font-xs mt-3">Certificate of Grades</label></div>
                                                    <a href="../../assets/image/CysdoLogo.jpg" data-lightbox="4th yr Renewal" data-title="Certificate of Grades 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                                    <label class="control-label bold font-xs mt-3">Current Registration Form</label></div>
                                                    <a href="../../assets/image/1x1.jpg" data-lightbox="4th yr Renewal" data-title="Current Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                                    <label class="control-label bold font-xs mt-3">Curriculum</label></div>
                                                    <a href="../../assets/image/1x1.jpg" data-lightbox="4th yr Renewal" data-title="Curriculum 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="v-stub" id="v-stub" value="">
                                                    <label class="control-label bold font-xs mt-3">Voter's Stub/Certification</label></div>
                                                    <a href="../../assets/image/1x1.jpg" data-lightbox="4th yr Renewal" data-title="Voter's Stub/Certification 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                                    <label class="control-label bold font-xs mt-3">Fully Accomplished Community Service DTR Form</label></div>
                                                    <a href="../../assets/image/1x1.jpg" data-lightbox="4th yr Renewal" data-title="Fully Accomplished Community Service DTR Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                    <div class="row">
                                        <h3 class="header-title">2nd sem</h3>
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="prev-form-2" id="prev-form-2" value="">
                                                <label class="control-label bold font-xs">Previous Registration Form</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="4th yr Renewal-2nd-sem" data-title="Previous Registration Form 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="cog-2" id="cog-2" value="">
                                                <label class="control-label bold font-xs mt-3">Certificate of Grades</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="4th yr Renewal-2nd-sem" data-title="Certificate of Grades 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form-2" id="c-reg-form-2" value="">
                                                <label class="control-label bold font-xs mt-3">Current Registration Form</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="4th yr Renewal-2nd-sem" data-title="Current Registration Form 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="curriculum-2" id="curriculum-2" value="">
                                                <label class="control-label bold font-xs mt-3">Curriculum</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="4th yr Renewal-2nd-sem" data-title="Curriculum 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="v-stub-2" id="v-stub-2" value="">
                                                <label class="control-label bold font-xs mt-3">Voter's Stub/Certification</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="4th yr Renewal-2nd-sem" data-title="Voter's Stub/Certification 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form-2" id="DTR-form-2" value="">
                                                <label class="control-label bold font-xs mt-3">Fully Accomplished Community Service DTR Form</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="4th yr Renewal-2nd-sem" data-title="Fully Accomplished Community Service DTR Form 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
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
                                            <h3 class="header-title">1st sem</h3>
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                                    <label class="control-label bold font-xs">Previous Registration Form</label></div>
                                                   <a href="../../assets/image/1x1.jpg" data-lightbox="5th yr Renewal" data-title="Previous Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog" value="">
                                                    <label class="control-label bold font-xs mt-3">Certificate of Grades</label></div>
                                                    <a href="../../assets/image/CysdoLogo.jpg" data-lightbox="5th yr Renewal" data-title="Certificate of Grades 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                                    <label class="control-label bold font-xs mt-3">Current Registration Form</label></div>
                                                    <a href="../../assets/image/1x1.jpg" data-lightbox="5th yr Renewal" data-title="Current Registration Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                                    <label class="control-label bold font-xs mt-3">Curriculum</label></div>
                                                    <a href="../../assets/image/1x1.jpg" data-lightbox="5th yr Renewal" data-title="Curriculum 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="v-stub" id="v-stub" value="">
                                                    <label class="control-label bold font-xs mt-3">Voter's Stub/Certification</label></div>
                                                    <a href="../../assets/image/1x1.jpg" data-lightbox="5th yr Renewal" data-title="Voter's Stub/Certification 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                                    <label class="control-label bold font-xs mt-3">Fully Accomplished Community Service DTR Form</label></div>
                                                    <a href="../../assets/image/1x1.jpg" data-lightbox="5th yr Renewal" data-title="Fully Accomplished Community Service DTR Form 1st Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                    <div class="row">
                                        <h3 class="header-title">2nd sem</h3>
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="prev-form-2" id="prev-form-2" value="">
                                                <label class="control-label bold font-xs">Previous Registration Form</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="5th yr Renewal-2nd-sem" data-title="Previous Registration Form 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="cog-2" id="cog-2" value="">
                                                <label class="control-label bold font-xs mt-3">Certificate of Grades</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="5th yr Renewal-2nd-sem" data-title="Certificate of Grades 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form-2" id="c-reg-form-2" value="">
                                                <label class="control-label bold font-xs mt-3">Current Registration Form</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="5th yr Renewal-2nd-sem" data-title="Current Registration Form 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="curriculum-2" id="curriculum-2" value="">
                                                <label class="control-label bold font-xs mt-3">Curriculum</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="5th yr Renewal-2nd-sem" data-title="Curriculum 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="v-stub-2" id="v-stub-2" value="">
                                                <label class="control-label bold font-xs mt-3">Voter's Stub/Certification</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="5th yr Renewal-2nd-sem" data-title="Voter's Stub/Certification 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form-2" id="DTR-form-2" value="">
                                                <label class="control-label bold font-xs mt-3">Fully Accomplished Community Service DTR Form</label></div>
                                                <a href="../../assets/image/1x1.jpg" data-lightbox="5th yr Renewal-2nd-sem" data-title="Fully Accomplished Community Service DTR Form 2nd Sem"> <input type="button" class="btn btn-info btn-sm ms-5" name="user" id="user" value="View image"></a>
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
                url: 'action/applicantViewDb.php', // Replace 'process_action.php' with the server-side script that will handle the approval/decline
                data: {
                    id: applicantId,
                    action: action
                },
                success: function(response) {
                    // Handle the response from the server if needed
                    $('h1').text(response);
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