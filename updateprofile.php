<!DOCTYPE html>

<html class="no-js">
<link rel="stylesheet" href="css/styles.css">
<?php include 'includes/general/head.php';
if(logged_in()===false){
	header('Location:login.php');	
	exit();
	}

$query ="SELECT * FROM state";
$results = runQuery($query);

$queryy ="SELECT * FROM branch";
$result = runQuery($queryy);
$queryd ="SELECT * FROM degree";
$resultd = runQuery($queryd);

$user_data =user_data($session_user_id,'name','email','username','mobile','state','batch','branch','institute','profilepic');
		
?>

<link rel="stylesheet" href="css/profile.css">

<script>

$defaultValue = <?php echo $user_data['institute'] ?>;

function getCollege(val) {
	$.ajax({
	type: "POST",
	url: "get_college.php",
	data:'state_id='+val,
	success: function(data){
		$("#college-list").html(data);
		if ($("#college-list option[value='" + $defaultValue + "']").length > 0)
		{
			$("#college-list").val($defaultValue);
		}
	}
	});
}

function selectState(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}

$defaultBranch = <?php echo $user_data['branch'] ?>;

function getBranch(val) {
	$.ajax({
	type: "POST",
	url: "get_branch.php",
	data:'degree_id='+val,
	success: function(data){
		$("#branch-list").html(data);
		if ($("#branch-list option[value='" + $defaultBranch + "']").length > 0)
		{
			$("#branch-list").val($defaultBranch);
		}
	}
	});
}

function selectDegee(val) {
$("#search-boxes").val(val);
$("#suggesstion-boxes").hide();
}

function otherCollege(){
	if($('#college-list').val() == 0)
		{var y = document.getElementById("othercollege");
		y.type= "text";}
	else
		{var y = document.getElementById("othercollege");
		y.type= "hidden";}
}

function checkPass() {
     
     var password = $("#txtpass").val();
     var confirmPassword = $("#txtpassconf").val();
 
     if (password != confirmPassword)
         $("#passcheck").html("Passwords do not match!");
     else
        $("#passcheck").html("Passwords match.");
}  

function checkUsername() {
	 $.ajax({
        type: "POST",
        url: 'signupvalidation.php',
        data: "functionName=checkusername&value="+$('#username').val(),
        success: function(response) {
    		$('#userexists').remove();
        	if(response == 0)$('#username').after('<div id="userexists" class="text-center" style="color:red">Username exists.</div>');
        	else $('#userexists').remove();
        }
    });
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
        	if(response == 0){$('#mobile').after('<div id="mobileexists" class="text-center" style="color:red">Mobile number is already registered.</div>');}
        	else if(response == 1 )$('#mobileexists').remove();
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

<body id="body">
	<?php include 'includes/general/userheader.php'?>
		
	<div class="container" id="content">
	
		<div class="event">
		
		<div class="row updateimage" >
			<div class="col-md-12 col-xs-12">
			<?php
					if(empty($profile_data['profilepic'])!==true)
				{
					echo '<img src="', $profile_data['profilepic'],' " alt=" ',$profile_data['name'],' \'s Profile picture" class="profile-image">';
					}
					else{
					echo '<img src="img/blog/avatar.png" alt=" ',$profile_data['name'],' \'s Profile picture" class="profile-image">';
					}
					?>
			<br>
			<!--a href="updateprofile.php"><i class="fa fa-camera-retro fa-2x" aria-hidden="true"></i><br>Update Profile Photo</a-->
		</div>
		
		
		<div class="row">	
			<div class="col-md-6 col-xs-12 changepass">
			<br>
			<h2>Change Password</h2>
			<hr>
			<form action="updateprofileform.php" method="post">
			<h4>Current Password </h3><input type="password" name="current" style="color:black" required></input>
			<h4>New Password </h3><input type="password" name="new" style="color:black" required></input>
			<h4>Repeat Password </h3><input type="password" name="repeat" style="color:black" required></input>
			<br>
			<input type="submit" name="submit" value="Change Password" class="btn btn-transparent"></input>
			</form>
			<br><hr>
			<h2>Change Mobile Number</h2>
			<form action="updateprofileform.php" method="post">
			<input type="tel" id="mobile" name="mobile" placeholder="Enter New mobile number" required autocomplete="off">
			<br>
			<input type="submit" name="submit" value="Submit" class="btn btn-transparent"></input>
			</form>
			
			<hr>
			</div>
			
			<div class="col-md-6 col-xs-12 updateprofile">
			
			<br>
			<h2>Update Profile Details</h2>
			<hr>
			
			<form action="updateprofileform.php" method="post">







			<select name="state" id="state-list" class="main-form" onChange="getCollege(this.value);" required>
		<option value="">Select State</option>
		<option value="30">Delhi</option>
		<?php
		foreach($results as $state) {
		?>		
		<option value="<?php echo $state["state_id"]; ?>"><?php echo $state["state"]; ?></option>
		<?php
		}
		?>
		</select>
		<select name="college" id="college-list" class="main-form" onchange="otherCollege()" required >
		<option value="select">Select College</option>
		</select>
		<input type="hidden" id="othercollege" name="othercollege" placeholder="College Name" required></input>
		
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
		<option value="">Select Passing Year</option>
		
		
		
		<option value="1">Batch 2017</option>
		<option value="2">Batch 2018</option>
		<option value="3">Batch 2019</option>
		<option value="4">Batch 2020</option>
		<option value="5">Batch not selected</option>
		</select>





			<input type="hidden" name="updatecbb" value="true" />

			<br>
			<input type="submit" name="submit" value="Save" class="btn btn-transparent"></input>
			</form>
			</div>
			
			
		</div>
		</div>	
	</div>
	</div>	
	
	

	<?php include'includes/general/footer.php';?>

	<script>
	$("#state-list").val("<?php echo $user_data['state']; ?>").change();
	$("#batch").val("<?php echo $user_data['batch']; ?>").change();
	
	function checkMobile(){
	 $.ajax({
        type: "POST",
        url: 'signupvalidation.php',
        data: "functionName=checkmobile&value="+$('#mobile').val(),
        success: function(response) {
    		$('#mobileexists').remove();
        	if(response == 0){$('#mobile').after('<div id="mobileexists" class="text-center" style="color:red">Mobile number is already registered.</div>');}
        	else if(response == 1 )$('#mobileexists').remove();
        	else {$('#mobile').after('<div id="mobileexists" class="text-center" style="color:red">Mobile number is invalid.</div>');}
        }
    }); 
}
	</script>
	
</body>

</html>
