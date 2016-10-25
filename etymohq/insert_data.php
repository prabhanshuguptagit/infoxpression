<?php
require "connect.php";
$word= $_POST["word"];
$desc = $_POST["desc"];

$pre_sql="select * from data where topic = '$word'";


$result = mysqli_query($conn,$pre_sql);
if($result->num_rows > 0){

echo"word already exist";

 }
else {

$sql = "insert into data(topic,description) values('".$word."','".$desc."')";

mysqli_query($conn,$sql);


if($conn->query($sql)===TRUE){

echo"success";
	
}
else{
	echo "error"."<br>"."$conn->error";
}

}
mysqli_close($conn);

?>