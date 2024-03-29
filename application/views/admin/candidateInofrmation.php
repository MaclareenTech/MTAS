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
        background: #434341;
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
        background: #434341;
    }

    form .button input:hover {
        background: linear-gradient(-135deg, #99dda2, #9B59B6);
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
        background: #434341;
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
                        <a>
                            <img class="img-fluid" src="https://maclareenai.com/mtas/assets/images/bg/mtas_logo_167_33.png" alt="Theme-Logo" style=" width: 160px;">
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
                        <ul class="nav-right">
                            <li class="header-notification">
                                <a href="<?php echo base_url(); ?>Chat" class="waves-effect waves-light">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-red"></span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>New chat</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <!-- <li class="waves-effect waves-light">
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">John Doe</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li> -->


                                </ul>
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

                                    <div class="user-details">
                                        <span id="more-details"><?php echo $this->session->userdata('name');; ?></span>

                                    </div>
                                </div>
                            </div>

                            <div class="pcoded-navigation-label">Home</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
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
                            <div class="pcoded-navigation-label">Add Candidate</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="<?php echo base_url(); ?>addCandidate" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa-solid fa-user-plus"></i><b>FC</b></span>
                                        <span class="pcoded-mtext">Add Candidate</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <?php
                            $role = $this->session->userdata('role'); ?>
                            <?php if ($role == "superadmin") { ?>
                                <div class="pcoded-navigation-label">Admin Details</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="">
                                        <a href="<?php echo base_url(); ?>admininformation" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="fa-solid fa fa-users"></i><b>AD</b></span>
                                            <span class="pcoded-mtext">Admin Details</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            <?php } ?>
                            <?php
                            $mail = $this->session->userdata('user_email'); ?>
                            <?php if ($mail == "nisha.minsariya@maclareen.com" || $mail == "saranya.muralidharan@maclareen.com"  || $mail == "muthupandy.nadar@maclareen.com") { ?>
                                <div class="pcoded-navigation-label">Invoice</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="">
                                        <a href="<?php echo base_url(); ?>invlicelist" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="fa fa-list-alt"></i><b>IN</b></span>
                                            <span class="pcoded-mtext">Invoice</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            <?php } ?>
                            <?php
                            $mail = $this->session->userdata('user_email'); ?>
                            <?php if ($mail == "nisha.minsariya@maclareen.com" || $mail == "saranya.muralidharan@maclareen.com"  || $mail == "muthupandy.nadar@maclareen.com") { ?>
                                <div class="pcoded-navigation-label">Advertisement</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="">
                                        <a href="<?php echo base_url(); ?>advertisement" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="fa fa-list-alt"></i><b>IN</b></span>
                                            <span class="pcoded-mtext">Advertisement</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            <?php } ?>
                            <?php
                            $role = $this->session->userdata('role'); ?>
                            <?php if ($role == "superadmin") { ?>
                                <div class="pcoded-navigation-label">Job Openings</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="fa fa-cubes"></i><b>JO</b></span>
                                            <span class="pcoded-mtext">Job Openings</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="<?php echo base_url(); ?>Jobopening" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">View Job Openings</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="<?php echo base_url(); ?>AddJobopeningFrom" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Add Job Openings</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>






                                        </ul>
                                    </li>
                                </ul>
                            <?php } ?>
                            <div class="pcoded-navigation-label">Add Candidate Source </div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="<?php echo base_url(); ?>viewCandidateSource" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa fa-external-link"></i><b>L</b></span>
                                        <span class="pcoded-mtext">Add Candidate Source</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <!-- href="<?php echo base_url(); ?>logout" -->
                            </ul>
                            <div class="pcoded-navigation-label">Profile</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="<?php echo base_url(); ?>profile" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa fa-cog"></i><b>L</b></span>
                                        <span class="pcoded-mtext">Profile</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">How To Use</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="https://maclareenai.com/mtas/upload/manual"  target= "_blank" waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa fa-book"></i><b>L</b></span>
                                        <span class="pcoded-mtext">How To Use</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Logout</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="<?php echo base_url(); ?>logout" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa fa-sign-out"></i><b>L</b></span>
                                        <span class="pcoded-mtext">Logout</span>
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
                                            <h5 class="m-b-10">Candidate Information</h5>
                                            <p class="m-b-0">Maclareen Talent Acquisition System </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a> Candidate Information</a>
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
                                        <div class="title">

                                            <a class="pull-right btn btn-warning btn-large" style="margin-right:40px;  margin-top: 20px;  background-color: #007bff; border-color: #007bff;" href="<?php echo base_url('Sendmail/' . $candidate[0]->candidate_id); ?>"><i class="fa fa-envelope"></i></a>
                                            <a class="pull-right btn btn-warning btn-large" style="margin-right:40px;  margin-top: 20px;  background-color: #ffc107; border-color: ##ffc107;" href="<?php echo base_url('ExportData/' .  $candidate[0]->candidate_id); ?>"><i class="fa fa-file-pdf-o"></i></a>

                                        </div>
                                        <div class="title">Candidate Information

                                        </div>


                                        <form action="#">
                                            <div class="user-details">
                                                <div class="input-box">
                                                    <span class="details">Full Name</span>
                                                    <input type="text" value="<?php echo $candidate[0]->candidate_name ?>" disabled>
                                                </div>
                                                <div class="input-box">
                                                    <span class="details">Job title</span>
                                                    <input type="text" value="<?php $combined_value = $candidate[0]->job_country . ' - ' . $candidate[0]->job_position;
                                                                                echo $combined_value; ?>" disabled>
                                                </div>
                                                <div class="input-box">
                                                    <span class="details">E-Mail</span>
                                                    <input type="email" value="<?php echo $candidate[0]->candidate_email ?>" disabled>
                                                </div>
                                                <div class="input-box">
                                                    <span class="details">Phone Number</span>
                                                    <input type="number" value="<?php echo $candidate[0]->candidate_mobile_no ?>" disabled>
                                                </div>
                                                <div class="input-box">
                                                    <span class="details">Candidate Source</span>

                                                    <input type="email" value="<?php echo $candidate[0]->source_name ?>" name="source_name" disabled>
                                                </div>
                                                <div class="button">
                                                    <?php if ($candidate[0]->candidate_job_status == "0") { ?>
                                                        <button style="background-color: #ff3333; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">
                                                            <span style="font-weight: bold;">Job Status:</span> Screening
                                                        </button>
                                                    <?php } else if ($candidate[0]->candidate_job_status == "1") { ?>
                                                        <button style="background-color: #fe6367; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">
                                                            <span style="font-weight: bold;">Job Status:</span> Waiting for document
                                                        </button>
                                                    <?php } else if ($candidate[0]->candidate_job_status == "2") { ?>
                                                        <button style="background-color: #64d886; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">
                                                            <span style="font-weight: bold;">Job Status:</span> Sent to recruitment review
                                                        </button>
                                                    <?php } else if ($candidate[0]->candidate_job_status == "3") { ?>
                                                        <button style="background-color: #0abc38; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">
                                                            <span style="font-weight: bold;">Job Status:</span> Shortlisted
                                                        </button>
                                                    <?php } else if ($candidate[0]->candidate_job_status == "4") { ?>
                                                        <button style="background-color: #940005; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">
                                                            <span style="font-weight: bold;">Job Status:</span> Not selected
                                                        </button>
                                                    <?php } else if ($candidate[0]->candidate_job_status == "5") { ?>
                                                        <button style="background-color: #99dda2; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">
                                                            <span style="font-weight: bold;">Job Status:</span> Job Orientation 1
                                                        </button>
                                                    <?php } else if ($candidate[0]->candidate_job_status == "6") { ?>
                                                        <button style="background-color: #6ecf7b; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">
                                                            <span style="font-weight: bold;">Job Status:</span> Job Orientation 2
                                                        </button>
                                                    <?php } else if ($candidate[0]->candidate_job_status == "7") { ?>
                                                        <button style="background-color: #49c359; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">
                                                            <span style="font-weight: bold;">Job Status:</span> Job Orientation 3
                                                        </button>
                                                    <?php } else if ($candidate[0]->candidate_job_status == "8") { ?>
                                                        <button style="background-color: #00892c; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">
                                                            <span style="font-weight: bold;">Job Status:</span> Work permit
                                                        </button>
                                                    <?php } else if ($candidate[0]->candidate_job_status == "9") { ?>
                                                        <button style="background-color: #206228; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">
                                                            <span style="font-weight: bold;">Job Status:</span> Visa filing
                                                        </button>
                                                    <?php } else if ($candidate[0]->candidate_job_status == "10") { ?>
                                                        <button style="background-color: #349f42; color: white;border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">
                                                            <span style="font-weight: bold;">Job Status:</span> Training for visa
                                                        </button>
                                                    <?php } else if ($candidate[0]->candidate_job_status == "11") { ?>
                                                        <button style="background-color: #16431c; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">
                                                            <span style="font-weight: bold;">Job Status:</span> Completed
                                                        </button>
                                                    <?php } ?>
                                                </div>

                                            </div>


                                            <div class="title" style="margin-bottom:20px;">Documents</div>

                                            <?php if ($candidate[0]->candidate_aadhar_card != "") { ?>

                                                <a href="<?php echo base_url('ViewCandiateDocument/' . $candidateId . '/0'); ?>" style="background: #434341;border: none;color: white;padding: 8px 16px;text-align: center;text-decoration: none;display: inline-block;font-size: 14px; margin: 4px 2px; transition-duration: 0.4s;cursor: pointer;border-radius: 4px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);transform-style: preserve-3d;perspective: 1000px;transform: translateZ(10px);">
                                                    View Aadhar Card
                                                </a>

                                            <?php } ?>


                                            <?php if ($candidate[0]->candidate_pan_card != "") { ?>

                                                <a href="<?php echo base_url('ViewCandiateDocument/' . $candidateId . '/1'); ?>" style="background: #434341; border: none;color: white;padding: 8px 16px; text-align: center;text-decoration: none;display: inline-block;font-size: 14px;  margin: 4px 2px;transition-duration: 0.4s;cursor: pointer;border-radius: 4px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);transform-style: preserve-3d; perspective: 1000px;transform: translateZ(10px); ">
                                                    View Pan Card
                                                </a>

                                            <?php } ?>

                                            <?php if ($candidate[0]->candidate_passport != "") { ?>
                                                <a href="<?php echo base_url('ViewCandiateDocument/' . $candidateId . '/3'); ?>" style="background: #434341; border: none;color: white;padding: 8px 16px; text-align: center;text-decoration: none;display: inline-block;font-size: 14px; margin: 4px 2px;transition-duration: 0.4s;cursor: pointer;border-radius: 4px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); transform-style: preserve-3d; perspective: 1000px; transform: translateZ(10px); ">
                                                    View Passport
                                                </a>

                                            <?php } ?>


                                            <?php if ($candidate[0]->candidate_resume != "") { ?>

                                                <a href="<?php echo base_url('ViewCandiateDocument/' . $candidateId . '/2'); ?>" style="background: #434341;border: none;color: white;padding: 8px 16px;text-align: center;text-decoration: none;display: inline-block;font-size: 14px; margin: 4px 2px;transition-duration: 0.4s; cursor: pointer; border-radius: 4px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); transform-style: preserve-3d;  perspective: 1000px;  transform: translateZ(10px);">
                                                    View Resume
                                                </a>

                                            <?php } ?>
                                            <?php if ($candidate[0]->candidate_resume != "") { ?>

                                                <a href="<?php echo base_url('ViewCandiateDocument/' . $candidateId . '/4'); ?>" style="background: #434341;border: none;color: white;padding: 8px 16px;text-align: center;text-decoration: none;display: inline-block;font-size: 14px; margin: 4px 2px;transition-duration: 0.4s; cursor: pointer; border-radius: 4px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); transform-style: preserve-3d;  perspective: 1000px;  transform: translateZ(10px);">
                                                    View Photo
                                                </a>

                                            <?php } ?>

                                            <div class="title" style="margin-top: 20px;">Job Orientation </div>

                                            <?php if ($candidate[0]->job_training_one != "") { ?>
                                                <div class="title" style="margin-top: 20px;font-size: 20px;">Job Orientation 1</div>
                                                <div class="user-details">


                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                        <div class="input-box" style=" width: 100%;">
                                                            <span class="details">Meeting Url</span>
                                                            <input type="text" value="<?php echo $candidate[0]->job_training_one ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                        <div class="input-box" style=" width: 100%;">
                                                            <span class="details">Meeting Time</span>
                                                            <input type="text" value="<?php echo $candidate[0]->job_training_one_date_time ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                        <div class="input-box" style=" width: 100%;">
                                                            <span class="details">Meeting ID</span>
                                                            <input type="text" value="<?php echo $candidate[0]->job_training_one_meet_id ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                        <div class="input-box" style=" width: 100%;">
                                                            <span class="details">Meeting Password</span>
                                                            <input type="text" value="<?php echo $candidate[0]->job_training_one_meet_password ?>" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>

                                            <?php if ($candidate[0]->job_training_two != "") { ?>
                                                <div class="title" style="margin-top: 20px;font-size: 20px;">Job Orientation 2</div>
                                                <div class="user-details">


                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                        <div class="input-box" style=" width: 100%;">
                                                            <span class="details">Meeting Url</span>
                                                            <input type="text" value="<?php echo $candidate[0]->job_training_two ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                        <div class="input-box" style=" width: 100%;">
                                                            <span class="details">Meeting Time</span>
                                                            <input type="text" value="<?php echo $candidate[0]->job_training_two_date_time ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                        <div class="input-box" style=" width: 100%;">
                                                            <span class="details">Meeting ID</span>
                                                            <input type="text" value="<?php echo $candidate[0]->job_training_two_meet_id ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                        <div class="input-box" style=" width: 100%;">
                                                            <span class="details">Meeting Password</span>
                                                            <input type="text" value="<?php echo $candidate[0]->job_training_two_meet_password ?>" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <?php if ($candidate[0]->job_training_three != "") { ?>
                                                <div class="title" style="margin-top: 20px;font-size: 20px;">Job Orientation 3</div>
                                                <div class="user-details">

                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="input-box" style=" width: 100%;">
                                                        <span class="details">Meeting Url</span>
                                                        <input type="text" value="<?php echo $candidate[0]->job_training_three ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="input-box" style=" width: 100%;">
                                                        <span class="details">Meeting Time</span>
                                                        <input type="text" value="<?php echo $candidate[0]->job_training_three_date_time ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="input-box" style=" width: 100%;">
                                                        <span class="details">Meeting ID</span>
                                                        <input type="text" value="<?php echo $candidate[0]->job_training_three_meet_id ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="input-box" style=" width: 100%;">
                                                        <span class="details">Meeting Password</span>
                                                        <input type="text" value="<?php echo $candidate[0]->job_training_three_password ?>" disabled>
                                                    </div>
                                                </div>
                                    </div>
                                <?php } ?>

                                <br>
                                <div class="title">Visa Training</div>

                                <?php if ($candidate[0]->visa_training != "") { ?>
                                    <div class="user-details">


                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="input-box" style=" width: 100%;">
                                                <span class="details">Meeting Url</span>
                                                <input type="text" value="<?php echo $candidate[0]->visa_training ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="input-box" style=" width: 100%;">
                                                <span class="details">Meeting Time</span>
                                                <input type="text" value="<?php echo $candidate[0]->visa_training_datetime ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="input-box" style=" width: 100%;">
                                                <span class="details">Meeting ID</span>
                                                <input type="text" value="<?php echo $candidate[0]->visa_training_meet_id ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="input-box" style=" width: 100%;">
                                                <span class="details">Meeting Password</span>
                                                <input type="text" value="<?php echo $candidate[0]->visa_training_meet_password ?>" disabled>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                                </form>
                                </div>
                                <br>
                                <h5>Status Log</h5>

                                <table id="my-table" class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Status</th>
                                            <th>Admin Name</th>
                                            <th>Admin Emp Id</th>
                                            <th>date</th>
                                        </tr>
                                    </thead>

                                    <tbody id="myTable">
                                        <?php $counter = 0; ?>
                                        <?php foreach ($log as $row) : ?>
                                            <tr>
                                                <?php $counter++; ?>
                                                <td><?php echo $counter; ?></td>
                                                <td> <?php if ($row->status == "0") { ?>
                                                        <button style="background-color: #ff3333; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Screening</button>
                                                    <?php } else if ($row->status == "1") { ?>
                                                        <button style="background-color: #fe6367; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Waiting for document </button>
                                                    <?php } else if ($row->status == "2") { ?>
                                                        <button style="background-color: #64d886; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Sent to recruitment review</button>
                                                    <?php } else if ($row->status == "3") { ?>
                                                        <button style="background-color: #0abc38; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Shortlisted</button>
                                                    <?php } else if ($row->status == "4") { ?>
                                                        <button style="background-color: #940005; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Not selected</button>
                                                    <?php } else if ($row->status == "5") { ?>
                                                        <button style="background-color: #99dda2; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Job Orientation 1</button>
                                                    <?php } else if ($row->status == "6") { ?>
                                                        <button style="background-color: #6ecf7b; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Job Orientation 2</button>
                                                    <?php } else if ($row->status == "7") { ?>
                                                        <button style="background-color: #49c359; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Job Orientation 3</button>
                                                    <?php } else if ($row->status == "8") { ?>
                                                        <button style="background-color: #00892c; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Work permit</button>
                                                    <?php } else if ($row->status == "9") { ?>
                                                        <button style="background-color: #206228; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Visa filing</button>
                                                    <?php } else if ($row->status == "10") { ?>
                                                        <button style="background-color: #349f42; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Training for visa</button>
                                                    <?php } else if ($row->status == "11") { ?>
                                                        <button style="background-color: #16431c; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Completed</button>

                                                    <?php } ?>


                                                </td>
                                                <td><?php echo $row->user_name ?></td>
                                                <td><?php echo $row->emp_id ?></td>
                                                <td><?php
                                                    $timestamp = strtotime($row->date);
                                                    $humanReadableDate = date("d F Y", $timestamp);

                                                    echo $humanReadableDate; ?></td>



                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <div id="pagination-container">
                                    <ul id="pagination" class="pagination"></ul>
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


    <script>
        const tableBody = document.getElementById('myTable');
        const paginationContainer = document.getElementById('pagination');
        const itemsPerPage = 7;
        let currentPage = 1;

        function displayDataPage(page) {
            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const rows = Array.from(tableBody.getElementsByTagName('tr'));

            rows.forEach((row, index) => {
                if (index >= start && index < end) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });

            updatePagination(page);
        }

        function updatePagination(currentPage) {
            const rowsCount = tableBody.getElementsByTagName('tr').length;
            const totalPages = Math.ceil(rowsCount / itemsPerPage);
            let paginationHTML = '';

            for (let i = 1; i <= totalPages; i++) {
                paginationHTML += `<li class="page-item${i === currentPage ? ' active' : ''}">
        <a class="page-link" href="#" onclick="displayDataPage(${i})">${i}</a>
      </li>`;
            }

            paginationContainer.innerHTML = paginationHTML;
        }

        displayDataPage(currentPage);
    </script>



</body>



</html>