<?php

function get_event_rank($event_id){//earlier the name was getpost id

	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	//$sql_user_id_from_username = "SELECT user_id FROM user WHERE  username='$username' ";
				//$query_user_id_from_username = mysqli_query($con, $sql_checkpassword_username); 
				        $rankquery = "SELECT COUNT(`$event_id`) AS registrationofevent FROM events_reg WHERE `$event_id`=1";
					$result=$con->query($rankquery)	;	
					
					return $result;
}

?>