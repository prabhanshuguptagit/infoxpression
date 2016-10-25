			<div class="col-md-3 hidden-xs profile ">
			 <img src="img/blog/avatar.png" class="profile-image">
			
			 <?php  

			 $user2 = $_SESSION['user_id']; 
			 $loggedUser = ($user1==$user2);

			 if($loggedUser)
			 {
			 ?>

			 <div id="changepro"><a href="updateprofile.php"><i class="fa fa-camera-retro fa-2x" aria-hidden="true"></i></a></div><?php } ?>
			 <a href="profile.php"><h2><?php echo $user_data['name'];
			 
			 error_reporting(0);

					
			 
			 ?></h2></a>
			 <ul class="details">
							
							<li><?php echo $institute; ?>

							<?php
							if($loggedUser)
							{
							?>							
							<a href="updateprofile.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><br>
							<?php
							}
							?>
							
							 
							
							</li>
							<li><?php echo $state; ?></li>
							<li>Batch &nbsp;<?php echo $batch; ?></li>
							<li><?php echo $branch; ?></li>
							
							<li><?php echo $user_data['email'];?></li>
							
							<?php
							if($loggedUser)
							{
							?>	
							<li><?php echo $user_data['mobile'];?></li>
							<?php
							}
							?>
							
							
							<li class="text-center"> <i class="fa fa-facebook" style="color: #8b9dc3;"aria-hidden="true"></i>&nbsp;<a href="http://wwww.facebook.com/infoxpression" target="_blank">InfoXpression 2016</a></li>
							
							
			 </ul>
			 
			</div>
			<div class="visible-xs profile">
			 <img src="img/blog/avatar.png" class="profile-image"></img>
			 <?php if($user1==$user2){?><div id="changepro"><a href="updateprofile.php"><i class="fa fa-camera-retro fa-2x" aria-hidden="true"></i></a></div><?php }
			 ?>
			 <a href="profile.php"><h2><?php echo $user_data['name'];?></h2></a>
			 <ul class="details">
							
							<li><a href="#"><?php echo $institute;?></a><a href="updateprofile.php"><?php if($user1==$user2){?><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><?php } ?>
							
							</li>
							<li><a href="#"><?php echo $user_data['email'];?></a></li>
			 
			</ul>
			<br>
			<!--a href="#content"><i class="fa fa-arrow-down fa-2x" aria-hidden="true"></i></a-->
			</div>
		
	