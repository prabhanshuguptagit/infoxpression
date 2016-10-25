<?php include'core/init.php';
protect_logged_page();
include 'core/db/connect.php';



?>
<!DOCTYPE html>

<html lang="en">

<head>
        
        <title>Login | Signup InfoX 2016</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Dosis:100,300,400,700,900,300italic,400italic,700italic,900italic" type="text/css" media="all">
	<script src="js/jquery-1.11.0.min.js"></script>	
	
        <script src="js/jquery.nav.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.offcanvas.min.js"></script>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/styles.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.offcanvas.min.css" type="text/css">
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
</head>

<script>function checkPass() {
     
     var password = $("#txtpass").val();
     var confirmPassword = $("#txtpassconf").val();
 
     if (password != confirmPassword)
         $("#passcheck").html("Passwords do not match!");
     else
        $("#passcheck").html("Passwords match.");
}  


function checkEmail() {
	 $.ajax({
        type: "POST",
        url: 'signupvalidation.php',
        data: "functionName=checkemail&value="+$('#email').val(),
        success: function(response) {
    		$('#emailexists').remove();
        	if(response == 0)$('#email').after('<div id="emailexists" class="text-center" style="color:red">E-mail is already registered.</div>');
        	else $('#emailexists').remove();
        }
    });
}

function checkMobile(){
	 $.ajax({
        type: "POST",
        url: 'signupvalidation.php',
        data: "functionName=checkmobile&value="+$('#mobile').val(),
        success: function(response) {
    		$('#mobileexists').remove();
        	if(response == 1){$('#mobile').after('<div id="mobileexists" class="text-center" style="color:red">Mobile number is already registered.</div>');}
        	else if(response == 0 )$('#mobileexists').remove();
        	else {$('#mobile').after('<div id="mobileexists" class="text-center" style="color:red">Mobile number is invalid.</div>');}
        }
    }); 
}

function passwordStrength(){
	 $.ajax({
        type: "POST",
        url: 'signupvalidation.php',
        data: "functionName=passstrength&value="+$('#txtpass').val(),
        success: function(response) {
    		$('#weakpass').remove();
      		if(response == 0)
      		{$('#txtpass').after('<div id="weakpass" class="text-center" style="color:red">Password is too short.</div>');}
      		else $('#weakpass').remove();
        }
    }); 
}


</script>




			
        
    
    <style>
 	#passcheck{
 	color:red;
 	}
 	</style>
    <body style="background-color:#000000;">
    	
       <?php include'includes/general/header.php'?>
       
	   <div class="signup" style="background-image: url(img/back.png);">
            <div class="middle">
                <div class="signup-widget widget">
                    <div class="widget-header">
                        <table>
                            <tbody><tr>
                                <td id="tab-login">
                                    <a href="login.php">
                                        LOGIN
                                    </a>
                                </td>
                                <td><a href="index.html"><img width="80px" src="img/logo-infox trans-bg.jpg"></a></td>
                                <td id="tab-signup" class="current">
                                    <a href="signup.php">REGISTER</a>
                                </td>
                            </tr>
                            <noscript><h2 class="text-center" style="color:red">To create an account, you need JavaScript enabled in your browser.</h2></div></noscript>  
                        </tbody></table>
                    </div>                    
               	
                            
                    <div class="widget-body">
                        <form id="signup-form" method="post" action="register.php">
                            <input type="email" id="email" name="email" placeholder="Email" required autocomplete="off">
                            <input type="text" id="name" name="name" placeholder="Name" required autocomplete="off">
                            <input type="tel" id="mobile" name="mobile" placeholder="Mobile Number" required autocomplete="off">
                            <input type="password" id="txtpass" name="password" placeholder="Password"  required autocomplete="off" >
                            <input type="password" id="repassword" name="confirm_password" placeholder="Re-Type Password" required autocomplete="off" id="txtpassconf" >
                            <div id="password-characters"></div>
                             <div id="passcheck" class="text-center"></div>
                            <!--button id="submit" type="submit" name="register"><input type="submit" name="register" value="Lets Join Hands" /> 
							</button-->
							<input id= "submit" type="submit" name="register" value="Lets Join Hands" /> 
							
                        </form>
                    </div>
                </div>
            
         
                
            </div>
        </div>
  

	
 
                   
   </body>
  <script>
  	$("#email").focusout( checkEmail() );
	$("#mobile").focusout(checkMobile());
	$('#password').blur(passwordStrength());
	$('#repassword').blur(checkMobile());
  
  </script>