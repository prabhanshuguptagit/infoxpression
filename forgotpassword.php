<?php include'core/init.php';
protect_logged_page();
//protect_page(); 
?>

<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>Login | Signup InfoX 2016</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Dosis:100,300,400,700,900,300italic,400italic,700italic,900italic" type="text/css" media="all">
	
	

	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/jquery.countdown.min.html"></script>
	
	<link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/styles.css" type="text/css">
		
		
    </head>
    
	
	<body style="background-color:#000000">
       <?php include'includes/general/header.php'?>
	   <div class="signup" style="background-image: url(img/back.png)">
            <div class="middle">
                <div class="signup-widget widget">
                    <div class="widget-header">
                        <table>
                            <tbody><tr>
                                <td id="tab-login" class="current">
                                    <a href="login.php">
                                        Login
                                    </a>
                                </td>
                                <td><a href="index.html"><img width="80px" src="img/logo-infox trans-bg.jpg"></a></td>
                                <td id="tab-signup">
                                    <a href="signup.php">Register</a>
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                    <div class="widget-body">
                        <form id="login-form" method="post" action="forgot.php">
                            <input type="email" name="email" placeholder="Email" required autocomplete="off">
<input id= "submit" type="submit" name="sendmail" value="Send Mail" /> 
							
                        </form>
                    </div>
                </div>
                
            </div>
        </div>

       </body> 
     
</html>

           
    