<?php

include "libs/load.php";

// Start a session
Session::start();

if (!Session::get('login_user'))
{
    header("Location: index.php");
    exit;
}

$result = "";

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    if (isset($_POST['submit']) && isset($_POST['title']) && isset($_POST['dec']) && isset($_POST['category']))
    {
        $title = $_POST['title'];
        $dec = $_POST['dec'];
        $cate = $_POST['category'];
        $result = Operations::setCareer($title, $dec, $cate);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Add - Careers</title>
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
        <!-- endinject -->
        <link rel="shortcut icon" href="images/favicon.png" />
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
                                <div class="row">
                                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Careers Uploads</h4>
                                                <p class="card-description">
                                                    <?= $result; ?>
                                                </p>
                                                <form class="forms-sample" method="POST">
                                                    <div class="form-group">
                                                        <label for="exampleInputcategory">Category</label>
                                                        <select name="category" required>
                                                            <option>Select Category</option>
                                                            <option value="trainings">Training Classes</option>
                                                            <option value="jobs">Jobs Opening</option>
                                                        </select>    
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputName1">Title</label>
                                                        <input type="text" name="title" class="form-control" placeholder="Title" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleTextarea1">Description</label>
                                                        <textarea class="form-control" name="dec" id="exampleTextarea1" placeholder="Description" rows="4" required></textarea>
                                                    </div>
                                                    <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <?php include "pages/templates/_footer.php"; ?>
    </body>
</html>