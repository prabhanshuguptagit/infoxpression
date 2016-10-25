			<div class="col-md-3 hidden-xs profile ">
			
			<?php
					if(empty($profile_data['profilepic'])!==true)
				{
					echo '<img src="', $profile_data['profilepic'],' " alt=" ',$profile_data['name'],' \'s Profile picture" class="profile-image">';
					}
					else{
					echo '<img src="img/avatar.png" alt=" ',$profile_data['name'],' \'s Profile picture" class="profile-image">';
					}
					?>
					
			<?php if($user1==$user2){?>
					<div id="changepro">
			<form action="" method="post" enctype="multipart/form-data"  >
						
					<a href="updateprofile.php" data-toggle="tooltip" title="My Profile Picture" class="link" id="propicchange-lg"><i class="fa fa-camera-retro fa-2x" aria-hidden="true"> </i></a>
					</form>
					</div>
					
			<?php } ?>
			
			 <a href="profile.php"><h2><?php echo $profile_data['name'];?></h2></a>
			 <ul class="details">
							
							
							<li><a href="#"><?php echo $institute; ?></a>
							<?php if($user1==$user2){?><a href="updateprofile.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> <?php } ?><br></li>
							<li><a href="#"><?php echo $state; ?></a></li>
							<li><a href="#"> Batch &nbsp;<?php echo $batch; ?></a></li>
							<li><a href="#"><?php echo $branch; ?></a></li>
							<li><a href="#"><?php echo $profile_data['email'];?></a></li>
							
							<li><a href="#"><?php echo $profile_data['mobile'];?></a></li>
							<hr>
							<li><a href="wwww.facebook.com/infoxpression" target="_blank">InfoXpression 2016</a></li>
							
							
			 </ul>
			 
			</div>
			<div class="visible-xs profile">
			 <?php
					if(empty($profile_data['profilepic'])!==true)
				{
					echo '<img src="', $profile_data['profilepic'],' " alt=" ',$profile_data['name'],' \'s Profile picture" class="profile-image">';
					}
					else{
					echo '<img src="img/avatar.png" alt=" ',$profile_data['name'],' \'s Profile picture" class="profile-image">';
					}
					?>
			 <div id="changepro"><?php if($user1===$user2){?><a href="updateprofile.php"><i class="fa fa-camera-retro fa-2x" aria-hidden="true"></i></a><?php } ?></div>
			 <a href="profile.php"><h2><?php echo $profile_data['name'];?></h2></a>
			 <ul class="details">
							
							<li><a href="#"><?php echo $institute;?></a><?php if($user1===$user2){?><a href="updateprofile.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><?php } ?> 
							
							</li>
							<li><a href="#"><?php echo $profile_data['email'];?></a></li>
			 
			</ul>
			<br>
			<!--a href="#content"><i class="fa fa-arrow-down fa-2x" aria-hidden="true"></i></a-->
			</div>
		
		
	