<?php include'core/init.php';
if(logged_in()===false){
	header('Location:login.php');	
	exit();
	}
	
$user2=$session_user_id;
include 'core/db/connect.php';

$query ="SELECT * FROM state";
$results = runQuery($query);

$queryy ="SELECT * FROM branch";
$result = runQuery($queryy);
$queryd ="SELECT * FROM degree";
$resultd = runQuery($queryd);

?>
<!DOCTYPE html>

<html lang="en">

<head>
        <title>Admin Choice | Infox 2016</title>
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
function getCollege(val) {
	$.ajax({
	type: "POST",
	url: "get_college.php",
	data:'state_id='+val,
	success: function(data){
		$("#college-list").html(data);
	}
	});
}

function selectState(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}

function getBranch(val) {
	$.ajax({
	type: "POST",
	url: "get_branch.php",
	data:'degree_id='+val,
	success: function(data){
		$("#branch-list").html(data);
	}
	});
}

function selectDegee(val) {
$("#search-boxes").val(val);
$("#suggesstion-boxes").hide();
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
                                <td id="tab-login">
                                    <a href="login.php">
                                        LOGIN
                                    </a>
                                </td>
                                <td><a href="index.html"><img width="150px" src="img/logo-infox.png"></a></td>
                                <td id="tab-signup" class="current">
                                    <a href="signup.php">REGISTER</a>
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                    
                   	
                            
                    <div class="widget-body">
                        <form id="signup-form" method="post" action="register.php">
                            <input type="email" name="email" placeholder="Email" required autocomplete="off">
                            <input type="text" name="name" placeholder="Name" required autocomplete="off">
                            <input type="text" name="username" placeholder="Username" required autocomplete="off">
                            <input type="text" name="mobile" placeholder="Mobile Number" required autocomplete="off">
                             <!--
                             select id="mySelectID" name="select" class="main-form">
    				<option value="">Select state</option>
                          			 </select>
                          			 
                          <select id="mySelectID2" name="select" class="main-form">
    			 <option value="">Select institute</option>
                           </select -->
                       		<select name="state" id="state-list" class="main-form" onChange="getCollege(this.value);" required>
		<option value="">Select State</option>
		<?php
		foreach($results as $state) {
		?>
		<option value="<?php echo $state["state_id"]; ?>"><?php echo $state["state"]; ?></option>
		<?php
		}
		?>
		</select>
		<select name="college" id="college-list" class="main-form" required >
		<option value="">Select College</option>
		</select>
		
                      <select name="degree" id="degree" class="main-form" onChange="getBranch(this.value);" required >
		<option value="">Select Degree</option>
		<?php
		foreach($resultd as $degree) {
		?>
		<option value="<?php echo $degree["degree_id"]; ?>"><?php echo $degree["degree_name"]; ?></option>
		<?php
		}
		?>
		</select>          
                       <select name="branch" id="branch-list" class="main-form" required>
		<option value="">Select Branch</option>
		
		</select>     
                            
		<select name="batch" id="batch" class="main-form" required>
		<option value="1">Batch 2015</option>
		<option value="2">Batch 2016</option>
		<option value="3">Batch 2017</option>
		<option value="4">Batch 2018</option>
		<option value="5">Batch 2019</option>
		<option value="6">Batch 2020</option>
		</select>
                            <input type="password" name="password" placeholder="Password"  required autocomplete="off"id="txtpass">
                            <input type="password" name="confirm_password" placeholder="Re-Type Password" required autocomplete="off" id="txtpassconf" onkeyup="checkPass()">
                            <div id="password-characters"></div>
                             <div id="passcheck"></div>
                            <!--button id="submit" type="submit" name="register"><input type="submit" name="register" value="Lets Join Hands" /> 
							</button-->
							<input id= "submit"type="submit" name="register" value="Lets Join Hands" /> 
							
                        </form>
                    </div>
                </div>
            
         
                
            </div>
        </div>
  

	
<script>
 function checkPass() {
     
     var password = $("#txtpass").val();
     var confirmPassword = $("#txtpassconf").val();
 
     if (password != confirmPassword)
         $("#passcheck").html("Passwords do not match!");
     else
        $("#passcheck").html("Passwords match.");
 }  
        
</script>

            
   </body></html>