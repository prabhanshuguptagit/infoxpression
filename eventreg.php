<html>

<?php include 'includes/general/head.php' ;
protect_profile_page();
error_reporting(0);?>

<link rel="stylesheet" href="css/profile.css">

 
<body style="background-color:#364346;max-width: 100%;
 overflow-x: hidden;">
	<?php 
	
	$event_id= filter_var($_GET['event_id'],FILTER_SANITIZE_NUMBER_INT);
	$action= filter_var($_GET['action'], FILTER_SANITIZE_STRING);	

	if(!event_exists($event_id))
	{
		die('Error! Please report to site administrator'); //no such event id exists
	}
	else if($event_id == 16 || $event_id == 17 )
	{die('Invalid Event');}
	$event_data =event_data($event_id,'name','image','about','rules','timeline','miscdetails','doclink','eventline','max_members','miscinfo');
	$eventimg=$event_data['image'];		
	$eventname=$event_data['name'];		
	$num_members = $event_data['max_members'];
	$miscinfo = $event_data['miscinfo'];
	$hasRegistered = false;
	
	/*if ($num_members == 1)
	{
		//single membered team
		$user_id = $_SESSION['user_id'];
		$profile_data = user_data($user_id,'name','email','username','mobile','state','batch','branch','institute','profilepic');
		$email = $profile_data['email'];
		$team_name = filter_var($_POST['teamname'], FILTER_SANITIZE_STRING);
		$team_members = [];
		array_push($team_members, $user_id);

		foreach($team_members as $key => $user_id)
		{
			if (isRegisteredEvent($user_id, $event_id))
			{
				echo "<div class=\"event text-center\"><h1>You are already registered for the event</h1></div>";
       				echo "<h1 style=\"text-align:center;\">Please <a href=\"javascript:history.back()\" style=\"color:blue\">check again</a></h1>";
        			exit();
			}
		}
		
		createTeam($email, $team_members, $event_id);
		$hasRegistered = true;
	}*/
	if (isset($_POST['teamname']))
	{
		//this is a submitted request
		
		$con=mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
		$user_id=$_SESSION['user_id'];//jo logged in hai	
		$profile_data =user_data($user_id,'name','email','username','mobile','state','batch','branch','institute','profilepic');
		$email=$profile_data['email'];
				
		$team_name = filter_var($_POST['teamname'], FILTER_SANITIZE_STRING);
		$members = $_POST['members'];	
		$team_members = [];	
		$info = filter_var($_POST['info'], FILTER_SANITIZE_STRING);
		
		array_push($team_members, $user_id);		//logged in hai jo banda
		
		$sql = "SELECT name FROM teamdata WHERE event_id='$event_id' AND name = '$team_name' LIMIT 1";
	    	$query = mysqli_query($con, $sql); 
		$teamname_check = mysqli_num_rows($query);
		
		if($teamname_check > 0)
		{echo "<div class=\"event text-center\"><h1>Team name is already taken.</h1></div>";
		 echo "<h1 style=\"text-align:center;\">Please <a href=\"javascript:history.back()\" style=\"color:blue\">try using another name.</a></h1>";
		exit();}
		
		function isEmail($email) {
		    return preg_match('|^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]{2,})+$|i', $email);
		};
		
		foreach($members as $key => $field )
		{	
		if($members[$key]){
			$members[$key] = filter_var( $field, FILTER_SANITIZE_EMAIL);
			$sql = "SELECT user_id FROM user WHERE email='$members[$key]' LIMIT 1";
		    	$query = mysqli_query($con, $sql); 
			$email_check = mysqli_num_rows($query);
			
			if($email_check > 0 && $members[$key] != $email)
				{$members[$key] = user_id_from_email( $members[$key] ) ;	
				array_push($team_members,$members[$key]); }
			else 
				{echo "<div class=\"event text-center\"><h1>Email address of member ".($key + 2)." is invalid.</h1></div>";
       				 echo "<h1 style=\"text-align:center;\">Please <a href=\"javascript:history.back()\" style=\"color:blue\">check again</a></h1>";
        			exit();
				}
			}
			
		}
		
		foreach($team_members as $key => $user_id)
		{
			if (isRegisteredEvent($user_id, $event_id))
			{	if($key == 0)
				{echo "<div class=\"event text-center\"><h1>You have already registered for the event in a different team.</h1></div>";	
				
        			exit();}
				else
				{echo "<div class=\"event text-center\"><h1>Member " . ($key + 1) . " is already registered for the event in a different team.</h1></div>";
       				echo "<h1 style=\"text-align:center;\">Please <a href=\"javascript:history.back()\" style=\"color:blue\">check again</a></h1>";
        			exit();}
			}
		}
		
		createTeam($team_name, $team_members, $event_id, $info);
		$hasRegistered = true;
	}
	
	
	if ($hasRegistered)
	{
	
	echo "<div class=\"event text-center\"><h1>You have registered for the event ".$eventname.".</h1><br>";
	if($num_members > 1 )echo "<h4>For team events only : Requests have been sent to your teammates ( if any ). Ask them to login through their InfoX Id to participate and accept your request. All participants need to confirm to be able to participate.";
	echo "<br></div>";
     
        exit();

	
	}
	else
	{
	
	//$user_id=filter_var($_GET['user'], FILTER_SANITIZE_STRING);
	//$user_data =user_data($user,'first_name','last_name','email','username','profile','enrollment_id','gender','age','type');
	
	?>	
	
	<div class="row">
		<div class="col-xs-2"></div>
		<div class="col-md-8 col-xs-12 text-center">
			<h1>Register</h1><hr/>
			<?php echo '<img src="'.$eventimg.'" class="event-image">'; ?>			
			<h2><?php echo $eventname ?></h2><br>			
			<div class="event-description">
		
			<form action="" method="post">
			<h4>Team Name: <br> ( Your name for individuals)</h4>
			
			<input id="teamname" type="text" name="teamname" placeholder="ex. CodeMonks "required class="inputtext"></input><br><br>
				<?php for( $i = 0 ; $i < $num_members - 1; $i++){ ?>
				<input type="email" class="inputtext emailtext" name="members[]" placeholder="Member <?php echo $i + 2 ?>'s email (Optional) "></input><br><br>
				<?php } 
				
				if( $miscinfo != NULL)
				{echo '<input id="Info" type="text" name="info" required class="inputtext" placeholder="'.$miscinfo.'"></input>';		
				}
				?>
			<h4>Be careful while entering the details. These cannot be modified once team is created.</h4>		
			<button type="submit" class="btn btn-transparent">Submit</button>
			</form>
			
	
		</div>		
		</div>
	</div>	
	

</body>
<script>
$('#teamname').focusout(function() {
	 $.ajax({
        type: "POST",
        url: 'eventregvalidation.php',
        data: "functionName=checkTeamname&eventid=<?php echo $event_id ?>&value="+$('#teamname').val(),
        success: function(response) {
        	if(response == 0)$('#teamname').after('<div id="teamexists" class="text-center" style="color:red">Team name is already registered.</div>');
        	else $('#teamexists').remove();
        }
    });
});
	
$('.emailtext').focusout(function(){
	var thisone = $(this);
	var email = $(this).val();
	$('#emailtaken').remove();
	$('#emailexistnot').remove();
	if(email){
	 $.ajax({
        type: "POST",
        url: 'eventregvalidation.php',
        data: "functionName=checkEmail&eventid=<?php echo $event_id ?>&email="+email,
        success: function(response) {
        	
        	if(response == 0)thisone.after('<div id="emailtaken" class="text-center" style="color:red">This user has registered for the event already.</div>');
        	else $('#emailtaken').remove();
        }
   	 });
    
     $.ajax({
        type: "POST",
        url: 'eventregvalidation.php',
        data: "functionName=validateEmail&eventid=<?php echo $event_id ?>&email="+email,
        success: function(response) {
        	
        	if(response == 0)thisone.after('<div id="emailexistnot" class="text-center" style="color:red">This email is not registered with us.<a href="#"> Invite your friend</a> to InfoX.</div>');
        	else $('#emailexistnot').remove();
        }
    	});
	
	}
});	
</script>
</html>	
	
	<?php
	}
	?>