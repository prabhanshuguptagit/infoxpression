<html>

<?php include 'includes/general/head.php' ;
protect_profile_page();?>

<link rel="stylesheet" href="css/profile.css">
<body>
	<?php 
	
	$teamid = filter_var($_GET['teamid'],FILTER_SANITIZE_NUMBER_INT);
	
	if (checkValidTeam($teamid))
	{
		if (hasTeamDenied($teamid))
		{
			showError("Unfortunately some of your team members have denied your proposal! Please recreate another team");
		}
		else
		{
			$eventid = getTeamEvent($teamid);
			$eventname = get_eventname($eventid);
			$teamname = getTeamName($teamid);
			$data = '';

			$acceptedList = getTeamIDList($teamid, 1);
			$showAccept = 'initial';

			foreach ($acceptedList as $user)
			{
				if ($user == $_SESSION["user_id"])
				{
					$showAccept = 'none';
				}
				$data .= "<li class='myevent going'>" . getNameFromUserID($user) . "</li>";
			}

			$awaitingList = getTeamIDList($teamid, 0);

			foreach ($awaitingList as $user)
			{
				$data .= "<li class='myevent notgoing'>" . getNameFromUserID($user) . "</li>";
			}

			echo <<<BLOCK

	
	<div class="row">
		
		<div class="col-md-12 col-xs-12 text-center">
			<h1>$eventname</h1>
			<br>
			<h4>Team name: $teamname</h4>
			<ul>
				$data
			</ul>
		</div>		
	</div>
		
	<div class="row">
			
	</div>
	
	<div class="row">		
			<div class="col-xs-12 col-md-12" style="text-align:center">
				<form action="confirmteam.php" method="get">
					<input type="hidden" name="teamid" value="$teamid" />
					<button type="submit" style="display:$showAccept;" name="response" value="accept" class="btn btn-transparent">Accept</button>
					<button type="submit" name="response" value="deny" class="btn btn-transparent" onclick="return confirm('The team will be deleted. This action cannot be undone. Are you sure?');">Deny + Delete Team</button>
				</form>				
			</div>
	</div>		
		
	
BLOCK;

		}
	}
	else
	{
		showError("The entered team id doesn't exist");
	}

	?>
	
</body>
</html>	