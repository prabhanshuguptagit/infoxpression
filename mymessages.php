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
	<?php 
	$user_id=$_SESSION['user_id'];//jo logged in hai
				
			$profile_data =user_data($user_id,'name','email','username','mobile','state','batch','branch','institute','profilepic');
				
			$institute=profileinstitute($profile_data['institute']);
					$branch=profilebranch($profile_data['branch']);
					$batch=profilebatch($profile_data['batch']);
					$state=profilestate($profile_data['state']);
			
	include 'includes/general/userheader.php';?>
	<div class="container">
		<div class="row">
			
			<?php include 'includes/general/useraside.php'?>
			<div class="col-md-1"></div>
			<div class="col-md-8" id="content">
			 
			<div class="myevent row">

			<div class="col-xs-12 col-md-12" style="text-align:center"><h2>We are working on something awesome. Stay tuned!</h2></div>
			
			</div>	
			</div>
		</div>	
		
	</div>
		
	
	

	<?php include'includes/general/footer.php';?>


</body>

</html>
