<?php
$rootPrefix = isset($rootPrefix) ? $rootPrefix : '';
$homeLink = ($rootPrefix === '') ? './' : $rootPrefix;
$headerClass = isset($headerClass) ? $headerClass : 'header-area header-white';
?>
<!-- ***** Preloader Start ***** -->
<div class="preloader-wrapper">
	<div class="slice"></div>
	<div class="slice"></div>
	<div class="slice"></div>
	<div class="slice"></div>
	<div class="slice"></div>
	<div class="slice"></div>
</div>
<!-- ***** Preloader End ***** -->

	<!-- ***** Header Area Start ***** -->
	<header class="<?php echo $headerClass; ?>">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="main-nav">
						<!-- ***** Logo Start ***** -->
						<a href="<?php echo $homeLink; ?>" class="logo">
							<img src="<?php echo $rootPrefix; ?>assets/images/logo.png" alt="Kush Industries Limited"/>
						</a>
						<!-- ***** Logo End ***** -->

						<!-- ***** Menu Start ***** -->
						<?php include __DIR__ . '/menu.php'; ?>
						<!-- ***** Menu End ***** -->						
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- ***** Header Area End ***** -->
