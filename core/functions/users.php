<?php 

function logged_in(){

return (isset($_SESSION["user_id"])) ? true : false;
}

/*--------------------------------------------------------------------------------------------------------------------------------------------------------
*/





function get_position($type){
$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
	$sql_position = "SELECT `type` FROM `type` WHERE `type_id`=$type ";
	$query_position = mysqli_query($con, $sql_position); 
	
	return $query_position;
}
function update_ca($user_id,$college_id){

$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$sql_events = "UPDATE `college` SET `ambassador`='$user_id' WHERE `college_id`='$college_id' ";
	mysqli_query($con, $sql_events); 
}

function get_ca($college_id){
$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");

$result=$con->query("SELECT ambassador from college WHERE college_id='$college_id' ")	;	
					$rowt= $result->fetch_array(MYSQLI_BOTH);
					$type=$rowt['ambassador'];
					return $type;
}

/*----------------------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------------*/
function user_data($user_id){//this function can accept & return n number of parameter.
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
	$data=array();
	$user_id= (int)$user_id;
	$func_num_args = func_num_args();
	// echo $func_num_args; //To check number of arguments we passed
	$func_get_args = func_get_args();
	//echo $func_get_args; // To check the arguments we passed
	if($func_num_args>1){
		unset($func_get_args[0]);
	$fields= '`'.implode('`,`',$func_get_args).'`';
	
	$query="SELECT $fields FROM `user` WHERE  `user_id` =$user_id";
	 
	$result= mysqli_query($con,$query);
	$data=mysqli_fetch_assoc($result);
	//print_r($data); To retrieve all the data
	
	return $data;
	
	}

	
}

function event_data($event_id){//this function can accept & return n number of parameter.
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
	$data=array();
	$event_id= (int)$event_id;
	$func_num_args = func_num_args();
	// echo $func_num_args; //To check number of arguments we passed
	$func_get_args = func_get_args();
	//echo $func_get_args; // To check the arguments we passed
	if($func_num_args>1){
		unset($func_get_args[0]);
	$fields= '`'.implode('`,`',$func_get_args).'`';
	
	$query="SELECT $fields FROM `eventdetails` WHERE  `event_id` =$event_id";
	 
	$result= mysqli_query($con,$query);
	$data=mysqli_fetch_assoc($result);
	//print_r($data); To retrieve all the data
	
	return $data;
	
	}

	
}


function user_exists($username){
	
$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$username= sanitize($username);
	
	$sql_username = "SELECT * FROM `user` WHERE `username`='$username' ";
	$query_username = mysqli_query($con, $sql_username); 
	$username_check = mysqli_num_rows($query_username);
	

	
	
return $username_check;
}

function user_id_exists($userid){
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$sql_username = "SELECT * FROM `user` WHERE `user_id`='$userid' ";
	$query_username = mysqli_query($con, $sql_username); 
	$username_check = mysqli_num_rows($query_username);
	return $username_check;
}

function get_coordinator($event_id){
	


}
function get_campus_ambassador($campus_id){
$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$sql_ambassador = "SELECT * FROM `user` WHERE `institute`='$campus_id' AND `type`=2 ";
	$query_ambassador = mysqli_query($con, $sql_ambassador); 
	$data=mysqli_fetch_assoc($query_ambassador);
	return $data;
	

}

function event_exists($event_id){
	
	
	
$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$sql_event = "SELECT * FROM `eventdetails` WHERE `event_id`='$event_id' ";
	$query_event = mysqli_query($con, $sql_event); 
	$event_check = mysqli_num_rows($query_event);
	

	
	
return $event_check;
}
/*function reg_events($user_id,$event_id){
	
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	/*$username= sanitize($username);
	
	$sql ="SELECT  `status` from `registration_details` WHERE `userid`='$user_id' AND `event_id`='$event_id' ";
	$resulte=mysqli_query($con,$sql);	
	return $resulte;
					
					
}*/

