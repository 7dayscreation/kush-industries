<?php
$pageTitle = isset($pageTitle) ? $pageTitle : 'Kush Industries Ltd.';
$pageDescription = isset($pageDescription) ? $pageDescription : 'Kush Industries Ltd.';
$pageKeywords = isset($pageKeywords) ? $pageKeywords : 'Kush Industries Ltd.';
$rootPrefix = isset($rootPrefix) ? $rootPrefix : '';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo htmlspecialchars($pageTitle); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>" />
	<meta name="keywords" content="<?php echo htmlspecialchars($pageKeywords); ?>" />
	<meta name="author" content="7 Days Creation"/>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="<?php echo $rootPrefix; ?>assets/images/favicon/favicon.png" />

	<!-- Bootstrap & Plugins CSS -->
	<link href="<?php echo $rootPrefix; ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $rootPrefix; ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="<?php echo $rootPrefix; ?>assets/css/green.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $rootPrefix; ?>assets/css/custom.css" rel="stylesheet" type="text/css">
	<meta name="google-site-verification" content="qBtd3J009GyKzFTe4BcywNJrHC1Z3diuOmatQvRdg-I" />
	<meta name="msvalidate.01" content="E2B28E6D93F23CFBD154A3AEB1224420" />
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-NEMQEQ7G0F"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-NEMQEQ7G0F');
	</script>
</head>
