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
                        $signaturePicPath = "../../uploads/admin/" . $image;

                        // Check if the image file exists
                        if (file_exists($signaturePicPath)) {
                            // Display the image with an id
                            echo '<img id="profilePicImage" src="' . $signaturePicPath . '" class="img-responsive" alt="image">';
                        } else {
                            // Display a default image or a placeholder image with an id
                            echo '<img id="profilePicImage" src="../../uploads/applicant/2x2/No_Image_Available.jpg" class="img-responsive" alt="Default Image">';
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

                    <p id="response"></p>

                    <ul class="portletNav nav nav-tabs justify-content-end" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="person-info" data-bs-toggle="tab" data-bs-target="#personInfo" type="button" role="tab" aria-controls="p-info" aria-selected="true">Personal Information</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="educ-bg" data-bs-toggle="tab" data-bs-target="#educBg" type="button" role="tab" aria-controls="e-background" aria-selected="false">Account Information</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="family-bg" data-bs-toggle="tab" data-bs-target="#familyBg" type="button" role="tab" aria-controls="f-background" aria-selected="false">Profile Image</button>
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

                                                    <input type="text" class="form-control datepicker" name="b-date" id="b-date" value="<?php echo $birth_date ?> ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="form-section bold font">Complete Address</h4>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="control-label bold font-xs">Address</label>
                                                <input type="text" class="form-control" name="add-ress" id="add-ress" value="<?php echo $address ?> ">
                                            </div>
                                        </div>

                                    </div>
                                    <h4 class="form-section bold font">Status</h4>
                                    <div class="row">
                                        <div class="col-md-2 col-sm-3">
                                            <div class="form-group">
                                                <label class="control-label bold font-xs">Gender</label>
                                                <select class="form-control" name="gender" id="gender">
                                                    <option value="<?php echo $gender ?>"><?php echo $gender ?></option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-3">
                                            <div class="form-group">
                                                <label class="control-label bold font-xs">Civil Status</label>
                                                <select class="form-control" name="civilStatus" id="civilStatus">
                                                    <option value="<?php echo $civil_status ?>"><?php echo $civil_status ?></option>
                                                    <option value="single">Single</option>
                                                    <option value="married">Married</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label bold font-xs">Citizenship</label>
                                                <select class="form-control" name="citizenship" id="citizenship">
                                                    <option value="<?php echo $citizenship ?>"><?php echo $citizenship ?></option>
                                                    <option value="American-">American</option>
                                                    <option value="Arabic-">Arabic</option>
                                                    <option value="Australian-">Australian</option>
                                                    <option value="Belgian-">Belgian</option>
                                                    <option value="Brazilian-">Brazilian</option>
                                                    <option value="British-">British</option>
                                                    <option value="Burmese-">Burmese</option>
                                                    <option value="Canadian-">Canadian</option>
                                                    <option value="Chinese-">Chinese</option>
                                                    <option value="Dutch-">Dutch</option>
                                                    <option value="Dutch-">Dutch</option>
                                                    <option value="Egyptian-">Egyptian</option>
                                                    <option value="Filipino-">Filipino</option>
                                                    <option value="Filipino-Chinese">Filipino-Chinese</option>
                                                    <option value="French-">French</option>
                                                    <option value="German-">German</option>
                                                    <option value="Greek-">Greek</option>
                                                    <option value="Indian-">Indian</option>
                                                    <option value="Indonesian-">Indonesian</option>
                                                    <option value="Iranian-">Iranian</option>
                                                    <option value="Iraqui-">Iraqui</option>
                                                    <option value="Irish-">Irish</option>
                                                    <option value="Israeli-">Israeli</option>
                                                    <option value="Italian-">Italian</option>
                                                    <option value="Japanese-">Japanese</option>
                                                    <option value="Korean-">Korean</option>
                                                    <option value="Mexican-">Mexican</option>
                                                    <option value="Nigerian-">Nigerian</option>
                                                    <option value="Polish-">Polish</option>
                                                    <option value="Russian-">Russian</option>
                                                    <option value="Singaporean-">Singaporean</option>
                                                    <option value="Spanish-">Spanish</option>
                                                    <option value="Sudanese-">Sudanese</option>
                                                    <option value="Swiss-">Swiss</option>
                                                    <option value="Taiwanese-">Taiwanese</option>
                                                    <option value="Thai-">Thai</option>
                                                    <option value="Turkish-">Turkish</option>

                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label bold font-xs">Contact Number</label>
                                                <input type="text" class="form-control" name="contactNum" id="contactNum" title="Please enter a valid numeric contact number" oninput="this.value = this.value.replace(/[^0-9]/g, '');" value="<?php echo $contact_number ?>">
                                            </div>
                                        </div>
                                        <div class=" col-md-3 col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label bold font-xs">Email</label>
                                                <input type="text" class="form-control" name="email" id="email" value="<?php echo $email ?> ">
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
                        <form class="updateImageForm" role="form" autocomplete="off">
                            <div class="portletForm light bg-inverse">
                                <div class="portlet-body form">
                                    <h4 class="form-section bold font">Account</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-5 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label bold font-xs">User</label>
                                                        <input type="text" class="form-control" name="user" id="user" value="<?php echo $user ?> ">
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-md-5 col-sm-6">
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
                                        <button type="button" style="float: right;" class="btnUpdate-educBg btn btn-success btn-sm">Update</button>
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
                                                        <div class="col-md-5 col-sm-6">
                                                            <div class="form-group">
                                                                <label class="control-label bold font-xs">Image</label>
                                                                <input type="file" class="form-control" name="imageUpdate" id="imageUpdate" accept="image/jpeg">
                                                                <input type="text" class="form-control" name="userid" id="userid" value="<?php echo $_SESSION['user_id']; ?> ">
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

                </div>
            </div>
        </div>
    </section>

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