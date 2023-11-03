
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
    <title>Application Form</title>

</head>

<body>
    


    <section id="content" class="home-section">
        
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

                        </ul>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="year-1st">
                            <form id="renewalForm" class="renewal-form" role="form" autocomplete="off">
                                <div class="portletForm light bg-inverse">
                                    <div class="portlet-body form">
                                        <div class="row">
                                            <h3 class="header-title">1st sem</h3>
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                                    <label class="control-label bold font-xs">Previous Registration Form</label>
                                                    <input type="file" class="form-control" name="user" id="user" value=""></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog" value="">
                                                    <label class="control-label bold font-xs">Certificate of Grades</label>
                                                    <input type="file" class="form-control" name="user" id="user" value=""></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                                    <label class="control-label bold font-xs">Current Registration Form</label>
                                                    <input type="file" class="form-control" name="user" id="user" value=""></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                                    <label class="control-label bold font-xs">Curriculum</label>
                                                    <input type="file" class="form-control" name="user" id="user" value=""></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="v-stub" id="v-stub" value="">
                                                    <label class="control-label bold font-xs">Voter's Stub/Certification</label>
                                                    <input type="file" class="form-control" name="user" id="user" value=""></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                                    <label class="control-label bold font-xs">Fully Accomplished Community Service DTR Form</label>
                                                    <input type="file" class="form-control" name="user" id="user" value=""></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                    <div class="row">
                                        <h3 class="header-title">2nd sem</h3>
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="prev-form-2" id="prev-form-2" value="">
                                                <label class="control-label bold font-xs">Previous Registration Form</label>
                                                <input type="file" class="form-control" name="user" id="user" value=""></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="cog-2" id="cog-2" value="">
                                                <label class="control-label bold font-xs">Certificate of Grades</label>
                                                <input type="file" class="form-control" name="user" id="user" value=""></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form-2" id="c-reg-form-2" value="">
                                                <label class="control-label bold font-xs">Current Registration Form</label>
                                                <input type="file" class="form-control" name="user" id="user" value=""></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="curriculum-2" id="curriculum-2" value="">
                                                <label class="control-label bold font-xs">Curriculum</label>
                                                <input type="file" class="form-control" name="user" id="user" value=""></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="v-stub-2" id="v-stub-2" value="">
                                                <label class="control-label bold font-xs">Voter's Stub/Certification</label>
                                                <input type="file" class="form-control" name="user" id="user" value=""></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 input-box">
                                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form-2" id="DTR-form-2" value="">
                                                <label class="control-label bold font-xs">Fully Accomplished Community Service DTR Form</label>
                                                <input type="file" class="form-control" name="user" id="user" value=""></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm">Submit</button>
                                        </div>
                                    </div>
                                 </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="year-2nd">
                                <form id="renewalForm" class="renewal-form" role="form" autocomplete="off">
                                    <div class="portletForm light bg-inverse">
                                        <div class="portlet-body form">
                                            <div class="row">
                                                <h3 class="header-title">1st sem</h3>
                                                <div class="col-md-8 col-sm-9 input-box">
                                                    <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                                        <label class="control-label bold font-xs">Previous Registration Form</label>
                                                        <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-sm-9 input-box">
                                                    <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog" value="">
                                                        <label class="control-label bold font-xs">Certificate of Grades</label>
                                                        <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-sm-9 input-box">
                                                    <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                                        <label class="control-label bold font-xs">Current Registration Form</label>
                                                        <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-sm-9 input-box">
                                                    <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                                        <label class="control-label bold font-xs">Curriculum</label>
                                                        <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-sm-9 input-box">
                                                    <div class="form-group"><input type="hidden" class="form-control" name="v-stub" id="v-stub" value="">
                                                        <label class="control-label bold font-xs">Voter's Stub/Certification</label>
                                                        <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-sm-9 input-box">
                                                    <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                                        <label class="control-label bold font-xs">Fully Accomplished Community Service DTR Form</label>
                                                        <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet-body form">
                                        <div class="row">
                                            <h3 class="header-title">2nd sem</h3>
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="prev-form-2" id="prev-form-2" value="">
                                                    <label class="control-label bold font-xs">Previous Registration Form</label>
                                                    <input type="file" class="form-control" name="user" id="user" value=""></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="cog-2" id="cog-2" value="">
                                                    <label class="control-label bold font-xs">Certificate of Grades</label>
                                                    <input type="file" class="form-control" name="user" id="user" value=""></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form-2" id="c-reg-form-2" value="">
                                                    <label class="control-label bold font-xs">Current Registration Form</label>
                                                    <input type="file" class="form-control" name="user" id="user" value=""></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="curriculum-2" id="curriculum-2" value="">
                                                    <label class="control-label bold font-xs">Curriculum</label>
                                                    <input type="file" class="form-control" name="user" id="user" value=""></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="v-stub-2" id="v-stub-2" value="">
                                                    <label class="control-label bold font-xs">Voter's Stub/Certification</label>
                                                    <input type="file" class="form-control" name="user" id="user" value=""></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-9 input-box">
                                                <div class="form-group"><input type="hidden" class="form-control" name="DTR-form-2" id="DTR-form-2" value="">
                                                    <label class="control-label bold font-xs">Fully Accomplished Community Service DTR Form</label>
                                                    <input type="file" class="form-control" name="user" id="user" value=""></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm">Submit</button>
                                            </div>
                                        </div>
                                     </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="year-3rd">
                                    <form id="renewalForm" class="renewal-form" role="form" autocomplete="off">
                                        <div class="portletForm light bg-inverse">
                                            <div class="portlet-body form">
                                                <div class="row">
                                                    <h3 class="header-title">1st sem</h3>
                                                    <div class="col-md-8 col-sm-9 input-box">
                                                        <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                                            <label class="control-label bold font-xs">Previous Registration Form</label>
                                                            <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-9 input-box">
                                                        <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog" value="">
                                                            <label class="control-label bold font-xs">Certificate of Grades</label>
                                                            <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-9 input-box">
                                                        <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                                            <label class="control-label bold font-xs">Current Registration Form</label>
                                                            <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-9 input-box">
                                                        <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                                            <label class="control-label bold font-xs">Curriculum</label>
                                                            <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-9 input-box">
                                                        <div class="form-group"><input type="hidden" class="form-control" name="v-stub" id="v-stub" value="">
                                                            <label class="control-label bold font-xs">Voter's Stub/Certification</label>
                                                            <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-9 input-box">
                                                        <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                                            <label class="control-label bold font-xs">Fully Accomplished Community Service DTR Form</label>
                                                            <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button type="submit" style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                            <div class="row">
                                                <h3 class="header-title">2nd sem</h3>
                                                <div class="col-md-8 col-sm-9 input-box">
                                                    <div class="form-group"><input type="hidden" class="form-control" name="prev-form-2" id="prev-form-2" value="">
                                                        <label class="control-label bold font-xs">Previous Registration Form</label>
                                                        <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-sm-9 input-box">
                                                    <div class="form-group"><input type="hidden" class="form-control" name="cog-2" id="cog-2" value="">
                                                        <label class="control-label bold font-xs">Certificate of Grades</label>
                                                        <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-sm-9 input-box">
                                                    <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form-2" id="c-reg-form-2" value="">
                                                        <label class="control-label bold font-xs">Current Registration Form</label>
                                                        <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-sm-9 input-box">
                                                    <div class="form-group"><input type="hidden" class="form-control" name="curriculum-2" id="curriculum-2" value="">
                                                        <label class="control-label bold font-xs">Curriculum</label>
                                                        <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-sm-9 input-box">
                                                    <div class="form-group"><input type="hidden" class="form-control" name="v-stub-2" id="v-stub-2" value="">
                                                        <label class="control-label bold font-xs">Voter's Stub/Certification</label>
                                                        <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-sm-9 input-box">
                                                    <div class="form-group"><input type="hidden" class="form-control" name="DTR-form-2" id="DTR-form-2" value="">
                                                        <label class="control-label bold font-xs">Fully Accomplished Community Service DTR Form</label>
                                                        <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm">Submit</button>
                                                </div>
                                            </div>
                                         </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="year-4th">
                                        <form id="renewalForm" class="renewal-form" role="form" autocomplete="off">
                                            <div class="portletForm light bg-inverse">
                                                <div class="portlet-body form">
                                                    <div class="row">
                                                        <h3 class="header-title">1st sem</h3>
                                                        <div class="col-md-8 col-sm-9 input-box">
                                                            <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                                                <label class="control-label bold font-xs">Previous Registration Form</label>
                                                                <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8 col-sm-9 input-box">
                                                            <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog" value="">
                                                                <label class="control-label bold font-xs">Certificate of Grades</label>
                                                                <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8 col-sm-9 input-box">
                                                            <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                                                <label class="control-label bold font-xs">Current Registration Form</label>
                                                                <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8 col-sm-9 input-box">
                                                            <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                                                <label class="control-label bold font-xs">Curriculum</label>
                                                                <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8 col-sm-9 input-box">
                                                            <div class="form-group"><input type="hidden" class="form-control" name="v-stub" id="v-stub" value="">
                                                                <label class="control-label bold font-xs">Voter's Stub/Certification</label>
                                                                <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8 col-sm-9 input-box">
                                                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                                                <label class="control-label bold font-xs">Fully Accomplished Community Service DTR Form</label>
                                                                <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <button type="submit" style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="portlet-body form">
                                                <div class="row">
                                                    <h3 class="header-title">2nd sem</h3>
                                                    <div class="col-md-8 col-sm-9 input-box">
                                                        <div class="form-group"><input type="hidden" class="form-control" name="prev-form-2" id="prev-form-2" value="">
                                                            <label class="control-label bold font-xs">Previous Registration Form</label>
                                                            <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-9 input-box">
                                                        <div class="form-group"><input type="hidden" class="form-control" name="cog-2" id="cog-2" value="">
                                                            <label class="control-label bold font-xs">Certificate of Grades</label>
                                                            <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-9 input-box">
                                                        <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form-2" id="c-reg-form-2" value="">
                                                            <label class="control-label bold font-xs">Current Registration Form</label>
                                                            <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-9 input-box">
                                                        <div class="form-group"><input type="hidden" class="form-control" name="curriculum-2" id="curriculum-2" value="">
                                                            <label class="control-label bold font-xs">Curriculum</label>
                                                            <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-9 input-box">
                                                        <div class="form-group"><input type="hidden" class="form-control" name="v-stub-2" id="v-stub-2" value="">
                                                            <label class="control-label bold font-xs">Voter's Stub/Certification</label>
                                                            <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-9 input-box">
                                                        <div class="form-group"><input type="hidden" class="form-control" name="DTR-form-2" id="DTR-form-2" value="">
                                                            <label class="control-label bold font-xs">Fully Accomplished Community Service DTR Form</label>
                                                            <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button type="submit" style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm">Submit</button>
                                                    </div>
                                                </div>
                                             </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="year-5th">
                                            <form id="renewalForm" class="renewal-form" role="form" autocomplete="on">
                                                <div class="portletForm light bg-inverse">
                                                    <div class="portlet-body form">
                                                        <div class="row">
                                                            <h3 class="header-title">1st sem</h3>
                                                            <div class="col-md-8 col-sm-9 input-box">
                                                                <div class="form-group"><input type="hidden" class="form-control" name="prev-form" id="prev-form" value="">
                                                                    <label class="control-label bold font-xs">Previous Registration Form</label>
                                                                    <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-8 col-sm-9 input-box">
                                                                <div class="form-group"><input type="hidden" class="form-control" name="cog" id="cog" value="">
                                                                    <label class="control-label bold font-xs">Certificate of Grades</label>
                                                                    <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-8 col-sm-9 input-box">
                                                                <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form" id="c-reg-form" value="">
                                                                    <label class="control-label bold font-xs">Current Registration Form</label>
                                                                    <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-8 col-sm-9 input-box">
                                                                <div class="form-group"><input type="hidden" class="form-control" name="curriculum" id="curriculum" value="">
                                                                    <label class="control-label bold font-xs">Curriculum</label>
                                                                    <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-8 col-sm-9 input-box">
                                                                <div class="form-group"><input type="hidden" class="form-control" name="v-stub" id="v-stub" value="">
                                                                    <label class="control-label bold font-xs">Voter's Stub/Certification</label>
                                                                    <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-8 col-sm-9 input-box">
                                                                <div class="form-group"><input type="hidden" class="form-control" name="DTR-form" id="DTR-form" value="">
                                                                    <label class="control-label bold font-xs">Fully Accomplished Community Service DTR Form</label>
                                                                    <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <button type="submit" style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body form">
                                                    <div class="row">
                                                        <h3 class="header-title">2nd sem</h3>
                                                        <div class="col-md-8 col-sm-9 input-box">
                                                            <div class="form-group"><input type="hidden" class="form-control" name="prev-form-2" id="prev-form-2" value="">
                                                                <label class="control-label bold font-xs">Previous Registration Form</label>
                                                                <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8 col-sm-9 input-box">
                                                            <div class="form-group"><input type="hidden" class="form-control" name="cog-2" id="cog-2" value="">
                                                                <label class="control-label bold font-xs">Certificate of Grades</label>
                                                                <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8 col-sm-9 input-box">
                                                            <div class="form-group"><input type="hidden" class="form-control" name="c-reg-form-2" id="c-reg-form-2" value="">
                                                                <label class="control-label bold font-xs">Current Registration Form</label>
                                                                <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8 col-sm-9 input-box">
                                                            <div class="form-group"><input type="hidden" class="form-control" name="curriculum-2" id="curriculum-2" value="">
                                                                <label class="control-label bold font-xs">Curriculum</label>
                                                                <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8 col-sm-9 input-box">
                                                            <div class="form-group"><input type="hidden" class="form-control" name="v-stub-2" id="v-stub-2" value="">
                                                                <label class="control-label bold font-xs">Voter's Stub/Certification</label>
                                                                <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8 col-sm-9 input-box">
                                                            <div class="form-group"><input type="hidden" class="form-control" name="DTR-form-2" id="DTR-form-2" value="">
                                                                <label class="control-label bold font-xs">Fully Accomplished Community Service DTR Form</label>
                                                                <input type="file" class="form-control" name="user" id="user" value=""></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <button type="submit" style="margin-left: 60%;" class="btnUpdate-peronalInfo btn btn-success btn-sm">Submit</button>
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