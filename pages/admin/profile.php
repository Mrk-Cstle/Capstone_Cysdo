<?php
// Your database connection code here...
include '../include/dbConnection.php';
include 'include/session.php';
// Get the applicant ID from the URL
$adminId = $_SESSION['user'];

// Step 2: Construct and execute the SQL query to select the row with the specified ID
$sql = "SELECT * FROM admin WHERE full_name = '$adminId'";
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
    <link rel="stylesheet" href="../../style/tabbingProfile.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Application Form</title>

</head>

<body>
    <?php

    if ($_SESSION['role'] === 'admin') {
        include '../../assets/template/profileNav.php';
    } elseif ($_SESSION['role'] === 'staff') {
        include '../../assets/template/staffNav.php';
    }
    ?>
    <section id="content" class="home-section">
        <div class="container">
            <div class="profileBar">
                <div class="portlet light profileBar-portlet">
                    <div class="profile-pic">
                        <?php
                        $signaturePicPath = "../../uploads/applicant/2x2/" . $pic2x2;

                        // Check if the image file exists
                        if (file_exists($signaturePicPath)) {
                            // Display the image
                            echo '<img src="' . $signaturePicPath . '" class="img-responsive">';
                        } else {
                            // Display a default image or a placeholder image
                            echo '<img src="../../uploads/applicant/2x2/No_Image_Available.jpg" class="img-responsive" alt="Default Image">';
                        }
                        ?>
                    </div>
                    <div class="profile-usertab">

                        <div class="profile-user-name text-uppercase"><?php echo $full_name ?>
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
                    <ul class="portletNav nav nav-tabs justify-content-end" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="person-info" data-bs-toggle="tab" data-bs-target="#personInfo" type="button" role="tab" aria-controls="p-info" aria-selected="true">Personal Information</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="educ-bg" data-bs-toggle="tab" data-bs-target="#educBg" type="button" role="tab" aria-controls="e-background" aria-selected="false">Educational Background</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="family-bg" data-bs-toggle="tab" data-bs-target="#familyBg" type="button" role="tab" aria-controls="f-background" aria-selected="false">Family Background</button>
                        </li>
                    </ul>
                </div>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="personInfo">
                        <form class="profile-form" role="form" autocomplete="on">
                            <div class="portletForm light bg-inverse">
                                <div class="portlet-body form">
                                    <h4 class="form-section bold font">Full Name</h4>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label bold font-xs">Last Name</label>
                                                <input type="text" class="form-control" name="l-name" id="l-name" value="<?php echo $last_name ?> " readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label bold font-xs">First Name</label>
                                                <input type="text" class="form-control" name="f-name" id="f-name" value="<?php echo $first_name ?> " readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label bold font-xs">Middle Name</label>
                                                <input type="text" class="form-control" name="m-name" id="m-name" value="<?php echo $middle_name ?> " readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label bold font-xs">Birth date</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="b-date" id="b-date" value="<?php echo $birthDate ?> " readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="form-section bold font">Complete Address</h4>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="control-label bold font-xs">House No.</label>
                                                <input type="text" class="form-control" name="add-ress" id="add-ress" value="<?php echo $houseAddress ?> " readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-5">
                                            <div class="form-group">
                                                <label class="control-label bold font-xs">Block/Lot/Street</label>
                                                <input type="text" class="form-control" name="block-lot" id="block-lot" value="<?php echo $streetAddress ?> " readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-5">
                                            <div class="form-group">
                                                <label class="control-label bold font-xs">Barangay</label>
                                                <input type="text" class="form-control" name="street" id="street" value="<?php echo $barangayAddress ?> " readonly>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label bold font-xs">Place of Birth</label>
                                                <input type="text" class="form-control" name="place-birth" id="place-birth" value="<?php echo $birthPlace ?> " readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="form-section bold font">Status</h4>
                                    <div class="row">
                                        <div class="col-md-2 col-sm-3">
                                            <div class="form-group">
                                                <label class="control-label bold font-xs">Gender</label>
                                                <input type="text" class="form-control" name="place-birth" id="place-birth" value="<?php echo $gender ?> " readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-3">
                                            <div class="form-group">
                                                <label class="control-label bold font-xs">Civil Status</label>
                                                <input type="text" class="form-control" name="place-birth" id="place-birth" value="<?php echo $civilStatus ?> " readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label bold font-xs">Citizenship</label>
                                                <input type="text" class="form-control" name="place-birth" id="place-birth" value="<?php echo $citizenship ?> " readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label bold font-xs">Contact Number 1</label>
                                                <input type="text" class="form-control" name="contactNum" id="contactNum" value="<?php echo $contactNum1 ?> " readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label bold font-xs">Contact Number 2</label>
                                                <input type="text" class="form-control" name="contactNum2" id="contactNum2" value="<?php echo $contactNum2 ?> " readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-3">
                                            <div class="form-group">
                                                <label class="control-label bold font-xs">Registered Voter?</label>
                                                <input type="text" class="form-control" name="contactNum2" id="contactNum2" value="<?php echo $voter ?> " readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-3 mt-3">
                            <div class="form-actions right">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="button" style="float: right;" class="btnUpdate-peronalInfo btn btn-success btn-sm">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="educBg">
                        <form class="educ-info-form" role="form" autocomplete="off">
                            <div class="portletForm light bg-inverse">
                                <div class="portlet-body form">
                                    <h4 class="form-section bold font">School Details</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-5 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label bold font-xs">School Name (Current School)</label>
                                                        <input type="text" class="form-control" name="school-name" id="school-name" value="<?php echo $schoolName ?> " readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label bold font-xs">School Address</label>
                                                        <input type="text" class="form-control" name="school-name" id="school-name" value="<?php echo $schoolAddress ?> " readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label bold font-xs">School Type</label>
                                                        <input type="text" class="form-control" name="school-name" id="school-name" value="<?php echo $schoolType ?> " readonly>
                                                    </div>
                                                </div>
                                                <h4></h4>
                                                <div class="col-md-4 col-sm-5">
                                                    <div class="form-group">
                                                        <label class="control-label bold font-xs">Course</label>
                                                        <input type="text" class="form-control" name="school-name" id="school-name" value="<?php echo $course ?> " readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label bold font-xs">Current Year Level</label>
                                                        <input type="text" class="form-control" name="school-name" id="school-name" value="<?php echo $yearLevel ?> " readonly>
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
                                        <button type="button" style="float: right;" class="btnUpdate-educBg btn btn-success btn-sm">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="familyBg">
                        <form class="educ-info-form" role="form" autocomplete="on">
                            <div class="portletForm light bg-inverse">
                                <div class="portlet-body form">
                                    <h4 class="form-section bold font">Father</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label bold font-xs">Father Status</label>
                                                        <input type="text" class="form-control" name="school-name" id="school-name" value="<?php echo $fatherStatus ?> " readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label bold font-xs">Father Name</label>
                                                        <input type="text" class="form-control" name="fl-name" id="fl-name" value="<?php echo $fatherName ?> " readonly>
                                                    </div>
                                                </div>

                                                <h4 class="form-section bold font">Address</h4>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="control-label bold font-xs">Father Address</label>
                                                        <input type="text" class="form-control" name="fadd-ress" id="fadd-ress" value="<?php echo $fatherAddress ?> " readonly>
                                                    </div>
                                                </div>


                                                <h4 class="form-section bold font">Other Information</h4>
                                                <div class="col-md-3 col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label bold font-xs">Contact Number</label>
                                                        <input type="text" class="form-control" name="contactNumf" id="contactNumf" value="<?php echo $fatherContact ?> " readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label bold font-xs">Occupation</label>
                                                        <input type="text" class="form-control" name="f-occupation" id="f-occupation" value="<?php echo $fatherOccupation ?> " readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label bold font-xs">Educational Attainment</label>
                                                        <input type="text" class="form-control" name="f-educ-attainment" id="f-educ-attainment" value="<?php echo $fatherEduc ?> " readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <h4 class="form-section bold font">Mother</h4>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-2 col-sm-3">
                                                            <div class="form-group">
                                                                <label class="control-label bold font-xs">Mother Status</label>
                                                                <input type="text" class="form-control" name="school-name" id="school-name" value="<?php echo $motherStatus ?> " readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label bold font-xs">Mother Name</label>
                                                                <input type="text" class="form-control" name="fl-name" id="fl-name" value="<?php echo $motherName ?> " readonly>
                                                            </div>
                                                        </div>

                                                        <h4 class="form-section bold font">Address</h4>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label class="control-label bold font-xs">Mother Address</label>
                                                                <input type="text" class="form-control" name="fadd-ress" id="fadd-ress" value="<?php echo $motherAddress ?> " readonly>
                                                            </div>
                                                        </div>


                                                        <h4 class="form-section bold font">Other Information</h4>
                                                        <div class="col-md-3 col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label bold font-xs">Contact Number</label>
                                                                <input type="text" class="form-control" name="contactNumf" id="contactNumf" value="<?php echo $motherContact ?> " readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label bold font-xs">Occupation</label>
                                                                <input type="text" class="form-control" name="f-occupation" id="f-occupation" value="<?php echo $motherOccupation ?> " readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label bold font-xs">Educational Attainment</label>
                                                                <input type="text" class="form-control" name="f-educ-attainment" id="f-educ-attainment" value="<?php echo $motherEduc ?> " readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="form-section bold font">Guardian (if not living with parent/s)</h4>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">

                                                            <div class="col-md-3 col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="control-label bold font-xs">Guardian Name</label>
                                                                    <input type="text" class="form-control" name="fl-name" id="fl-name" value="<?php echo $guardianName ?> " readonly>
                                                                </div>
                                                            </div>

                                                            <h4 class="form-section bold font">Address</h4>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label class="control-label bold font-xs">Guardian Address</label>
                                                                    <input type="text" class="form-control" name="fadd-ress" id="fadd-ress" value="<?php echo $guardianAddress ?> " readonly>
                                                                </div>
                                                            </div>


                                                            <h4 class="form-section bold font">Other Information</h4>
                                                            <div class="col-md-3 col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="control-label bold font-xs">Contact Number</label>
                                                                    <input type="text" class="form-control" name="contactNumf" id="contactNumf" value="<?php echo $guardianContact ?> " readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="control-label bold font-xs">Occupation</label>
                                                                    <input type="text" class="form-control" name="f-occupation" id="f-occupation" value="<?php echo $guardianOccupation ?> " readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="control-label bold font-xs">Educational Attainment</label>
                                                                    <input type="text" class="form-control" name="f-educ-attainment" id="f-educ-attainment" value="<?php echo $guardianEduc ?> " readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h4 class="form-section bold font">Income</h4>
                                                    <div class="col-md-4 col-sm-5">
                                                        <div class="form-group">
                                                            <label class="control-label bold font-xs">Total Parent/s or Guardian/s Annual Gross Income</label>
                                                            <input type="text" class="form-control" name="total-income" id="total-income" value="<?php echo $annualGross ?> " readonly>
                                                        </div>
                                                    </div>
                                                    <h4 class="form-section bold font">Family Size</h4>
                                                    <div class="col-md-2 col-sm-3">
                                                        <div class="form-group">
                                                            <label class="control-label bold font-xs">Size of the Family (person)</label>
                                                            <input type="text" class="form-control" name="fam-size" id="fam-size" value="<?php echo $sizeFamily ?> " readonly>
                                                        </div>
                                                    </div>
                                                    <h4 class="form-section bold font">Name of Siblings (if any)</h4>
                                                    <div class="col-md-3 col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label bold font-xs"></label>
                                                            <input type="text" class="form-control" name="sibling-1" id="sibling-1" value="<?php echo $sibling1 ?> " readonly>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-3 col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label bold font-xs"></label>
                                                            <input type="text" class="form-control" name="sibling-2" id="sibling-2" value="<?php echo $sibling2 ?> " readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label bold font-xs"></label>
                                                            <input type="text" class="form-control" name="sibling-3" id="sibling-3" value="<?php echo $sibling3 ?> " readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label bold font-xs"></label>
                                                            <input type="text" class="form-control" name="sibling-4" id="sibling-4" value="<?php echo $sibling4 ?> " readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label bold font-xs"></label>
                                                            <input type="text" class="form-control" name="sibling-5" id="sibling-5" value="<?php echo $sibling5 ?> " readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label bold font-xs"></label>
                                                            <input type="text" class="form-control" name="sibling-6" id="sibling-6" value="<?php echo $sibling6 ?> " readonly>
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
                                            <button type="button" style="float: right;" class="btnUpdate-famBg btn btn-success btn-sm">Update</button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
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