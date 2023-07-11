<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $pageTitle; ?></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo base_url(); ?>assets/images/fev.png" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/icon/themify-icons/themify-icons.css">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome-n.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery.mCustomScrollbar.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

    /**{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins",sans-serif;
}*/
    /*body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: linear-gradient(135deg, #71B7E6, #9B59B6);
}*/
    .wrapper {
        /*    max-width: 700px;*/
        width: 100%;
        background: #fff;
        padding: 25px 30px;
        border-radius: 5px;
    }

    .wrapper .title {
        font-size: 25px;
        font-weight: 500;
        position: relative;
    }

    .wrapper .title::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 40px;
        background: linear-gradient(135deg, #71B7E6, #9B59B6);
    }

    .wrapper form .user-details {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 20px 0 12px 0;
    }

    form .user-details .input-box {
        margin-bottom: 15px;
        width: calc(100% / 2 - 20px);
    }

    .user-details .input-box input {
        height: 45px;
        width: 100%;
    }

    .user-details .input-box .details {
        font-weight: 500;
        display: block;
        margin-bottom: 5px;
    }

    .user-details .input-box input {
        height: 45px;
        width: 100%;
        outline: none;
        border-radius: 5px;
        border: 1px solid #ccc;
        padding-left: 15px;
        font-size: 16px;
        border-bottom-width: 2px;
        transition: all .3s ease;
    }

    .user-details .input-box input:focus,
    .user-details .input-box input:valid {
        border-color: #9B59B6;
    }



    form input[type="radio"] {
        display: none;
    }

    form .button {
        height: 45px;
        margin: 45px 0;
    }

    form .button input {
        height: 100%;
        width: 100%;
        color: #fff;
        outline: none;
        border: none;
        font-size: 18px;
        font-weight: 500;
        cursor: pointer;
        border-radius: 5px;
        letter-spacing: 1px;
        background: linear-gradient(135deg, #71B7E6, #9B59B6);
    }

    form .button input:hover {
        background: linear-gradient(-135deg, #71B7E6, #9B59B6);
    }

    /* Media Query */
    @media (max-width: 584px) {
        .wrapper {
            max-width: 100%;
        }

        form .user-details .input-box {
            margin-bottom: 15px;
            width: 100%;
        }

        .gender-details .category {
            width: 100%;
        }

        .wrapper form .user-details {
            max-height: 300px;
            overflow-y: scroll;
        }

        .user-details::-webkit-scrollbar {
            width: 0;
        }
    }

    form .button1 input {
        height: 100%;

        color: #fff;
        outline: none;
        border: none;
        font-size: 18px;
        font-weight: 500;
        cursor: pointer;
        border-radius: 5px;
        letter-spacing: 1px;
        background: linear-gradient(135deg, #71B7E6, #9B59B6);
    }
</style>

<body>

    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.html">
                            <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/logo_new.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-80 img-radius" src="<?php echo base_url(); ?>assets/images/avatar-4.jpg" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span id="more-details"><?php echo $this->session->userdata('name');; ?><i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>

                            </div>

                            <div class="pcoded-navigation-label">Home</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="<?php
                                                $role = $this->session->userdata('role'); ?>
                                    <?php if ($role == "admin") { ?>
                                        <?php echo base_url(); ?>adminDashboard
                                    <?php } else { ?>
                                        <?php echo base_url(); ?>superadminDashboard
                                    <?php } ?>" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>


                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Update Candidate Information</h5>
                                            <p class="m-b-0">Recruitment Management System</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Update Candidate Information</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->







                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->





                                    <div class="wrapper">
                                        <div class="title">Update</div>
                                        <?php
                                        $this->load->helper('form');
                                        $error = $this->session->flashdata('error');
                                        if ($error) {
                                        ?>
                                            <div class="alert alert-danger alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                <?php echo $error; ?>
                                            </div>
                                        <?php }
                                        $success = $this->session->flashdata('success');
                                        if ($success) {
                                        ?>
                                            <div class="alert alert-success alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                <?php echo $success; ?>
                                            </div>
                                        <?php } ?>
                                        <?php echo form_open_multipart('admin/AddCandidateControllers/UpdateCandidateInformation'); ?>
                                        <div class="user-details">
                                            <div class="input-box">
                                                <span class="details">Full Name</span>
                                                <input type="text" value="<?php echo $candidate[0]->candidate_name ?>" name="candidate_name">
                                            </div>
                                            <div class="input-box">
                                                <span class="details">Job title</span>
                                                <input type="text" value="<?php echo $candidate[0]->candidate_job_profile ?>" name="candidate_job_profile" disabled>
                                            </div>
                                            <div class="input-box">
                                                <span class="details">E-Mail</span>

                                                <input type="email" value="<?php echo $candidate[0]->candidate_email ?>" name="candidate_email" disabled>
                                            </div>
                                            <div class="input-box">
                                                <span class="details">Phone Number</span>
                                                <input type="tel" value="<?php echo $candidate[0]->candidate_mobile_no ?>" name="candidate_mobile_no">
                                                <input type="text" value="<?php echo $candidateId ?>" style="opacity: 0;" name="candidate_id">

                                            </div>

                                            <!-- <div class="button">
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Job Status</label>
                                                    <div class="col-sm-8">
                                                        <select name="candidate_job_status" class="form-control" style="border: 1px solid #ccc; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); background: linear-gradient(to bottom, #f9f9f9, #e8e8e8); outline: none;">
                                                            <option value="opt1" disabled selected>Select One Value</option>
                                                            <option value="1">Waiting for document</option>
                                                            <option value="2">Sent to recruitment review</option>
                                                            <option value="3">Shortlisted</option>
                                                            <option value="4">Not selected</option>
                                                            <option value="5">Job training 1</option>
                                                            <option value="6">Job training 2</option>
                                                            <option value="7">Job training 3</option>
                                                            <option value="8">Work permit</option>
                                                            <option value="9">Visa filing</option>
                                                            <option value="10">Training for visa</option>
                                                            <option value="11">Completed</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="button">
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Job Status</label>
                                                    <div class="col-sm-8">
                                                        <select name="candidate_job_status" class="form-control" style="border: 1px solid #ccc; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); background: linear-gradient(to bottom, #f9f9f9, #e8e8e8); outline: none;">
                                                            <option value="opt1" disabled>Select One Value</option>
                                                            <option value="1" <?php echo ($candidate[0]->candidate_job_status === '1') ? 'selected' : ''; ?>>Waiting for document</option>
                                                            <option value="2" <?php echo ($candidate[0]->candidate_job_status === '2') ? 'selected' : ''; ?>>Sent to recruitment review</option>
                                                            <option value="3" <?php echo ($candidate[0]->candidate_job_status === '3') ? 'selected' : ''; ?>>Shortlisted</option>
                                                            <option value="4" <?php echo ($candidate[0]->candidate_job_status === '4') ? 'selected' : ''; ?>>Not selected</option>
                                                            <option value="5" <?php echo ($candidate[0]->candidate_job_status === '5') ? 'selected' : ''; ?>>Job training 1</option>
                                                            <option value="6" <?php echo ($candidate[0]->candidate_job_status === '6') ? 'selected' : ''; ?>>Job training 2</option>
                                                            <option value="7" <?php echo ($candidate[0]->candidate_job_status === '7') ? 'selected' : ''; ?>>Job training 3</option>
                                                            <option value="8" <?php echo ($candidate[0]->candidate_job_status === '8') ? 'selected' : ''; ?>>Work permit</option>
                                                            <option value="9" <?php echo ($candidate[0]->candidate_job_status === '9') ? 'selected' : ''; ?>>Visa filing</option>
                                                            <option value="10" <?php echo ($candidate[0]->candidate_job_status === '10') ? 'selected' : ''; ?>>Training for visa</option>
                                                            <option value="11" <?php echo ($candidate[0]->candidate_job_status === '11') ? 'selected' : ''; ?>>Completed</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <?php if ($candidate[0]->candidate_job_status == "0"  || $candidate[0]->candidate_job_status == "1" ) { ?>
                                            <div class="title" style="margin-bottom:20px;">Documents</div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Upload Addhar Card </label>
                                            <div class="col-sm-9">
                                                <input type="file" name="candidate_aadhar_card" accept="application/pdf">


                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Upload Pan Card </label>
                                            <div class="col-sm-9">

                                                <input type="file" name="candidate_pan_card" accept="application/pdf">

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Upload Passport </label>
                                            <div class="col-sm-9">

                                                <input type="file" name="candidate_passport" accept="application/pdf">


                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Upload Candidate Resume </label>
                                            <div class="col-sm-9">

                                                <input type="file" name="candidate_resume" accept="application/pdf">

                                            </div>
                                        </div>
                                        <?php }  ?>

                                       

                                        <div class="title" style="margin-top: 20px;">Job Training</div>


                                       
                                        <?php if ($candidate[0]->candidate_job_status == "6" || $candidate[0]->candidate_job_status == "7" || $candidate[0]->candidate_job_status == "8"  || $candidate[0]->candidate_job_status == "9" || $candidate[0]->candidate_job_status == "10" || $candidate[0]->candidate_job_status == "11") { ?>
                                            <div class="title" style="margin-top: 20px;font-size: 20px;">Job Training 1</div>
                                            <div class="user-details">

                                                <div class="input-box" style="margin-bottom: 15px;width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting Url</span>
                                                    <input type="text" value="<?php echo $candidate[0]->job_training_one ?>" disabled>
                                                </div>
                                                <div class="input-box" style="margin-bottom: 15px;width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting Time</span>
                                                    <input type="text" value="<?php echo $candidate[0]->job_training_one_date_time ?>" disabled>
                                                </div>
                                                <div class="input-box" style="margin-bottom: 15px; width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting ID</span>
                                                    <input type="text" value="<?php echo $candidate[0]->job_training_one_meet_id ?>" disabled>
                                                </div>
                                                <div class="input-box" style="margin-bottom: 15px;width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting Password</span>
                                                    <input type="text" value="<?php echo $candidate[0]->job_training_one_meet_password ?>" disabled>
                                                </div>
                                            </div>
                                        <?php } else { ?>
                                            <div class="user-details">

                                                <div class="input-box" style="margin-bottom: 15px;width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting Url</span>
                                                    <input type="text" value="<?php echo $candidate[0]->job_training_one ?>" name="job_training_one">
                                                </div>
                                                <div class="input-box" style="margin-bottom: 15px;width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting Time</span>
                                                    <input type="datetime-local" value="<?php echo $candidate[0]->job_training_one_date_time ?>" name="job_training_one_date_time">
                                                </div>
                                                <div class="input-box" style="margin-bottom: 15px; width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting ID</span>
                                                    <input type="text" value="<?php echo $candidate[0]->job_training_one_meet_id ?>" name="job_training_one_meet_id">
                                                </div>
                                                <div class="input-box" style="margin-bottom: 15px;width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting Password</span>
                                                    <input type="text" value="<?php echo $candidate[0]->job_training_one_meet_password ?>" name="job_training_one_meet_password">
                                                </div>
                                            </div>
                                        <?php  } ?>

                                        <?php if ($candidate[0]->candidate_job_status == "7" || $candidate[0]->candidate_job_status == "8"  || $candidate[0]->candidate_job_status == "9" || $candidate[0]->candidate_job_status == "10" || $candidate[0]->candidate_job_status == "11") { ?>
                                            <div class="title" style="margin-top: 20px;font-size: 20px;">Job Training 2</div>
                                            <div class="user-details">

                                                <div class="input-box" style="margin-bottom: 15px;width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting Url</span>
                                                    <input type="text" value="<?php echo $candidate[0]->job_training_two ?>" disabled>
                                                </div>
                                                <div class="input-box" style="margin-bottom: 15px;width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting Time</span>
                                                    <input type="text" value="<?php echo $candidate[0]->job_training_two_date_time ?>" disabled>
                                                </div>
                                                <div class="input-box" style="margin-bottom: 15px; width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting ID</span>
                                                    <input type="text" value="<?php echo $candidate[0]->job_training_two_meet_id ?>" disabled>
                                                </div>
                                                <div class="input-box" style="margin-bottom: 15px;width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting Password</span>
                                                    <input type="text" value="<?php echo $candidate[0]->job_training_two_meet_password ?>" disabled>
                                                </div>
                                            </div>
                                        <?php } else { ?>
                                            <div class="title" style="margin-top: 20px;font-size: 20px;">Job Training 2</div>
                                            <div class="user-details">

                                                <div class="input-box" style="margin-bottom: 15px;width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting Url</span>
                                                    <input type="text" value="<?php echo $candidate[0]->job_training_two ?>" name="job_training_two">
                                                </div>
                                                <div class="input-box" style="margin-bottom: 15px;width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting Time</span>
                                                    <input type="datetime-local" value="<?php echo $candidate[0]->job_training_two_date_time ?>" name="job_training_two_date_time">
                                                </div>
                                                <div class="input-box" style="margin-bottom: 15px; width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting ID</span>
                                                    <input type="text" value="<?php echo $candidate[0]->job_training_two_meet_id ?>" name="job_training_two_meet_id">
                                                </div>
                                                <div class="input-box" style="margin-bottom: 15px;width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting Password</span>
                                                    <input type="text" value="<?php echo $candidate[0]->job_training_two_meet_password ?>" name="job_training_two_meet_password">
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php if ($candidate[0]->candidate_job_status == "8"  || $candidate[0]->candidate_job_status == "9" || $candidate[0]->candidate_job_status == "10" || $candidate[0]->candidate_job_status == "11") { ?>
                                            <div class="title" style="margin-top: 20px;font-size: 20px;">Job Training 3</div>
                                            <div class="user-details">

                                                <div class="input-box" style="margin-bottom: 15px;width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting Url</span>
                                                    <input type="text" value="<?php echo $candidate[0]->job_training_three ?>" disabled>
                                                </div>
                                                <div class="input-box" style="margin-bottom: 15px;width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting Time</span>
                                                    <input type="text" value="<?php echo $candidate[0]->job_training_three_date_time ?>" disabled>
                                                </div>
                                                <div class="input-box" style="margin-bottom: 15px; width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting ID</span>
                                                    <input type="text" value="<?php echo $candidate[0]->job_training_three_meet_id ?>" disabled>
                                                </div>
                                                <div class="input-box" style="margin-bottom: 15px;width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting Password</span>
                                                    <input type="text" value="<?php echo $candidate[0]->job_training_three_password ?>" disabled>
                                                </div>
                                            </div>
                                        <?php } else { ?>
                                            <div class="title" style="margin-top: 20px;font-size: 20px;">Job Training 3</div>
                                            <div class="user-details">

                                                <div class="input-box" style="margin-bottom: 15px;width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting Url</span>
                                                    <input type="text" value="<?php echo $candidate[0]->job_training_three ?>" name="job_training_three">
                                                </div>
                                                <div class="input-box" style="margin-bottom: 15px;width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting Time</span>
                                                    <input type="datetime-local" value="<?php echo $candidate[0]->job_training_three_date_time ?>" name="job_training_three_date_time">
                                                </div>
                                                <div class="input-box" style="margin-bottom: 15px; width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting ID</span>
                                                    <input type="text" value="<?php echo $candidate[0]->job_training_three_meet_id ?>" name="job_training_three_meet_id">
                                                </div>
                                                <div class="input-box" style="margin-bottom: 15px;width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting Password</span>
                                                    <input type="text" value="<?php echo $candidate[0]->job_training_three_password ?>" name="job_training_three_password">
                                                </div>
                                            </div>
                                        <?php } ?>

                                        <br>
                                        <div class="title">Visa Training</div>
                                        <?php if ($candidate[0]->candidate_job_status == "11") { ?>
                                            <div class="user-details">

                                                <div class="input-box" style="margin-bottom: 15px;width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting Url</span>
                                                    <input type="text" value="<?php echo $candidate[0]->visa_training ?>" disabled>
                                                </div>
                                                <div class="input-box" style="margin-bottom: 15px;width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting Time</span>
                                                    <input type="text" value="<?php echo $candidate[0]->visa_training_datetime ?>" disabled>
                                                </div>
                                                <div class="input-box" style="margin-bottom: 15px; width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting ID</span>
                                                    <input type="text" value="<?php echo $candidate[0]->visa_training_meet_id ?>" disabled>
                                                </div>
                                                <div class="input-box" style="margin-bottom: 15px;width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting Password</span>
                                                    <input type="text" value="<?php echo $candidate[0]->visa_training_meet_password ?>" disabled>
                                                </div>
                                            </div>
                                        <?php } else { ?>
                                            <div class="user-details">

                                                <div class="input-box" style="margin-bottom: 15px;width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting Url</span>
                                                    <input type="text" value="<?php echo $candidate[0]->visa_training ?>" name="visa_training">
                                                </div>
                                                <div class="input-box" style="margin-bottom: 15px;width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting Time</span>
                                                    <input type="datetime-local" value="<?php echo $candidate[0]->visa_training_datetime ?>" name="visa_training_datetime">
                                                </div>
                                                <div class="input-box" style="margin-bottom: 15px; width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting ID</span>
                                                    <input type="text" value="<?php echo $candidate[0]->visa_training_meet_id ?>" name="visa_training_meet_id">
                                                </div>
                                                <div class="input-box" style="margin-bottom: 15px;width: calc(100% / 4 - 20px);">
                                                    <span class="details">Meeting Password</span>
                                                    <input type="text" value="<?php echo $candidate[0]->visa_training_meet_password ?>" name="visa_training_meet_password">
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <center> <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button></center>
                                            </div>

                                        </div>
                                        </form>
                                    </div>



                                </div>
                                <!-- Page-body end -->
                            </div>
                            <div id="styleSelector"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- Required Jquery -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="<?php echo base_url(); ?>assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- slimscroll js -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.mCustomScrollbar.concat.min.js "></script>

    <!-- menu js -->
    <script src="<?php echo base_url(); ?>assets/js/pcoded.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vertical/vertical-layout.min.js "></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js "></script>






</body>






</html>