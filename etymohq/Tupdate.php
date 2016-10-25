<?php
require "connect.php";
$hour= $_POST["hour"];
$minute = $_POST["minute"];
$fcm_token = $_POST["token"];
$sql = "UPDATE EtymoHq SET hour= '$hour' , minute = '$minute' WHERE fcm_token = '$fcm_token'";
mysqli_query($conn,$sql);


if($conn->query($sql)===TRUE){
	echo "";
}
else{
	echo "error"."<br>"."$conn->error";
}


mysqli_close($conn);

?>