<?php 
include 'includes/general/head.php';

if(logged_in()===false){
	header('Location:login.php');	
	exit();
	}
//error_reporting(0);	
?>

<link rel="stylesheet" href="css/styles.css" type="text/css">

<?php

$userid = $_SESSION['user_id']; 

if(isset($_POST['mobile']))
{	
	$mobile = filter_var($_POST['mobile'], FILTER_SANITIZE_NUMBER_INT);
	$con=mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$sql = "SELECT * FROM user WHERE mobile = {$mobile}";
	$query = mysqli_query($con, $sql);
	$mobile_check = mysqli_num_rows($query);
	if($mobile_check != 0)
	{echo "<h1 style=\"text-align:center;background-color: rgb(255, 156, 0)\">Mobile Number already in use.</h1>";
	exit();}
	
	else
	{$sql = $con->query("UPDATE user SET `mobile`=$mobile WHERE `user_id`='$userid'");
	echo "<h1 style=\"text-align:center;background-color: rgb(255, 156, 0)\">Details have been changed successfully. </h1><h1 style=\"text-align:center;\"><a href=\"profile.php\">Your Dashboard</a></h1>";
	exit();}
	
}

if (isset($_POST['updatecbb']))
{
	//update college request

	$branch=filter_var($_POST['branch'], FILTER_SANITIZE_STRING);
	$batch=filter_var($_POST['batch'], FILTER_SANITIZE_STRING);
	$institute=filter_var($_POST['college'], FILTER_SANITIZE_STRING);
	$state=filter_var($_POST['state'],FILTER_SANITIZE_STRING);
	$othercollege=filter_var($_POST['othercollege'], FILTER_SANITIZE_STRING);
	$degree=filter_var($_POST['degree'], FILTER_SANITIZE_STRING);

	$con=mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
	if ($institute == 0)
	{
	 	$review=0;
	 	$sql = $con->query("INSERT INTO college (college, state_id,reviewed) Values ('{$othercollege}', '{$state}','{$review}')");	
		$institute = mysqli_insert_id($con);
	} 

	$sql = $con->query("UPDATE user SET branch='$branch', batch='$batch', institute='$institute', state='$state' WHERE user_id='$userid'");     
	
	echo "<h1 style=\"text-align:center;background-color: rgb(255, 156, 0)\">Details have been changed successfully. </h1><h1 style=\"text-align:center;\"><a href=\"profile.php\">Your Dashboard</a></h1>";

	exit();
}

$password=md5($_POST['current']);
$new=md5($_POST['new']);
$repeat=md5($_POST['repeat']);

$con=mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");

$sql = "SELECT * FROM user WHERE password='$password' AND user_id='$userid';";
$query = mysqli_query($con, $sql); 
$password_check = mysqli_num_rows($query);

if($new != $repeat)
	{echo "<h1 style=\"text-align:center;background-color: rgb(255, 156, 0)\">Repeat password does not match new password. Please change password again.</h1><h1 style=\"text-align:center;\"><a href=\"updateprofile.php\">Change Password</a></h1>";
	exit();}
	
else if( $password_check == 0)
	{echo "<h1 style=\"text-align:center;background-color: rgb(255, 156, 0)\">Password entered was wrong. Please check again.</h1><h1 style=\"text-align:center;\"></h1>";
	exit();}

else if($password === $repeat)
	{echo "<h1 style=\"text-align:center;background-color: rgb(255, 156, 0)\">New password cannot be the same as old one.</h1><h1 style=\"text-align:center;\"><a href=\"updateprofile.php\">Try another password.</a></h1>";
	exit();}
	
else if( strlen($repeat) < 8 )
	{echo "<h1 style=\"text-align:center;background-color: rgb(255, 156, 0)\">New password is too short. </h1><h1 style=\"text-align:center;\"><a href=\"updateprofile.php\">Try another password.</a></h1>";
	exit();}
	 	
else 
{ 
	$sql = $con->query("UPDATE user SET password='{$repeat}' WHERE user_id='$userid' AND password = '$password'");     		
	echo "<h1 style=\"text-align:center;background-color: rgb(255, 156, 0)\">Password has been changed successfully. </h1><h1 style=\"text-align:center;\"><a href=\"profile.php\">Your Dashboard</a></h1>";
	exit();
}

        		
?>