<?php 
include'core/init.php';
protect_profile_page();
	 
	session_start();
	
	$action= $_GET['action'];
	$user_id=$_GET['user'];//post ka hai
	$type=$_GET['type'];
	$college=$_GET['college'];
			
//$user_data =user_data($user,'first_name','last_name','email','username','profile','enrollment_id','gender','age','type');
 
 update_type($user_id,$type);
 if($type==2){
 update_ca($user_id,$college);
		}		

	header('location: profile.php');
	
	
	
	?>