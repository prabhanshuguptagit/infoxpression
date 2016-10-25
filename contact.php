<!DOCTYPE html>

<html class="no-js">


<?php include'includes/general/head.php'?>

<body id="body">
	<style> h1,h2,h3{    font-family: Dosis, 'Helvetica Neue', Arial, Helvetica, sans-serif; } input{background-color : #2b2c30;}
	</style>
	<!-- Preloader ==================================== -->
	<!--div id="loading-mask">
		<div class="loading-img">
			<img alt="Preloader" src="img/preloader.gif" />
		</div>
	</div-->
	
	<?php include'includes/general/header.php'?>
		<div class="row contact-form">
		<div class="col-md-4">	
		<form action="contactform.php" method="post">
		<h3>Name:</h3>
		<input type="text" name="name" required>
		<h3>Comments:</h3>
		<textarea name="comments" id="comment-contact" rows="4" cols="50" required></textarea>
		<h3>E-mail id:</h3>
		<input type="email" name="email" required><br>
		<input type="submit" value="Submit" class="btn btn-transparent">
		</form>
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-7">
		<div id="mapholder"width="100%">
			<script>
			
			//doesn't block the load event
			function createIframe() {
				var i = document.createElement("iframe");
				i.src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14012.251264462186!2d77.03234456622305!3d28.597892292558807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd08624613cd%3A0x75b127f70af28c04!2sGuru+Gobind+Singh+Indraprastha+University!5e0!3m2!1sen!2sin!4v1425137336070";
				i.scrolling = "auto";
				i.frameborder = "0";
				i.width = "100%";
				i.height = "370";
				document.getElementById("mapholder").appendChild(i);
			};
			

			// Check for browser support of event handling capability
			if (window.addEventListener)
				window.addEventListener("load", createIframe, false);
			else if (window.attachEvent)
				window.attachEvent("onload", createIframe);
			else window.onload = createIframe;
			</script>
		</div>
	</div>
	</div>
	
		
	
		<?php include'includes/general/footer.php'?>


	

	
	<script src="js/jquery.slitslider.js"></script>
	<script src="js/jquery.ba-cond.min.js"></script>
	<script src="js/jquery.parallax-1.1.3.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.mixitup.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/easyPieChart.js"></script>
	<script src="js/jquery.easing-1.3.pack.js"></script>
	<script src="js/tweetie.min.js"></script>
	
	<script src="js/jquery.nav.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.fitvids.js"></script>
	<script src="js/grid.js"></script>
	
</body>


</html>
