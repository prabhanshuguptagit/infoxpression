<header id="navigation" class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>
			<nav class="collapse navbar-collapse" role="Navigation">
				<ul id="nav" class="nav navbar-nav nav-justified">
				
							<li><a href="index.php"><b>InfoX</b></a></li>
							<li><a href="profile.php"><b>Dashboard</b></a></li>
							<li><a href="myevents.php"><b>My Events</b></a></li>
							
					<li><a href="sponsors.php"><b>SPONSORS</b></a>
					</li>
							
							<li>
							<div class="usericon dropdown">
						<button class="btn btn-primary dropdown notif" type="button" data-toggle="dropdown">
						<i class="fa fa-user fa-2x" aria-hidden="true"></i>
						</button>
						  <ul class="dropdown-menu">
						  	<li><a href="mynotifications.php" id="notifications">Notifications</a></li>	
							<li><a href="updateprofile.php">Edit Profile</a></li>							
							<li><a href="logout.php">Log out</a></li>
							
						  </ul>
						</div>
						</li>
			 </ul>
			</nav>

		</div>
		<script>
		var notifications = 
		<?php $uid = $_SESSION["user_id"]; echo sizeof(getTeamNotifications($uid)); 
		?> ;
		
		if(notifications)
		{ $('#notifications').append(' ( ' + notifications + ' )' );
		
		 //$('#nav').append(' ( ' + notifications + ' )' );
		 $('.navbar-toggle').append('<span class="button__badge">'+notifications+'</span>');
		$('.notif').append('<span class="button__badge">'+notifications+'</span>');}
		</script>	
	</header>