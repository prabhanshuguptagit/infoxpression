<?php

include 'core/init.php';
protect_profile_page();	

	
	
		
if (!empty($_POST['eventlist'])) {

    $redirect = "http://infoxpression.in/coordinator.php?eventid=" . $_POST['eventlist'];
    echo '<a href='.$redirect.' target="_blank">Download list here</a>';	
    

}
?>

<form action="list.php" method="POST">
    <select name="eventlist">
	  <option value="0">Select Event</option>
	  <?php 
	  	$eventsList = getEventsList();
	  	$i = 1;
		foreach ($eventsList as $eventid)
		{	
			$name = get_eventname($eventid);
			echo '<option value="'.$i.'">'.$name.'</option>';
			$i++;
		}	
	  	?>
    </select> 
    <button>Submit</button>
</form>


</html>