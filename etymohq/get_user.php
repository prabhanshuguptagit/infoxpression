 <?php
require "connect.php";
$name= $_POST["name"];
$email = $_POST["email"];
$password = $_POST["pass"];
$sql = "insert into user(name,email,password) values('".$name."','".$email."','".$password."')";
echo $sql;
mysqli_query($conn,$sql);


if($conn->query($sql)===TRUE){
echo $name."&". $email;	
}
else{
echo "error";
}


mysqli_close($conn);

?>