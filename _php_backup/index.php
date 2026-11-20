<?php
$pageTitle = "Kush Industries Ltd.";
$pageDescription = "Kush Synthetics Pvt. Ltd.";
$pageKeywords = "Kush Synthetics Pvt. Ltd.";
$currentPage = "home";
$headerClass = "header-area";
$rootPrefix = "";
$homeLink = "./";
include __DIR__ . '/modular/head.php';
?>
<body>

<?php include __DIR__ . '/modular/header.php'; ?>
	
	<!-- ***** Welcome Area Start ***** -->
	<div class="welcome-area" id="welcome">
		<!-- ***** Header Background Image Start ***** -->
		<div class="right-bg">
			<img src="<?php echo $rootPrefix; ?>assets/images/header.jpg" class="img-fluid float-right" alt="">
		</div>
		<!-- ***** Header Background Image End ***** -->

		<div class="header-hexagon-bg">
			<img src="<?php echo $rootPrefix; ?>assets/images/header-bg.svg" class="img-fluid" alt="">
		</div>

		<!-- ***** Header Text Start ***** -->
		<div class="header-text">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-12 col-sm-12">
						<h1>Welcome to Kush Industries</h1>
						<p>KUSH INDUSTRIES LIMITED established in the year 1992 having diversified business in the field of Textiles and Ceramic.</p><br>
						<a href="<?php echo $rootPrefix; ?>about/" class="btn-primary-line">Read More</a>
					</div>
				</div>
			</div>
		</div>
		<!-- ***** Header Text End ***** -->

	</div>
	<!-- ***** Welcome Area End ***** -->

	<!-- ***** Features Small Start ***** -->
	<section class="section" id="features">
		<div class="container">
			<!-- ***** Section Title Start ***** -->
			<div class="row">
				<div class="col-lg-12">
					<div class="center-heading">
						<h2 class="section-title">We use modern infrastructure & technology</h2>
					</div>
				</div>
				<div class="offset-lg-3 col-lg-6">
					<div class="center-text">
						<p>Our strong infrastructure facilities and sophisticated technologies facilitate coordination in our work processes. We have total faith in our diligent and disciplined team of professionals & experts who have helped us in supplying world class products with timely delivery.</p>
					</div>
				</div>
			</div>
			<!-- ***** Section Title End ***** -->

			<div class="row">
				<!-- ***** Features Small Item Start ***** -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
					<a href="<?php echo $rootPrefix; ?>financial-information/" class="features-small-item">
						<div class="icon">
							<div class="hexagon-bg"></div>
							<i class="fa fa-check-square-o"></i>
						</div>
						<h5 class="features-title">Financial Information</h5>
						<p>March 2026</p>
					</a>
				</div>
				<!-- ***** Features Small Item End ***** -->

				<!-- ***** Features Small Item Start ***** -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
					<a href="<?php echo $rootPrefix; ?>quarterly-results/" class="features-small-item">
						<div class="icon">
							<div class="hexagon-bg"></div>
							<i class="fa fa-bank"></i>
						</div>
						<h5 class="features-title">Quarterly Results</h5>
						<p>March 2026</p>
					</a>
				</div>
				<!-- ***** Features Small Item End ***** -->

				<!-- ***** Features Small Item Start ***** -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
					<a href="<?php echo $rootPrefix; ?>share-holding-pattern/" class="features-small-item">
						<div class="icon">
							<div class="hexagon-bg"></div>
							<i class="fa fa-bar-chart"></i>
						</div>
						<h5 class="features-title">Share Holding Pattern</h5>
						<p>March 2026</p>
					</a>
				</div>
				<!-- ***** Features Small Item End ***** -->

				<!-- ***** Features Small Item Start ***** -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.8s">
					<a href="<?php echo $rootPrefix; ?>stock-exchanges/" class="features-small-item">
						<div class="icon">
							<div class="hexagon-bg"></div>
							<i class="fa fa-calendar"></i>
						</div>
						<h5 class="features-title">Stock Exchanges</h5>
						<p>March 2026</p>
					</a>
				</div>
				<!-- ***** Features Small Item End ***** -->
			</div>
		</div>
	</section>
	<!-- ***** Features Small End ***** -->
	
	<!-- ***** Blog Start ***** -->
	<section class="section white bg-center-left" id="blog">
		<div class="container">
			<!-- ***** Section Title Start ***** -->
			<div class="row">
				<div class="col-lg-12">
					<div class="center-heading">
						<h2 class="section-title">Business Activity</h2>
					</div>
				</div>
				<div class="offset-lg-3 col-lg-6">
					<div class="center-text">
						<p>The Company is having diversified business in the field of textiles and ceramic business.</p>
					</div>
				</div>
			</div>
			<!-- ***** Section Title End ***** -->

			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="blog-post-thumb">
						<div class="img">
							<img src="<?php echo $rootPrefix; ?>assets/images/processors.jpg" alt="">
						</div>
						<h3>
							<a href="<?php echo $rootPrefix; ?>about/">Business of processors</a>
						</h3>
						<div class="text">
							To carry on the business of processors, texturisers, spinners, weavers, sizers, manufacturers, twisters, crimpers and balers of polyester, polypropylene, silk... 
						</div>
						<a href="<?php echo $rootPrefix; ?>about/" class="btn-primary-line">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="blog-post-thumb">
						<div class="img">
							<img src="<?php echo $rootPrefix; ?>assets/images/spinning.jpg" alt="">
						</div>
						<h3>
							<a href="<?php echo $rootPrefix; ?>about/">Business of spinning</a>
						</h3>
						<div class="text">
							To carry on the business of manufacturing, spinning, weaving, bleaching, finishing, dyeing, processing, mercerising, printing, sizing, importing, exporting, twisting...
						</div>
						<a href="<?php echo $rootPrefix; ?>about/" class="btn-primary-line">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="blog-post-thumb">
						<div class="img">
							<img src="<?php echo $rootPrefix; ?>assets/images/manufacturing.jpg" alt="">
						</div>
						<h3>
							<a href="<?php echo $rootPrefix; ?>about/">Business of manufacturing</a>
						</h3>
						<div class="text">
							To carry on the business of manufacturing, Producing, Compressing, Trading, Wholesale, Retailing, process, refine, importing, exporting, dealing...
						</div>
						<a href="<?php echo $rootPrefix; ?>about/" class="btn-primary-line">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ***** Blog End ***** -->
<?php include __DIR__ . '/modular/footer.php'; ?>
</body>
</html>
