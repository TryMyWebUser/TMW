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
					<h2>Promotions</h2>
					<div class="thm-breadcrumb__box">
						<ul class="thm-breadcrumb">
							<li><a href="index.php">Home</a></li>
							<li><span>::</span></li>
							<li>Promotions</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--Page Header End-->

		<!--Project Page Start-->
		<section class="project-page">
			<div class="container">
				<div class="row masonary-layout">
					<!--Project One Single Start-->
					<?php
						$sql = "SELECT * FROM `promo` ORDER BY `created_at` DESC";
						$result = $conn->query($sql);
						$promo = iterator_to_array($result);
						if (!empty($promo)) {
							foreach ($promo as $pro) {
					?>
					<div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
						<div class="project-one__single">
							<div class="project-one__img-box">
								<a href="admin/<?= $pro['img']; ?>" class="img-popup">
									<div class="project-one__img">
										<img src="admin/<?= $pro['img']; ?>" alt="">
									</div>
								</a>
							</div>
						</div>
					</div>
					<?php } } else {
						echo "Data Not Found";
					} ?>
				</div>
			</div>
		</section>
		<!--Project Page End-->

		<!-- Feature Two Start -->
		<section class="feature-two">
			<div class="feature-two__inner clearfix marquee_mode">
				<ul class="feature-two__list clearfix">
					<li><a href="#!"><i class="icon-play-button"></i><span>Get Now :</span> UI/ UX design</a></li>
					<li><a href="#!"><i class="icon-play-button"></i><span>Get Now :</span> Web Development</a></li>
					<li><a href="#!"><i class="icon-play-button"></i><span>Get Now :</span>Data Analiyist</a></li>
				</ul>
			</div><!-- /.feature-Two__inner -->
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