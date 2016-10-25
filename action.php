<?php 
include'core/init.php';
protect_profile_page();
	 
	session_start();
	
	$action= $_GET['action'];
	$user_id=$_GET['user'];//post ka hai
	$event_id=$_GET['event_id'];	
//$user_data =user_data($user,'first_name','last_name','email','username','profile','enrollment_id','gender','age','type');

	if($action=='add'){
			add_events($user_id,$event_id);
			
			echo "<script>alert('You have registered for the event. Make sure you visit the event page and keep track of event announcements.');setTimeout(\"location.href = 'myevents.php';\",0); </script>";		//Get event name here
			?>
			
			<?php
			
			}
	 
	else if($action=='remove'){
		
		remove_events($user_id,$event_id);
			echo "<script>alert('You have withdrawn from the event.');setTimeout(\"location.href = 'myevents.php';\",0); </script>";		//Get event name here
			}	
	?>