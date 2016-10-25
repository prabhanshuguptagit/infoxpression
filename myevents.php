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
			<div class="hidden-xs">
			<?php
			
				$user_id=$_SESSION['user_id'];//jo logged in hai
				
			$profile_data =user_data($user_id,'name','email','username','mobile','state','batch','branch','institute','profilepic');
				
			$institute=profileinstitute($profile_data['institute']);
					$branch=profilebranch($profile_data['branch']);
					$batch=profilebatch($profile_data['batch']);
					$state=profilestate($profile_data['state']);
			
			 include 'includes/general/useraside.php';?>
			 </div>
			<div class="col-md-1"></div>

			
			<div class="col-md-8" id="content">
			 <div class="row">
			<input class="myevent col-xs-10 col-md-8" type="search" onkeyup="searchitem()" id="search" placeholder="Search for events ">
			<span class="fa fa-search fa-2x searchicon"></span></input>
			
			</div>
			
			
			 <div class="row">
				<h4 class="text-center">Filter events</h4>
		
				
				<div class="col-xs-4 text-center" ><h4>Registered </h4><input type="checkbox" id="goingcheck" onchange="going()" checked></div>
				<div class="col-xs-4 text-center" ><h4>Not Registered </h4><input type="checkbox" id="notgoingcheck" onchange="notgoing()" checked></div>
				<div class="col-xs-4 text-center" ><h4>Awaiting Confirmation </h4><input type="checkbox" id="toconfirmcheck" onchange="toconfirm()" checked></div>
				
			 </div>		
			 
			<?php
			$userid = $_SESSION['user_id'];

			//for($eventid = 1; $eventid <=39 ; $eventid++)
			$eventsList = getEventsList();

			foreach ($eventsList as $eventid)
			{
				$status = getUserEventStatus($eventid, $userid);
				$teamid = getCurrentTeam($eventid, $userid);?>
			
				<?php
				$name = get_eventname($eventid);

				$divclass = '';

				if ($status == 0)
				{	if($eventid == 16)
					{$link = '<a style="text-align:center;" target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLScQLvV7EpTW_wmMbdAlethZfAwaTQFz4Pgi_bbcrbRAwSujBg/viewform" title="Register for event"><i class=" fa fa-plus-circle fa-2x" aria-hidden="true"></i>&nbsp;Participate</a>';
					$divclass = 'blue';
					}
					else if($eventid == 17)
					{$link = '<a style="text-align:center;" target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSe-xF9Lg9HNNcFSFCFX_2Y_jfkka9xcIg9BLHT2XXfkODDywg/viewform" title="Register for event"><i class=" fa fa-plus-circle fa-2x" aria-hidden="true"></i>&nbsp;Participate </a>';
					$divclass = 'blue';
					}
					else
					{$link = '<a style="text-align:center;" onclick="modalRegister('.$eventid.')" title="Register for event"><i class=" fa fa-plus-circle fa-2x" aria-hidden="true"></i>&nbsp;Participate </a>';
					$divclass = 'notgoing';}
				}
				else if ($status == 1)
				{
					$link = '<a onclick="modalTeam('.$teamid.')" style="text-align:center;" ><i class=" fa fa-arrow-circle-right fa-2x" aria-hidden="true"></i>&nbsp;Manage Team</a>';
					$divclass = 'going';
				}
				else
				{
					$link = '<a onclick="modalTeam('.$teamid.')" style="text-align:center;"><i class=" fa fa-arrow-circle-right fa-2x" aria-hidden="true"></i></a>';
					$divclass = 'toconfirm';
				}

				echo <<<BLOCK
			<div class="myevent $divclass row listofevents">
					<div class="col-xs-6"><a class=" myeventa" href='event.php?event_id=$eventid'>$name</a></div>
					<div class="col-xs-3"></div>						
					<div class="col-xs-2">
						$link
					</div>
				<div class="col-xs-1"></div>
			</div>
BLOCK;

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
	function toconfirm(){
		if(document.getElementById('toconfirmcheck').checked) {
		    $(".toconfirm").show();
		} else {
		    $(".toconfirm").hide();
		}
	}	
	
	function modalTeam(teamid)
	{
		$('.modal-body').empty();
		$('.modal-body').load("manageteam.php?teamid="+teamid);
		$("#myModal").modal("show");
	}
	
	function modalRegister(eventid)
	{	
		$('.modal-body').empty();
		$('.modal-body').append('<iframe src="eventreg.php?action=add&event_id='+eventid +'"id="register" class="iframe" name="info" seamless="" onload="resizeIframe(this)"></iframe>');
		$("#myModal").modal("show");
	
	}
	
	</script>

	<script language="javascript" type="text/javascript">
	  function resizeIframe(obj) {
	    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
	    obj.style.width = obj.contentWindow.document.body.scrollWidth + 'px';
	  }
	</script>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content event">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">✖</button>
 
      </div>

<div class="modal-body"></div>

    </div>
 </div>
 
</div> <!-- /#myModal -->

</body>

</html>