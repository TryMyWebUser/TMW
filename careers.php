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
					<h2>Careers</h2>
					<div class="thm-breadcrumb__box">
						<ul class="thm-breadcrumb">
							<li><a href="index.php">Home</a></li>
							<li><span>::</span></li>
							<li>Careers</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--Page Header End-->
		
		<!-- Cards Start -->
		<section class="process-one">
			<div class="container">
				<div class="section-title text-center">
					<div class="section-title__tagline-box">
						<span class="section-title__tagline">. : Training Classes : .</span>
					</div>
					<h2 class="section-title__title">Available Classes</h2>
				</div>
				<div class="row">
					<!--Process One Single Start-->
					<?php
						$sql = "SELECT * FROM `career` WHERE `category` = 'trainings'";
						$result = $conn->query($sql);
						$training = iterator_to_array($result);
						if (!empty($training)) {
						foreach ($training as $training) {
					?>
					<div class="col-md-4">
						<div class="card p-3 mb-2">
							<div class="mt-3">
								<h5 class="heading"><?= $training['title'] ?></h5>
								<div class="mt-1">
									<div class="my-3">
										<span class="text1"><?= $training['dec'] ?></span><br>
									</div>
									<a href="#form">
										<button type="button" class="btn btn-outline-primary">Apply Now</button>
									</a>
								</div>
							</div>
						</div>
					</div>
					<?php } } else { echo "<p>Training Classes Not Found</p>"; } ?>
					<!--Process One Single End-->
				</div>
			</div>
		</section>
        <section class="process-one">
			<div class="container">
				<div class="section-title text-center">
					<div class="section-title__tagline-box">
						<span class="section-title__tagline">. : Job Opening : .</span>
					</div>
					<h2 class="section-title__title">Opening Opportunities</h2>
				</div>
				<div class="row">
					<!--Process One Single Start-->
					<?php
						$sql = "SELECT * FROM `career` WHERE `category` = 'jobs'";
						$result = $conn->query($sql);
						$jobs = iterator_to_array($result);
						if (!empty($jobs)) {
						foreach ($jobs as $job) {
					?>
					<div class="col-md-4">
						<div class="card p-3 mb-2">
							<div class="mt-3">
								<h5 class="heading"><?= $job['title'] ?></h5>
								<div class="mt-1">
									<div class="my-3">
										<span class="text1"><?= $job['dec'] ?></span><br>
									</div>
									<a href="#form">
										<button type="button" class="btn btn-outline-primary">Apply Now</button>
									</a>
								</div>
							</div>
						</div>
					</div>
					<?php } } else { echo "<p>Jobs Opening Not Found</p>"; } ?>
					<!--Process One Single End-->
				</div>
			</div>
		</section>
        <!-- Cards Ends -->

		<!--Contact Page Start-->
		<section class="contact-page" id="form">
			<div class="container">
				<div class="contact-page__inner">
					<h3 class="contact-page__title">What are you looking for?</h3>
					<div class="contact-page__form">
						<div class="row">
							<div class="col-xl-6">
								<div class="contact-page__input-box">
									<input type="text" name="fullName" placeholder="Name" required="">
								</div>
							</div>
							<div class="col-xl-6">
								<div class="contact-page__input-box">
									<input type="email" name="email" placeholder="Email" required="">
								</div>
							</div>
							<div class="col-xl-6">
								<div class="contact-page__input-box">
									<input type="text" name="subject" placeholder="subject" required="">
								</div>
							</div>
							<div class="col-xl-6">
								<div class="contact-page__input-box">
									<input type="text" name="phone" placeholder="Phone" required="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-12">
								<div class="contact-page__input-box text-message-box">
									<textarea name="message" placeholder="Massage" required=""></textarea>
								</div>
								<!--<div class="contact-page__input-box">-->
								<!--	<input type="file" name="resume" placeholder="Upload Your Resume" required>-->
								<!--</div>-->
								<lable>Share Your Resume</lable><br>
								<div class="input-group mb-3">
									<input type="file" class="form-control" name="resume" accept=".pdf" required>
								</div>
								<!--<div class="contact-page__checked-box">-->
								<!--	<input type="checkbox" name="skipper1" id="skipper" checked="">-->
								<!--	<label for="skipper"><span></span>Save my name, email, and website in this-->
								<!--		browser for the next time I Massage.</label>-->
								<!--</div>-->
								<!-- Message placeholder -->
								<div id="waitingMessage" style="display:none; color:rgb(119, 0, 255); font-size: 14px; font-weight: bold;">
								Please wait 1 minutes while the mail is being sent...
								</div>
								<div class="contact-page__btn-box">
									<!-- Submit button -->
									<button type="submit" class="contact-page__btn submit" onclick="showWaitingMessageAndSendRequest()">Submit</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Contact Page End-->

		<!-- Main Footer Start -->
		<footer class="main-footer-two">
			<div class="main-footer-two__bg" style="background-image: url(dist_tmw/images/background/main-footer-two-bg.jpg);">
			</div>
			<div class="main-footer-two__top">
				<div class="container">
					<div class="main-footer-two__inner">
						<div class="row">
							<div class="col-xl-7 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
								<div class="footer-widget-two__column footer-widget-two__about">
									<div class="footer-widget-two__logo">
										<a href="index.html"><img src="dist_tmw/images/resource/logo-1.png" alt=""></a>
									</div>
									<p class="footer-widget-two__about-text">TryMyWebsites is an IT - Branding Company offering customised solutions and products to companies and help
										them transforming their business digitally.</p>
									<div class="site-footer-two__social">
										<a href="https://www.facebook.com/profile.php?id=100064087022861"><i class="icon-facebook-app-symbol"></i></a>
										<a href="https://www.instagram.com/trymywebsites?igsh=Y3pqa2ExMjVzdDRk"><i class="icon-instagram"></i></a>
										<a href="https://wa.me/919597236423"><i class="icon-whatsapp"></i></a>
											<a href="https://www.linkedin.com/company/105714413/admin/dashboard/"><i class="icon-linkedin"></i></a>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
								<div class="footer-widget-two__column footer-widget-two__link">
									<div class="footer-widget-two__title-box">
										<h3 class="footer-widget-two__title">Quick Links</h3>
									</div>
									<div class="footer-widget-two__link-box">
										<ul class="footer-widget-two__link-list list-unstyled">
											<li><a href="index.php"> <span class="icon-play-button"></span> Home</a>
											</li>
											<li><a href="about.php"> <span class="icon-play-button"></span> About</a></li>
											<li><a href="projects.php"> <span class="icon-play-button"></span> Portfolio</a></li>
											<li><a href="promotion.php"> <span class="icon-play-button"></span> Promotion</a></li>
											<li><a href="services.php"> <span class="icon-play-button"></span> Services</a></li>
												<li><a href="training.php?data=Web%20Development"> <span class="icon-play-button"></span> Courses</a></li>
									
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
								<div class="footer-widget-two__column footer-widget-two__contact">
									<div class="footer-widget-two__title-box">
										<h3 class="footer-widget-two__title">Contact Us</h3>
									</div>
									<ul class="footer-widget-two__contact-list">
										<li>
											<div class="icon">
												<span class="icon-location"></span>
											</div>
											<div class="text">
												<!--<p><br>COIMBATORE-641 035</p>-->
													<p>SARAVANAMPATTI <br> COIMBATORE</p>
											</div>
										</li>
										<li>
											<div class="icon">
												<span class="icon-phone-1"></span>
											</div>
											<div class="text">
												<p><a href="tel:9597236423">Phone: +91 9597236423</a></p>
												<p><a href="tel:9944946423">Phone: +91 9944946423</a></p>
											</div>
										</li>
										<li>
											<div class="icon">
												<span class="icon-mail-1"></span>
											</div>
											<div class="text">
												<p><a href="mailto:admin@trymywebsites.com">admin@trymywebsites.com</a></p>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main-footer-two__bottom">
				<div class="container">
					<div class="main-footer-two__bottom-inner">
					<p class="main-footer__bottom-text">Designed and developed by  <a href="https://trymywebsites.com/">Trymywebsites</a></p>
					</div>
				</div>
			</div>
		</footer>
		<!-- Main Footer End -->







	</div>
	<!-- End PageWrapper -->

	<!-- SweetAlert2 CDN -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<script>
		function showWaitingMessageAndSendRequest() {
			// Show the waiting message
			document.getElementById('waitingMessage').style.display = 'block';
			
			// Call the function to send the application request
			sendApplicationRequest();
		}
		function sendApplicationRequest() {
			let submit = document.querySelector(".submit");
			// Collect form data
			let applicationData = {
				fullName: document.querySelector("input[name='fullName']").value,
				email: document.querySelector("input[name='email']").value,
				subject: document.querySelector("input[name='subject']").value,
				phoneNumber: document.querySelector("input[name='phone']").value,
				message: document.querySelector("textarea[name='message']").value,
				resume: document.querySelector("input[name='resume']").files[0] // File input
			};
			
			let formData = new FormData();
			for (let key in applicationData) {
				formData.append(key, applicationData[key]);
			}

			fetch("admin/libs/Broker.class.php", {
				method: "POST",
				body: formData
			})
			.then(response => response.json())
			.then(data => {
				if (data.success) {
					showSuccessMessage();
				} else {
					showErrorMessage(data.message);
				}
			})
			.catch(error => {
				showErrorMessage("An unexpected error occurred. Please try again later.");
			});
		}
		
		function showSuccessMessage() {
			Swal.fire({
				icon: "success",
				title: "Application Submitted!",
				html: `<p>Our team will review your application and get back to you.</p>`,
				confirmButtonText: 'OK',
			}).then((result) => {
				if (result.isConfirmed) {
					// Redirect to careers.php after the user clicks "OK"
					window.location.href = "careers.php";
				}
			});
		}
		
		function showErrorMessage(message) {
			Swal.fire({
				icon: "error",
				title: "Submission Failed",
				text: message,
				confirmButtonText: 'OK',
			}).then((result) => {
				if (result.isConfirmed) {
					// Redirect to careers.php after the user clicks "OK"
					window.location.href = "careers.php";
				}
			});
		}
	</script>

	<!-- Scroll To Top -->
	<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fas fa-arrow-up fa-fw"></span></div>

	<script src="dist_tmw/js/jquery.js"></script>
	<script src="dist_tmw/js/01-bootstrap.min.js"></script>
	<script src="dist_tmw/js/02-nice-select.min.js"></script>
	<script src="dist_tmw/js/03-color-settings.js"></script>
	<script src="dist_tmw/js/04-owl.js"></script>
	<script src="dist_tmw/js/05-jarallax.min.js"></script>
	<script src="dist_tmw/js/06-isotope.js"></script>
	<script src="dist_tmw/js/07-wow.js"></script>
	<script src="dist_tmw/js/08-validate.js"></script>
	<script src="dist_tmw/js/09-appear.js"></script>
	<script src="dist_tmw/js/10-swiper.min.js"></script>
	<script src="dist_tmw/js/11-jquery.easing.min.js"></script>
	<script src="dist_tmw/js/12-gsap.min.js"></script>
	<script src="dist_tmw/js/13-odometer.js"></script>
	<script src="dist_tmw/js/14-tilt.jquery.min.js"></script>
	<script src="dist_tmw/js/15-magnific-popup.min.js"></script>
	<script src="dist_tmw/js/16-jquery-ui.js"></script>
	<script src="dist_tmw/js/17-ScrollTrigger.js"></script>
	<script src="dist_tmw/js/18-SplitText.js"></script>
	<script src="dist_tmw/js/19-gsap.js"></script>
	<script src="dist_tmw/js/20-countdown.min.js"></script>
	<script src="dist_tmw/js/21-marquee.min.js"></script>
	<script src="dist_tmw/js/22-jquery.circleType.js"></script>
	<script src="dist_tmw/js/23-jquery.lettering.min.js"></script>

	<script src="dist_tmw/js/script.js"></script>


	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="dist_tmw/js/respond.js"></script><![endif]-->
	<a href="https://wa.me/919597236423" class="whatsapp_float" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
</body>

</html>