<?php

include 'core/init.php';
protect_profile_page();

function getTeamsWithEvent($event_id)
{
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");	
	$result = $con->query("SELECT `team_id` FROM `teamdata` WHERE `event_id` = $event_id;");

	$list = [];

	while($row = $result->fetch_array())
	{
		array_push($list, $row[0]);
	}

	return $list;
}

function getTeamRegisterTime($teamid)
{
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$result=$con->query("SELECT Datetime FROM `teamdata` WHERE `team_id` = $teamid");
	$row = $result->fetch_row();
	return $row[0];
}

function getTeamExtraInfo($teamid)
{
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$result=$con->query("SELECT info FROM `teamdata` WHERE `team_id` = $teamid");
	$row = $result->fetch_row();
	return $row[0];
}

function getTeamMembers($teamid, $status)
{
	return join(', ', array_map('getNameFromUserID', getTeamIDList($teamid, $status)));
}

function getTeamMembersPhone($teamid, $status)
{
	return join(', ', array_map('getMobileFromUserID', getTeamIDList($teamid, $status)));
}

function getQuoted($str)
{
	return '"' . $str . '"';
}
//getTeamStatus returns true if ok


/*function getPhoneNumber($teamid)
{
	return ;
}*/

if (isset($_GET['eventid']))
{
	$eventid = filter_var($_GET['eventid'], FILTER_SANITIZE_NUMBER_INT);

	$filename = get_eventname($eventid);
	$filename = urlencode($filename);
	header('Content-Type: text/csv');
	header("Content-Disposition: attachment; filename='$filename.csv'");

	$teams = getTeamsWithEvent($eventid);
	$counter = 0;
	$csv = '"Team ID", "Team Name", "Time of registration", "Team Members", "Phone Number(s)", "Extra Information"' . "\n";

	foreach ($teams as $teamid)
	{
		if (getTeamStatus($teamid))
		{
			$counter++;
			$data = [$teamid, getTeamName($teamid), getTeamRegisterTime($teamid), getTeamMembers($teamid, 1), getTeamMembersPhone($teamid, 1), getTeamExtraInfo($teamid)];
			$csv .= join(', ', array_map('getQuoted', $data)) . "\n";
		}
	}

	echo $csv;
}
else
{
	echo '404!';
}

?>