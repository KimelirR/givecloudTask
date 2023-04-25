<?php
  
?>

<!DOCTYPE html>
<html
    class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui">
        <meta name="description" content="This is responsive portfolio">
        <meta name="keywords" content="portfolio">
        <meta name="author" content="portfolio">
        <title>GiveCloud Task</title>

        <link
        href="./app-assets/css/css93c2.css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/vendors.min.css">
        <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/forms/toggle/switchery.min.css">
        <link rel="stylesheet" type="text/css" href="./app-assets/css/plugins/forms/switch.min.css">
        <link rel="stylesheet" type="text/css" href="./app-assets/css/core/colors/palette-switch.min.css">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="./app-assets/css/bootstrap.min.css"> <link rel="stylesheet" type="text/css" href="./app-assets/css/bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="./app-assets/css/colors.min.css">
        <link rel="stylesheet" type="text/css" href="./app-assets/css/components.min.css">
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="./app-assets/css/core/menu/menu-types/vertical-menu.min.css"> <link rel="stylesheet" type="text/css" href="./app-assets/css/core/colors/palette-gradient.min.css">
        <link rel="stylesheet" type="text/css" href="./app-assets/css/plugins/animate/animate.min.css">
        <link rel="stylesheet" type="text/css" href="./app-assets/fonts/simple-line-icons/style.min.css">
        <!-- END: Page CSS-->

    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->

    <body
        class="bg-gradient-x-purple-blue " data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

        <!-- NAVBAR-->
        <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top bg-dark box-shadow-0">
            <div class="container">
                <a href="#" class="navbar-brand">

                    <img src="./givecloud-logo-full-color-rgb -3-.png" width="70" alt="" class="d-inline-block align-middle mr-2">

                </a>

                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navbarSupportedContent" class="collapse navbar-collapse show">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <!-- <a href="index.php" class="nav-link"></a> -->
                            <a href="export.php" class="nav-link"><i class="bi bi-cloud-arrow-down bg-dark"></i>Export DB</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- BEGIN: Content-->
        <div class="app-content content py-5">
            <div class="content-wrapper">
                <div class="content-wrapper-before"></div>
                <div
                    class="content-body mt-2">
                    <!-- Individual column searching (text inputs) table -->
                    <section id="text-inputs">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo "$headername"?>
                                        </h4>
                                        <a class="heading-elements-toggle">
                                            <i class="la la-ellipsis-v font-medium-3"></i>
                                        </a>
                                        <div class="heading-elements">
                                            <ul class="list-inline mb-0">
                                                <li>
                                                <?php echo "$linkname"?>
                                                </li>
                                                <li>
                                                    <a data-action="reload">
                                                        <i class="ft-rotate-cw"></i>
                                                        refresh</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-content collapse show">
                                        <div class="card-body">
                                            <p class="card-text">The searching functionality that is provided by DataTables is very useful for quickly search through the information in the table - however the search is global, and you may wish to present controls to search on specific columns only. DataTables has the ability to apply searching to a specific column through the column().search() method (note that the name of the method is search not filter since filter() is used to apply a filter to a result set).
                                            </p>
                                            <div class="table-responsive">
                                            <!-- table table-striped table-bordered text-inputs-searching -->
                                            <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
