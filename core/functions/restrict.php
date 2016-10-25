<?php

if(isset($_SESSION["id"])){
}
else{
	header('Location:sign.php');
}

require 'core/db/connect.php';	
?>