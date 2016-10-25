<?php include'core/init.php';
protect_logged_page();

?>
<link rel="stylesheet" href="css/styles.css">
<?php

function isEmail($email) {
    return preg_match('|^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]{2,})+$|i', $email);
};

if(empty ($_POST)=== false){

	if (isset($_POST['email']) && isEmail($_POST['email'])) {
	   $email=filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	} else {
	  $email = 'dummyemaildummycom';
	  $email_check=0;   
	}
	
	$pwd = $_POST['password'];

	$password=md5($_POST['password']);
	$active=1;
	$reviewed=1;
	$sql = "SELECT user_id FROM user WHERE email='$email' LIMIT 1";
    $query = mysqli_query($con, $sql); 
	$email_check = mysqli_num_rows($query);
	$sqlactive = "SELECT user_id FROM user WHERE email='$email' AND active='$active' LIMIT 1";
    $queryactive = mysqli_query($con, $sqlactive); 
	$active_check = mysqli_num_rows($queryactive);
	$sqlreview = "SELECT user_id FROM user WHERE email='$email' AND reviewed='$reviewed' LIMIT 1";
    $queryreview = mysqli_query($con, $sqlreview); 
	$review_check = mysqli_num_rows($queryreview);
	
	
	if(empty($email)===true||empty($password)===true){
		
		//$errors[]='value';
		$errors[]='You need to enter a username or password';
	}
	else if ($email_check < 1){ 
	$errors[]='We can\'t find you friend.Email is not registered with us. Have you registered yourself yet?';
        echo "<h1 style=\"text-align:center;background-color: rgb(255, 156, 0)\">We can't find you friend.Email is not registered with us. Have you registered yourself yet?</h1>";
        echo "<h1 style=\"text-align:center;\"><a href=\"signup.php\">Register.</a></h1>";
        exit();
	}
	else if($review_check<1){
	$errors[]='This account is Under Review. Please Try after some time. If you have misrepresented any information then you might be debarred from the event, else wait for our co-ordinator to review your account. Normally, it takes only 24 hours of time after registration.';
        echo "<h1 style=\"text-align:center;background-color: rgb(255, 156, 0)\">This account is Under Review. Please Try after some time. If you have misrepresented any information then you might be debarred from the event, else wait for our co-ordinator to review your account. Normally, it takes only 24 hours of time after registration.';</h1>";
        exit();
	
	}else if($active_check<1){
		$errors[]='The account is not activated yet';
        echo "<h1 style=\"text-align:center;background-color: rgb(255, 156, 0)\">The account is not activated yet.</h1>";
        exit();
	}
	
	
	else{
		$sql = "SELECT user_id FROM user WHERE password='$password' AND email='$email' ";
    $query = mysqli_query($con, $sql); 
	$password_check = mysqli_num_rows($query);
	
	if($password_check>0){
	
	$result=$con->query("SELECT * from user WHERE email='$email'
		AND password='$password' ")	;	
		
		$row= $result->fetch_array(MYSQLI_BOTH);
		
		session_start();
		$activeaccount=1;
		$line=1;
		$_SESSION["user_id"]=$row['user_id'];
		$sqlactiveaccount = "UPDATE user SET activeaccount='{$activeaccount}' WHERE `email`='$email'";
				$queryaccount = mysqli_query($con, $sqlactiveaccount); 
				
		$sqlline = "UPDATE user SET line='{$line}' WHERE `email`='$email'";
				$queryline = mysqli_query($con, $sqlline); 
					
	    header('Location: profile.php');
	
	}
	else{
		$errors[]='Password Did not matched. if you forgot your ';
        echo "<h1 style=\"text-align:center;background-color: rgb(255, 156, 0)\">Password did not match. Have you <br><a href='forgotpassword.php'>forgot your password?</a></h1>";
        exit();
	
		
	}	
}
}

?>