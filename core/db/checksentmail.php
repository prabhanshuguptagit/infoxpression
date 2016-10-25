<?php

$to = "rajivjha1996@gmail.com";							 
		$from = "infox@techspace.club;
		$subject = 'Infox Account Activation';
		 $message = 'Hello';
		
        $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers .= 'From: Website <infox@techspace.club>' . "\r\n";
		
         		$check_sent = mail($to, $subject, $message, $headers);
         		
if(!$check_sent) {   
     echo "Error! Invalid Email Id . Please Try Again.";   
} else {
    echo "Success";
}	?>