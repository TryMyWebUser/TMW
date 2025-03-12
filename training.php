<?php

	include "admin/libs/load.php";

?>

<!DOCTYPE html>
<html>

<head>
	
	<?php include "head.php"; ?>

</head>

<body>

	<div class="page-wrapper">

		<!-- Preloader -->
		<!-- <div class="preloader"></div> -->
		<!-- End Preloader -->

		<!-- Cursor -->
		<div class="cursor"></div>
		<div class="cursor-follower"></div>
		<!-- Cursor End -->

		<?php include "header.php"; ?>

		<!--Page Header Start-->
		<section class="page-header">
			<div class="page-header__bg" style="background-image: url(dist_tmw/images/background/page-header-bg.jpg);"></div>
			<div class="container">
				<div class="page-header__inner">
					<h2>Courses Detail</h2>
					<div class="thm-breadcrumb__box">
						<ul class="thm-breadcrumb">
							<li><a href="index.php">Home</a></li>
							<li><span>::</span></li>
							<li>Courses</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--Page Header End-->

		<!--Project Details Start-->
		<section class="project-details">
			<div class="container">
				<div class="project-details__inner">
					<span class="project-details__sub-title">Courses</span>
					<?php
						$getCate = $_GET['data'] ?? "Data Not Found";
						$sql = "SELECT * FROM `training` WHERE `category` = '$getCate'";
						$result = $conn->query($sql);
						if (!$result) {
							die("Query failed: " . $conn->error);
						}
						$training = iterator_to_array($result);
						if (!empty($training && $getCate)) {
							foreach ($training as $train) {
					?>
					<h3 class="project-details__title"><?= $train['title']; ?></h3>
					<div class="project-details__img">
						<!--<img src="admin/< ?= $train['frame']; ?>" alt="Image Not Found" style="border-radius: 1rem;">-->
						<!-- Include Swiper.js CSS -->
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
                        
                        <!-- Slider HTML -->
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php
                                    $frames = explode(',', $train['frame']);
                                    foreach ($frames as $img) {
                                ?>
                                <div class="swiper-slide">
                                    <img src="admin/<?= $img ?>" alt="Image Not Found">
                                </div>
                                <?php } ?>
                            </div>
                            <!-- Pagination (dots) -->
                            <div class="swiper-pagination"></div>
                        </div>
                        
                        <!-- Include Swiper.js JavaScript -->
                        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
                        
                        <!-- Initialize Swiper -->
                        <script>
                          var swiper = new Swiper('.swiper-container', {
                              loop: true,
                              autoplay: {
                                  delay: 3000, // Change slide every 3 seconds
                                  disableOnInteraction: false,
                              },
                              pagination: {
                                  el: '.swiper-pagination',
                                  clickable: true,
                              },
                          });
                        </script>
                        
                        <!-- Styling -->
                        <style>
                          .swiper-container {
                              width: 100%;
                              max-width: 600px; /* Adjust as needed */
                              border-radius: 1rem;
                          }
                          .swiper-slide img {
                              width: 100%;
                              border-radius: 1rem;
                          }
                        </style>
					</div>
					<div class="project-details__content">
						<div class="row">
							<div class="col-xl-9 col-lg-9">
								<div class="project-details__content-right">
									<p class="project-details__content-text" style="word-wrap: break-word; overflow-wrap: break-word; white-space: normal; width:1200px;"><?= $train['dec']; ?></p>
									<div class="project-details__content-points-box">
									<?php
										$points = explode(',', $train['points']);
										$chunkedPoints = array_chunk($points, 4); // Split array into chunks of 3

										foreach ($chunkedPoints as $chunk) { 
									?>
										<ul class="project-details__content-points col-5">
											<?php foreach ($chunk as $point) { ?>
											<li>
												<div class="project-details__content-shape"></div>
												<p><span class="wrapped-content"><?= htmlspecialchars(trim($point)); ?></span></p>
											</li>
											<?php } ?>
										</ul>
									<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php } } else { echo "Data Not Found."; } ?>
				</div>
			</div>
		</section>
		<!--Project Details End-->

		<!-- Feature Two Start -->
		<section class="feature-two">
			<div class="feature-two__inner clearfix marquee_mode">
				<ul class="feature-two__list clearfix">
					<li><a href="#!"><i class="icon-play-button"></i><span>Get Now :</span> UI/ UX design</a></li>
					<li><a href="#!"><i class="icon-play-button"></i><span>Get Now :</span> Web Development</a></li>
					<li><a href="#!"><i class="icon-play-button"></i><span>Get Now :</span>Data Analiyist</a></li>
				</ul>
			</div><!-- /.feature-one__inner -->
		</section>
		<!-- Feature Two End -->

		<!-- Get In Touch Start -->
		<section class="get-in-touch padding-top">
			<div class="container">
				<div class="get-in-touch__inner">
					<div class="get-in-touch__top">
						<div class="get-in-touch__top-img">
							<img src="dist_tmw/images/resource/get-in-touch-img-1.jpg" alt="">
						</div>
						<div class="get-in-touch__top-btn">
							<a href="contact.html"><span class="icon-bottom-right"></span></a>
						</div>
					</div>
					<div class="get-in-touch__bottom">
						<h2 class="get-in-touch__title">Have any projects in mind? <br>
							Get in touch with us!</h2>
					</div>
				</div>
			</div>
		</section>
		<!-- Get In Touch End -->


		<?php
		include('footer.php');
		?>