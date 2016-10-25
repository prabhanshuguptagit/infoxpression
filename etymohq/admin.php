<?php
require "connect.php";
$email= $_POST["email_id"];
 
$sql = "SELECT post FROM user WHERE email = '$email'";
$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

echo $row['post'];


mysqli_close($conn);

?>