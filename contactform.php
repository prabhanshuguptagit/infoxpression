<link rel="stylesheet" href="css/styles.css" type="text/css">

<?php

$con=mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
function isEmail($email) {
    return preg_match('|^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]{2,})+$|i', $email);
};

if (isset($_POST['name'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    if ($name == "") {
        $errors .= 'Please enter a valid name.<br/><br/>';
    }
} else {
    $errors .= 'Please enter your name.<br/>';
}

if (isset($_POST['comments'])) {
    $comments = filter_var($_POST['comments'], FILTER_SANITIZE_STRING);
    if ($comments == "") {
        $errors .= 'Please enter a valid name.<br/><br/>';
    }
} else {
    $errors .= 'Please enter your name.<br/>';
}


if (isset($_POST['email']) && isEmail($email)) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors .= "$email is <strong>NOT</strong> a valid email address.<br/><br/>";
    }
} else {
    $errors .= 'Please enter your email address.<br/>';
}

if( $name!="" && $email!=""){
$ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR')); 
$sql = $con->query("INSERT INTO contact (name,emailid,message,ip)
         		Values ('{$name}','{$email}','{$comments}','{$ip}')");
         		
  $from = "infox@techspace.club";							 
		$to = "infox@ipu.ac.in";
		$subject = $name ." contacted us";
		 $message = $comments ." Sent from: " .$email;
				
		$headers = "From: $from\n";
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
		
         		$check_sent = mail($to, $subject, $message, $headers);
}

else $check_sent=0;         		
         		
if(!$check_sent) {   
      echo "<h1 style=\"text-align:center;\">Error sending your response. Please try again.</h1>";
	
} else {
     echo "<h1 style=\"text-align:center;background-color: rgb(255, 156, 0)\">Thanks! We will reach out to you soon!</h1>
	<h1 style=\"text-align:center;\"><a href=\"index.php\">Infox Home</a></h1>";
}       		

        		
?>