function get_no_of_user(){
	
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	/*$username= sanitize($username);
	*/
	$sql_no = "SELECT * FROM `user` ";
	$query_no = mysqli_query($con, $sql_no); 
	$user_no = mysqli_num_rows($query_no);
	
		return $user_no;
			

}
function get_no_of_user_from_campus($campus_id){
	
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	/*$username= sanitize($username);
	*/
	$sql_no = "SELECT * FROM `user` WHERE `institute`='$campus_id' ";
	$query_no = mysqli_query($con, $sql_no); 
	$user_no = mysqli_num_rows($query_no);
	return $user_no;
			

}

function get_no_of_active_user(){
	
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	/*$username= sanitize($username);
	*/
	$sql_activeno = "SELECT * FROM `user` WHERE active=1";
	$query_activeno = mysqli_query($con, $sql_activeno); 
	$activeuser_no = mysqli_num_rows($query_activeno);
	
		return $activeuser_no;
			

}
function get_no_of_active_user_from_campus($campus_id){
	
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	/*$username= sanitize($username);
	*/
	$sql_activeno = "SELECT * FROM `user` WHERE `active`=1 AND `institute`='$campus_id'";
	$query_activeno = mysqli_query($con, $sql_activeno); 
	$activeuser_no = mysqli_num_rows($query_activeno);
	
		return $activeuser_no;
			

}

function get_no_of_active_campus(){
	
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	/*$username= sanitize($username);
	*/
	$sql_activeno = "SELECT * FROM `user` WHERE active=1";
	$query_activeno = mysqli_query($con, $sql_activeno); 
	$activeuser_no = mysqli_num_rows($query_activeno);
	
		return $activeuser_no;
			

}


function add_events($user_id,$event_id){
$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$sql_events = "UPDATE `events_reg` SET `" . $event_id . "`='1' WHERE `user_id`='$user_id' ";
	mysqli_query($con, $sql_events); 
	 	

}

/* Truncated. use event_data instead.
function max_members($event_id){
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$result=$con->query("SELECT `max_members` FROM `events` WHERE `event_id` = '$event_id' ")	;	
	$row= $result->fetch_array(MYSQLI_BOTH);
	$max_members=$row['max_members'];
	return $max_members;
}*/

function getEventsList()
{
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$result = $con->query("SELECT `event_id` FROM `eventdetails`");

	$list = [];

	while($row = $result->fetch_array())
	{
		array_push($list, $row[0]);
	}

	return $list;
}

function isRegisteredEvent($user_id, $eventid)
{
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$result = $con->query("SELECT count(*) FROM `registration_details` WHERE `userid` = $user_id AND `event_id` = $eventid AND `status` != 2");

	$row = $result->fetch_row();

	if ($row[0] == 0)
	{
		return 0;
	}
	else
	{
		return 1;
	}
}


function createTeam($teamname, $members, $eventid, $info)
{
	$membercount = count($members);

	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$result=$con->query("INSERT INTO `teamdata` (`name`, `no_of_members`, `event_id`,`info`) VALUES ('$teamname', '$membercount', $eventid,'$info');");
	$teamid = $con->insert_id;

	foreach ($members as $userid)
	{
		$status = 0;
		//0 means no response
		//1 means accepted
		//2 means denied

		if ($userid == $_SESSION['user_id'])
		{
			//creator always have confirmed status
			$status = 1;
		}

		$result=$con->query("INSERT INTO `registration_details` (`teamid`, `userid`, `status`, `event_id`) VALUES ('$teamid', '$userid', '$status', $eventid);");
	}
}

function confirmTeam($teamid, $status)
{
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$userid = $_SESSION['user_id'];
	$sql_events = "UPDATE `registration_details` SET  `status` =  '$status' WHERE `teamid` = $teamid AND `userid` = $userid";

	if ($status == 2)
	{
		if (getCurrentTeam(getTeamEvent($teamid), $userid) == $teamid)
		{
			//this guy denied proposal, so lets deny this team for everyone else
			$sql_events = "UPDATE `registration_details` SET  `status` =  '$status' WHERE `teamid` = $teamid";
		}
	}

	mysqli_query($con, $sql_events); 
}

