<!DOCTYPE html>

<html>
<?php include 'includes/general/head.php';
if(logged_in()===false){
	header('Location:login.php');	
	exit();
	}
	
$user2=$session_user_id;
?>

<?php

if(isset($_GET['username'])===true&&empty($_GET['username'])===false){
	$username=$_GET['username'];
	if(user_exists($username)== 1){
				$user_id=user_id_from_username($username);
				
				$user1=$user_id;//jiska username dala hai
				$user2=$_SESSION['user_id'];//jo logged in hai
				
				//$user_id=user_id_from_email($email);
				$profile_data =user_data($user_id,'name','email','username','mobile','state','batch','branch','institute','profilepic');
					$name=$profile_data['name'];
					$email=$profile_data['email'];
					$mobile=$profile_data['mobile'];

								
								
								if(user_state($username)!=1){
					$errors[]='Sorry! The page is not accessible at the moment.Link might have destroyed or broken.';
					
				}
						
			}
			
	else{
		$errors[]='We can\'t find that Page on this link.You might be accessing a broken link.';
	}	
	
			
}
if(isset($_GET['username'])===false&&empty($_GET['username'])===true){
$user1=$_SESSION['user_id'];
			
$user2=$_SESSION['user_id'];//jo logged in hai
				
		$profile_data =user_data($user1,'name','email','username','mobile','state','batch','branch','institute','profilepic');
			$profilepic=$profile_data['profilepic'];
				
			
							
}

			
if(empty($errors)=== false){
		
	?>
	<h2>We tried to Find the Page, but</h2>
<?php

echo output_errors($errors);
}
else
 {
 
			$college_id=$profile_data['institute'];
			$type=get_type_status($user2);
?>





<link rel="stylesheet" href="css/profile.css">

<body id="body">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


	
	
	
			<?php 
				include 'includes/general/userheader.php';?>
	<div class="row">
	<div class="container">
			<?php	
				$institute=profileinstitute($profile_data['institute']);
				$branch=profilebranch($profile_data['branch']);
				$batch=profilebatch($profile_data['batch']);
				$state=profilestate($profile_data['state']);
				$count = 0;
				include 'includes/general/useraside.php';
			?>
		 
			<div class="col-md-1"></div>
			<div class="col-md-8" id="content">
					
					<div class="row">
						<div class="col-md-6">
							<br>
							<div class="row">
								
								<div class="col-xs-4 container text-center "><a target="_blank"  href="img/index/events/oct21-infox.jpg"><img src="img/index/events/oct21-infox.jpg" class="square img-responsive"/></a></div>
								<div class="col-xs-4 container text-center "><a target="_blank"  href="img/index/events/oct22-infox.jpg"><img src="img/index/events/oct22-infox.jpg" class="img-responsive square"/></a></div>
								<div class="col-xs-4 container text-center "><a target="_blank" href="img/index/events/oct23-infox.jpg"><img src="img/index/events/oct23-infox.jpg" class="img-responsive square"/></a></div>
								
							</div>	
								
								<div class="row text-center"><h4>Download Schedule.</h4></div>			
					
								
								<hr/>
								<h3 style="opacity:0.5">Your upcoming events </h3>
								<hr/>
								
								<?php
								$eventsList = getEventsList();

								foreach ($eventsList as $eventid)
								{	
									$name = get_eventname($eventid);
									$fb = get_eventfblink($eventid);
									$image = get_eventimage($eventid);
									
									
									$status = getUserEventStatus($eventid, $user2);
									if ($status == 1)
									{	
										$count = 1;
									
								echo '<div class="event row listofevents"><div class="col-xs-4"><div class="row"><a class=" myeventa" target="_blank" href="event.php?event_id='.$eventid.'">'.$name.'</a></div><br><div class="row"><h4><a href="#"><i class="fa fa-facebook"></i>&nbsp;Fb Page</a></h4></div></div><div class="col-xs-6"><a class=" myeventa" target="_blank" href="event.php?event_id='.$eventid.'"><img src="'.$image.'" class="event-image"></a></div></div>';

								}
									}
								
								if($count == 0)
								echo '<div class="text-center event row listofevents"><h4>You haven\'t registered for any events yet. Click <a href="myevents.php">here</a> to register</h4></div>';	
									
								?>
						</div>
						<div class="col-md-6">
								<br/>
								<hr/><h4>We suggest that you keep your account details up to date to avoid confusion on the day of the event.<br> Update your profile <a href="updateprofile.php">here</a> </h4><hr/>
								</br><div  class="fb-page" data-href="https://www.facebook.com/infoxpression/" data-tabs="events" data-small-header="false" data-adapt-container-width="true" data-width="500" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/infoxpression/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/infoxpression/">InfoXpression</a></blockquote></div>
								
								
						</div>
					</div>
			</div>
	</div>	
	</div>
	

	<?php include'includes/general/footer.php'?>

	
</body>
<?php
}
?>

</html>