<?php

include "core/init.php";
protect_logged_page();


$functionName = filter_input(INPUT_POST, 'functionName');

if ($functionName == "checkusername") {
    check_username();
} else if ($functionName == "checkemail") {
     check_email();
}
  else if ($functionName == "checkmobile") {
     check_mobile();		
}
  else if($functionName == "passstrength"){
     pass_strength();
}     	

function check_username() {
	$con=mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$username = filter_input(INPUT_POST, 'value',FILTER_SANITIZE_SPECIAL_CHARS);
	
	$sql = "SELECT user_id FROM user WHERE username='$username' LIMIT 1";
    	$query = mysqli_query($con, $sql); 
	$username_check = mysqli_num_rows($query);
	
	if($username_check > 0)
		echo 0;
	else 
		echo 1;	
}

function check_email() {
	$con=mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$email = filter_input(INPUT_POST, 'value',FILTER_SANITIZE_SPECIAL_CHARS);
	
	$sql = "SELECT user_id FROM user WHERE email='$email' LIMIT 1";
    	$query = mysqli_query($con, $sql); 
	$email_check = mysqli_num_rows($query);
	
	if($email_check > 0)
		echo 0;
	else 
		echo 1;	
}



function check_mobile() {
	$con=mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$mobile = filter_input(INPUT_POST, 'value',FILTER_SANITIZE_SPECIAL_CHARS);
	
	$sql = "SELECT user_id FROM user WHERE mobile='$mobile' LIMIT 1";
    	$query = mysqli_query($con, $sql); 
	$mobile_check = mysqli_num_rows($query);
	if (strlen($mobile) < 10 || strlen($mobile) > 10)
		echo 0;			//this means mobile number is invalid
	else
		echo 1;			//this means mobile number is already in use
		
	
	/*
	if($mobile_check > 0)
		echo 0;
	else 
		echo 1;	
	*/
		
}

function pass_strength() {
	$password = filter_input(INPUT_POST, 'value',FILTER_SANITIZE_SPECIAL_CHARS);
	if (strlen($password) <= 8) {
		echo 0;
    }	
    	else echo 1;
}
?>