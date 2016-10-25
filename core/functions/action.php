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
			
			
			}
	 
	else if($action=='remove'){
		
		remove_events($user_id,$event_id);
			
			}
				
				

				

	header('location: myevents.php');
	
	
	
	?>