function getTeamLeader($teamid)
{
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");	
	$result = $con->query("SELECT `userid` FROM `registration_details` WHERE `teamid` = $teamid AND `status` = 1 LIMIT 0, 1");
	$row = $result->fetch_row();
	return $row[0];
}

function getTeamName($teamid)
{
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$result=$con->query("SELECT name FROM `teamdata` WHERE `team_id` = $teamid");
	$row = $result->fetch_row();
	return $row[0];
}

function getTeamEvent($teamid)
{
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$result=$con->query("SELECT event_id FROM `teamdata` WHERE `team_id` = $teamid");
	$row = $result->fetch_row();
	return $row[0];
}

function getTeamIDList($teamid, $status)
{
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$result = $con->query("SELECT `userid` FROM `registration_details` WHERE `teamid` = $teamid AND `status` = $status");

	$list = [];

	while($row = $result->fetch_array())
	{
		array_push($list, $row[0]);
	}

	return $list;
}

function getNameFromUserID($userid)
{
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$result=$con->query("SELECT name FROM `user` WHERE `user_id` = $userid");
	$row = $result->fetch_row();
	return $row[0];
}

function getMobileFromUserID($userid)
{
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$result=$con->query("SELECT mobile FROM `user` WHERE `user_id` = $userid");
	$row = $result->fetch_row();
	return $row[0];
}

function getEmailFromUserID($userid)
{
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$result=$con->query("SELECT email FROM `user` WHERE `user_id` = $userid");
	$row = $result->fetch_row();
	return $row[0];
}

function getTeamNotifications($userid)
{
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");	
	$result = $con->query("SELECT `teamid`, `event_id` FROM `registration_details` WHERE `userid` = $userid AND `status` = 0");

	$allnotifications = [];

	while($row = $result->fetch_array())
	{
		$leaderID = getTeamLeader($row['teamid']);
		$currentnotification = array("teamid" => $row['teamid'],
									 "teamname" => getTeamName($row['teamid']),
									 "teamleaderid" => $leaderID,
									 "teamleadername" => getNameFromUserID($leaderID),
									 "eventname" => get_eventname($row['event_id'])
									 );
		array_push($allnotifications, $currentnotification);
	}

	return $allnotifications;
}

function showError($message)
{
	die($message);
}

function checkValidTeam($teamid)
{
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$result = $con->query("SELECT count(*) FROM `registration_details` WHERE `teamid` = $teamid");
	$row = $result->fetch_row();
	return ($row[0] > 0);
}

function getTeamNumberMembers($teamid)
{
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$result=$con->query("SELECT no_of_members FROM `teamdata` WHERE `team_id` = $teamid");
	$row = $result->fetch_row();
	return $row[0];
}

function hasTeamDenied($teamid)
{
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$result = $con->query("SELECT count(*) FROM `registration_details` WHERE `teamid` = $teamid AND `status` = 2");
	$row = $result->fetch_row();
	return ($row[0] > 0);
}

function getTeamStatus($teamid)
{
	//returns true if all members of team has accepted else false
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$result = $con->query("SELECT count(*) FROM `registration_details` WHERE `teamid` = $teamid AND `status` = 1");
	$row = $result->fetch_row();
	return ($row[0] === getTeamNumberMembers($teamid));
}

function getCurrentTeam($eventid, $userid)
{
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");	
	$result = $con->query("SELECT `teamid` FROM `registration_details` WHERE `userid` = $userid AND `event_id` = $eventid AND status != 2");

	if($result->num_rows === 0)
	{
		return -1;
	}
	else
	{		
		$row = $result->fetch_row();
		return $row[0];
	}
}

function getUserEventStatus($eventid, $userid)
{
	/*
	returns 0 if not registered
	returns 1 if all well and registered
	returns 2 if awaiting confirmation from other members
	*/
	$teamid = getCurrentTeam($eventid, $userid);

	if ($teamid == -1 || hasTeamDenied($teamid))
	{
		return 0; //his team member denied so that team is useless
	}
	else if (getTeamStatus($teamid))
	{
		return 1;
	}
	else
	{
		return 2;
	}
}

