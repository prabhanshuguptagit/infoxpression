<!DOCTYPE html>

<html class="no-js">

<base href="http://www.infoxpression.in/">

<?php include 'includes/general/head.php';
if(logged_in()===false){
	header('Location:login.php');	
	exit();
	}

$user1=$session_user_id;	

if (isset($_GET['id']))
{
	$user1 = intval($_GET['id']);

	if (user_id_exists($user1) != 1)
	{
		$errors[]='We can\'t find the person you are looking for.';
		echo output_errors($errors);
		exit(0);
	}
}

?>

<link rel="stylesheet" href="css/profile.css">
<body id="body">
	<?php include 'includes/general/userheader.php'?>
	<div class="container">
		<div class="row">
			
			<?php
			
			$user_id=$user1;
			
			$user_data =user_data($user_id,'name','email','username','mobile','state','batch','branch','institute','profilepic');
			
			$institute=profileinstitute($user_data['institute']);
			$branch=profilebranch($user_data['branch']);
			$batch=profilebatch($user_data['batch']);
			$state=profilestate($user_data['state']);
			
			include 'includes/general/useraside.php';

			?>
			
			<div class="col-md-1"></div>

			<div class="col-md-8" id="content">
			
			
			
			
			<?php
			$count=0;
			$userid = $user1;
			$eventsList = getEventsList();
			
			foreach ($eventsList as $eventid)
			{
				$status = getUserEventStatus($eventid, $userid);
				$teamid = getCurrentTeam($eventid, $userid);?>
			
				<?php
				$name = get_eventname($eventid);

				$divclass = '';

				if ($status == 0)
				{	
					continue;
				}
				else if ($status == 1)
				{
					$count=1;
					$divclass = 'going';
				}
				else
				{	$count=1;					
					$divclass = 'toconfirm';
				}

				echo <<<BLOCK
			<div class="myevent $divclass row listofevents">
					<div class="col-xs-12"><a class=" myeventa" href='event.php?event_id=$eventid'>$name</a></div>
			</div>
BLOCK;

			}		
			
			if ($count){	
			?>	
			
			<?php } 
			else
			{
			?>
			<div class="row event">
			<h4 class="text-center"><a href="mynotifications.php">No events to display.</a></h4> 
			</div>
			<?php } ?>
			
		</div>	
		
	</div>
		
	
	</div>

	<?php 
	include'includes/general/footer.php';?>

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