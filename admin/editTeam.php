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


$getID = $_GET['edit_id'];
// die($getID);

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit']) && isset($_POST['name']) && isset($_POST['role'])) {
        $name = $_POST['name'];
        $role = $_POST['role'];
        $img = $_FILES['img'] ?? null;
        
        $conn = Database::getConnect();
        $sql = "SELECT * FROM `team` WHERE `id` = '$getID'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $targetDir = "uploads/team/"; // Define your upload directory

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

        // Build SQL query
        if (!empty($uploadedImagePath)) {
            unlink($row['img']);
            $sql = "UPDATE `team` SET `name` = '$name', `role` = '$role', `img` = '$uploadedImagePath', `created_at` = NOW() WHERE `id` = '$getID'";
        } else {
            $sql = "UPDATE `team` SET `name` = '$name', `role` = '$role', `created_at` = NOW() WHERE `id` = '$getID'";
        }

        // Execute query
        if ($conn->query($sql)) {
            header("Location: viewTeam.php");
            exit;
        } else {
            $result = "Error occurred while saving data: " . $conn->error;
        }
    }
}

$pro = Operations::getTeamMember();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Edit - Team Member</title>
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
                                                <h4 class="card-title">Edit Team Member</h4>
                                                <p class="card-description">
                                                    <?= $result; ?>
                                                </p>
                                                <form class="forms-sample" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label for="exampleInputName1">Name</label>
                                                        <input type="text" name="name" class="form-control" placeholder="Name" value="<?= $pro['name']; ?>" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputLink1">Link</label>
                                                        <input type="text" name="role" class="form-control" placeholder="Role" value="<?= $pro['role']; ?>" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Image upload</label>
                                                        <div class="input-group col-xs-12">
                                                            <input type="file" name="img" class="file-upload-browse btn btn-light" placeholder="Upload Image" accept="image/*"> 
                                                        </div>
                                                    </div>
                                                    <button type="submit" name="submit" class="btn btn-primary mr-2">Update</button>
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