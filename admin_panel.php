<!DOCTYPE html>

<html>
<?php include 'includes/general/head.php';

if(logged_in()===false){
	header('Location:login.php');	
	exit();
	}
	
	
$user2=$session_user_id;
?>

<?php

if(isset($_GET['username'])===true&&empty($_GET['username'])===false){
	$username=$_GET['username'];
	if(user_exists($username)== 1){
				$user_id=user_id_from_username($username);
				
				$user1=$user_id;//jiska username dala hai
				$user2=$_SESSION['user_id'];//jo logged in hai
				
				//$user_id=user_id_from_email($email);
				$profile_data =user_data($user_id,'name','type','email','username','mobile','state','batch','branch','institute','profilepic');
					$name=$profile_data['name'];
					$email=$profile_data['email'];
					$mobile=$profile_data['mobile'];
					$type=$profile_data['type'];
					
			if($type!=5 && type!=3){
			header('Location:profile.php');	
			exit();			
			}
								
								if(user_state($username)!=1){
					$errors[]='Sorry! The page is not accessible at the moment.Link might have destroyed or broken.';
					
				}
						
			}
			
	else{
		$errors[]='We can\'t find that Page on this link.You might be accessing a broken link.';
				
	}	
	
			
}
if(isset($_GET['username'])===false&&empty($_GET['username'])===true){
$user1=$_SESSION['user_id'];
			
$user2=$_SESSION['user_id'];//jo logged in hai
				
		$profile_data =user_data($user1,'name','email','type','username','mobile','state','batch','branch','institute','profilepic');
			$profilepic=$profile_data['profilepic'];
				
			
							
}

			
if(empty($errors)=== false){
		
	?>
	<h2>We tried to Find the Page, but</h2>
<?php

echo output_errors($errors);
}
else
 {
 
			$college_id=$profile_data['institute'];
			
			
			
			
?>





<link rel="stylesheet" href="css/profile.css">

<body id="body">
	
	
	<?php include 'includes/general/userheader.php'?>
	<div class="container">
		<div class="row">
			<?php
			$institute=profileinstitute($profile_data['institute']);
					$branch=profilebranch($profile_data['branch']);
					$batch=profilebatch($profile_data['batch']);
					$state=profilestate($profile_data['state']);
					$position=profileposition($profile_data['type']);
				
			 include 'includes/general/adminaside.php'?>
			<div class="col-md-1"></div>
			<div class="col-md-8" id="content">
			
			
	
				
			
			<hr/>
			<h3>Metrics</h3>
			<hr/>
			
			<div class="row">
			<div class="col-md-4 profile ">
			 <div class="profile-image metric "><br>Users</div>
			</div>
			
			
			<div class="col-md-4 profile">
			 <div class="profile-image metric metric"><br>Participants</div>
			</div>
			<div class="col-md-4 profile">
			 <div class="profile-image metric metric"><br>Ambassadors</div>
			</div>
			</div>
			
			
			
			
			
			
			<div class="row">
			<div class=" col-md-4   profile ">
			 <div class="profile-image metric"><br><br> Campus Ambassador #1
			 </div>
			</div>
			
			
			<div class="col-md-4 profile ">
			 <div class="profile-image metric"><br><br>Campus Ambassador #2
			 </div>
			</div>
			<div class="col-md-4 profile ">
			 <div class="profile-image metric"><br><br>Campus Ambassador #3
			 </div>
			</div>
			</div>
			
			
			<div class="row">
			<div class=" col-md-4   profile ">
			 <div class="profile-image metric"><br><br> Regional Lead #1
			 </div>
			</div>
			
			
			<div class="col-md-4 profile ">
			 <div class="profile-image metric"><br><br>Regional Lead #2
			 </div>
			</div>
			<div class="col-md-4 profile ">
			 <div class="profile-image metric"><br><br>Regional Lead #3
			 
			 </div>
			</div>
			</div>
			
			
			<div class="row">
			<div class=" col-md-4   profile ">
			 <div class="profile-image metric"><br><br> Event 1<br>
			 <br>
			 <?php 
			  $rank=1;
			 $event1=get_event_rank($rank);
			 echo $event1;
			 ?>
			 </div>
			</div>
			
			
			<div class="col-md-4 profile ">
			 <div class="profile-image metric"><br><br> Event 2
			 <br>
			 <?php 
			  $rank=2;
			 $event2= get_event_rank($rank);
			 echo $event2;
			 ?>
			 </div>
			</div>
			<div class="col-md-4 profile ">
			 <div class="profile-image metric"><br><br> Event 3
			 <br>
			 <?php 
			  $rank=3;
			  $event3=get_event_rank($rank);
			 echo $event3;
			 ?>
			 </div>
			</div>
			</div>
			
			
			
			<div class="myevent row">
			<div class=" col-md-4   profile ">
			 <div class="profile-image metric"><br><br> Facebook</div>
			</div>
			
			
			<div class="col-md-4 profile ">
			 <div class="profile-image metric"><br><br>Twitter</div>
			</div>
			<div class="col-md-4 profile ">
			 <div class="profile-image metric"><br><br>Instagram</div>
			</div>
			</div>
			
			
		</div>	
		
	</div>
		
	
	

	<?php include'includes/general/footer.php'?>

	

	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.nav.js"></script>
	
</body>
<?php
}
?>

</html>