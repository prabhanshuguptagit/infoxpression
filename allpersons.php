<!DOCTYPE html>

<html class="no-js">
<?php include 'includes/general/head.php';
if(logged_in()===false){
	header('Location:login.php');	
	exit();
	}
	
		
?>


<link rel="stylesheet" href="css/profile.css">
<body id="body">
	<?php include 'includes/general/userheader.php'?>
	<div class="container">
		<div class="row">
			
			<?php include 'includes/general/useraside.php'?>
			<div class="col-md-1"></div>
			<div class="col-md-8" id="content">
			 
			<div class="event">
			<img src="img/back.png" class="event-image">
			<div class="event-description">dwcwhcwdc wdcwjhbwdc wdcjhwcdjhc dwjhc<br>dwchbc<br>bwdc
			wbcicwbwdciub</div></div>	
			
			<div class="event">
			<img src="img/back.png" class="event-image">
			<div class="event-description">dwcwhcwdc wdcwjhbwdc wdcjhwcdjhc dwjhc<br>dwchbc<br>bwdc
			wbcicwbwdciub</div></div>	
			
			<div class="event">
			<img src="img/back.png" class="event-image">
			<div class="event-description">dwcwhcwdc wdcwjhbwdc wdcjhwcdjhc dwjhc<br>dwchbc<br>bwdc
			wbcicwbwdciub</div></div>	
				
			<div class="event">
			<img src="img/back.png" class="event-image">
			<div class="event-description">dwcwhcwdc wdcwjhbwdc wdcjhwcdjhc dwjhc<br>dwchbc<br>bwdc
			wbcicwbwdciub</div></div>	
			
			</div>
		</div>	
		
	</div>
		
	
	

	<?php include'includes/general/footer.php';?>

	

	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.nav.js"></script>
	
</body>

</html>
