			<div class="col-md-3 hidden-xs profile ">
			 <img src="img/blog/avatar.png" class="profile-image">
			 <?php if($user1==$user2){?><div id="changepro"><a href="updateprofile.php"><i class="fa fa-camera-retro fa-2x" aria-hidden="true"></i></a></div><?php } ?><?php
			 
			 
			 
			
			?>
			 <a href="profile.php"><h2><?php echo $user_data['name'];
			 ?></h2></a>
			 <ul class="details">
							
							<li><a href="#"><?php echo $position; ?></a><br></li>
							
							<li><a href="mailing.php"><?php echo " Send Mail"; ?></a>
							
							
							 
							
							</li>
							<li><a href="editorchoice.php"><?php echo "Edit Page"; ?></a></li>
							<li><a href="mailinglist.php"><?php echo "Mailing List"; ?></a></li>
							<li><a href="#"><?php echo "Pass the special requests"; ?></a></li>
							
							<li><a href="#"><?php echo "Messages";?></a></li>
							
							<li><a href="#"><?php echo "Complaints and Suggestions";?></a></li>
							
							
							<li><a href="allregistered.php"><?php echo "Metrics";?></a></li>
							
							
							<li><a href="#"><?php echo "Team Reports";?></a></li>
							
							
							<li><a href="#"><?php echo "Campus ambassador reports";?></a></li>
							
							
							
							<li><a href="#"><?php echo "Add a New Page";?></a></li>
							
							
							
							<li><a href="#"><?php echo "Delete a Page";?></a></li>
							
							
							
							<li><a href="#"><?php echo "Update a Page";?></a></li>
							
							
			 </ul>
			 
			</div>
			<div class="visible-xs profile">
			 <img src="img/blog/avatar.png" class="profile-image">
			 <?php if($user1==$user2){?><div id="changepro"><a href="updateprofile.php"><i class="fa fa-camera-retro fa-2x" aria-hidden="true"></i></a></div><?php }?>
			 <a href="profile.php"><h2><?php echo $user_data['name'];?></h2></a>
			 <ul class="details">
							
							<li><a href="#"><?php echo $institute;?></a><a href="updateprofile.php"><?php if($user1==$user2){?><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><?php } ?>
							
							</li>
							<li><a href="#"><?php echo $user_data['email'];?></a></li>
			 
			</ul>
			<br>
			<!--a href="#content"><i class="fa fa-arrow-down fa-2x" aria-hidden="true"></i></a-->
			</div>
		
	