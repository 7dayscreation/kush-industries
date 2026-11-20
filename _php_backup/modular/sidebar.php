<?php
$currentSubPage = isset($currentSubPage) ? $currentSubPage : '';
$rootPrefix = isset($rootPrefix) ? $rootPrefix : '';
?>
					<!-- ***** Aside Start ***** -->
					<div class="col-lg-4 col-md-12 col-sm-12">
						<aside class="default-aside">
							<div class="sidebar">
								<ul>
									<li class="<?php echo ($currentSubPage === 'financial-information') ? 'active' : ''; ?>"><a href="<?php echo $rootPrefix; ?>financial-information/">Financial Information</a></li>
									<li class="<?php echo ($currentSubPage === 'quarterly-results') ? 'active' : ''; ?>"><a href="<?php echo $rootPrefix; ?>quarterly-results/">Quarterly Results</a></li>
									<li class="<?php echo ($currentSubPage === 'share-holding-pattern') ? 'active' : ''; ?>"><a href="<?php echo $rootPrefix; ?>share-holding-pattern/">Share Holding Pattern</a></li>
									<li class="<?php echo ($currentSubPage === 'registrar-transfer-agent') ? 'active' : ''; ?>"><a href="<?php echo $rootPrefix; ?>registrar-transfer-agent/">Registrar and Transfer Agent</a></li>
									<li class="<?php echo ($currentSubPage === 'related-party-transactions') ? 'active' : ''; ?>"><a href="<?php echo $rootPrefix; ?>related-party-transactions/">Related Party Transactions</a></li>
									<li class="<?php echo ($currentSubPage === 'stock-exchanges') ? 'active' : ''; ?>"><a href="<?php echo $rootPrefix; ?>stock-exchanges/">Stock Exchanges</a></li>
									<li class="<?php echo ($currentSubPage === 'corporate-announcements') ? 'active' : ''; ?>"><a href="<?php echo $rootPrefix; ?>corporate-announcements/">Corporate Announcements</a></li>
									<li class="<?php echo ($currentSubPage === 'corporate-governance') ? 'active' : ''; ?>"><a href="<?php echo $rootPrefix; ?>corporate-governance/">Corporate Governance</a></li>
									<li class="<?php echo ($currentSubPage === 'csr-policy') ? 'active' : ''; ?>"><a href="<?php echo $rootPrefix; ?>csr-policy/">Policy</a></li>
								</ul>
							</div>
						</aside>
					</div>
					<!-- ***** Aside End ***** -->
