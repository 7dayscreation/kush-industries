<?php
$pageTitle = "Contact Us - Kush Industries Ltd.";
$pageDescription = "Corporate Announcements - Kush Industries Ltd.";
$pageKeywords = "Corporate Announcements - Kush Industries Ltd.";
$currentPage = "contact";
$headerClass = "header-area header-white";
$rootPrefix = "../";
$homeLink = "../";
include dirname(__DIR__) . '/modular/head.php';
?>
<body>

<?php include dirname(__DIR__) . '/modular/header.php'; ?>
	
	<section class="page">
		<!-- ***** Page Top Start ***** -->
		<div class="cover">
			<div class="page-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h1>Contact</h1>
						</div>
						<div class="col-lg-12">
							<ol class="breadcrumb">
								<li><a href="<?php echo $homeLink; ?>">Home</a></li>
								<li class="active">Contact</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ***** Page Top End ***** -->

		<!-- ***** Page Content Start ***** -->
		<div class="page-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="contact">
							<div class="map-wrapper">
								<!-- ***** Google Maps Start ***** -->
								<iframe src="https://maps.google.com/maps?q=330-A%2C%20GIDC%2C%20OPP.%20Atul%20Products%2C%20Ankleshwar%2C%20Bharuch%20-%20393002.%20Gujarat%2C%20India&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=&amp;output=embed" width="100%" height="100%" style="border:0; border-radius:5px;" allowfullscreen="" loading="lazy"></iframe>
								<!-- ***** Google Maps End ***** -->
							</div>
							<div class="contact-info">
								<div class="item">
									<i class="fa fa-location-arrow"></i>
									<div class="txt">
										<span>330-A, GIDC, OPP. Atul Products, Ankleshwar, Bharuch - 393002. Gujarat, India.
										</span>
									</div>
								</div>
								<div class="item">
									<i class="fa fa-phone"></i>
									<div class="txt">
										<span>+91-2646-224049<br>+91-2646-224050</span>
									</div>
								</div>
								<div class="item">
									<i class="fa fa-envelope"></i>
									<div class="txt">
										<span><a href="mailto:snstex@yahoo.co.in">snstex@yahoo.co.in</a></span>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="contact-bottom">
							<div class="row">
								<!-- ***** Contact Text Start ***** -->
								<div class="col-lg-4 col-md-6 col-sm-12">
									<h5 class="margin-bottom-30">Get in touch</h5>
									<div class="contact-text">
										<p>Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days.</p>
										<p>We are open from 10am — 6pm week days.</p>
									</div>
								</div>
								<!-- ***** Contact Text End ***** -->

								<!-- ***** Contact Form Start ***** -->
								<div class="col-lg-8 col-md-6 col-sm-12">
									<div class="contact-form">
										<div class="row">
											<div class="col-lg-6 col-md-12 col-sm-12">
												<input type="text" placeholder="Name, surname">
											</div>
											<div class="col-lg-6 col-md-12 col-sm-12">
												<input type="text" placeholder="E-Mail">
											</div>
											<div class="col-lg-12">
												<textarea placeholder="Your message"></textarea>
											</div>
											<div class="col-lg-12">
												<button class="btn-primary-line">SEND</button>
											</div>
										</div>
									</div>
								</div>
								<!-- ***** Contact Form End ***** -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ***** Page Content End ***** -->
	</section>	
<?php include dirname(__DIR__) . '/modular/footer.php'; ?>
</body>
</html>
