<?php
// Ensure database connection is loaded once
if (!class_exists('Database')) {
    require_once "admin/libs/load.php";
}

// Get database connection
$conn = Database::getConnect();

// Check if the connection is successful
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Fetch header data
$sql = "SELECT `header` FROM `headline`";
$result = $conn->query($sql);

if (!$result) {
    die("SQL Error: " . $conn->error);
}

// Fetch results
$headline = [];
while ($row = $result->fetch_assoc()) {
    $headline[] = $row;
}
?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-56PD8DM3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
		<!-- Main Header -->
		<header class="main-header main-header-three">
			<div class="main-header-three__wrap">
				<!-- Main Header Lower Start -->
				<div class="main-header-three__lower">
					<div class="container">
						<div class="main-header-three__lower-inner">
							<!-- Logo Box -->
							<div class="main-header-three__logo-box">
								<a href="index.php"><img src="dist_tmw/images/resource/logo-1.png" alt=""></a>
							</div>
							<div class="main-menu-two__box">
								<div class="main-menu-two__nav-outer-box">
									<div class="nav-outer">
										<!-- Main Menu -->
										<nav class="main-menu show navbar-expand-md">
											<div class="navbar-header">
												<button class="navbar-toggler" type="button" data-toggle="collapse"
													data-target="#navbarSupportedContent"
													aria-controls="navbarSupportedContent" aria-expanded="false"
													aria-label="Toggle navigation">
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
											</div>

											<div class="navbar-collapse collapse" id="navbarSupportedContent">
													<ul class="navigation">
														<li><a href="index.php">Home</a></li>
														<li><a href="about.php">About</a></li>
														<li><a href="projects.php">Portfolio</a></li>
														<li><a href="promotion.php">Promotion</a></li>
														<li><a href="services.php">Services</a></li>
														<!-- <li><a href="training.php">Courses</a></li> -->
														<li class="dropdown"><a>Courses</a>
															<ul>
															<?php foreach ($headline as $item) : ?>
                                                <li><a href="training.php?data=<?php echo htmlspecialchars($item['header']); ?>"><?php echo htmlspecialchars($item['header']); ?></a></li>
                                            <?php endforeach; ?>
															</ul>
														</li>
														<li><a href="careers.php">Careers</a></li>
                                                        <li><a href="contact.php">Contact</a></li>
													</ul>
												</div>
										</nav>
										<!-- Main Menu End-->
									</div>
									<!-- Mobile Navigation Toggler -->
									<div class="mobile-nav-toggler">
										<span class="fas fa-bars"></span>
									</div>
								</div>
							</div>
							<div class="main-menu__call">
								<div class="main-menu__call-icon">
									<i class="icon-clock"></i>
								</div>
								<div class="main-menu__call-content">
									<p class="main-menu__call-sub-title">Call Any Time</p>
									<h5 class="main-menu__call-number"><a href="tel:95972 36423">+91 95972 36423</a></h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Main Header Lower End -->
			</div>


			<!-- Mobile Menu  -->
			<div class="mobile-menu">
				<div class="menu-backdrop"></div>
				<div class="close-btn"><span class="icon far fa-times fa-fw"></span></div>
				<nav class="menu-box">
					<div class="nav-logo"><a href="index.php"><img src="dist_tmw/images/resource/logo-2.png" alt="" title=""></a></div>
					<!-- Search -->
					<!--<div class="search-box">-->
					<!--	<form method="post" action="#!">-->
					<!--		<div class="form-group">-->
					<!--			<input type="search" name="search-field" value="" placeholder="SEARCH HERE" required>-->
					<!--			<button type="submit"><span class="icon far fa-search fa-fw"></span></button>-->
					<!--		</div>-->
					<!--	</form>-->
					<!--</div>-->
					<div class="menu-outer">
						<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
					</div>
				</nav>
			</div>
			<!-- End Mobile Menu -->
		</header>
		<!-- End Main Header -->