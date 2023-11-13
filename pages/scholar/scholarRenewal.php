<?php
include 'include/session.php';

include '../../assets/template/scholarNav.php';
include '../include/dbConnection.php';

$sql = "SELECT * FROM scholar WHERE scholar_id = '$scholar_id'";
$result = mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style/addStaff.css">
    <link rel="stylesheet" href="../../style/renewalForm.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Renewal Form</title>

</head>

<body>
    <?php

    include '../../assets/template/scholarNav.php';

    ?>


    <section id="content" class="home-section">
        <h1></h1>
        <div class="container">

            <div class="portlet light">
                <!-- Nav tabs -->
                <div class="portlet-title tabbable-line">
                    <div class="caption caption-md">
                        <span class="caption-name font-color bold text-uppercase">Renewal Form</span>

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
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="year-1st">
                        <form id="renew_1stYr_1stSem" class="renewal-form" role="form" autocomplete="off" enctype="multipart/form-data">
                            <div class="portletForm light bg-inverse">
                                <div class="portlet-body form">
                                    <div class="row">
                                        <h3 class="header-title">1st sem (<?php echo $renew_1stYr_1stSem; ?>)</h3>
                                        </h3>

                                        <div class="col-md-8 col-sm-9 input-box">

                                            <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                                <label class="control-label bold font-xs">Previous Registration Form (COR)</label>
                                                <input type="file" class="form-control" name="prevCor" id="prevCor">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog">
                                                <label class="control-label bold font-xs">Certificate of Grades</label>
                                                <input type="file" class="form-control" name="cog" id="cog">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                                <label class="control-label bold font-xs">Current Registration Form (COR)</label>
                                                <input type="file" class="form-control" name="currentCor" id="currentCor">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                                <label class="control-label bold font-xs">Curriculum</label>
                                                <input type="file" class="form-control" name="curriculum" id="curriculum">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="v-stub" id="v-stub" value="">
                                                <label class="control-label bold font-xs">Voter's Stub/Certification</label>
                                                <input type="file" class="form-control" name="voter" id="voter">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                                <label class="control-label bold font-xs">Fully Accomplished Community Service DTR Form</label>
                                                <input type="file" class="form-control" name="dtr" id="dtr">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                                <label class="control-label bold font-xs">ATM</label>
                                                <input type="file" class="form-control" name="atm" id="atm">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                                <label class="control-label bold font-xs">Renewal E3 Form</label>
                                                <input type="file" class="form-control" name="e3Form" id="e3Form">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                                <label class="control-label bold font-xs">Academic Year</label>
                                                <input type="text" class="form-control" name="academic" id="academic">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <?php if ($renew_1stYr_1stSem == 'uploaded' || $renew_1stYr_1stSem == 'approve renewal') { ?>
                                                <button disabled style="margin-left: 60%;" class=" btn btn-success btn-sm"><?php echo $renew_1stYr_1stSem; ?></button>
                                                <?php
                                            } elseif ($renew_1stYr_1stSem == 'reupload renewal') {
                                                $sqlSELECT = "SELECT * FROM renewal_process WHERE uploader = '$scholar_id'";
                                                $queryresult = mysqli_query($conn, $sqlSELECT);

                                                if (mysqli_num_rows($queryresult) > 0) { ?>
                                                    <button disabled style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_1stYr_1stSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                                <?php } else { ?>
                                                    <button style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_1stYr_1stSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                                <?php }
                                            } else {
                                                $sqlSELECT = "SELECT * FROM renewal_process WHERE uploader = '$scholar_id'";
                                                $queryresult = mysqli_query($conn, $sqlSELECT);



                                                if (mysqli_num_rows($queryresult) > 0) { ?>
                                                    <button disabled style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_1stYr_1stSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                                <?php } else { ?>
                                                    <button style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_1stYr_1stSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                                <?php } ?>

                                            <?php }
                                            ?>

                                        </div>
                                    </div>
                                </div>
                        </form>
                        <div class="portlet-body form">
                            <form id="renew_1stYr_2ndSem" class="renewal-form" role="form" autocomplete="off" enctype="multipart/form-data">
                                <div class="row">

                                    <h3 class="header-title">2nd sem (<?php echo $renew_1stYr_2ndSem; ?>)</h3>
                                    <div class="col-md-8 col-sm-9 input-box">
                                        <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                            <label class="control-label bold font-xs">Previous Registration Form (COR)</label>
                                            <input type="file" class="form-control" name="prevCor" id="prevCor">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-9 input-box">
                                        <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog">
                                            <label class="control-label bold font-xs">Certificate of Grades</label>
                                            <input type="file" class="form-control" name="cog" id="cog">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-9 input-box">
                                        <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                            <label class="control-label bold font-xs">Current Registration Form (COR)</label>
                                            <input type="file" class="form-control" name="currentCor" id="currentCor">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-9 input-box">
                                        <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                            <label class="control-label bold font-xs">Curriculum</label>
                                            <input type="file" class="form-control" name="curriculum" id="curriculum">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-9 input-box">
                                        <div class="form-group"><input type="hidden" class="form-control" name="v-stub" id="v-stub" value="">
                                            <label class="control-label bold font-xs">Voter's Stub/Certification</label>
                                            <input type="file" class="form-control" name="voter" id="voter">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-9 input-box">
                                        <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                            <label class="control-label bold font-xs">Fully Accomplished Community Service DTR Form</label>
                                            <input type="file" class="form-control" name="dtr" id="dtr">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-9 input-box">
                                        <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                            <label class="control-label bold font-xs">ATM</label>
                                            <input type="file" class="form-control" name="atm" id="atm">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-9 input-box">
                                        <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                            <label class="control-label bold font-xs">Renewal E3 Form</label>
                                            <input type="file" class="form-control" name="e3Form" id="e3Form">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-9 input-box">
                                        <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                            <label class="control-label bold font-xs">Academic Year</label>
                                            <input type="text" class="form-control" name="academic" id="academic">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <?php if ($renew_1stYr_2ndSem == 'uploaded' || $renew_1stYr_2ndSem == 'approve renewal') { ?>
                                            <button disabled style="margin-left: 60%;" class=" btn btn-success btn-sm"><?php echo $renew_1stYr_2ndSem; ?></button>
                                            <?php
                                        } elseif ($renew_1stYr_2ndSem == 'reupload renewal') {
                                            $sqlSELECT = "SELECT * FROM renewal_process WHERE uploader = '$scholar_id'";
                                            $queryresult = mysqli_query($conn, $sqlSELECT);

                                            if (mysqli_num_rows($queryresult) > 0) { ?>
                                                <button disabled style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_1stYr_2ndSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                            <?php } else { ?>
                                                <button style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_1stYr_2ndSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                            <?php }
                                        } else {
                                            $sqlSELECT = "SELECT * FROM renewal_process WHERE uploader = '$scholar_id'";
                                            $queryresult = mysqli_query($conn, $sqlSELECT);



                                            if (mysqli_num_rows($queryresult) > 0) { ?>
                                                <button disabled style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_1stYr_2ndSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                            <?php } else { ?>
                                                <button style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_1stYr_2ndSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                            <?php } ?>

                                        <?php }
                                        ?>

                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="tab-pane" id="year-2nd">
                    <form id="renew_2ndYr_1stSem" class="renewal-form" role="form" autocomplete="off" enctype="multipart/form-data">
                        <div class="portletForm light bg-inverse">
                            <div class="portlet-body form">
                                <div class="row">
                                    <h3 class="header-title">1st sem (<?php echo $renew_2ndYr_1stSem; ?>)</h3>
                                    <div class="col-md-8 col-sm-9 input-box">
                                        <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                            <label class="control-label bold font-xs">Previous Registration Form (COR)</label>
                                            <input type="file" class="form-control" name="prevCor" id="prevCor">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-9 input-box">
                                        <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog">
                                            <label class="control-label bold font-xs">Certificate of Grades</label>
                                            <input type="file" class="form-control" name="cog" id="cog">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-9 input-box">
                                        <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                            <label class="control-label bold font-xs">Current Registration Form (COR)</label>
                                            <input type="file" class="form-control" name="currentCor" id="currentCor">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-9 input-box">
                                        <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                            <label class="control-label bold font-xs">Curriculum</label>
                                            <input type="file" class="form-control" name="curriculum" id="curriculum">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-9 input-box">
                                        <div class="form-group"><input type="hidden" class="form-control" name="v-stub" id="v-stub" value="">
                                            <label class="control-label bold font-xs">Voter's Stub/Certification</label>
                                            <input type="file" class="form-control" name="voter" id="voter">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-9 input-box">
                                        <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                            <label class="control-label bold font-xs">Fully Accomplished Community Service DTR Form</label>
                                            <input type="file" class="form-control" name="dtr" id="dtr">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-9 input-box">
                                        <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                            <label class="control-label bold font-xs">ATM</label>
                                            <input type="file" class="form-control" name="atm" id="atm">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-9 input-box">
                                        <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                            <label class="control-label bold font-xs">Renewal E3 Form</label>
                                            <input type="file" class="form-control" name="e3Form" id="e3Form">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-9 input-box">
                                        <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                            <label class="control-label bold font-xs">Academic Year</label>
                                            <input type="text" class="form-control" name="academic" id="academic">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <?php if ($renew_2ndYr_1stSem == 'uploaded' || $renew_2ndYr_1stSem == 'approve renewal') { ?>
                                            <button disabled style="margin-left: 60%;" class=" btn btn-success btn-sm"><?php echo $renew_2ndYr_1stSem; ?></button>
                                            <?php
                                        } elseif ($renew_2ndYr_1stSem == 'reupload renewal') {
                                            $sqlSELECT = "SELECT * FROM renewal_process WHERE uploader = '$scholar_id'";
                                            $queryresult = mysqli_query($conn, $sqlSELECT);

                                            if (mysqli_num_rows($queryresult) > 0) { ?>
                                                <button disabled style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_2ndYr_1stSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                            <?php } else { ?>
                                                <button style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_2ndYr_1stSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                            <?php }
                                        } else {
                                            $sqlSELECT = "SELECT * FROM renewal_process WHERE uploader = '$scholar_id'";
                                            $queryresult = mysqli_query($conn, $sqlSELECT);



                                            if (mysqli_num_rows($queryresult) > 0) { ?>
                                                <button disabled style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_2ndYr_1stSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                            <?php } else { ?>
                                                <button style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_2ndYr_1stSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                            <?php } ?>

                                        <?php }
                                        ?>

                                    </div>
                                </div>
                            </div>
                    </form>
                    <div class="portlet-body form">
                        <form id="renew_2ndYr_2ndSem" class="renewal-form" role="form" autocomplete="off" enctype="multipart/form-data">
                            <div class="row">

                                <h3 class="header-title">2nd sem (<?php echo $renew_2ndYr_2ndSem; ?>)</h3>
                                <div class="col-md-8 col-sm-9 input-box">
                                    <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                        <label class="control-label bold font-xs">Previous Registration Form (COR)</label>
                                        <input type="file" class="form-control" name="prevCor" id="prevCor">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-9 input-box">
                                    <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog">
                                        <label class="control-label bold font-xs">Certificate of Grades</label>
                                        <input type="file" class="form-control" name="cog" id="cog">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-9 input-box">
                                    <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                        <label class="control-label bold font-xs">Current Registration Form (COR)</label>
                                        <input type="file" class="form-control" name="currentCor" id="currentCor">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-9 input-box">
                                    <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                        <label class="control-label bold font-xs">Curriculum</label>
                                        <input type="file" class="form-control" name="curriculum" id="curriculum">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-9 input-box">
                                    <div class="form-group"><input type="hidden" class="form-control" name="v-stub" id="v-stub" value="">
                                        <label class="control-label bold font-xs">Voter's Stub/Certification</label>
                                        <input type="file" class="form-control" name="voter" id="voter">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-9 input-box">
                                    <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                        <label class="control-label bold font-xs">Fully Accomplished Community Service DTR Form</label>
                                        <input type="file" class="form-control" name="dtr" id="dtr">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-9 input-box">
                                    <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                        <label class="control-label bold font-xs">ATM</label>
                                        <input type="file" class="form-control" name="atm" id="atm">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-9 input-box">
                                    <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                        <label class="control-label bold font-xs">Renewal E3 Form</label>
                                        <input type="file" class="form-control" name="e3Form" id="e3Form">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-9 input-box">
                                    <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                        <label class="control-label bold font-xs">Academic Year</label>
                                        <input type="text" class="form-control" name="academic" id="academic">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <?php if ($renew_2ndYr_2ndSem == 'uploaded' || $renew_2ndYr_2ndSem == 'approve renewal') { ?>
                                        <button disabled style="margin-left: 60%;" class=" btn btn-success btn-sm"><?php echo $renew_2ndYr_2ndSem; ?></button>
                                        <?php
                                    } elseif ($renew_2ndYr_2ndSem == 'reupload renewal') {
                                        $sqlSELECT = "SELECT * FROM renewal_process WHERE uploader = '$scholar_id'";
                                        $queryresult = mysqli_query($conn, $sqlSELECT);

                                        if (mysqli_num_rows($queryresult) > 0) { ?>
                                            <button disabled style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_2ndYr_2ndSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                        <?php } else { ?>
                                            <button style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_2ndYr_2ndSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                        <?php }
                                    } else {
                                        $sqlSELECT = "SELECT * FROM renewal_process WHERE uploader = '$scholar_id'";
                                        $queryresult = mysqli_query($conn, $sqlSELECT);



                                        if (mysqli_num_rows($queryresult) > 0) { ?>
                                            <button disabled style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_2ndYr_2ndSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                        <?php } else { ?>
                                            <button style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_2ndYr_2ndSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                        <?php } ?>

                                    <?php }
                                    ?>

                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="tab-pane" id="year-3rd">
                <form id="renew_3rdYr_1stSem" class="renewal-form" role="form" autocomplete="off" enctype="multipart/form-data">
                    <div class="portletForm light bg-inverse">
                        <div class="portlet-body form">
                            <div class="row">
                                <h3 class="header-title">1st sem (<?php echo $renew_3rdYr_1stSem; ?>)</h3>
                                <div class="col-md-8 col-sm-9 input-box">
                                    <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                        <label class="control-label bold font-xs">Previous Registration Form (COR)</label>
                                        <input type="file" class="form-control" name="prevCor" id="prevCor">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-9 input-box">
                                    <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog">
                                        <label class="control-label bold font-xs">Certificate of Grades</label>
                                        <input type="file" class="form-control" name="cog" id="cog">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-9 input-box">
                                    <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                        <label class="control-label bold font-xs">Current Registration Form (COR)</label>
                                        <input type="file" class="form-control" name="currentCor" id="currentCor">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-9 input-box">
                                    <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                        <label class="control-label bold font-xs">Curriculum</label>
                                        <input type="file" class="form-control" name="curriculum" id="curriculum">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-9 input-box">
                                    <div class="form-group"><input type="hidden" class="form-control" name="v-stub" id="v-stub" value="">
                                        <label class="control-label bold font-xs">Voter's Stub/Certification</label>
                                        <input type="file" class="form-control" name="voter" id="voter">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-9 input-box">
                                    <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                        <label class="control-label bold font-xs">Fully Accomplished Community Service DTR Form</label>
                                        <input type="file" class="form-control" name="dtr" id="dtr">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-9 input-box">
                                    <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                        <label class="control-label bold font-xs">ATM</label>
                                        <input type="file" class="form-control" name="atm" id="atm">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-9 input-box">
                                    <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                        <label class="control-label bold font-xs">Renewal E3 Form</label>
                                        <input type="file" class="form-control" name="e3Form" id="e3Form">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-9 input-box">
                                    <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                        <label class="control-label bold font-xs">Academic Year</label>
                                        <input type="text" class="form-control" name="academic" id="academic">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <?php if ($renew_3rdYr_1stSem == 'uploaded' || $renew_3rdYr_1stSem == 'approve renewal') { ?>
                                        <button disabled style="margin-left: 60%;" class=" btn btn-success btn-sm"><?php echo $renew_3rdYr_1stSem; ?></button>
                                        <?php
                                    } elseif ($renew_3rdYr_1stSem == 'reupload renewal') {
                                        $sqlSELECT = "SELECT * FROM renewal_process WHERE uploader = '$scholar_id'";
                                        $queryresult = mysqli_query($conn, $sqlSELECT);

                                        if (mysqli_num_rows($queryresult) > 0) { ?>
                                            <button disabled style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_3rdYr_1stSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                        <?php } else { ?>
                                            <button style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_3rdYr_1stSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                        <?php }
                                    } else {
                                        $sqlSELECT = "SELECT * FROM renewal_process WHERE uploader = '$scholar_id'";
                                        $queryresult = mysqli_query($conn, $sqlSELECT);



                                        if (mysqli_num_rows($queryresult) > 0) { ?>
                                            <button disabled style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_3rdYr_1stSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                        <?php } else { ?>
                                            <button style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_3rdYr_1stSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                        <?php } ?>

                                    <?php }
                                    ?>

                                </div>
                            </div>
                        </div>
                </form>
                <div class="portlet-body form">
                    <form id="renew_3rdYr_2ndSem" class="renewal-form" role="form" autocomplete="off" enctype="multipart/form-data">
                        <div class="row">

                            <h3 class="header-title">2nd sem (<?php echo $renew_3rdYr_2ndSem; ?>)</h3>
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                    <label class="control-label bold font-xs">Previous Registration Form (COR)</label>
                                    <input type="file" class="form-control" name="prevCor" id="prevCor">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog">
                                    <label class="control-label bold font-xs">Certificate of Grades</label>
                                    <input type="file" class="form-control" name="cog" id="cog">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                    <label class="control-label bold font-xs">Current Registration Form (COR)</label>
                                    <input type="file" class="form-control" name="currentCor" id="currentCor">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                    <label class="control-label bold font-xs">Curriculum</label>
                                    <input type="file" class="form-control" name="curriculum" id="curriculum">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="v-stub" id="v-stub" value="">
                                    <label class="control-label bold font-xs">Voter's Stub/Certification</label>
                                    <input type="file" class="form-control" name="voter" id="voter">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                    <label class="control-label bold font-xs">Fully Accomplished Community Service DTR Form</label>
                                    <input type="file" class="form-control" name="dtr" id="dtr">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                    <label class="control-label bold font-xs">ATM</label>
                                    <input type="file" class="form-control" name="atm" id="atm">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                    <label class="control-label bold font-xs">Renewal E3 Form</label>
                                    <input type="file" class="form-control" name="e3Form" id="e3Form">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                    <label class="control-label bold font-xs">Academic Year</label>
                                    <input type="text" class="form-control" name="academic" id="academic">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <?php if ($renew_3rdYr_2ndSem == 'uploaded' || $renew_3rdYr_2ndSem == 'approve renewal') { ?>
                                    <button disabled style="margin-left: 60%;" class=" btn btn-success btn-sm"><?php echo $renew_3rdYr_2ndSem; ?></button>
                                    <?php
                                } elseif ($renew_3rdYr_2ndSem == 'reupload renewal') {
                                    $sqlSELECT = "SELECT * FROM renewal_process WHERE uploader = '$scholar_id'";
                                    $queryresult = mysqli_query($conn, $sqlSELECT);

                                    if (mysqli_num_rows($queryresult) > 0) { ?>
                                        <button disabled style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_3rdYr_2ndSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                    <?php } else { ?>
                                        <button style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_3rdYr_2ndSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                    <?php }
                                } else {
                                    $sqlSELECT = "SELECT * FROM renewal_process WHERE uploader = '$scholar_id'";
                                    $queryresult = mysqli_query($conn, $sqlSELECT);



                                    if (mysqli_num_rows($queryresult) > 0) { ?>
                                        <button disabled style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_3rdYr_2ndSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                    <?php } else { ?>
                                        <button style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_3rdYr_2ndSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                    <?php } ?>

                                <?php }
                                ?>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="year-4th">
            <form id="renew_4thYr_1stSem" class="renewal-form" role="form" autocomplete="off" enctype="multipart/form-data">
                <div class="portletForm light bg-inverse">
                    <div class="portlet-body form">
                        <div class="row">
                            <h3 class="header-title">1st sem (<?php echo $renew_4thYr_1stSem; ?>)</h3>
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                    <label class="control-label bold font-xs">Previous Registration Form (COR)</label>
                                    <input type="file" class="form-control" name="prevCor" id="prevCor">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog">
                                    <label class="control-label bold font-xs">Certificate of Grades</label>
                                    <input type="file" class="form-control" name="cog" id="cog">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                    <label class="control-label bold font-xs">Current Registration Form (COR)</label>
                                    <input type="file" class="form-control" name="currentCor" id="currentCor">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                    <label class="control-label bold font-xs">Curriculum</label>
                                    <input type="file" class="form-control" name="curriculum" id="curriculum">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="v-stub" id="v-stub" value="">
                                    <label class="control-label bold font-xs">Voter's Stub/Certification</label>
                                    <input type="file" class="form-control" name="voter" id="voter">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                    <label class="control-label bold font-xs">Fully Accomplished Community Service DTR Form</label>
                                    <input type="file" class="form-control" name="dtr" id="dtr">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                    <label class="control-label bold font-xs">ATM</label>
                                    <input type="file" class="form-control" name="atm" id="atm">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                    <label class="control-label bold font-xs">Renewal E3 Form</label>
                                    <input type="file" class="form-control" name="e3Form" id="e3Form">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                    <label class="control-label bold font-xs">Academic Year</label>
                                    <input type="text" class="form-control" name="academic" id="academic">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <?php if ($renew_4thYr_1stSem == 'uploaded' || $renew_4thYr_1stSem == 'approve renewal') { ?>
                                    <button disabled style="margin-left: 60%;" class=" btn btn-success btn-sm"><?php echo $renew_4thYr_1stSem; ?></button>
                                    <?php
                                } elseif ($renew_4thYr_1stSem == 'reupload renewal') {
                                    $sqlSELECT = "SELECT * FROM renewal_process WHERE uploader = '$scholar_id'";
                                    $queryresult = mysqli_query($conn, $sqlSELECT);

                                    if (mysqli_num_rows($queryresult) > 0) { ?>
                                        <button disabled style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_4thYr_1stSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                    <?php } else { ?>
                                        <button style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_4thYr_1stSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                    <?php }
                                } else {
                                    $sqlSELECT = "SELECT * FROM renewal_process WHERE uploader = '$scholar_id'";
                                    $queryresult = mysqli_query($conn, $sqlSELECT);



                                    if (mysqli_num_rows($queryresult) > 0) { ?>
                                        <button disabled style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_4thYr_1stSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                    <?php } else { ?>
                                        <button style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_4thYr_1stSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                    <?php } ?>

                                <?php }
                                ?>

                            </div>
                        </div>
                    </div>
            </form>
            <div class="portlet-body form">
                <form id="renew_4thYr_2ndSem" class="renewal-form" role="form" autocomplete="off" enctype="multipart/form-data">
                    <div class="row">

                        <h3 class="header-title">2nd sem (<?php echo $renew_4thYr_2ndSem; ?>)</h3>
                        <div class="col-md-8 col-sm-9 input-box">
                            <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                <label class="control-label bold font-xs">Previous Registration Form (COR)</label>
                                <input type="file" class="form-control" name="prevCor" id="prevCor">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-9 input-box">
                            <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog">
                                <label class="control-label bold font-xs">Certificate of Grades</label>
                                <input type="file" class="form-control" name="cog" id="cog">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-9 input-box">
                            <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                <label class="control-label bold font-xs">Current Registration Form (COR)</label>
                                <input type="file" class="form-control" name="currentCor" id="currentCor">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-9 input-box">
                            <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                <label class="control-label bold font-xs">Curriculum</label>
                                <input type="file" class="form-control" name="curriculum" id="curriculum">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-9 input-box">
                            <div class="form-group"><input type="hidden" class="form-control" name="v-stub" id="v-stub" value="">
                                <label class="control-label bold font-xs">Voter's Stub/Certification</label>
                                <input type="file" class="form-control" name="voter" id="voter">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-9 input-box">
                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                <label class="control-label bold font-xs">Fully Accomplished Community Service DTR Form</label>
                                <input type="file" class="form-control" name="dtr" id="dtr">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-9 input-box">
                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                <label class="control-label bold font-xs">ATM</label>
                                <input type="file" class="form-control" name="atm" id="atm">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-9 input-box">
                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                <label class="control-label bold font-xs">Renewal E3 Form</label>
                                <input type="file" class="form-control" name="e3Form" id="e3Form">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-9 input-box">
                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                <label class="control-label bold font-xs">Academic Year</label>
                                <input type="text" class="form-control" name="academic" id="academic">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <?php if ($renew_4thYr_2ndSem == 'uploaded' || $renew_4thYr_2ndSem == 'approve renewal') { ?>
                                <button disabled style="margin-left: 60%;" class=" btn btn-success btn-sm"><?php echo $renew_4thYr_2ndSem; ?></button>
                                <?php
                            } elseif ($renew_4thYr_2ndSem == 'reupload renewal') {
                                $sqlSELECT = "SELECT * FROM renewal_process WHERE uploader = '$scholar_id'";
                                $queryresult = mysqli_query($conn, $sqlSELECT);

                                if (mysqli_num_rows($queryresult) > 0) { ?>
                                    <button disabled style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_4thYr_2ndSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                <?php } else { ?>
                                    <button style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_4thYr_2ndSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                <?php }
                            } else {
                                $sqlSELECT = "SELECT * FROM renewal_process WHERE uploader = '$scholar_id'";
                                $queryresult = mysqli_query($conn, $sqlSELECT);



                                if (mysqli_num_rows($queryresult) > 0) { ?>
                                    <button disabled style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_4thYr_2ndSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                <?php } else { ?>
                                    <button style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_4thYr_2ndSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                <?php } ?>

                            <?php }
                            ?>

                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
        <div class="tab-pane" id="year-5th">
            <form id="renew_5thYr_1stSem" class="renewal-form" role="form" autocomplete="off" enctype="multipart/form-data">
                <div class="portletForm light bg-inverse">
                    <div class="portlet-body form">
                        <div class="row">
                            <h3 class="header-title">1st sem (<?php echo $renew_5thYr_1stSem; ?>)</h3>
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                    <label class="control-label bold font-xs">Previous Registration Form (COR)</label>
                                    <input type="file" class="form-control" name="prevCor" id="prevCor">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog">
                                    <label class="control-label bold font-xs">Certificate of Grades</label>
                                    <input type="file" class="form-control" name="cog" id="cog">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                    <label class="control-label bold font-xs">Current Registration Form (COR)</label>
                                    <input type="file" class="form-control" name="currentCor" id="currentCor">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                    <label class="control-label bold font-xs">Curriculum</label>
                                    <input type="file" class="form-control" name="curriculum" id="curriculum">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="v-stub" id="v-stub" value="">
                                    <label class="control-label bold font-xs">Voter's Stub/Certification</label>
                                    <input type="file" class="form-control" name="voter" id="voter">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                    <label class="control-label bold font-xs">Fully Accomplished Community Service DTR Form</label>
                                    <input type="file" class="form-control" name="dtr" id="dtr">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                    <label class="control-label bold font-xs">ATM</label>
                                    <input type="file" class="form-control" name="atm" id="atm">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                    <label class="control-label bold font-xs">Renewal E3 Form</label>
                                    <input type="file" class="form-control" name="e3Form" id="e3Form">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                    <label class="control-label bold font-xs">Academic Year</label>
                                    <input type="text" class="form-control" name="academic" id="academic">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <?php if ($renew_5thYr_1stSem == 'uploaded' || $renew_5thYr_1stSem == 'approve renewal') { ?>
                                    <button disabled style="margin-left: 60%;" class=" btn btn-success btn-sm"><?php echo $renew_5thYr_1stSem; ?></button>
                                    <?php
                                } elseif ($renew_5thYr_1stSem == 'reupload renewal') {
                                    $sqlSELECT = "SELECT * FROM renewal_process WHERE uploader = '$scholar_id'";
                                    $queryresult = mysqli_query($conn, $sqlSELECT);

                                    if (mysqli_num_rows($queryresult) > 0) { ?>
                                        <button disabled style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_5thYr_1stSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                    <?php } else { ?>
                                        <button style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_5thYr_1stSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                    <?php }
                                } else {
                                    $sqlSELECT = "SELECT * FROM renewal_process WHERE uploader = '$scholar_id'";
                                    $queryresult = mysqli_query($conn, $sqlSELECT);



                                    if (mysqli_num_rows($queryresult) > 0) { ?>
                                        <button disabled style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_5thYr_1stSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                    <?php } else { ?>
                                        <button style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_5thYr_1stSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                    <?php } ?>

                                <?php }
                                ?>

                            </div>
                        </div>
                    </div>
            </form>
            <div class="portlet-body form">
                <form id="renew_5thYr_2ndSem" class="renewal-form" role="form" autocomplete="off" enctype="multipart/form-data">
                    <div class="row">

                        <h3 class="header-title">2nd sem (<?php echo $renew_5thYr_2ndSem; ?>)</h3>
                        <div class="col-md-8 col-sm-9 input-box">
                            <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                <label class="control-label bold font-xs">Previous Registration Form (COR)</label>
                                <input type="file" class="form-control" name="prevCor" id="prevCor">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-9 input-box">
                            <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog">
                                <label class="control-label bold font-xs">Certificate of Grades</label>
                                <input type="file" class="form-control" name="cog" id="cog">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-9 input-box">
                            <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                <label class="control-label bold font-xs">Current Registration Form (COR)</label>
                                <input type="file" class="form-control" name="currentCor" id="currentCor">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-9 input-box">
                            <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                <label class="control-label bold font-xs">Curriculum</label>
                                <input type="file" class="form-control" name="curriculum" id="curriculum">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-9 input-box">
                            <div class="form-group"><input type="hidden" class="form-control" name="v-stub" id="v-stub" value="">
                                <label class="control-label bold font-xs">Voter's Stub/Certification</label>
                                <input type="file" class="form-control" name="voter" id="voter">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-9 input-box">
                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                <label class="control-label bold font-xs">Fully Accomplished Community Service DTR Form</label>
                                <input type="file" class="form-control" name="dtr" id="dtr">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-9 input-box">
                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                <label class="control-label bold font-xs">ATM</label>
                                <input type="file" class="form-control" name="atm" id="atm">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-9 input-box">
                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                <label class="control-label bold font-xs">Renewal E3 Form</label>
                                <input type="file" class="form-control" name="e3Form" id="e3Form">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-9 input-box">
                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                <label class="control-label bold font-xs">Academic Year</label>
                                <input type="text" class="form-control" name="academic" id="academic">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <?php if ($renew_5thYr_2ndSem == 'uploaded' || $renew_5thYr_2ndSem == 'approve renewal') { ?>
                                <button disabled style="margin-left: 60%;" class=" btn btn-success btn-sm"><?php echo $renew_5thYr_2ndSem; ?></button>
                                <?php
                            } elseif ($renew_5thYr_2ndSem == 'reupload renewal') {
                                $sqlSELECT = "SELECT * FROM renewal_process WHERE uploader = '$scholar_id'";
                                $queryresult = mysqli_query($conn, $sqlSELECT);

                                if (mysqli_num_rows($queryresult) > 0) { ?>
                                    <button disabled style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_5thYr_2ndSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                <?php } else { ?>
                                    <button style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_5thYr_2ndSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                <?php }
                            } else {
                                $sqlSELECT = "SELECT * FROM renewal_process WHERE uploader = '$scholar_id'";
                                $queryresult = mysqli_query($conn, $sqlSELECT);



                                if (mysqli_num_rows($queryresult) > 0) { ?>
                                    <button disabled style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_5thYr_2ndSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                <?php } else { ?>
                                    <button style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_5thYr_2ndSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                <?php } ?>

                            <?php }
                            ?>

                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>

        <div class="tab-pane" id="year-6th">
            <form id="renew_6thYr_1stSem" class="renewal-form" role="form" autocomplete="off" enctype="multipart/form-data">
                <div class="portletForm light bg-inverse">
                    <div class="portlet-body form">
                        <div class="row">
                            <h3 class="header-title">1st sem (<?php echo $renew_6thYr_1stSem; ?>)</h3>
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                    <label class="control-label bold font-xs">Previous Registration Form (COR)</label>
                                    <input type="file" class="form-control" name="prevCor" id="prevCor">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog">
                                    <label class="control-label bold font-xs">Certificate of Grades</label>
                                    <input type="file" class="form-control" name="cog" id="cog">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                    <label class="control-label bold font-xs">Current Registration Form (COR)</label>
                                    <input type="file" class="form-control" name="currentCor" id="currentCor">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                    <label class="control-label bold font-xs">Curriculum</label>
                                    <input type="file" class="form-control" name="curriculum" id="curriculum">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="v-stub" id="v-stub" value="">
                                    <label class="control-label bold font-xs">Voter's Stub/Certification</label>
                                    <input type="file" class="form-control" name="voter" id="voter">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                    <label class="control-label bold font-xs">Fully Accomplished Community Service DTR Form</label>
                                    <input type="file" class="form-control" name="dtr" id="dtr">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                    <label class="control-label bold font-xs">ATM</label>
                                    <input type="file" class="form-control" name="atm" id="atm">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                    <label class="control-label bold font-xs">Renewal E3 Form</label>
                                    <input type="file" class="form-control" name="e3Form" id="e3Form">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-9 input-box">
                                <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                    <label class="control-label bold font-xs">Academic Year</label>
                                    <input type="text" class="form-control" name="academic" id="academic">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <?php if ($renew_6thYr_1stSem == 'uploaded' || $renew_6thYr_1stSem == 'approve renewal') { ?>
                                    <button disabled style="margin-left: 60%;" class=" btn btn-success btn-sm"><?php echo $renew_6thYr_1stSem; ?></button>
                                    <?php
                                } elseif ($renew_6thYr_1stSem == 'reupload renewal') {
                                    $sqlSELECT = "SELECT * FROM renewal_process WHERE uploader = '$scholar_id'";
                                    $queryresult = mysqli_query($conn, $sqlSELECT);

                                    if (mysqli_num_rows($queryresult) > 0) { ?>
                                        <button disabled style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_6thYr_1stSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                    <?php } else { ?>
                                        <button style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_6thYr_1stSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                    <?php }
                                } else {
                                    $sqlSELECT = "SELECT * FROM renewal_process WHERE uploader = '$scholar_id'";
                                    $queryresult = mysqli_query($conn, $sqlSELECT);



                                    if (mysqli_num_rows($queryresult) > 0) { ?>
                                        <button disabled style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_6thYr_1stSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                    <?php } else { ?>
                                        <button style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_6thYr_1stSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                    <?php } ?>

                                <?php }
                                ?>

                            </div>
                        </div>
                    </div>
            </form>
            <div class="portlet-body form">
                <form id="renew_6thYr_2ndSem" class="renewal-form" role="form" autocomplete="off" enctype="multipart/form-data">
                    <div class="row">

                        <h3 class="header-title">2nd sem (<?php echo $renew_6thYr_2ndSem; ?>)</h3>
                        <div class="col-md-8 col-sm-9 input-box">
                            <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                <label class="control-label bold font-xs">Previous Registration Form (COR)</label>
                                <input type="file" class="form-control" name="prevCor" id="prevCor">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-9 input-box">
                            <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog">
                                <label class="control-label bold font-xs">Certificate of Grades</label>
                                <input type="file" class="form-control" name="cog" id="cog">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-9 input-box">
                            <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                <label class="control-label bold font-xs">Current Registration Form (COR)</label>
                                <input type="file" class="form-control" name="currentCor" id="currentCor">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-9 input-box">
                            <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                <label class="control-label bold font-xs">Curriculum</label>
                                <input type="file" class="form-control" name="curriculum" id="curriculum">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-9 input-box">
                            <div class="form-group"><input type="hidden" class="form-control" name="v-stub" id="v-stub" value="">
                                <label class="control-label bold font-xs">Voter's Stub/Certification</label>
                                <input type="file" class="form-control" name="voter" id="voter">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-9 input-box">
                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                <label class="control-label bold font-xs">Fully Accomplished Community Service DTR Form</label>
                                <input type="file" class="form-control" name="dtr" id="dtr">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-9 input-box">
                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                <label class="control-label bold font-xs">ATM</label>
                                <input type="file" class="form-control" name="atm" id="atm">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-9 input-box">
                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                <label class="control-label bold font-xs">Renewal E3 Form</label>
                                <input type="file" class="form-control" name="e3Form" id="e3Form">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-9 input-box">
                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                <label class="control-label bold font-xs">Academic Year</label>
                                <input type="text" class="form-control" name="academic" id="academic">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <?php if ($renew_6thYr_2ndSem == 'uploaded' || $renew_6thYr_2ndSem == 'approve renewal') { ?>
                                <button disabled style="margin-left: 60%;" class=" btn btn-success btn-sm"><?php echo $renew_6thYr_2ndSem; ?></button>
                                <?php
                            } elseif ($renew_6thYr_2ndSem == 'reupload renewal') {
                                $sqlSELECT = "SELECT * FROM renewal_process WHERE uploader = '$scholar_id'";
                                $queryresult = mysqli_query($conn, $sqlSELECT);

                                if (mysqli_num_rows($queryresult) > 0) { ?>
                                    <button disabled style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_6thYr_2ndSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                <?php } else { ?>
                                    <button style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_6thYr_2ndSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                <?php }
                            } else {
                                $sqlSELECT = "SELECT * FROM renewal_process WHERE uploader = '$scholar_id'";
                                $queryresult = mysqli_query($conn, $sqlSELECT);



                                if (mysqli_num_rows($queryresult) > 0) { ?>
                                    <button disabled style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_6thYr_2ndSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                <?php } else { ?>
                                    <button style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm" onclick="sendAction('<?php echo $scholar_id; ?>', 'renew_6thYr_2ndSem', '<?php echo $_SESSION['user']; ?>')">Submit</button>
                                <?php } ?>

                            <?php }
                            ?>

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
        function sendAction(scholar_id, action, user) {
            // Create an AJAX request
            event.preventDefault();
            var formData = new FormData(document.getElementById(action));
            formData.append('scholar_id', scholar_id);
            formData.append('action', action);
            formData.append('user', user);
            $.ajax({
                type: 'POST', // You can use 'GET' if preferred
                url: 'action/renewal.php', // Replace 'process_action.php' with the server-side script that will handle the approval/decline
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    // Handle the response from the server if needed

                    var actions = action;
                    var form = document.getElementById(actions);
                    console.log(actions);
                    // Find the submit button within the form
                    var button = form.querySelector('button.btn-success');

                    if (button) {
                        button.textContent = response;
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

</body>

</html>