function remove_events($user_id,$event_id){
$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$sql_events = "UPDATE `events_reg` SET `" . $event_id . "`='0' WHERE `user_id`='$user_id' ";
	mysqli_query($con, $sql_events); 
	 	
}

function update_type($user_id,$type){
$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$sql_events = "UPDATE `user` SET `type`='$type' WHERE `user_id`='$user_id' ";
	mysqli_query($con, $sql_events); 
	 	

}
function get_type_status($user_id){//earlier the name was getpost id

	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	//$sql_user_id_from_username = "SELECT user_id FROM user WHERE  username='$username' ";
				//$query_user_id_from_username = mysqli_query($con, $sql_checkpassword_username); 
				
					$result=$con->query("SELECT type from user WHERE user_id='$user_id' ")	;	
					$rowt= $result->fetch_array(MYSQLI_BOTH);
					$type=$rowt['type'];
					return $type;
}
function get_eventlink($event_id){//earlier the name was getpost id

	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	//$sql_user_id_from_username = "SELECT user_id FROM user WHERE  username='$username' ";
				//$query_user_id_from_username = mysqli_query($con, $sql_checkpassword_username); 
				
					$result=$con->query("SELECT link from events WHERE event_id='$event_id' ")	;	
					$roww= $result->fetch_array(MYSQLI_BOTH);
					$event_link=$roww['link'];
					return $event_link;
}

