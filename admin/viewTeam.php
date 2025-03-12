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
        <title>View - Projects</title>
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
            :root {
                --bs-dark-rgb: 33, 37, 41;
            }
            .bg-dark {
                --bs-bg-opacity: 1;
                background-color: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important;
            }
            /* .hcf-masonry-card .card-overlay {
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                opacity: 0;
            }
            .hcf-masonry-card {
                display: block;
                position: relative;
                overflow: hidden;
            } */
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
                                        $project = Operations::getTeamMembers();
                                        if (!empty($project)) {
                                            foreach ($project as $pro) {
                                    ?>
                                    <div class="col-12 col-md-4 col-lg-4 hcf-isotope-item mb-4">
                                        <a class="hcf-masonry-card rounded-top rounded-4" href="#!">
                                            <img class="card-img img-fluid" loading="lazy" src="<?= $pro['img']; ?>" alt="User Image Not Found">
                                            <div class="card-overlay rounded-bottom d-flex flex-column justify-content-center bg-dark p-3" style="--bs-bg-opacity: .5;">
                                                <h4 class="card-title text-white text-center mb-1"><?= $pro['name']; ?></h4>
                                                <div class="card-category text-white text-center"><?= $pro['role']; ?></div>
                                                <a href="editTeam.php?edit_id=<?= $pro['id']; ?>"><button type="button" class="btn btn-inverse-dark btn-icon d-flex justify-content-center align-items-center position-absolute" style="top: 10px; right: 65px; width: 2rem; height: 2rem; color: #fff;">
                                                    <i class="ti-pencil"></i>
                                                </button></a>
                                                <a href="deleteTeam.php?delete_id=<?= $pro['id']; ?>"><button type="button" class="btn btn-inverse-danger btn-icon d-flex justify-content-center align-items-center position-absolute" style="top: 10px; right: 25px; width: 2rem; height: 2rem;">
                                                    <i class="ti-trash"></i>
                                                </button></a>
                                            </div>
                                        </a>
                                    </div>
                                    <?php } } else {
                                        echo "Data Not Found";
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <?php include "pages/templates/_footer.php"; ?>
    </body>
</html>