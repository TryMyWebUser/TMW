<?php
include "libs/load.php";

// Start a session
Session::start();

if (!Session::get('login_user')) {
    header("Location: index.php");
    exit;
}

// Use the global database connection
global $conn;
$conn = Database::getConnect();

$result = "";

$getID = $_GET['edit_id'];

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'], $_POST['category'])) {
        $cate = $_POST['category'];
        $img = $_FILES['img2'] ?? null;

        $targetDir = "uploads/training/";

        if (!is_dir($targetDir)) {
            // Create directory with proper permissions
            mkdir($targetDir, 0777, true);
        }

        $allowTypes = ['jpg', 'png', 'jpeg', 'gif'];
        $uploadedImagePath = "";

        // Process the image if it exists
        if (!empty($img['name'])) {
            $fileName = basename($img['name']);
            $filePath = $targetDir . $fileName;
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

            if (in_array($fileType, $allowTypes)) {
                if (move_uploaded_file($img['tmp_name'], $filePath)) {
                    $uploadedImagePath = $filePath; // Save the file path
                } else {
                    $result = "Error uploading the image.";
                }
            } else {
                $result = "Invalid file type. Allowed types are: " . implode(", ", $allowTypes);
            }
        }

        $sql = "UPDATE `training` SET `category` = '$cate', `created_at` = NOW()";

        if (!empty($uploadedImagePath)) {
            $sql .= ", `frame` = '$uploadedImagePath'";
        }

        $sql .= " WHERE `id` = '$getID'";

        // Execute query
        if ($conn->query($sql)) {
            header("Location: viewTrainings.php");
            exit;
        } else {
            $result = "Error occurred while saving data: " . $conn->error;
        }
    }
}


// Fetch training data
$train = Operations::getTrainingImage($conn);

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Edit - Projects</title>
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
                                    <div class="col-md-12 grid-margin">
                                        <div class="row">
                                            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <br><br><h4 class="card-title">Clients Logo Uploads</h4>
                                                        <p class="card-description">
                                                            <?= $result; ?>
                                                        </p>
                                                        <form class="forms-sample" method="POST" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                <label for="exampleInputcategory">Category</label>
                                                                <select name="category">
                                                                    <option value="<?= $train['category']; ?>">Select Category</option>
                                                                    <?php
                                                                        $rows = Operations::getHeader($conn);
                                                                        foreach ($rows as $row) {
                                                                    ?>
                                                                    <option value="<?= $row['header']; ?>"><?= $row['header']; ?></option>
                                                                    <?php } ?>
                                                                </select>    
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Upload Images</label>
                                                                <div class="input-group col-xs-12">
                                                                    <input type="file" name="img2" class="file-upload-browse btn btn-light" placeholder="Upload Images" accept="image/*"> 
                                                                </div>
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
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <?php include "pages/templates/_footer.php"; ?>
    </body>
</html>