<?php
$currentPage = isset($currentPage) ? $currentPage : '';
$rootPrefix = isset($rootPrefix) ? $rootPrefix : '';
$homeLink = ($rootPrefix === '') ? './' : $rootPrefix;
$investorPages = [
	'disclosure', 'annual-reports', 'board-meeting', 'financial-results',
	'share-holding-pattern', 'corporate-announcements', 'corporate-governance',
	'csr-policy', 'financial-information', 'quarterly-results',
	'registrar-transfer-agent', 'related-party-transactions', 'stock-exchanges'
];
?>
						<ul class="nav">
							<li><a href="<?php echo ($rootPrefix === '') ? '#welcome' : $homeLink; ?>" class="<?php echo ($currentPage === 'home') ? 'active' : ''; ?>">HOME</a></li>
							<li><a href="<?php echo $rootPrefix; ?>about/" class="<?php echo ($currentPage === 'about') ? 'active' : ''; ?>">ABOUT US</a></li>
							<li><a href="<?php echo $rootPrefix; ?>news/" class="<?php echo ($currentPage === 'news') ? 'active' : ''; ?>">NEWS</a></li>
							<li class="submenu">
								<a href="javascript:;" class="<?php echo in_array($currentPage, $investorPages) ? 'active' : ''; ?>">INVESTOR DETAILS</a>
								<ul>
									<li><a href="<?php echo $rootPrefix; ?>disclosure-under-regulation-46-sebi/">Disclosure under Regulation 46 of SEBI LODR Regulations</a></li>
								</ul>
							</li>
							<li><a href="<?php echo $rootPrefix; ?>contact/" class="<?php echo ($currentPage === 'contact') ? 'active' : ''; ?>">CONTACT</a></li>
						</ul>
						<a class='menu-trigger'>
							<span>Menu</span>
						</a>
