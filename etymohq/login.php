<?php
require "connect.php";
$email= $_POST["email"];
$password= $_POST["pass"];
//$email = "mehndi@com.com";
//$password = "asdf";
$sql = "SELECT * FROM user WHERE email = '$email' and password ='$password'";

//echo$sql;

$result = mysqli_query($conn,$sql);

 if ($result->num_rows > 0) {
 
 $row = mysqli_fetch_assoc($result);
 $name = $row['name'];
 
 echo$name."&".$email;
 } else
{
echo"failed";
}

mysqli_close($conn);

?>