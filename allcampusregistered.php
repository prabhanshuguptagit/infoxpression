<!DOCTYPE html>

<html class="no-js">
<?php include 'includes/general/head.php';
if(logged_in()===false){
	header('Location:login.php');	
	exit();
	}
	
$user1=$session_user_id;		
?>


<link rel="stylesheet" href="css/profile.css">
<body id="body">
	<?php include 'includes/general/userheader.php'?>
	<div class="container">
		<div class="row">
			
			<?php
			
				$user_id=$_SESSION['user_id'];//jo logged in hai
				
			$profile_data =user_data($user_id,'name','email','username','mobile','state','batch','branch','institute','profilepic','type');
				
			$institute=profileinstitute($profile_data['institute']);
			$branch=profilebranch($profile_data['branch']);
			$batch=profilebatch($profile_data['batch']);
			$state=profilestate($profile_data['state']);
			$type=$profile_data['type'];
			if($type!=5 && $type!=2){
			header('Location:login.php');	
			exit();			
			}
			
			$noofuser= get_no_of_user_from_campus($profile_data['institute']);
			
			$noofactiveuser= get_no_of_active_user_from_campus($profile_data['institute']);
			
			 include 'includes/general/useraside.php';?>
			<div class="col-md-1"></div>
			
			
			<div class="col-md-8" id="content">
			 <div class="myevent row">

			<div class="col-xs-6"><?php echo "Search Bar Coming Soon...";
			?></div>
			<div class="col-xs-3"></div>
			
			<div class="col-xs-1">
		
			
			</div>
			<div class="col-xs-2">
			</div>
			</div>
			 <div class="myevent row">

			<div class="col-xs-6"><?php echo "Campus Name";
			?></div>
			<div class="col-xs-3">Campus Ambassador</div>
			
			
			<div class="col-xs-2">
			Active User/All User
			</div>
			<div class="col-xs-1">
			
			</div>
			</div>
			  
			 
			 <?php
			// $rows[]= get_user_detail($profile_data['institute']);
		
			 $conn = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
			 $sql = "SELECT DISTINCT `institute` FROM `user` ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       $campus=profileinstitute($row["institute"]);
       $campus_id=$row['institute'];
		
       $campus_ambassador=get_campus_ambassador($row["institute"]);	
       $noofuser=get_no_of_user_from_campus($campus_id);
       $noofactiveuser=get_no_of_active_user_from_campus($campus_id);	
			?>
			<div class="myevent <?php  echo ' notgoing '; ?>   row">
			
			<div class="col-xs-6"><?php  echo "&nbsp; &nbsp;"; echo $campus;?></div>
			<div class="col-xs-3"><?php echo $campus_ambassador['name']; ?></div>
			
			<div class="col-xs-2">	
			<?php echo $noofactiveuser."/".$noofuser; ?>
			
			</div>
			<div class="col-xs-1"></div>
			</div>
			
			
			<?php
			  }
} else {
    echo "0 results";
}

			?>
			
			
			
			
			
			
			
		</div>	
		
	</div>
		
	
	</div>

	<?php include'includes/general/footer.php';?>

	<script> //handle later var e=document.getElementsByClassName("add-event"); e.onmouseover = function() { alert("Add event");} 
	</script>

	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.nav.js"></script>
	
</body>

</html>