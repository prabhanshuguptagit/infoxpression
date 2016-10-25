<?php
include 'core/init.php';

$functionName = filter_input(INPUT_POST, 'functionName');

if ($functionName == "checkTeamname") {
	check_teamname(); 
}else if ($functionName == "checkEmail") {
	check_email();
}else if ($functionName == "validateEmail") {
	validate_email();
}
     	

function check_teamname() {
	
	$con=mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$teamname = filter_input(INPUT_POST, 'value',FILTER_SANITIZE_SPECIAL_CHARS);
	$event_id = filter_input(INPUT_POST, 'eventid',FILTER_SANITIZE_SPECIAL_CHARS);
	
	$sql = "SELECT name FROM teamdata WHERE event_id='$event_id' AND name = '$teamname' LIMIT 1";
    	$query = mysqli_query($con, $sql); 
	$teamname_check = mysqli_num_rows($query);
	
	if($teamname_check > 0)
		echo 0;
	else 
		echo 1;	
}

function check_email() {
	
	
	$email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);
	$event_id = filter_input(INPUT_POST, 'eventid',FILTER_SANITIZE_NUMBER_INT);
	if(user_id_from_email($email))
	$user_id = user_id_from_email($email);
	else
	$user_id = 0;
	
	if(isRegisteredEvent($user_id, $event_id))
		echo 0;
	else
		echo 1;	
}

function validate_email() {
	//To check if email is in db or not
	$email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);
	$event_id = filter_input(INPUT_POST, 'eventid',FILTER_SANITIZE_NUMBER_INT);
	
	if(user_id_from_email($email))
	$user_id = user_id_from_email($email);
	else
	$user_id = 0;
	
	echo $user_id;
}


?>