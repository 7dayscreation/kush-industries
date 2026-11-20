<!-- Prevent Right-Click and Text Selection -->
<script>
document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
});
document.addEventListener('keydown', function(e) {
    if (e.ctrlKey && (e.key === 'u' || e.key === 's' || e.key === 'p')) {
        e.preventDefault();
    }
});
</script>	
	<!-- ***** Footer Start ***** -->
	<footer>
		<div class="container">
		<br>
			<div class="row">
				<div class="col-lg-6">
					<div class="text">© 2019 Kush Industries Limited. All Rights Reserved.</div>
				</div>
				<div class="col-lg-6 text-right"> <!-- Added text-right class here -->
                <div class="text">Design by: <a href="http://7dayscreation.com" target="_blank">7 Days Creation</a></div>
            </div>
			</div>
		</div>
	</footer>
	<!-- ***** Footer End ***** -->



	<!-- jQuery -->
	<script src="assets/js/jquery-2.1.0.min.js"></script>

	<!-- Bootstrap -->
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Plugins -->
	<script src="assets/js/scrollreveal.min.js"></script>
	<script src="assets/js/parallax.min.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	<script src="assets/js/imgfix.min.js"></script>	

	<!-- Global Init -->
	<script src="assets/js/custom.js"></script>