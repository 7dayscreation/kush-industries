<?php
$pageTitle = "Annual Reports - Kush Industries Ltd.";
$pageDescription = "Annual Reports - Kush Industries Ltd.";
$pageKeywords = "Annual Reports - Kush Industries Ltd.";
$currentPage = "annual-reports";
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
							<h1>All Annual Reports and Returns</h1>
						</div>
						<div class="col-lg-12">
							<ol class="breadcrumb">
								<li><a href="<?php echo $homeLink; ?>">Home</a></li>
								<li class="active">All Annual Reports and Returns</li>
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
						<div class="text-center">
							<h2 align="left">All Annual Reports and Returns</h2><br>
							<p align="justify"></p>
						</div><br>
						
						<!-- Table Start ***** -->
						<table class="annual-table">
						<thead>
							<tr>
								<th>Financial Year</th>
								<th>Annual Report</th>
								<th>Annual Return</th>
								<th>Secretarial Compliance</th>
								<th>Subsidiary Financials</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>2025-26</td>
								<td><a href="<?php echo $rootPrefix; ?>annual-reports/annual-report/Annual-Report-2025-26.pdf" target="_blank"><img src="<?php echo $rootPrefix; ?>assets/images/pdf-icon.png"></a></td>
								<td><a href="<?php echo $rootPrefix; ?>annual-reports/annual-return/2025-26.pdf" target="_blank"><img src="<?php echo $rootPrefix; ?>assets/images/pdf-icon.png"></a></td>
								<td><a href="<?php echo $rootPrefix; ?>annual-reports/annual-secretarial/2025-26.pdf" target="_blank"><img src="<?php echo $rootPrefix; ?>assets/images/pdf-icon.png"></a></td>
								<td><a href="#">-</a></td>
							</tr>
							<tr>
								<td>2024-25</td>
								<td><a href="<?php echo $rootPrefix; ?>annual-reports/annual-report/Annual-Report-2024-25.pdf" target="_blank"><img src="<?php echo $rootPrefix; ?>assets/images/pdf-icon.png"></a></td>
								<td><a href="<?php echo $rootPrefix; ?>annual-reports/annual-return/2024-25.pdf" target="_blank"><img src="<?php echo $rootPrefix; ?>assets/images/pdf-icon.png"></a></td>
								<td><a href="<?php echo $rootPrefix; ?>annual-reports/annual-secretarial/2024-25.pdf" target="_blank"><img src="<?php echo $rootPrefix; ?>assets/images/pdf-icon.png"></a></td>
								<td><a href="#">-</a></td>
							</tr>
							<tr>
								<td>2023-24</td>
								<td><a href="<?php echo $rootPrefix; ?>annual-reports/annual-report/Annual-Report-2023-24.pdf" target="_blank"><img src="<?php echo $rootPrefix; ?>assets/images/pdf-icon.png"></a></td>
								<td><a href="<?php echo $rootPrefix; ?>annual-reports/annual-return/2023-24.pdf" target="_blank"><img src="<?php echo $rootPrefix; ?>assets/images/pdf-icon.png"></a></td>
								<td><a href="<?php echo $rootPrefix; ?>annual-reports/annual-secretarial/2023-24.pdf" target="_blank"><img src="<?php echo $rootPrefix; ?>assets/images/pdf-icon.png"></a></td>
								<td><a href="#">-</a></td>
							</tr>
							<tr>
								<td>2022-23</td>
								<td><a href="<?php echo $rootPrefix; ?>annual-reports/annual-report/Annual-Report-2022-23.pdf" target="_blank"><img src="<?php echo $rootPrefix; ?>assets/images/pdf-icon.png"></a></td>
								<td><a href="<?php echo $rootPrefix; ?>annual-reports/annual-return/2022-23.pdf" target="_blank"><img src="<?php echo $rootPrefix; ?>assets/images/pdf-icon.png"></a></td>
								<td><a href="<?php echo $rootPrefix; ?>annual-reports/annual-secretarial/2022-23.pdf" target="_blank"><img src="<?php echo $rootPrefix; ?>assets/images/pdf-icon.png"></a></td>
								<td><a href="#">-</a></td>
							</tr>
						</tbody>
						</table>
						<!-- Table End ***** -->
						

					</div>
				</div>
			</div>
		</div>
		<!-- ***** Page Content End ***** -->
	</section>	
<?php include dirname(__DIR__) . '/modular/footer.php'; ?>
</body>
</html>
