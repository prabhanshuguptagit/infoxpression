<?php

date_default_timezone_set('Asia/Kolkata');

$db_name = "FCM-Test";
$mysql_user = "PiyushM";
$mysql_password = "pm1998";
$server_name = "localhost";
$conn = mysqli_connect($server_name, $mysql_user, $mysql_password, $db_name);

if (!$conn)
{
	echo 'error connecting to database';
}

?>