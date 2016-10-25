<?php
require 'connect.php';

$id = $_POST['id'];

$sql = "SELECT * from data WHERE id='$id'";
//echo$sql;
$result = $conn->query($sql);
     
        if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         echo  $row["word"]. "@" . $row["meaning"] . "@" . $row["root"] . "@" . $row["description"] . "@" . $row["refer"] . "@" . $row["source"];
    }
} else {
    echo "0 results";
}
$conn->close();

?>