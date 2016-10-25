<?php
 include'core/init.php';
 $con=mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
protect_logged_page();
	$action= $_GET['action'];
	$email=$_GET['email'];
	$emailnewcode=$_GET['changepasscode'];
	$passwordhash=md5($emailnewcode);
	if($action==='change'){
		$sql = "SELECT * FROM user WHERE `email`='$email' AND `changepasscode`='$passwordhash'";
	        $query = mysqli_query($con, $sql); 
			$changepass_check = mysqli_num_rows($query);
		
	if($changepass_check<1){
		
		
		echo "We can't find you friend. Email is neither registered with us nor activated.";
        echo "<span style='height:36px;padding:5px;background-color: rgb(255, 156, 0);'>If you are a registered user , kindly <a href=\"login.php\"> log in</a></span>";
       ?>
				
				<?php
header('refresh: 10; url=login.php'); // redirect the user after 10 seconds
#exit; // note that exit is not required, HTML can be displayed.
?>
<p>You will be redirected in <span id="counter">10</span> second(s).</p>
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
	}
	
	else {
	$passnew=rand();
	$passwordhashnew=md5($passnew);
	$newcode=0;

				$sql = $con->query("UPDATE user SET password='$passwordhashnew'
         		 WHERE `email`='$email' ");
		$sql = $con->query("UPDATE user SET changepasscode='$newcode'
         		 WHERE `email`='$email' ");
         		$to = "$email";							 
		$from = "webadmin@infoxpression.in";	
		$subject = 'Infox Change password';
		 $message ="Your password is $passnew .";
				
		$headers = "From: $from\n";
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
		
         		$check_sent = mail($to, $subject, $message, $headers);
         		
if(!$check_sent) {   
     echo "Error! Invalid Email Id . Please Try Again.";   
} else {
    echo "Success";
}	
		echo "Successfully sent mail."; 
		echo "  ";
		echo "Your password has been mailed to you.";
		
		
       }
       
header('refresh: 10; url=login.php'); // redirect the user after 10 seconds
#exit; // note that exit is not required, HTML can be displayed.
}
?>