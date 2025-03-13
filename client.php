<?php
include "admin/libs/load.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "head.php"; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>
	<style>
		.my-masonry-grid {
    display: flex;
    flex-wrap: wrap;
    margin-left: -10px;
}

.my-masonry-item {
    width: calc(33.333% - 20px); /* 3 columns with spacing */
    margin-bottom: 20px;
}

.card {
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    background-color: #fff;
    padding: 15px;
}

.card img {
    width: 100%;
    border-radius: 8px;
    object-fit: cover;
}

	</style>
</head>

<body>

    <div class="page-wrapper">

        <?php include "header.php"; ?>

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(dist_tmw/images/background/page-header-bg.jpg);"></div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Clients</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li><span>::</span></li>
                            <li>Clients</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!-- Cards Start -->
        <?php
        global $conn;
        $rows = Operations::getHeader($conn);
        foreach ($rows as $row) {
            $head = $row['header'];
        ?>
        <section class="process-one pb-0">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">. : <?= $head ?> : .</span>
                </div>
                <div class="row my-masonry-grid">
                    <?php
                    $sql = "SELECT * FROM `training` WHERE `category` = '$head'";
                    $result = $conn->query($sql);
                    $training = iterator_to_array($result);
                    if (!empty($training)) {
                        foreach ($training as $train) {
                    ?>
                    <div class="col-md-4 my-masonry-item">
                        <div class="card p-3">
                            <img src="admin/<?= $train['frame']; ?>" alt="Image Not Found">
                        </div>
                    </div>
                    <?php } } else { echo "<p class='text-center'>Data Not Found</p>"; } ?>
                </div>
            </div>
        </section>
        <?php } ?><br><br><br>
        <!-- Cards Ends -->

        <script>
        document.addEventListener("DOMContentLoaded", function () {
            var grid = document.querySelector('.my-masonry-grid');
            var msnry = new Masonry(grid, {
                itemSelector: '.my-masonry-item',
                columnWidth: '.my-masonry-item',
                percentPosition: true,
                gutter: 20
            });
        });
        </script>

        <?php include "footer.php"; ?>