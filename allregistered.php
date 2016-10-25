<!DOCTYPE html>

<html class="no-js">
<?php include 'includes/general/head.php';
if(logged_in()===false){
	header('Location:login.php');	
	exit();
	}
	
$user1=$session_user_id;		
?>


<link rel="stylesheet" href="css/profile.css">
<body id="body">
	<?php include 'includes/general/userheader.php'?>
	<div class="container">
		<div class="row">
			
			<?php
			
				$user_id=$_SESSION['user_id'];//jo logged in hai
				
			$profile_data =user_data($user_id,'name','email','username','mobile','state','batch','branch','institute','profilepic','type');
				
			$institute=profileinstitute($profile_data['institute']);
					$branch=profilebranch($profile_data['branch']);
					$batch=profilebatch($profile_data['batch']);
					$state=profilestate($profile_data['state']);
			$type=$profile_data['type'];
			if($type!=5){
			header('Location:login.php');	
			exit();			
			}
			
			$noofuser= get_no_of_user()+2;
			
			$noofactiveuser= get_no_of_active_user();
			
			 include 'includes/general/useraside.php';?>
			<div class="col-md-1"></div>
			
			
			<div class="col-md-8" id="content">
			 <div class="myevent row">

			<div class="col-xs-6"><?php echo "Search Bar Coming Soon...";
			?></div>
			<div class="col-xs-3"></div>
			
			<div class="col-xs-1">
		
			
			</div>
			<div class="col-xs-2">
			</div>
			</div>
			 
			  <div class="myevent row">

			<div class="col-xs-6"><?php echo "Number of registered user: &nbsp;".$noofuser;
			?></div>
			<div class="col-xs-3">
			<?php echo "Number of Active user: &nbsp;".$noofactiveuser;
			?>
			
			</div>
			
			<div class="col-xs-1">
		
			
			</div>
			<div class="col-xs-2">
			</div>
			</div>
			 
			 
			 <?php
			for($i = 1; $i <=$noofuser ; $i++){
			$user_data=user_data($i,'name','email','username','mobile','state','batch','branch','institute','profilepic','active','type');
			$is_active=$user_data['active'];
			?>
			<div class="myevent <?php if($is_active ==0) echo ' notgoing '; else echo ' going '; ?>   row">
			
			<div class="col-xs-6"><?php echo $i; echo "&nbsp;&nbsp;"; echo $user_data['email'];?></div>
			<div class="col-xs-3"><?php echo $user_data['name'];?></div>
			
			<div class="col-xs-2">
			<?php echo $user_data['mobile'];?>
			
			</div>
			<div class="col-xs-1"></div>
			</div>
			<?php 
			}
			
			?>
			
			
			
			
			
			
		</div>	
		
	</div>
		
	
	</div>

	<?php include'includes/general/footer.php';?>

	<script> //handle later var e=document.getElementsByClassName("add-event"); e.onmouseover = function() { alert("Add event");} 
	</script>

	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.nav.js"></script>
	
</body>

</html>