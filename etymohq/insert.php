<?php
require "connect.php";
$fcm_token = $_POST["fcm_token"];
$sql = "insert into EtymoHq(fcm_token) values('".$fcm_token."')";
mysqli_query($conn,$sql);


if($conn->query($sql)===TRUE){
	
}
else{
	echo "error"."<br>"."$conn->error";
}


mysqli_close($conn);

?>