function runQuery($query){
$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
	$result = mysqli_query($con,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
}

function numRows($query) {
$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
		$result  = mysqli_query($con,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}

function get_eventname($event_id){//earlier the name was getpost id

	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	//$sql_user_id_from_username = "SELECT user_id FROM user WHERE  username='$username' ";
				//$query_user_id_from_username = mysqli_query($con, $sql_checkpassword_username); 
				
					$result=$con->query("SELECT name from events WHERE event_id='$event_id' ")	;	
					$row= $result->fetch_array(MYSQLI_BOTH);
					$event_name=$row['name'];
					return $event_name;
}

function get_eventfblink($event_id){

	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	//$sql_user_id_from_username = "SELECT user_id FROM user WHERE  username='$username' ";
				//$query_user_id_from_username = mysqli_query($con, $sql_checkpassword_username); 
				
					$result=$con->query("SELECT miscdetails from eventdetails WHERE event_id='$event_id' ")	;	
					$row= $result->fetch_array(MYSQLI_BOTH);
					$event_name=$row['miscdetails'];
					return $event_name;
}

function get_eventimage($event_id){

	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	//$sql_user_id_from_username = "SELECT user_id FROM user WHERE  username='$username' ";
				//$query_user_id_from_username = mysqli_query($con, $sql_checkpassword_username); 
				
					$result=$con->query("SELECT image from eventdetails WHERE event_id='$event_id' ")	;	
					$row= $result->fetch_array(MYSQLI_BOTH);
					$event_name=$row['image'];
					return $event_name;
}

function profilebranch($branch_id){//earlier the name was getpost id

	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	//$sql_user_id_from_username = "SELECT user_id FROM user WHERE  username='$username' ";
				//$query_user_id_from_username = mysqli_query($con, $sql_checkpassword_username); 
				
					$result=$con->query("SELECT branch_name from branch WHERE branch_id='$branch_id' ")	;	
					$row= $result->fetch_array(MYSQLI_BOTH);
					$branch_name=$row['branch_name'];
					return $branch_name;
}

function profileposition($type){//earlier the name was getpost id

	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	//$sql_user_id_from_username = "SELECT user_id FROM user WHERE  username='$username' ";
				//$query_user_id_from_username = mysqli_query($con, $sql_checkpassword_username); 
				
					$result=$con->query("SELECT type from type WHERE type_id='$type' ")	;	
					$row= $result->fetch_array(MYSQLI_BOTH);
					$branch_name=$row['type'];
					return $branch_name;
}





function profiledegree($degree_id){//earlier the name was getpost id

	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	//$sql_user_id_from_username = "SELECT user_id FROM user WHERE  username='$username' ";
				//$query_user_id_from_username = mysqli_query($con, $sql_checkpassword_username); 
				
					$result=$con->query("SELECT degree_name from degree WHERE degree_id='$degree_id' ")	;	
					$row= $result->fetch_array(MYSQLI_BOTH);
					$degree_name=$row['degree_name'];
					return $degree_name;
}

function profilebatch($batch_id){//earlier the name was getpost id

	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	//$sql_user_id_from_username = "SELECT user_id FROM user WHERE  username='$username' ";
				//$query_user_id_from_username = mysqli_query($con, $sql_checkpassword_username); 
				
					$result=$con->query("SELECT batch_name from batch WHERE batch_id='$batch_id' ")	;	
					$row= $result->fetch_array(MYSQLI_BOTH);
					$batch_name=$row['batch_name'];
					return $batch_name;
}
function profilestate($state_id){//earlier the name was getpost id

	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	//$sql_user_id_from_username = "SELECT user_id FROM user WHERE  username='$username' ";
				//$query_user_id_from_username = mysqli_query($con, $sql_checkpassword_username); 
				
					$result=$con->query("SELECT state from state WHERE state_id='$state_id' ")	;	
					$row= $result->fetch_array(MYSQLI_BOTH);
					$state_name=$row['state'];
					return $state_name;
}
function profileinstitute($college_id){//earlier the name was getpost id

	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	//$sql_user_id_from_username = "SELECT user_id FROM user WHERE  username='$username' ";
				//$query_user_id_from_username = mysqli_query($con, $sql_checkpassword_username); 
				
					$result=$con->query("SELECT college from college WHERE college_id='$college_id' ")	;	
					$row= $result->fetch_array(MYSQLI_BOTH);
					$college_name=$row['college'];
					return $college_name;
}

function user_id_from_username($username){

	//$username=sanitize($username);
	//$sql_user_id_from_username = "SELECT user_id FROM users WHERE  username='$username' ";
				//$query_user_id_from_username = mysqli_query($con, $sql_checkpassword_username); 
				$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
					$result=$con->query("SELECT user_id from user WHERE username='$username' ")	;	
					$row= $result->fetch_array(MYSQLI_BOTH);
					$user_id_from_username=$row['user_id'];

					return $user_id_from_username;
}
function user_id_from_email($email){

	//$username=sanitize($username);
	//$sql_user_id_from_username = "SELECT user_id FROM users WHERE  username='$username' ";
				//$query_user_id_from_username = mysqli_query($con, $sql_checkpassword_username); 
				$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
					$result=$con->query("SELECT user_id from user WHERE email='$email' ")	;	
					$row= $result->fetch_array(MYSQLI_BOTH);
					$user_id_from_email=$row['user_id'];

					return $user_id_from_email;
}
function campus_id($userid){


	//$username=sanitize($username);
	//$sql_user_id_from_username = "SELECT user_id FROM users WHERE  username='$username' ";
				//$query_user_id_from_username = mysqli_query($con, $sql_checkpassword_username); 
				$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
					$result=$con->query("SELECT campus_id from user WHERE user_id='$userid' ")	;	
					$row= $result->fetch_array(MYSQLI_BOTH);
					$campus_id_from_userid=$row['campus_id'];

					return $campus_id_from_userid;


}
function event_name_from_id($eventid){

	//$username=sanitize($username);
	//$sql_user_id_from_username = "SELECT user_id FROM users WHERE  username='$username' ";
				//$query_user_id_from_username = mysqli_query($con, $sql_checkpassword_username); 
				$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
					$result=$con->query("SELECT user_id from user WHERE username='$username' ")	;	
					$row= $result->fetch_array(MYSQLI_BOTH);
					$user_id_from_username=$row['user_id'];

					return $user_id_from_username;
}

function user_state($username){

	
$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
					
	$sql_user_state = "SELECT `user_id` FROM `user` WHERE `username`='$username' AND `activeaccount`='1' LIMIT 1";
	$query_user_state = mysqli_query($con, $sql_user_state); 
	$user_state_check = mysqli_num_rows($query_user_state);
	
	return $user_state_check;
	
}	
function user_active($username){
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	//$username= sanitize($username);
	
	$sql_user_active = "SELECT user_id FROM user WHERE username='$username' AND active='1' LIMIT 1";
	$query_user_active = mysqli_query($con, $sql_user_active); 
	$user_active_check = mysqli_num_rows($query_user_active);
	return $user_active_check;
	
}	

/*--------------------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------------*/			
//Functions Regarding Profile page

function getlastpostid($user_id){//earlier the name was getpost id

	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	//$sql_user_id_from_username = "SELECT user_id FROM user WHERE  username='$username' ";
				//$query_user_id_from_username = mysqli_query($con, $sql_checkpassword_username); 
				
					$result=$con->query("SELECT last_post_id from last_post_id WHERE user_id='$user_id' ")	;	
					$row= $result->fetch_array(MYSQLI_BOTH);
					$last_post_id=$row['last_post_id'];
					return $last_post_id;
}

function getpostid($user_id){//earlier the name was getpost id, I am keeping this function in order to keep any bug off the shore.

	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	//$sql_user_id_from_username = "SELECT user_id FROM user WHERE  username='$username' ";
				//$query_user_id_from_username = mysqli_query($con, $sql_checkpassword_username); 
				
					$result=$con->query("SELECT last_post_id from last_post_id WHERE user_id='$user_id' ")	;	
					$row= $result->fetch_array(MYSQLI_BOTH);
					$last_post_id=$row['last_post_id'];
					return $last_post_id;
}
function getlastcommentid($post_id){//earlier the name was getpost id, I am keeping this function in order to keep any bug off the shore.

	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$result=$con->query("SELECT last_comment_id from last_comment_id WHERE post_id='$post_id' ")	;	
	$row= $result->fetch_array(MYSQLI_BOTH);
	$last_comment_id=$row['last_comment_id'];
	return $last_comment_id;
}
function getlastreplyid($comment_id){//earlier the name was getpost id, I am keeping this function in order to keep any bug off the shore.

	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$result=$con->query("SELECT last_reply_id from last_reply_id WHERE comment_id='$comment_id' ")	;	
	$row= $result->fetch_array(MYSQLI_BOTH);
	$last_reply_id=$row['last_reply_id'];
	return $last_reply_id;
}
function getuserid($post_id){//earlier the name was getpost id, I am keeping this function in order to keep any bug off the shore.

	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$result=$con->query("SELECT user_id from post WHERE post_id='$post_id' ")	;	
	$row= $result->fetch_array(MYSQLI_BOTH);
	$user_id=$row['user_id'];
	return $user_id;
}


//Function to get the data of user post
function user_post_data($post_id){//this function can accept & return n number of parameter.
	$data=array();
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$user_id= (int)$user_id;
	$func_num_args = func_num_args();
	// echo $func_num_args; //To check number of arguments we passed
	$func_get_args = func_get_args();
	//echo $func_get_args; // To check the arguments we passed
	if($func_num_args>1){
		unset($func_get_args[0]);
	$fields= '`'.implode('`,`',$func_get_args).'`';
	
	$query="SELECT $fields FROM `post` WHERE  `post_id` =$post_id";
	 
	$result= mysqli_query($con,$query);
	$data=mysqli_fetch_assoc($result);
	//print_r($data); To retrieve all the data
	
	return $data;
	
	}

	
}


//Function to insert post
function insert_post($insert_data){
	//array_walk($register_data,'array_sanitize');
	//$conp = mysqli_connect("localhost","root","","mycms");
		$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
		$data='\'' .implode('\',\'',$insert_data). '\'';

	$fields='`'.implode('`,`',array_keys($insert_data)).'`';
	$query="INSERT INTO `posts` ($fields) VALUES ($data)";

	mysqli_query($conp,$query);
	
}	

//Function to insert New Post
function insert_new_post($insert_data){
	//array_walk($register_data,'array_sanitize');
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
	
		$data='\'' .implode('\',\'',$insert_data). '\'';

	$fields='`'.implode('`,`',array_keys($insert_data)).'`';
	$query="INSERT INTO `post` ($fields) VALUES ($data)";

	mysqli_query($conp,$query);
	
}

//Function to insert status
function insert_status($insert_status){
	//array_walk($register_data,'array_sanitize');
$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
		
		$data='\'' .implode('\',\'',$register_data). '\'';

	$fields='`'.implode('`,`',array_keys($register_data)).'`';
	$query="INSERT INTO `posts` ($fields) VALUES ($data)";

	mysqli_query($conp,$query);
	
}

//Insert New Comment
function insert_new_comment($insert_data){
	//array_walk($register_data,'array_sanitize');
$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
		
		$data='\'' .implode('\',\'',$insert_data). '\'';

	$fields='`'.implode('`,`',array_keys($insert_data)).'`';
	$query="INSERT INTO `comment_post` ($fields) VALUES ($data)";

	mysqli_query($conp,$query);
	
	
}
//Insert New Reply

function insert_new_reply($insert_data){
	//array_walk($register_data,'array_sanitize');
	
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
		$data='\'' .implode('\',\'',$insert_data). '\'';

	$fields='`'.implode('`,`',array_keys($insert_data)).'`';
	$query="INSERT INTO `reply_comment` ($fields) VALUES ($data)";

	mysqli_query($conp,$query);
	
	
}
//update last post id
function update_last_post_id($user_id,$post_id){
	
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	

	$query="UPDATE `last_post_id` SET `last_post_id`=$post_id WHERE `user_id`=$user_id ";
	
	mysqli_query($con,$query);
	
	

}

//update last comment id
function update_last_comment_id($post_id,$comment_id){
	
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	

	$query="UPDATE `last_comment_id` SET `last_comment_id`=$comment_id WHERE `post_id`=$post_id ";
	
	mysqli_query($con,$query);
	
	

}
//Update last reply Id
function update_last_reply_id($comment_id,$reply_id){
	
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	

	$query="UPDATE `last_reply_id` SET `last_reply_id`=$reply_id WHERE `comment_id`=$comment_id ";
	
	mysqli_query($con,$query);
	
	

}

//To check user upvoted the post or not
function user_post_upvote_exists($user,$id){
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
	$sql_email = "SELECT * FROM `upvote_post` WHERE `who_id`='$user' AND `post_id`=$id ";
	$query_email = mysqli_query($con, $sql_email); 
	$upvote_post_check= mysqli_num_rows($query_email);
	return $upvote_post_check;
	
}
function user_post_downvote_exists($user,$id){
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
	$sql_email = "SELECT * FROM `downvote_post` WHERE `who_id`='$user' AND `post_id`=$id ";
	$query_email = mysqli_query($con, $sql_email); 
	$downvote_post_check = mysqli_num_rows($query_email);
	return $downvote_post_check;
	
}	
//To check user upvoted the comment or not
function user_comment_upvote_exists($user,$id){
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
	$sql_email = "SELECT * FROM `upvote_comment` WHERE `who_id`='$user' AND `comment_id`=$id ";
	$query_email = mysqli_query($con, $sql_email); 
	$upvote_comment_check= mysqli_num_rows($query_email);
	return $upvote_comment_check;
	
}
function user_comment_downvote_exists($user,$id){
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
	$sql_email = "SELECT * FROM `downvote_comment` WHERE `who_id`='$user' AND `comment_id`=$id ";
	$query_email = mysqli_query($con, $sql_email); 
	 $downvote_comment_check= mysqli_num_rows($query_email);
	return  $downvote_comment_check;
	
}	//To check user upvoted the post or not
function user_reply_upvote_exists($user,$id){
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
	$sql_email = "SELECT * FROM `upvote_reply` WHERE `who_id`='$user' AND `reply_id`=$id ";
	$query_email = mysqli_query($con, $sql_email); 
	$upvote_reply_check = mysqli_num_rows($query_email);
	return  $upvote_reply_check;
	
}
function user_reply_downvote_exists($user,$id){
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
	$sql_email = "SELECT * FROM `downvote_reply` WHERE `who_id`='$user' AND `reply_id`=$id ";
	$query_email = mysqli_query($con, $sql_email); 
	$downvote_reply_check = mysqli_num_rows($query_email);
	return $downvote_reply_check;
	
}	


?>