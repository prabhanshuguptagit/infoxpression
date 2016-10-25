<?php include'core/init.php';
protect_logged_page();



?>
<link href="css/styles.css" rel="stylesheet">

<?php
$con=mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
?>
    <div id="thispagecontent">
<?php
    if(isset($_POST['sendmail'])){
		
		
		 $ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));

		
		$email=$_POST['email'];
		
	
	// -------------------------------------------
	$sql = "SELECT user_id FROM user WHERE email='$email' LIMIT 1";
    $query = mysqli_query($con, $sql); 
	$email_check = mysqli_num_rows($query);
	
		if ($email_check < 1){ 
        echo "<h1 style=\"text-align:center;background-color: rgb(255, 156, 0)\">Email is not registered with us.</h1>";
        echo "<h1 style=\"text-align:center;background-color: rgb(255, 156, 0)\">If you are a registered user , kindly <a href=\"signin.php\"> log in</a></h1>";
        exit();
	}
	
    
	else
		{
			$emailnewcode =  rand();
			$passwordhash=md5($emailnewcode);
		$sql = $con->query("UPDATE user SET changepasscode='$passwordhash' 
         		 WHERE `email`='$email' ");
         		echo $sql;
         		$to = "$email";							 
		$from = "webadmin@infoxpression.in";	
		$subject = 'Infox Change password';
		 $message ="<a href='http://www.infoxpression.in/changenewpass.php?action=change&email=$email&changepasscode=$emailnewcode'>
		 Click me to Change Password..</a>";
				
		$headers = "From: $from\n";
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
		
         		$check_sent = mail($to, $subject, $message, $headers);
         		
if(!$check_sent) {   
     echo "<h1 style=\"text-align:center;background-color: rgb(255, 156, 0)\">Error! Invalid Email Id . Please Try Again.";   
} else {
    echo "<h1 style=\"text-align:center;background-color: rgb(255, 156, 0)\">Successfully sent mail.</h1>";
}	
		
		echo "  ";
		echo "<h1 style=\"text-align:center;background-color: rgb(255, 156, 0)\">Check your email id to update your password. Check your spam folder too.</h1>";
				
header('refresh: 10; url=login.php'); // redirect the user after 10 seconds
#exit; // note that exit is not required, HTML can be displayed.
?>
<p>You will be redirected in <span id="counter">5</span> second(s).</p>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'login.php';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>

<?php
	    exit();
	    
	    }
	
	}
	


?>
