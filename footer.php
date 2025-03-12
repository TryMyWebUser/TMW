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



		<!-- Website Starting Popup -->
		<style>
			.login-popup{
				position: fixed;
				left: 0;
				top: 0;
				width: 100%;
				height: 100%;
				z-index: 1000;
				background-color:rgba(0,0,0,0.6);
				visibility: hidden;
				opacity: 0;
				transition: all 1s ease;
				overflow: auto;
			}
			.login-popup.show{
				visibility:visible;
				opacity: 1;
			}
			.login-popup .box{
				background-color: #ffffff;
				width: -webkit-fill-available;
				position: absolute;
				left: 50%;
				top: 50%;
				transform: translate(-50%, -50%);
				/* display: flex; */
				opacity: 0;
				margin-left: 50px;
				transition: all 1s ease;
				margin-top: 6rem;
				border-radius: 1rem;
			}
			.login-popup.show .box{
				opacity: 1;
				margin-left: 0;
			}
			.login-popup .box .img-area{
				flex:0 0 50%;
				max-width: 50%;
				position: relative;
				overflow: hidden;
				padding:30px;
				display: flex;
				align-items: center;
				justify-content: center;
			}
			.login-popup .box .img-area h1{
				font-size: 30px;
			}
			.login-popup .box .img-area .img{
				position: absolute;
				left:0;
				top:0;
				width: 100%;
				height: 100%;
				background-image: url('img/bg.jpg');
				background-size: cover;
				background-position: center;
				animation: zoomInOut 7s linear infinite;
				z-index: -1;

			}
			@keyframes zoomInOut{
				0%,100%{
					transform: scale(1);
				}
				50%{
					transform: scale(1.1);
				}
			}
			.login-popup .box .form{
				flex:0 0 50%;
				/* max-width: 50%; */
				padding:40px 30px;
			}

			.login-popup .box .form h1{
				color:#000000;
				font-size: 30px;
				margin:0 0 30px;
			}
			.login-popup .box .form .form-control{
				height: 45px;
				margin-bottom: 30px;
				width: 100%;
				border:none;
				border-bottom:1px solid #cccccc;
				font-size: 15px;
				color:#000000;
			}
			.login-popup .box .form .form-control:focus{
				outline: none;
			}
			.login-popup .box .form label{
				font-size: 15px;
				color:#555555;
			}
			.login-popup .box .form .btn{
				width: 100%;
				background-color: #E91E63;
				margin-top:40px;
				height: 45px;
				border:none;
				border-radius: 25px;
				font-size: 15px;
				text-transform: uppercase;
				color:#ffffff;
				cursor: pointer;
			}
			.login-popup .box .form .btn:focus{
				outline: none;
			}

			.login-popup .box .form .close{
				position: absolute;
				right: 10px;
				top:0px;
				font-size: 30px;
				cursor: pointer;
				padding: 1rem;
			}

			/*responsive*/
			@media(max-width: 767px){
				.login-popup .box{
					width: calc(100% - 30px);
				}
				.login-popup .box .img-area{
					display: none;
				}
				.login-popup .box .form{
					flex: 0 0 100%;
					max-width: 100%;
				}
			}
		</style>

		<div class="login-popup">
			<div class="box">
				<div class="form">
					<div class="close">&times;</div>
					<h1 class="text-center m-0">Apply Now</h1>
					<form id="careerForm">
						<div class="form-group">
							<!-- <label class="form-label">Full Name</label> -->
							<input type="text" name="fullName" placeholder="FullName" class="form-control" required>
						</div>
						<div class="form-group">
							<!-- <label class="form-label">Email</label> -->
							<input type="email" name="email" placeholder="Email" class="form-control" required>
						</div>
						<div class="form-group">
							<!-- <label class="form-label">Phone Number</label> -->
							<input type="tel" name="phoneNumber" placeholder="Phone Number" class="form-control" required>
						</div>
						<div class="form-group">
							<!-- <label class="form-label">Category</label> -->
							<select name="subject" class="form-control py-0" required>
								<option value="">Select a Category</option>
								<option value="Training Classes">Training Classes</option>
								<option value="Job Opportunities">Job Opportunities</option>
							</select>
						</div>
						<div class="form-group">
							<!-- <label class="form-label">Upload Resume</label> -->
							<input type="file" name="resume" class="form-control" accept=".pdf" required>
						</div>
						<div>
							<textarea name="message" class="form-control m-0" placeholder="Message" required></textarea>
						</div>
						<button type="button" class="btn submit" onclick="showWaitingMessageAndSendRequest()">Submit</button>
					</form>
				</div>
			</div>
		</div>

		<script>
			const loginPopup = document.querySelector(".login-popup");
			const close = document.querySelector(".close");

			window.addEventListener("load", function () {
				showPopup();
				// setTimeout(function(){
				//   loginPopup.classList.add("show");
				// },5000)
			});

			function showPopup() {
				const timeLimit = 5; // seconds;
				let i = 0;
				const timer = setInterval(function () {
					i++;
					if (i == timeLimit) {
						clearInterval(timer);
						loginPopup.classList.add("show");
					}
					console.log(i);
				}, 1000);
			}

			close.addEventListener("click", function () {
				loginPopup.classList.remove("show");
			});
		</script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

		<script>
			function showWaitingMessageAndSendRequest() {
				Swal.fire({
					title: 'Submitting...',
					text: 'Please wait while we process your application.',
					allowOutsideClick: false,
					didOpen: () => {
						Swal.showLoading();
					}
				});
				sendApplicationRequest();
			}

			function sendApplicationRequest() {
				let formData = new FormData(document.getElementById("careerForm"));

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
					text: "Our team will review your application and get back to you.",
					confirmButtonText: 'OK',
				}).then(() => {
					window.location.href = "./";
				});
			}

			function showErrorMessage(message) {
				Swal.fire({
					icon: "error",
					title: "Submission Failed",
					text: message,
					confirmButtonText: 'OK',
				}).then(() => {
					window.location.href = "./";
				});
			}
		</script>



	</div>
	<!-- End PageWrapper -->

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
	
	<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
 <!--   <script>-->
 <!--     $(document).on("contextmenu", function (event) {-->
 <!--       event.preventDefault();-->
 <!--     });-->
 <!--   </script>-->

</body>

</html>