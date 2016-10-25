<?php include'core/init.php';
if(logged_in()===false){
	header('Location:login.php');	
	exit();
	}
	
$user2=$session_user_id;
include 'core/db/connect.php';

$query ="SELECT * FROM events";
$results = runQuery($query);

$queryy ="SELECT * FROM event_part";
$result = runQuery($queryy);


?>
<!DOCTYPE html>

<html lang="en">

<head>
        <title>Editor Choice | Infox 2016</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Dosis:100,300,400,700,900,300italic,400italic,700italic,900italic" type="text/css" media="all">
	<script src="js/jquery-1.11.0.min.js"></script>	
	
        <script src="js/jquery.nav.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/styles.css" type="text/css">
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
function getPart(val) {
	$.ajax({
	type: "POST",
	url: "get_part.php",
	data:'event_id='+val,
	success: function(data){
		$("#part-list").html(data);
	}
	});
}

function selectPage(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}



</script>
			
        
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
                                <td id="tab-login" class="current">
                                    <a href="mailing.php" >
                                        Send Mail
                                    </a>
                                </td>
                                <td><a href="index.html"><img width="150px" src="img/logo-infox.png"></a></td>
                                <td id="tab-signup">
                                    <a href="editorchoice.php">Edit Page</a>
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                    
                   	
                            
                    <div class="widget-body">
                        <form id="signup-form" method="post" action="register.php">
                             	<button type="submit" name="register" value="Create new mailing list"  >Create new mailing list </button>
                             	
                       		<select name="part" id="part-list" class="main-form" required >
		<option value="">Use existing mailing list</option>
		</select>
							
                        </form>
                    </div>
                </div>
            
         
                
            </div>
        </div>
  

            
   </body></html>