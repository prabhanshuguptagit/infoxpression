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
                            <input type="email" id="email"name="email" placeholder="Email" required autocomplete="off" oninput="checkEmail()">
                            <input type="text" id="name" name="name" placeholder="Name" required autocomplete="off">
                            <input type="tel" id="mobile" name="mobile" placeholder="Mobile Number" required autocomplete="off" oninput="checkMobile()">
                            <input type="password" name="password" placeholder="Password"  required autocomplete="off"id="txtpass" onkeyup="passwordStrength()">
                            <input type="password" name="confirm_password" placeholder="Re-Type Password" required autocomplete="off" id="txtpassconf" onkeyup="checkPass()">
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
  