<?php 
require 'core/db/connect.php';	
error_reporting(0);	
?>
<?php
session_start();
if(isset($_SESSION["user_id"])){
		

session_start();
$id=$_SESSION["user_id"];
$line=0;
$sqlline = "UPDATE user SET line='{$line}' WHERE `user_id`='$id'";

$queryline = mysqli_query($con, $sqlline); 
		
unset($_SESSION["user_id"]);
header('refresh: 0; url=index.php'); // redirect the user after 10 seconds


		 }
else{
header('refresh: 0; url=profile.php'); // redirect the user after 10 seconds


				
}


?>

   		
