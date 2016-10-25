<?php error_reporting(0);
?><header id="navigation" class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand visible-xs" href="index.php"><img src="img/logo-infox trans-bg.jpg" alt="Infox 16" height="40" width="40"></a>
				<button type="button" class="navbar-toggle offcanvas-toggle" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<?php if(logged_in()===true){echo "<div class=\"usericon dropdown\"><a href=\"profile.php\"><i class=\"fa fa-user fa-2x navbar-toggle\" aria-hidden=\"true\"></i></a></div>"; }?>
			</div>
			<nav class="navbar-offcanvas navbar-offcanvas-touch navbar-offcanvas-fade" role="navigation"  id="js-bootstrap-offcanvas">
				<ul id="nav" class="nav navbar-nav nav-justified">
					<li class="visible-xs"><br><a class="text-center" href="index.php"><img src="img/logo-infox trans-bg.jpg" alt="Infox 16" height="60" width="60"></a>				<br/></li>
					<li><a href="index.php">HOME</a>
					</li>
					<li><a href="about.php">ABOUT US</a>
					</li>
					<li><a href="events.php">EVENTS</a>
					</li>
					<li><a href="sponsors.php">SPONSORS</a>
					</li>
					<li><a href="initiatives.php">INITIATIVES</a>
					</li>
					<li><a href="contact.php">CONTACT US</a>
					</li>
					
					<li>
					<?php 
					
					if(logged_in()===false)
					{
				?><a href="login.php"><b>My InfoX</b></a>
				<?php
				}
					else {
						?><div class="usericon dropdown">
						<button class="btn btn-primary dropdown" type="button" data-toggle="dropdown">
						<i class="fa fa-user fa-2x" aria-hidden="true"></i>
						</button>
						  <ul class="dropdown-menu">
							<li><a href="profile.php">My DashBoard</a></li>
							<li><a href="updateprofile.php">Edit Profile</a></li>	
							<?php
							if(get_type_status($user_id)==4||get_type_status($user_id)==5||get_type_status($user_id)==6){?>
							<li><a href="editor.php">Editor</a></li>
						<?php	} ?>
							
							<li><a href="logout.php">Log out</a></li>
						  </ul>
						</div>
						
						
						
						<?php
						}
						?>
					</li>
					
				</ul>
			</nav>

		</div>
	</header>