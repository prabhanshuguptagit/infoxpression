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
				
			$profile_data =user_data($user_id,'name','email','username','mobile','state','batch','branch','institute','profilepic');
				
			$institute=profileinstitute($profile_data['institute']);
					$branch=profilebranch($profile_data['branch']);
					$batch=profilebatch($profile_data['batch']);
					$state=profilestate($profile_data['state']);
			
			
			 include 'includes/general/useraside.php';?>
			<div class="col-md-1"></div>
			
			
			<div class="col-md-8" id="content">
			 <div class="row">
			<input class="myevent col-xs-10 col-md-8" type="search" onkeyup="searchitem()" id="search" placeholder="Search for events ">
			<span class="fa fa-search fa-2x searchicon"></span></input>
			
			</div>
			 
			 <div class="row myevent">

				<div class="col-xs-6 text-center" ><h4>Registered </h4><input type="checkbox" id="goingcheck" onchange="going()" checked></div>
				<div class="col-xs-6 text-center" ><h4>Not Registered </h4><input type="checkbox" id="notgoingcheck" onchange="notgoing()" checked></div>
				
			 </div>
			 
			 
			 <?php
			for($i = 1; $i <=39 ; $i++){
			
			$name=get_eventname($i);
			$is_reg=reg_events($user1,$i);
			?>
			<div class="myevent <?php if($is_reg ==0) echo ' notgoing '; else echo ' going '; ?>  row listofevents">
			
			<div class="col-xs-6"><?php echo "<a class=\" myeventa\" href='event.php?event_id=".$i."'>$name</a>";?></div>
			<div class="col-xs-3"></div>
			
			<div class="col-xs-2">
			<?php
			if($is_reg ==0){
			
			echo "<a style=\"text-align:center;\" href='action.php?action=add&user=$user1&event_id=$i ' title='Register for event'><i class=\" fa fa-plus-circle fa-2x\" aria-hidden=\"true\"></i> </a>";
			
			} else {
			
			
			echo "<a href='action.php?action=remove&user=$user1&event_id=$i' title='Deregister from event'><i class=\"fa fa-minus-circle fa-2x\" aria-hidden=\"true\"></i></a>";
			}
			?>
			
			</div>
			<div class="col-xs-1"></div>
			
			</div>
			
			
			<?php 
			}
			
			
			?>
			<div class="row myevent text-center">No more events to display.
			 </div>
			
			
			
			
			
		</div>	
		
	</div>
		
	
	</div>

	<?php include'includes/general/footer.php';?>

	<script>
	function searchitem(){
			
		var searchtext = $('#search').val().toLowerCase();
		$('.listofevents').each(function( index ) {
		{	var text = $(this).find('.myeventa').html().toLowerCase();
			
			if( text.search(searchtext) != -1)
			    $(this).show();
			else
			    $(this).hide("100");
		}
		});
		
		
	}
	
	function going(){
		if(document.getElementById('goingcheck').checked) {
		    $(".going").show();
		} else {
		    $(".going").hide();
		}
	}	
	function notgoing(){
		if(document.getElementById('notgoingcheck').checked) {
		    $(".notgoing").show();
		} else {
		    $(".notgoing").hide();
		}
	}	
	</script>

	
	
</body>

</html>