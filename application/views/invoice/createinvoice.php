<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $pageTitle; ?></title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <!-- serch option for table  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<style>
    /* For larger screens, set the image width to 170px and height to 150px */
    .responsive-image {
        width: 170px;
        height: 150px;
    }

    /* For smaller screens, adjust the image size accordingly */
    @media screen and (max-width: 767px) {
        .responsive-image {
            width: 100%;
            /* The image will take the full width of its container */
            height: auto;
            /* The height will adjust automatically to maintain aspect ratio */
        }
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
                            <img class="img-fluid" src="http://mtas.net.in/assets/images/logo_new.png" alt="Theme-Logo" style=" width: 160px; ">
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

                                    <div class="user-details">
                                        <span id="more-details"><?php echo $this->session->userdata('name');; ?></span>
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
                                    <li class="active">
                                        <a href="<?php echo base_url(); ?>admininformation" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="fa fa-list-alt"></i><b>IN</b></span>
                                            <span class="pcoded-mtext">Invoice</span>
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
                                        <ul class="pcoded-submenu ">
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
                                            <h5 class="m-b-10">Invoice</h5>
                                            <p class="m-b-0">Maclareen Talent Acquisition System </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a>Invoice</a>
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




                                    <div class="container-scroller">
                                        <!-- partial:../../partials/_navbar.html -->

                                        <!-- partial -->
                                        <div class="container-fluid page-body-wrapper">
                                            <!-- partial:../../partials/_settings-panel.html -->



                                            <!-- partial -->
                                            <div class="main-panel">
                                                <div class="content-wrapper">
                                                    <div class="row">
                                                        <div class="col-md-12 grid-margin stretch-card">
                                                            <div class="card">
                                                                <form method="post" enctype="multipart/form-data" action="{% url 'create_invoice' %}">

                                                                    <div class="card-body" style="padding: 35px;">
                                                                        <center>
                                                                            <h3 class="card-title">Invoice</h3>
                                                                        </center>
                                                                        <br>
                                                                        <br>

                                                                        <div class="row">
                                                                            <div class="col-2">
                                                                                <img src="http://mtas.net.in/assets/images/105 x 70 (2).png" alt="logo" class="responsive-image">

                                                                            </div>
                                                                            <div class="col-10">
                                                                                <div class="form-group">
                                                                                    <label for="bank">Invoice Number:</label>
                                                                                    <input type="text" name="invoiceNumber" placeholder="" value="" class="form-control" id="invoiceNumber" required readonly>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-6">
                                                                                        <div class="form-group">
                                                                                            <label for="accountNo">Invoice Date:</label>
                                                                                            <input type="date" name="invoiceDate" class="form-control" id="invoiceDate" required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-6">
                                                                                        <div class="form-group">
                                                                                            <label for="ifscCode">Due Date:</label>
                                                                                            <input type="date" name="dueDate" class="form-control" id="dueDate" required>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <h4>Bill To</h4>
                                                                                <div class="form-group">
                                                                                    <label for="bank">Client's Name:</label>
                                                                                    <input type="text" name="bankName" placeholder="john does" class="form-control" id="bankName">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="accountNo">Clien't Address</label>
                                                                                    <input type="text" name="accountNo" placeholder="Enter client address" class="form-control" id="accountNo">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="bank">State</label>
                                                                                    <select class="form-control" name="clientscompanyState" placeholder="Enter State" id="clientscompanyState" required>
                                                                                        <option value="">Please Select</option>
                                                                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                                                        <option value="Assam">Assam</option>
                                                                                        <option value="Bihar">Bihar</option>
                                                                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                                                                        <option value="Goa">Goa</option>
                                                                                        <option value="Gujarat">Gujarat</option>
                                                                                        <option value="Haryana">Haryana</option>
                                                                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                                                        <option value="Jharkhand">Jharkhand</option>
                                                                                        <option value="Karnataka">Karnataka</option>
                                                                                        <option value="Kerala">Kerala</option>
                                                                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                                                        <option value="Maharashtra">Maharashtra</option>
                                                                                        <option value="Manipur">Manipur</option>
                                                                                        <option value="Meghalaya">Meghalaya</option>
                                                                                        <option value="Mizoram">Mizoram</option>
                                                                                        <option value="Nagaland">Nagaland</option>
                                                                                        <option value="Odisha">Odisha</option>
                                                                                        <option value="Punjab">Punjab</option>
                                                                                        <option value="Rajasthan">Rajasthan</option>
                                                                                        <option value="Sikkim">Sikkim</option>
                                                                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                                                                        <option value="Telangana">Telangana</option>
                                                                                        <option value="Tripura">Tripura</option>
                                                                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                                                        <option value="Uttarakhand">Uttarakhand</option>
                                                                                        <option value="West Bengal">West Bengal</option>
                                                                                    </select>

                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="accountNo">Client's Contact No: </label>
                                                                                    <input type="tel" class="form-control" name="clientsmobileNo" placeholder="Your client contact's name" id="clientsmobileNo" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="accountNo">Client's Email ID: </label>
                                                                                    <input type="email" class="form-control" name="clientsemail" placeholder="Your client's email ID" id="clientsemail" required>
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                        <hr>
                                                                        <div class="table-responsive">
                                                                            <table id="orderTable" class="table table-bordered">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th scope="col">SR. NO.</th>
                                                                                        <th scope="col">Particulars</th>
                                                                                        <th scope="col">Amount</th>
                                                                                        <th scope="col">HSN/UIN</th>
                                                                                        <th scope="col">GST Rate</th>
                                                                                        <th scope="col">Remove</th> <!-- New column header for "Remove" button -->
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <!-- Rows with data go here -->
                                                                                    <tr>
                                                                                        <td>1.</td>
                                                                                        <td>
                                                                                            <div class="form-row">
                                                                                                <div class="col">
                                                                                                    <input type="text" class="form-control" placeholder="Enter Particulars">
                                                                                                </div>
                                                                                            </div>
                                                                        </div>
                                                                        </td>
                                                                        <td><input type="text" class="form-control" placeholder="Enter Amount"></td>
                                                                        <td>
                                                                            <div class="form-row">
                                                                                <div class="col">
                                                                                    <select class="form-control" name="Hsnumber" placeholder="Enter HSN Number" id="Hsnumber" required>
                                                                                        <option value="">Please Select</option>
                                                                                        <option value="100">HSN 100 - Description 1</option>
                                                                                        <option value="200">HSN 200 - Description 2</option>
                                                                                        <option value="300">HSN 300 - Description 3</option>
                                                                                        <option value="400">HSN 400 - Description 4</option>
                                                                                        <option value="500">HSN 500 - Description 5</option>
                                                                                        <option value="600">HSN 600 - Description 6</option>
                                                                                        <option value="700">HSN 700 - Description 7</option>
                                                                                        <option value="800">HSN 800 - Description 8</option>
                                                                                        <option value="900">HSN 900 - Description 9</option>
                                                                                        <option value="1000">HSN 1000 - Description 10</option>
                                                                                        <!-- Add more HSN numbers with descriptions as needed -->
                                                                                    </select>

                                                                                </div>
                                                                            </div>
                                                                    </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-row">
                                                                            <div class="col">
                                                                                <input type="text" class="form-control" placeholder="Enter Particulars">
                                                                            </div>
                                                                        </div>
                                                            </div>
                                                            </td>

                                                            <td><button type="button" class="btn btn-danger" onclick="removeRow(this)">Remove</button></td> <!-- Remove button -->
                                                            </tr>
                                                            <tfoot>
                                                                <!-- "Total" row -->
                                                                <tr>
                                                                    <td colspan="2" class="text-center">Total :</td>
                                                                    <td colspan="4"><input type="text" class="form-control" placeholder="Enter Total Amount" readonly></td>
                                                                    <!-- Empty cell for "Remove" column in the total row -->
                                                                </tr>
                                                                <!-- "Amount In Words" row -->
                                                                <tr>
                                                                    <td colspan="2" class="text-center">Amount In Words:</td>
                                                                    <td colspan="4"><input type="text" class="form-control" placeholder="Enter Amount In Words"></td>
                                                                    <!-- Empty cell for "Remove" column in the Amount In Words row -->
                                                                </tr>
                                                            </tfoot>


                                                            </table>
                                                        </div>
                                                        <hr>
                                                        <button type="button" class="btn btn-info waves-effect waves-light" onclick="addRow()">Add Row</button>
                                                        <hr>


                                                        <center> <button type="submit" class="btn btn-success waves-effect waves-light">Create Invoice</button></center>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                        <script>
                            // Get the current date
                            const today = new Date();

                            // Format the date in YYYY-MM-DD format
                            const year = today.getFullYear();
                            const month = String(today.getMonth() + 1).padStart(2, '0');
                            const day = String(today.getDate()).padStart(2, '0');
                            const formattedDate = `${year}-${month}-${day}`;

                            // Set the formatted date as the default value for the "Invoice Date" input field
                            document.getElementById("invoiceDate").value = formattedDate;
                        </script>
                        <script>
                            function addRow() {
                                var table = document.getElementById("orderTable").getElementsByTagName('tbody')[0];
                                var newRow = table.insertRow(table.rows.length - 2); // Insert the new row above the "Total" row

                                var srNoCell = newRow.insertCell(0);
                                srNoCell.innerHTML = table.rows.length - 2 + ".";

                                var particularsCell = newRow.insertCell(1);
                                particularsCell.innerHTML = `
                                                <div class="form-row">
                                                    <div class="col">
                                                    <input type="text" class="form-control" placeholder="Enter Particulars">
                                                    </div>
                                                </div>
                                                `;

                                var amountCell = newRow.insertCell(2);
                                amountCell.innerHTML = '<input type="text" class="form-control" placeholder="Enter Amount" oninput="updateTotal()">';
                                var amountCell = newRow.insertCell(3);
                                amountCell.innerHTML = '<select class="form-control" name="Hsnumber" placeholder="Enter HSN Number" id="Hsnumber" required>\
            <option value="">Please Select</option>\
            <option value="100">HSN 100 - Description 1</option>\
            <option value="200">HSN 200 - Description 2</option>\
            <option value="300">HSN 300 - Description 3</option>\
            <option value="400">HSN 400 - Description 4</option>\
            <option value="500">HSN 500 - Description 5</option>\
            <option value="600">HSN 600 - Description 6</option>\
            <option value="700">HSN 700 - Description 7</option>\
            <option value="800">HSN 800 - Description 8</option>\
            <option value="900">HSN 900 - Description 9</option>\
            <option value="1000">HSN 1000 - Description 10</option>\
        </select>';
                                var amountCell = newRow.insertCell(4);
                                amountCell.innerHTML = '<input type="text" class="form-control" placeholder="Enter Amount" oninput="updateTotal()">';



                                var removeCell = newRow.insertCell(5);
                                removeCell.innerHTML = '<button type="button" class="btn btn-danger" onclick="removeRow(this)">Remove</button>';

                                // Renumber the SR. NO. series
                                updateSrNoSeries();
                                // Update the total amount
                                updateTotal();
                            }

                            function removeRow(button) {
                                var row = button.parentNode.parentNode;
                                var rowIndex = row.rowIndex;
                                row.parentNode.removeChild(row);

                                // Renumber the SR. NO. series after a row is removed
                                updateSrNoSeries();
                                // Update the total amount
                                updateTotal();
                            }

                            function updateSrNoSeries() {
                                var table = document.getElementById("orderTable").getElementsByTagName('tbody')[0];
                                var rows = table.getElementsByTagName("tr");

                                for (var i = 0; i < rows.length - 2; i++) {
                                    var srNoCell = rows[i].cells[0];
                                    srNoCell.innerHTML = i + 1 + ".";
                                }
                            }

                            function updateTotal() {
                                var table = document.getElementById("orderTable").getElementsByTagName('tbody')[0];
                                var rows = table.getElementsByTagName("tr");
                                var totalAmount = 0;

                                for (var i = 0; i < rows.length - 2; i++) {
                                    var amountCell = rows[i].cells[2].getElementsByTagName("input")[0];
                                    var amount = parseFloat(amountCell.value);
                                    if (!isNaN(amount)) {
                                        totalAmount += amount;
                                    }
                                }

                                var totalCell = rows[rows.length - 2].cells[2].getElementsByTagName("input")[0];
                                totalCell.value = totalAmount.toFixed(2);
                            }
                        </script>









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



    <script type="text/javascript">
        $(document).ready(function() {
            $('#candidate-table').DataTable({
                "paging": true
            });
        });
    </script>



    <!-- serch option script start  -->
    <script>
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    </script>
    <!-- serch option script end   -->

    <!-- pagination Start   -->
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
    <!-- pagination end   -->

</body>



</html>