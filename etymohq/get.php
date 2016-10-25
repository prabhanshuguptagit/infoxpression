<head>

<meta http-equiv="refresh" content="55"> 

</head>

<?php
require "connect.php";

/* test */
$values=curl_version();
//echo $values["version"];
/**/


$hour =date(h);

$minute = date(i);

$format = date(a);
//echo$format;
//echo$hour;

if($format == pm){

$hour = $hour+12;

}
if($format == am && $hour == 12){
//$hour=0;
}

$temp="";
$message = "Its Working";
$title = "Check it";
$action = "TodayKnow";
$path_to_fcm = 'https://fcm.googleapis.com/fcm/send';
$server_key = "AIzaSyDq0SQmpnfhez-RdGdoJFLHdTuvXHWjpYM";
$sql = "SELECT fcm_token from EtymoHq WHERE hour = '$hour' and minute = '$minute'";
//$sql = "SELECT fcm_token from EtymoHq WHERE hour = '1' and minute = '15'";
//$sql = "SELECT * from EtymoHq";
echo $sql.'<br/>';
if ($result = mysqli_query($conn,$sql)){

	$headers = array(
		'Authorization:key=' .$server_key,
		'Content-type:application/json'
		);


	print_r($result);
	$curl_session = curl_init();
	
	$i = 0;
	while($row = mysqli_fetch_assoc($result)){
		
		echo $i.'<br>';
		$key = $row['fcm_token'];
		echo $key. '<br>';
		if($key==$temp){
		continue;
		}
		$temp = $key;
				//echo $headers[0];
				
		$feilds = array("to"=>$key,
				"notification"=>array("title"=>$title,"body"=>$message,"click_action"=>$action),"data"=>array("text"=>"piyush"));
				
		$pay_load = json_encode($feilds);		
		echo $pay_load;
				
		
		curl_setopt($curl_session, CURLOPT_URL ,$path_to_fcm );
		curl_setopt($curl_session, CURLOPT_POST ,true );
		curl_setopt($curl_session, CURLOPT_HTTPHEADER ,$headers );
		curl_setopt($curl_session, CURLOPT_RETURNTRANSFER ,true );
		curl_setopt($curl_session, CURLOPT_SSL_VERIFYPEER ,false );
		curl_setopt($curl_session, CURLOPT_IPRESOLVE ,CURL_IPRESOLVE_V4 );
		curl_setopt($curl_session, CURLOPT_POSTFIELDS ,$pay_load );
		
		$output= curl_exec($curl_session);
		echo $output;
		
	
			
	}
		curl_close($curl_session);
	
}
/*
$row = mysqli_fetch_array($result);
var_dump($row);
/*
$key = $row[0];
echo '<br>' .$key .'<br>';

$headers = array(
		'Authorization:key=' .$server_key,
		'Content-type:application/json'
		);
//echo $headers[0];
		
$feilds = array("to"=>$key,
		"notification"=>array("title"=>$title,"body"=>$message,"click_action"=>$action),"data"=>array("text"=>"piyush"));
		
$pay_load = json_encode($feilds);		
echo $pay_load;
		
$curl_session = curl_init();
curl_setopt($curl_session, CURLOPT_URL ,$path_to_fcm );
curl_setopt($curl_session, CURLOPT_POST ,true );
curl_setopt($curl_session, CURLOPT_HTTPHEADER ,$headers );
curl_setopt($curl_session, CURLOPT_RETURNTRANSFER ,true );
curl_setopt($curl_session, CURLOPT_SSL_VERIFYPEER ,false );
curl_setopt($curl_session, CURLOPT_IPRESOLVE ,CURL_IPRESOLVE_V4 );
curl_setopt($curl_session, CURLOPT_POSTFIELDS ,$pay_load );

$result = curl_exec($curl_session);
echo $result;
curl_close($curl_session);
*/
mysqli_close($conn);



?>