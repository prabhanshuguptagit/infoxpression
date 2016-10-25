<?php include'core/init.php';
protect_logged_page();
//protect_page(); 
?>

<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>Login | Signup InfoX 2016</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Dosis:100,300,400,700,900,300italic,400italic,700italic,900italic" type="text/css" media="all">
	
	

	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
	<link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/styles.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.offcanvas.min.css" type="text/css">
        
        <script src="js/jquery.nav.js"></script>
	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.offcanvas.min.js"></script>
		
		
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
                                        LOGIN
                                    </a>
                                </td>
                                <td><a href="index.html"><img width="80px" src="img/logo-infox trans-bg.jpg"></a></td>
                                <td id="tab-signup">
                                    <a href="signup.php">REGISTER</a>
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                    <div class="widget-body">
                        <form id="login-form" method="post" action="signin.php">
                            <input type="email" name="email" placeholder="Email">
                            <input type="password" name="password" placeholder="Password" required autocomplete="off">
                            <a id="forgotten" href="forgotpassword.php">forgot?</a><!--><!-->

                            <input id= "submit"type="submit" name="register" value="Login" /> 
							
                        </form>
                    </div>
                </div>
                
            </div>
        </div>

       </body> 
     
</html>

           
    