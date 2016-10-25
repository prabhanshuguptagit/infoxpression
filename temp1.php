<html>

<?php include 'includes/general/head.php' ;
protect_profile_page();?>

<?php 
$action= filter_var($_GET['action'], FILTER_SANITIZE_STRING);
$user_id=filter_var($_GET['user'], FILTER_SANITIZE_STRING);
$event_id= filter_var($_GET['event_id'],FILTER_SANITIZE_NUMBER_INT);
$event_data =event_data($event_id,'name','image','about','rules','timeline','miscdetails','doclink','eventline','teamevent','max_members');
$num_members = $event_data['max_members'];	
$user_id=$_SESSION['user_id'];

$members = array(1, 3, 276, 4); 
createTeam('yo', $members, $event_id);

//confirmTeam(21);

echo $user_id;

?>