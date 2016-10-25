<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<?php include 'includes/general/head.php' ?>
<?php
if(isset($_GET['event_id'])===true&&empty($_GET['event_id'])===false){
	$event_id=$_GET['event_id'];
	if(event_exists($event_id)== 1){

				$flag=0;
				
				//$user_id=user_id_from_email($email);
				$event_data =event_data($event_id,'name','image','about','rules','timeline','miscdetails','doclink','eventline','organizer1','organizer3','organizer2');
					$eventimg=$event_data['image'];	
					$name=$event_data['name'];
					$about=$event_data['about'];
					$rules=$event_data['rules'];
					$timeline=$event_data['timeline'];
					$miscdetails=$event_data['miscdetails'];
					$doclink=$event_data['doclink'];
					$previous=$event_id-1;
					$next=$event_id+1;
					$eventline=$event_data['eventline'];		
					$organizer1=$event_data['organizer1'];
					$organizer2=$event_data['organizer2'];
					$organizer3=$event_data['organizer3'];
			}

	else{
		$errors[]='We can\'t find that Page on this link.You might be accessing a broken link.';
		$flag=2;			
	}
}
else{
		$errors[]='We can\'t find that Page on this link.You might be accessing a broken link.';
		$flag=2;	
	}
?>
<?php
if($flag!=2){

if(logged_in()===false){
	$flag=1;
	}
else{	
$user2=$session_user_id;}
?>

<body class="blog-page">
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<?php


	include 'includes/general/header.php' ?>
	
	<br>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="blog-title color">
						<h1><?php echo $name;?></h1> 
					</div>
					<div class="border"></div>
				</div>
			</div>
		</div>
	<br><br>

	<section id="blog-page">
	
		<div class="container">
			<div class="row">
				<div id="blog-posts" class="col-md-8 col-sm-8">
					<div class="post-item">
					
						<article class="entry wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							
							<div class="next-prev clearfix">
							<h4>
							<?php 
								if($event_id>1){
								echo "<a href='event.php?event_id=".$previous."' class=\"prev-post \">
								< Previous Event</a>";}
								?>
							<?php 
								if($event_id<39){
								echo "<a href='event.php?event_id=".$next."' class=\"next-post pull-right\">
								Next Event ></a>";
								}?>
							</h4>
							</div>
							
							<div class="post-thumb text-center">
							<?php 
							echo '<img src="'.$eventimg.'" width="65%">'
							?></div>
							<br>
							<h4 class="text-center">
							<?php echo $eventline;?></h4>
							<br>
							<div class="post-excerpt">
								<?php if($miscdetails)
								 echo "<div class=\"text-center\"><button class=\"btn btn-transparent\"  style=\"color:#3b5998\"><h4><a href='".$miscdetails."' target=\"_blank\"><i class=\"fa fa-facebook\"></i> FB Page</a></h4></button></div>";?>
								<h4><strong>About&nbsp;<?php echo $name;?></strong>
								</h4>
				
								<p>
<?php echo $about;?></p></br>
								
								<h4><strong>The Rulebook</strong>
								</h4>
									<?php echo $rules;?>
								
								<p><strong>&nbsp;</strong>
								</p>
								<h4><strong>&nbsp;The Timeline</strong>
								</h4>
								<?php echo $timeline;?>
								
								<?php 
								if($doclink)
								{echo "<button class=\"btn-transparent\"><a href='".$doclink."' class=\"prev-post \" style=\"color:#3b5998\">
								<h4>Download Important Document</h4><i class=\"fa fa-file-pdf-o fa-2x\"></i></a></button>";}?>
							
								
								
							</div>
							<br>
						</article>

						<div class="next-prev clearfix">
							<h4>
							<?php 
								if($event_id>1){
								echo "<a href='event.php?event_id=".$previous."' class=\"prev-post \">
								<  Previous Event</a>";}
								?>
							<?php 
								if($event_id<39){
								echo "<a href='event.php?event_id=".$next."' class=\"next-post pull-right\">
								Next Event ></a>";
								}?>
							</h4>
						</div>
					</div>
				</div>

				<div id="right-sidebar" class="col-md-4 col-sm-4">
					<aside class="widget wow fadeInDown">
						<div class="form-group">
                        	
                        	<?php
                        	if($flag!=1){
                        	//$is_reg=reg_events($user2,$event_id);
			//if($is_reg ==0){
			
			echo "<a href='myevents.php'><i class=\"fa fa-plus-circle fa-2x\" aria-hidden=\"true\"></i></a> Register for event.";
			
			//} else {
			
			
			//echo "<a href='myevents.php'><i class=\"fa fa-minus-circle fa-2x\" aria-hidden=\"true\"></i></a> Already Registered. Withdraw from event.";
			//}
			}
			else{
			
			echo "<a href='login.php' type='submit' id='post-comment' class='btn btn-transparent'>Login to register</a>";
			}
			?>
                        </div>
						<div class="author-about clearfix">
							<h4>Coordinators</h4>
							<div class="post-author pull-left">
								<img src="img/blog/avatar.png" alt="">
							</div>
							<div class="author-bio">
								<?php echo $organizer1 ?>
							</div>
						</div>
						<div class="author-about clearfix">
							<div class="post-author pull-left">
								<img src="img/blog/avatar.png" alt="">
							</div>
							<div class="author-bio">
								<?php echo $organizer2 ?>
							</div>
						</div>
						<?php if( $organizer3 != NULL)
						{?>
						<div class="author-about clearfix">
							<div class="post-author pull-left">
								<img src="img/blog/avatar.png" alt="">
							</div>
							<div class="author-bio">
								<?php echo $organizer3 ?>	
							</div>
						</div>
						
						<?php }?>
					</aside>
				</div>
			</div>
		</div>
	</section>

	<?php include'includes/general/footer.php';?>

	<a href="#" id="scrollUp"><i class="fa fa-angle-up fa-2x"></i></a>

	<script src="js/jquery.scrollUp.min.html"></script>
	<script src="js/classie.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.easing-1.3.pack.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.fitvids.js"></script>
	<script src="js/custom.js"></script>
	
	<?php 
}

else{
	
	header('Location:events.php');
}
	?>
</body>


<!-- algoholics.html  08 Mar 2016 20:01:57 GMT -->
</html>