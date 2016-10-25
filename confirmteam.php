<?php
header('Location:myevents.php');	
include 'core/init.php';
protect_profile_page();

if (isset($_GET['teamid']) && isset($_GET['response']))
{
	$teamid = filter_var($_GET['teamid'],FILTER_SANITIZE_NUMBER_INT);

	if ($teamid > 0)
	{
		if ($_GET['response'] == 'accept')
		{
			confirmTeam($teamid, 1);
			echo '1';
		}
		else if ($_GET['response'] == 'deny')
		{
			confirmTeam($teamid, 2);
			echo '1';
		}
		else
		{
			echo '0';
		}
	}
	else
	{
		echo '0';
	}
}
else
{
	echo '0';
}

?>