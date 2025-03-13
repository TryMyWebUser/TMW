<?php

include "libs/load.php";

// Start a session
Session::start();

if (!Session::get('login_user'))
{
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>View - Trainings</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="vendors/feather/feather.css" />
        <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css" />
        <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css" />
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css" />
        <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css" />
        <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css" />
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="css/vertical-layout-light/style.css" />
        <link rel="stylesheet" href="css/vertical-layout-light/masonry.css" />
        <!-- endinject -->
        <link rel="shortcut icon" href="images/favicon.png" />
        <style>
            .icon__class {
                width: 3rem !important;
                border-radius: 8rem;
                position: absolute;
                top: 30px;
                right: 30px;
            }
            .grid-row {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                grid-gap: 20px;
                /* margin: 20px 0; */
            }
            .card-top img {
                display: block;
                width: 100%;
            }
            .container {
                width: 95%;
                margin: auto;
            }
            .card {
                background: #fff;
                padding: 20px;
                border-radius: 20px;
                box-shadow: 0px 0px 10px rgb(0 0 0 / 20%);
            }
            .card-top {
                border-top-left-radius: 20px;
                border-top-right-radius: 20px;
                overflow: hidden;
            }
            .card-info h2 {
                font-size: 18px;
                margin: 10px 0 5px 0;
            }
            .date {
                margin-bottom: 10px;
            }
            span,
            p {
                font-size: 15px;
                display: block;
            }
            .excerpt {
                color: #aeaeae;
            }
            .flex-row {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            .card-bottom {
                margin-top: 20px;
            }
            .button {
                text-decoration: unset;
                font-weight: 600;
                text-transform: uppercase;
                color: #4e4e4e;
                width: 80px;
                text-align: center;
                font-size: 15px;
                line-height: 30px;
                border-radius: 5px;
                background: #f2f4f6;
            }
            .read-more {
                text-decoration: unset;
                color: #000;
                font-weight: 600;
            }
            .btn-yellow {
                background: #ffb91d;
            }
            .btn-sky {
                background: #d2f9fe;
            }
            .btn-dpink {
                background: #e8d3fc;
            }
        </style>
    </head>
    <body>
        <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <?php include "pages/templates/_nav.php"; ?>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_settings-panel.html -->
                <div class="theme-setting-wrapper">
                    <div id="settings-trigger"><i class="ti-settings"></i></div>
                    <div id="theme-settings" class="settings-panel">
                        <i class="settings-close ti-close"></i>
                        <p class="settings-heading">SIDEBAR SKINS</p>
                        <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                            <div class="img-ss rounded-circle bg-light border mr-3"></div>
                            Light
                        </div>
                        <div class="sidebar-bg-options" id="sidebar-dark-theme">
                            <div class="img-ss rounded-circle bg-dark border mr-3"></div>
                            Dark
                        </div>
                        <p class="settings-heading mt-2">HEADER SKINS</p>
                        <div class="color-tiles mx-0 px-4">
                            <div class="tiles success"></div>
                            <div class="tiles warning"></div>
                            <div class="tiles danger"></div>
                            <div class="tiles info"></div>
                            <div class="tiles dark"></div>
                            <div class="tiles default"></div>
                        </div>
                    </div>
                </div>
                <!-- partial -->
                <!-- partial:partials/_sidebar.html -->
                <?php include "pages/templates/_header.php"; ?>
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="row" data-masonry='{"percentPosition": true }'>
                                    <?php
                                        $training = Operations::getTrainingImages();
                                        if (!empty($training)) {
                                            foreach ($training as $train) {
                                    ?>
                                    <div class="col-12 col-md-4 col-lg-4 hcf-isotope-item mb-4">
                                        <div class="cards grid-row">
                                            <div class="card">
                                                <div class="card-top">
                                                    <img src="<?= $train['frame']; ?>" alt="Image Not Found" />
                                                </div>
                                                <div class="card-info">
                                                    <h2><?= $train['category']; ?></h2>
                                                    <span class="date"><?= $train['created_at']; ?></span>
                                                </div>
                                                <div class="card-bottom flex-row">
                                                    <!-- <a href="#" class="read-more">Read Full Blog</a>
                                                    <a href="#" class="button btn-yellow">Blog</a> -->
                                                    <a href="editTrainings.php?edit_id=<?= $train['id']; ?>"><button type="button" class="btn btn-inverse-dark btn-icon" style="width: 2rem; height: 2rem;">
                                                        <i class="ti-pencil"></i>
                                                    </button></a>
                                                    <a href="deleteTrain.php?delete_id=<?= $train['id']; ?>"><button type="button" class="btn btn-inverse-danger btn-icon" style="width: 2rem; height: 2rem;">
                                                        <i class="ti-trash"></i>
                                                    </button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } } else { echo "Data Not Found"; } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <?php include "pages/templates/_footer.php"; ?>
    </body>
</html>