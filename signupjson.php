<?php include'core/init.php';
protect_logged_page();

?>
<?php
//error_Reporting(0);

?>

<?php
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

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/styles.css" type="text/css">
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

	<script>
		$(function() {
		
			$("#text-one").change(function() {
				$("#text-two").load("textdata/" + $(this).val() + ".txt");
			});
			
			$("#json-one").change(function() {
			
				var $dropdown = $(this);
			
				$.getJSON("data.json", function(data) {
				
					var key = $dropdown.val();
					var vals = [];
										
					switch(key) {
						case '1':
							vals = data.andhra.split(",");
							break;
						case '2':
							vals = data.arunachal.split(",");
							break;
						case '3':
							vals = data.assam.split(",");
							break;
						case '4':
							vals = data.bihar.split(",");
							break;
						case '5':
							vals = data.chattishgarh.split(",");
							break;	
						case '6':
							vals = data.goa.split(",");
							break;	
						case '7':
							vals = data.gujarat.split(",");
							break;
						case '8':
							vals = data.harayana.split(",");
							break;
						case '9':
							vals = data.himachal.split(",");
							break;
						case '10':
							vals = data.jammu.split(",");
							break;
						case '11':
							vals = data.jharkhand.split(",");
							break;
						case '12':
							vals = data.karnataka.split(",");
							break;
						case '13':
							vals = data.kerela.split(",");
							break;
						case '14':
							vals = data.madhya.split(",");
							break;
						case '15':
							vals = data.maharashtra.split(",");
							break;
						case '16':
							vals = data.meghalaya.split(",");
							break;
						case '17':
							vals = data.manipur.split(",");
							break;
						case '18':
							vals = data.mizoram.split(",");
							break;
						case '19':
							vals = data.nagaland.split(",");
							break;
						case '20':
							vals = data.odisha.split(",");
							break;
						case '21':
							vals = data.punjab.split(",");
							break;
						case '22':
							vals = data.rajasthan.split(",");
							break;
						case '23':
							vals = data.sikkim.split(",");
							break;
						case '24':
							vals = data.tamilnadu.split(",");
							break;
						case '25':
							vals = data.telangana.split(",");
							break;
						case '26':
							vals = data.tripura.split(",");
							break;
						case '27':
							vals = data.uttar.split(",");
							break;
						case '28':
							vals = data.uttara.split(",");
							break;
						case '29':
							vals = data.west.split(",");
							break;
						case '30':
							vals = data.delhi.split(",");
							break;
						case '31':
							vals = data.andaman.split(",");
							break;
						case '32':
							vals = data.puducherry.split(",");
							break;
							
									
						case 'base':
							vals = ['Please choose from above'];
					}
					
					var $jsontwo = $("#json-two");
					$jsontwo.empty();
					$.each(vals, function(index, value) {
						$jsontwo.append("<option>" + value + "</option>");
					});
			
				});
			});

		});
	</script>
        
    </head>
    <style>
 +	#passcheck{
 +	color:red;
 +	}
 +	</style>
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
                       		<select id="json-one">
			<option selected value="base">Please Select</option>
			<option value="1">Andhra Pradesh</option>
			<option value="2">Arunachal Pradesh</option>
			<option value="3">Assam</option>
			<option value="4">Bihar</option>
			<option value="5">Chattishgarg</option>
			<option value="6">Goa</option>
			<option value="7">Gujarat</option>
			<option value="8">Haryana</option>
			<option value="9">Himachal Pradesh</option>
			<option value="10">Jammu & kashmir</option>
			<option value="11">Jharkhand</option>
			<option value="12">Karnataka</option>
			<option value="13">Kerela</option>
			<option value="14">Madhyapradesh</option>
			<option value="15">Maharashtra</option>
			<option value="16">Manipur</option>
			<option value="17">Meghalaya</option>
			<option value="18">Mizoram</option>
			<option value="19">Nagaland</option>
			<option value="20">Odisha</option>
			<option value="21">Punjab</option>
			<option value="22">Rajasthan</option>
			<option value="23">Sikkim</option>
			<option value="24">Tamilnadu</option>
			<option value="25">Telangana</option>
			<option value="26">Tripura</option>
			<option value="27">Uttar Pradesh</option>
			<option value="28">Uttarakhand</option>
			<option value="29">West Bengal</option>
			<option value="30">Delhi</option>
			<option value="31">Andaman and Nicobar</option>
			<option value="32">puducherry</option>
		</select>
	
		<br />
	
		<select id="json-two">
			<option>Please choose from above</option>
		</select>
		<br />
                            <input type="text" name="branch" placeholder="Branch" required autocomplete="off">
                            <input type="text" name="batch" placeholder="Batch" required autocomplete="off">
                  
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