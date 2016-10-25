<?php include'core/init.php';
protect_logged_page();
error_reporting(1);

?>
<?php include'include/general/head.php'?>
 <link rel="stylesheet" href="css/styles.css" type="text/css">
<?php
$con=mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
?>
    <div id="thispagecontent">
<?php

function isEmail($email) {
    return preg_match('|^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]{2,})+$|i', $email);
};

    if(isset($_POST['register'])){
		
		
		 $ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));

		if (isset($_POST['name'])) {
		$name=filter_var($_POST['name'], FILTER_SANITIZE_STRING);
		} else {
		  $name = 'No Name';
		  exit();   
		}
		$originalemail=$_POST['email'];
		if (isset($_POST['email']) && isEmail($_POST['email'])) {
		   $email=filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		} else {
		  $email = 'dummyemaildummy.com';
		  $email_check=0;   
		}
		$password=$_POST['password'];
		$state= 32; //filter_var($_POST['state'],FILTER_SANITIZE_STRING);
		$institute= 197; //filter_var($_POST['college'], FILTER_SANITIZE_STRING);
		$branch= 0; //filter_var($_POST['branch'], FILTER_SANITIZE_STRING);
		$batch= 5; //filter_var($_POST['batch'], FILTER_SANITIZE_STRING);
		$repeatpassword=$_POST['confirm_password'];
		$mobile=filter_var($_POST['mobile'], FILTER_SANITIZE_STRING);
	    	$username= uniqid(mt_rand() . '-');//filter_var($_POST['username'], FILTER_SANITIZE_STRING);
	    	$othercollege="N/A"; //filter_var($_POST['othercollege'], FILTER_SANITIZE_STRING);
	    	
	    	$review=1;
	    	if (strlen($othercollege) == 0 && $institute == 0) {
	    	echo "<h1 style=\"text-align:center;background-color: rgb(255, 156, 0)\">Enter Institute name.</h1>";
	       exit(); 
	    	}
	    	if ($institute == 0)
	    	 {$review=0;
	    	 $sql = $con->query("INSERT INTO college (college, state_id,reviewed) 
         	Values ('{$othercollege}', '{$state}','{$review}')");	
	    	 $institute = mysqli_insert_id($con);
	    	 }  
	    	 
	$sql = "SELECT user_id FROM user WHERE username='$username' LIMIT 1";
    $query = mysqli_query($con, $sql); 
	$username_check = mysqli_num_rows($query);
	// -------------------------------------------
	$sql = "SELECT user_id FROM user WHERE email='$email' LIMIT 1";
    $query = mysqli_query($con, $sql); 
	$email_check = mysqli_num_rows($query);
	// -------------------------------------------
	
	$sql = "SELECT user_id FROM user WHERE mobile='$mobile' LIMIT 1";
    $query = mysqli_query($con, $sql); 
	$mobile_check = mysqli_num_rows($query);
	
	if (!($originalemail == $email && filter_var($originalemail,FILTER_VALIDATE_EMAIL))){
 	   echo "<h1 style=\"text-align:center;background-color: rgb(255, 156, 0)\">Email address is incorrect.</h1>";
	}
		else if ($email_check > 0){ 
        echo "<h1 style=\"text-align:center;background-color: rgb(255, 156, 0)\">Email address is registered with us already.</h1>";
        echo "<h1 style=\"text-align:center;\">If you are a registered user , kindly <a href=\"signin.php\"> log in</a></h1>";
        exit();
	}
	else if($username_check > 0){ 
        echo "<h1 style=\"text-align:center;background-color: rgb(255, 156, 0)\">Kindly chose different username, this one is registered with us already.</h1>";
        exit();
	}
	else if ($mobile_check > 0){ 
        echo "<h1 style=\"text-align:center;background-color: rgb(255, 156, 0)\">Mobile Number is registered with us.</h1>";
        exit();
	}
	else if (strlen($mobile) < 10 || strlen($mobile) > 10) {
        echo "<h1 style=\"text-align:center;background-color: rgb(255, 156, 0)\">Invalid Mobile Number.</h1>";
        exit(); 
    }
	
	else if ($password!=$repeatpassword) {
        
        echo "<h1 style=\"text-align:center;background-color: rgb(255, 156, 0)\">Passwords Didn't Match.</h1>";
       exit(); 
    }
    	else if (strlen($password) <= 8) {
    	echo "<h1 style=\"text-align:center;background-color: rgb(255, 156, 0)\">Password Strength : LOW.</h1>";
       exit(); 
    	}
    	
	else
		{
			$emailcode = $ip;
			$passwordhash=md5($password);
		$sql = $con->query("INSERT INTO user (name,email,institute,branch,batch,state, password,mobile,username,ip,date,emailcode,reviewed)
         		Values ('{$name}','{$email}','{$institute}','{$branch}','{$batch}','{$state}','{$passwordhash}','{$mobile}','{$username}','{$ip}',NOW() ,'{$emailcode}','{$review}')");
         	
         		$to = "$email";							 
		$from = "webadmin@infoxpression.in";
		$subject = 'Infox Account Activation';
		 $message ="<a href='http://www.infoxpression.in/activation.php?action=activation&email=$email&emailcode=$emailcode'>
		 Click me to activate</a>";
				
		$headers = "From: $from\n";
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
		
         		$check_sent = mail($to, $subject, $message, $headers);
         		
if(!$check_sent) {   
     echo "<h1>Error! Invalid Email Id . Please Try Again.</h1>";   
} else {
    echo "<h1 style=\"text-align:center;background-color: rgb(255, 156, 0)\">Successfully Registered</h1>";
}	
		
		echo "  ";
		echo "<h1>Check your email id to complete the registration. Check your spam folder too.</h1>";
		echo "<h1>The mail can take upto 10 minutes.</h1>";		
header('refresh: 10; url=login.php'); // redirect the user after 10 seconds
#exit; // note that exit is not required, HTML can be displayed.
?>
<h1  style="text-align:center;background-color: rgb(255, 156, 0)">You will be redirected in <span id="counter">5</span> second(s).</h1>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<0) {
        location.href = 'login.php';
    }
    var x = parseInt(i.innerHTML);

    if (x > 0)
    {    	
    	i.innerHTML = x-1;
    }
}
setInterval(function(){ countdown(); },1000);
</script>

<?php
	    exit();
	    
	    }
	
	}
	


?>
