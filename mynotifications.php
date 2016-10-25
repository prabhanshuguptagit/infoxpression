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
			<div class="hidden-xs">
			<?php include 'includes/general/useraside.php'?>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-8" id="content">
			
			<?php

			$userid = $_SESSION['user_id'];
			$teamnotifications = getTeamNotifications($userid);
			
			if(sizeof($teamnotifications) == 0)
			{ ?>
				<div class="event row">
					<div class="col-xs-12 col-md-12" style="text-align:center">
					<h4>No new notifications.</h4>
					</div>
				</div>	
			<?php	
			}	
			
			foreach ($teamnotifications as $info)
			{
				echo <<<BLOCK
			<div class="event row">
				<div class="col-xs-12 col-md-12">
				
				<h4>${info['teamleadername']} asked you to join his team <a target="_blank" href="manageteam.php?teamid=${info['teamid']}">${info['teamname']}</a> for the event ${info['eventname']}</h4>
				<form action="confirmteam.php" method="get">
					<input type="hidden" name="teamid" value="${info['teamid']}" />
					<button type="submit" name="response" value="accept" class="btn btn-transparent">Accept</button>&nbsp;
					<button type="submit" name="response" value="deny" class="btn btn-transparent">Deny</button>
				</form>
				
				</div>
			</div>
BLOCK;
			}

			?>

			</div>
		</div>	
		
	</div>

	<?php include'includes/general/footer.php';?>
	
</body>
<?php 

$notif = filter_input(INPUT_POST, 'notif');

if ($notif == "num_notification") {
	echo sizeof($teamnotifications);
}
?>
</html>
