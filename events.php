 <!DOCTYPE html>

<html class="no-js">


<?php include'includes/general/head.php'?>

<body id="body">
	<!-- Preloader ==================================== -->
	<!--div id="loading-mask">
		<div class="loading-img">
			<img alt="Preloader" src="img/preloader.gif" />
		</div>
	</div-->
	
	<?php include'includes/general/header.php'?>
	<link rel="stylesheet" href="css/profile.css">
		
	
	
	
	
	<section id="event">
		<div class="container">
			<div class="row wow fadeInDown" data-wow-duration="500ms">
				<div class="col-lg-12">
					<div class="title text-center">
						<h1><span class="color">Events</span></h1>
						<div class="border"></div>
					</div>
					<div class=" event-filter clearfix text-center">
						<button class="btn btn-transparent"><a href="#schedule"><b>SCHEDULE</b></a>
							</button>
						<ul class="text-center">
							
							<br><br>
							<li><a href="javascript:void(0)" class="filter" data-filter="all">All</a>
							</li>
							<li><a href="javascript:void(0)" class="filter" data-filter=".prog">Programming</a>
							</li>
							<li><a href="javascript:void(0)" class="filter" data-filter=".elec">Electronics</a>
							</li>
							<li><a href="javascript:void(0)" class="filter" data-filter=".sprint">Workshops</a>
							</li>
							
							<li><a href="javascript:void(0)" class="filter" data-filter=".entrepreneurial">Entrepreneurial</a>
							</li>
							<li><a href="javascript:void(0)" class="filter" data-filter=".nont">Non-Tech</a>
							</li>
							
							
	
							
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
			<input class="myevent col-md-8" type="search" onkeyup="searchitem()" id="search" placeholder="Search for events ">
			<span class="fa fa-search fa-2x searchicon"></span></input>
			
			</div>
		</div>
		
		<!-- div class="event-item-wrapper wow fadeInUp" data-wow-duration="500ms">
		
		<ul id="og-grid" class="og-grid">
		
		<?php  
		
		//for($i=0;$i<40;$i++){
		
		?>
		<li class="mix prog">
					<a href="event.php?event_id=$event_id"  data-largesrc="$image" data-title="$title" data-description="$about">
						<div class="back" style="background-image:url($image);">
						</div>
						<div class="backtext"><h3>$title <h2>$schedule</h2></h3></div>
					</a>
				</li>
				<?php
				 // }
				?>
				
				</ul>
		</div>
	</section>
					
		</ -->
		<div class="event-item-wrapper wow fadeInUp" data-wow-duration="500ms">
			<ul id="og-grid" class="og-grid">
				<li class="mix prog online" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=1"  data-largesrc="img/index/events/posters/algoholics.png" data-title="Algoholics" data-description="We are obsessed with solutions to all our problems. But we know that a problem may have any number of solutions. To find out the least complex path to our solutions we bring you algoholics. Write the best pseudo code and prove your mettle.">
						<div class="back" style="background-image:url(img/index/events/algoholics.jpg);">
						</div>
						<div class="backtext"><h3>Algoholics<h2>October 22, 1000 hours</h2></h3></div>
					</a>
				</li>
				<li class="mix prog online" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=2"  data-largesrc="img/index/events/posters/hackathon.png" data-title="Uhack - Hackathon" data-description="2 Day Hackathon. Use any language or technology.App or website.Topic will be given on the spot. Development needs to be done during hackathon. Individual or upto 3 members in a team.">
						<div class="back" style="background-image:url(img/index/events/hackathon.jpg);">
						</div>
						<div class="backtext"><h3>UHack - Hackathon <h2>October 21-22 , 1100 hours</h2></h3></div>
					</a>
				</li>
				<li class="mix prog" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=3" data-largesrc="img/index/events/posters/blindcoding.png" data-title="Blind Coding" data-description="All the computer lovers,show’em your bond with the PC and code without having a peek at the Desktop.">
						<div class="back" style="background-image:url(img/index/events/blindcoding.jpg);">
						</div>
						<div class="backtext"><h3>Blind Coding<h2>October 21 , 1400 hour</h2></h3></div>
					</a>
				</li>
				<li class="mix prog" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=4" data-largesrc="img/index/events/posters/codester-novice.png" data-title=" Codester Novice" data-description="To challenge your very basic understanding of programming, we bring to you the competitive code jam by Hackerearth. Here we check not only your problem solving skills, but also your grasp over this fascinating language.">
						<div class="back" style="background-image:url(img/index/events/codesternovice.png);">
						</div>
						<div class="backtext"><h3>Codester Novice - Hackerearth<h2>October 21, 1100 hours</h2></h3></div>
					</a>
				</li>
				<li class="mix prog" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=5" data-largesrc="img/index/events/posters/codester-veteran.png" data-title=" Codester Veteran" data-description="To challenge your analytical understanding of programming, we bring to you the competetive code jam by CodeChef. Here we check not only your problem solving skills, but also your grasp over this fascinating language.">
						<div class="back" style="background-image:url(img/index/events/codester.png);">
						</div>
						<div class="backtext"><h3>Codester Veteran - Codechef<h2>October 23, 1000 hours</h2></h3></div>
					</a>
				</li>
				<li class="mix prog" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=8" data-largesrc="img/index/events/posters/backgear.jpg" data-title="BackGear" data-description="This contest will challenge the conventional norms of programming where in a programmer generates output from the code. Here, we present the competitors with the output and the programmers are required to apply their reverse engineering skills to generate the code that gives this output. ">
						<div class="back" style="background-image:url(img/index/events/backgear.jpg);">
						</div>
						<div class="backtext"><h3>Back Gear , Reverse Coding<h2>October 23, 1000 hours</h2></h3></div>
					</a>
				</li>
				<li class="mix prog" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=6" data-largesrc="img/index/events/posters/javajig.png" data-title="JavaJIG" data-description="JAVA is a necessity in today’s world. Since its inception in the days when it was ‘oak’, JAVA’s contributions have been innumerable. Called the most robust programming language, the JAVA JIG tests your proficiency in this language. It will test how well you know the nuances of JAVA as well as your skills as a coder.">
						<div class="back" style="background-image:url(img/index/events/javajig.png);">
						</div>
						<div class="backtext"><h3>Javajig<h2>October 22, 1000 hours</h2></h3></div>
					</a>
				</li>
				<li class="mix prog online" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=7"  data-largesrc="img/index/events/posters/jigsawcodemania.png" data-title="Jigsaw Codemania" data-description="To encourage students who think out of the box and love to code, we bring forth JIGSAW CODEMANIA. Fun/Tech events spread over 3 days. Cash Prizes 10k, fragment prizes to be won each day.">
						<div class="back" style="background-image:url(img/index/events/datacrunch.jpg);">
						</div>
						<div class="backtext"><h3>Jigsaw Codemania <h2>Oct. 21 12-2, Oct 22-23, 0100-1300 hours</h2></h3></div>
					</a>
				</li>
				
				
				<li class="mix elec" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=12" data-largesrc="img/index/events/posters/fastandfurious.png" data-title="Fast and Furious" data-description="This event is a hurdle race designed for robots. Teams will compete against each other while racing their robots on a track with hurdles. The winning team will be the one whose robot crosses the hurdles and finishes the race in minimum time. Penalty time will be added to the total time in case a hurdle is skipped or the robot touches the boundary.">
						<div class="back" style="background-image:url(img/index/events/roborace.jpg);">
						</div>
						<div class="backtext"><h3>Fast and Furious <h2>October 21, 1400 hours</h2></h3></div>
					</a>
				</li>
				<li class="mix elec" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=10" data-largesrc="img/index/events/posters/robohustle.png" data-title="Robo Hustle" data-description="The Event Involves duel of battle bots in a given circular arena. The first team to push or throw the other bot will be declared the winner of the round">
						<div class="back" style="background-image:url(img/index/events/robohustle.jpg);">
						</div>
						<div class="backtext"><h3>Robohustle<h2>October 22, 1400 hours</h2></h3></div>
					</a>
				</li>
				<li class="mix elec" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=9" data-largesrc="img/index/events/posters/mindtheline.png" data-title="Mind The Line" data-description="Follow the path to success by designing an efficient line following robot. The event comprises of a track laid in black strip on white sheet, having a starting and finishing line with some intermediate checkpoints.">
						<div class="back" style="background-image:url(img/index/events/lfr.jpg);">
						</div>
						<div class="backtext"><h3>Mind the line<h2>October 22, 1000 hours</h2></h3></div>
					</a>
				</li>
				<li class="mix elec" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=11" data-largesrc="img/index/events/quad.jpg" data-title="Quadcopter View" data-description="Our Signature event. Teams must build a drone on the spot and demo it by ﬂying upto 4 stories of height without breaking a sweat.">
						<div class="back" style="background-image:url(img/index/events/quad.jpg);">
						</div>
						<div class="backtext"><h3>QuadCopter View <h2>October 23, 1000 hours</h2></h3></div>
					</a>
				</li>
				
				
				
				<li class="mix nont" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=16" data-largesrc="img/index/events/posters/clashonlancsgo1v1.png" data-title="Clash On Lan CSGO 1v1" data-description="Get ready for an adrenaline rush and a test of your senses. Compete against participants of different colleges to triumph as the best LAN gaming team. We have for you, first person shooters, races and what not. So get ready to enter a world of virtual reality, and prove yourself the best.">
						<div class="back" style="background-image:url(img/index/events/csgo.png);">
						</div>
						<div class="backtext"><h3>Clash on LAN - CSGo 1v1<h2>October 21-23, 1100 hour </h2></h3></div>
					</a>
				</li>
				
				<li class="mix nont" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=15" data-largesrc="img/index/events/posters/clashonlanfifa.png" data-title="Clash On Lan FIFA" data-description="Get ready for an adrenaline rush and a test of your senses. Compete against participants of different colleges to triumph as the best LAN gaming team. We have for you, first person shooters, races and what not. So get ready to enter a world of virtual reality, and prove yourself the best.">
						<div class="back" style="background-image:url(img/index/events/col.jpg);">
						</div>
						<div class="backtext"><h3>Clash on LAN - FIFA<h2>October 21-23, 1100 hour</h2></h3></div>
					</a>
				</li>
				<li class="mix nont" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=17" data-largesrc="img/index/events/posters/clashonlancsgo.png" data-title="Clash On Lan CSGO 5v5" data-description="Get ready for an adrenaline rush and a test of your senses. Compete against participants of different colleges to triumph as the best LAN gaming team. We have for you, first person shooters, races and what not. So get ready to enter a world of virtual reality, and prove yourself the best.">
						<div class="back" style="background-image:url(img/index/events/csgo.png);">
						</div>
						<div class="backtext"><h3>Clash on LAN - CSGo 5v5 <h2>October 21-23, 1100 hour</h2></h3></div>
					</a>
				</li>
				
				<li class="mix nont" style="display: inline-block;">
					<a href="https://www.facebook.com/events/1745765859028781/"  target="_blank" data-largesrc="img/index/events/posters/ruhaniyat.png" data-title="Ruhaniyat Performance" data-description="Cultural Night performance by the Ruhaniyat band.">
						<div class="back" style="background-image:url(img/index/events/posters/ruhaniyat.png);">
						</div>
						<div class="backtext"><h3>Ruhaniyat Performance <h2>October 23, 1800 hours</h2></h3></div>
					</a>
				</li>
				
				<li class="mix entrepreneurial online" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=13" data-largesrc="img/index/events/samadhan.png" data-title="Samadhan" data-description="Have an idea to improve or bring change to your college / university campus. We give you the plaorm to pitch it. Come and show us your working prototype, and get funds, mentorship, fundings and what not to make it big. Sweat yourself, Get funded ">
						<div class="back" style="background-image:url(img/index/events/samadhan.png);">
						</div>
						<div class="backtext"><h3>Samadhan<h2>Oct 15, 2016-Feb 14, 2017 </h2></h3></div>
					</a>
				</li>
				<li class="mix entrepreneurial online sprint" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=21" data-largesrc="img/index/events/startsmart.jpg" data-title="Startup BootCamp" data-description="Have you ever thought of owning your own start-up?
Have you ever thought what it takes to come up with the next Million Dollar Idea?
Have you ever thought what a Business Plan is? 
Have you ever wondered how Start-ups raise Million Dollar investments? 

If you answered any of the questions in affirmative, StartSmart- TheStartup Boot-camp, is just for you. ">
						<div class="back" style="background-image:url(img/index/events/startsmart.jpg);">
						</div>
						<div class="backtext"><h3>StartSmart Bootcamp<h2>October 21-23 , 1000- 1600 hr</h2></h3></div>
					</a>
				</li>
				<li class="mix online" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=20" data-largesrc="img/index/events/posters/xcelens.png" data-title="Xcel - Lens" data-description="Do you believe in making people look at the world from your perspective? Then this is the event for you. Go creative, and give us a photograph that captures something breath-taking. Show us waht you bought that DSLR for and if you awe us enough, you will have achieved Xcel-Lens!">
						<div class="back" style="background-image:url(img/index/events/xcelens.jpg);">
						</div>
						<div class="backtext"><h3>Xcel - Lens <h2> October 15-23, Online</h2></h3></div>
					</a>
				</li>
				<li class="mix nont" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=18" data-largesrc="img/index/events/posters/treasurehunt.png" data-title="Crusade - Treasure Hunt" data-description="The box of miracles and secrets is waiting for you. Come and explore a whole new world within. Experience fun, like you have never before. Apply your brain in every technical aspect and hunt for the treasure.">
						<div class="back" style="background-image:url(img/index/events/crusade.jpg);">
						</div>
						<div class="backtext"><h3>Crusade Treasure Hunt<h2>October 21, 1600 hours</h2></h3></div>
					</a>
				</li>
				<li class="mix nont" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=19" data-largesrc="img/index/events/posters/kalamdialect.png" data-title="Kalam Dialect" data-description="Arguments are naturally constructive. They lead to a mind open to new ideas. In a field as dynamic as technology, we need to argue to keep ourselves on our toes and constantly updated. Thus, all our welcome to the technical debate.">
						<div class="back" style="background-image:url(img/index/events/kalamdialect.png);">
						
						</div>
						<div class="backtext"><h3>Kalam Dialect <h2>October 22, 1500 hours</h2></h3></div>
					</a>
				</li>
				<li class="mix nont" style="display: inline-block;">
					<a href="https://www.facebook.com/events/294519470897466/" target="_blank" data-largesrc="img/index/events/posters/friendsquiz.png" data-title="Friends Quiz" data-description="Arguments are naturally constructive. They lead to a mind open to new ideas. In a field as dynamic as technology, we need to argue to keep ourselves on our toes and constantly updated. Thus, all our welcome to the technical debate.">
						<div class="back" style="background-image:url(img/index/events/friendsquiz.jpg);">
						
						</div>
						<div class="backtext"><h3>Friends Quiz <h2>October 23, 1000 hours</h2></h3></div>
					</a>
				</li>
				<li class="mix nont" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=14" data-largesrc="img/index/events/quiz.png" data-title="Know It All" data-description="It is said that knowledge increases when it is shared. Through this event we are giving students an opportunity to share and increase their knowledge through a quiz competition. The quiz will cover a variety of topics testing the participants' knowledge in multiple fields. Participants will face off against other geniuses in order to determine the smartest of them all. So if you think that you have what it takes, take part and let your knowledge help you win the title of the biggest 'Know It All'.">
						<div class="back" style="background-image:url(img/index/events/quiz.png);">
						</div>
						<div class="backtext"><h3>Know It All <h2> October 23, 1400 hour</h2></h3></div>
					</a>
				</li>
				
				<li class="mix sprint prog" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=22" data-largesrc="img/index/events/sprint.jpg" data-title="Python Sprint" data-description="Python is one of the most widely used high-level programming languages in the world.

Python is the master of all trades whether it is web development, data science and machine learning, scripting and automation, application development.<br> 

So in this event you will,<br>
1. Learn python from ground up in weekly sessions to be conducted at USICT.<br>
2. You will make a project from what you've learnt in python.<br>
3. Be more awesome">
						<div class="back" style="background-image:url(img/index/events/sprint.jpg);">
						</div>
						<div class="backtext"><h3>Python Sprint <h2> On Weekends</h2></h3></div>
					</a>
				</li>
				
				
				<li class="mix sprint prog" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=23" data-largesrc="img/index/events/sprint.jpg" data-title="FOSS & PHP | Sprint" data-description="Fall in love with Open Source, first love of the computer geeks. We have set the stage for you to learn more of your life partner here. Come and Join us at Foss Sprints and Hackathons.">
						<div class="back" style="background-image:url(img/index/events/sprint.jpg);">
						</div>
						<div class="backtext"><h3>PHP | Sprint<h2>On Weekends </h2></h3></div>
					</a>
				</li>
				
				<li class="mix sprint prog" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=24" data-largesrc="img/index/events/sprint.jpg" data-title="Ruby | Sprint" data-description="Learn Ruby and Rail Framework with in a month with Techspace and SAINT. ">
						<div class="back" style="background-image:url(img/index/events/sprint.jpg);">
						</div>
						<div class="backtext"><h3>Ruby SPRINT<h2>On Weekends</h2></h3></div>
					</a>
				</li>
				
				
				
				
			
				<li class="mix" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=29" data-largesrc="img/index/events/IETE.png" data-title="IETE Orientation" data-description="A li'l Conference from IETE , Delhi, with scholars will be seen discussing hot topics of research areas.">
						<div class="back" style="background-image:url(img/index/events/IETE.png);">
						</div>
						<div class="backtext"><h3>IETE Orientation<h2>October 21, 1130-1330 hours</h2></h3></div>
					</a>
				</li>
				
				<li class="mix varta" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=25" data-largesrc="img/index/events/mozilla.jpg" data-title="MOZ Maker Party" data-description="Two day Session on Activating Campaign of Mozilla by Mozilla for Open Web. Moz Lil conferece is such an opportunity which merely comes so easily to enhance your foss knowledge with mozilla.">
						<div class="back" style="background-image:url(img/index/events/mozilla.jpg);">
						</div>
						<div class="backtext"><h3>MOZILLA MAKER PARTY <h2>October 22-23, 1000-1500 hr</h2></h3></div>
					</a>
				</li>
				

				<li class="mix varta" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=26" data-largesrc="img/index/events/python.png" data-title="Py Meet Up" data-description="Meet Up of Py Community in association with PyData. Check it out, its going to be really cool event by PyData Delhi Team.">
						<div class="back" style="background-image:url(img/index/events/python.png);">
						</div>
						<div class="backtext"><h3>PyData Meet Up<h2>October 23, 1500 hours </h2></h3></div>
					</a>
				</li>
				
				<li class="mix" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=27" data-largesrc="img/index/events/KDE.png" data-title="Open Source Conf" data-description="If you love sharing, discussing, groups, openness this talk is for you. Foss Club, USICT has organized a tad talk session by Open Source Contributors on GSOC and a surprise event.">
						<div class="back" style="background-image:url(img/index/events/KDE.png);">
						</div>
						<div class="backtext"><h3>GSOC Meet up<h2>October 22, 1500 hours</h2></h3></div>
					</a>
				</li>
				
				<li class="mix prog elec online" style="display: inline-block;">
					<a href="http://infoxpression.in/event.php?event_id=28" data-largesrc="img/index/events/paper.png" data-title="Paper Presentation" data-description="Chance for young scholars round the moon to put their best foot forward with presentaon of their research.JUR, GGSIPU has set the stage for young researchers. Get evaluated. Be Geeky. Get Published  in JUR.">
						<div class="back" style="background-image:url(img/index/events/paper.png);">
						</div>
						<div class="backtext"><h3>Paper Presentation<h2>October 21, 1400 hours </h2></h3></div>
					</a>
				</li>
				
				
				
			</ul>
			<div class="myevent text-center">No more events to display</div>
		</div>
		
	</section>
	
	<div class="title text-center">
						<h1><span id="schedule" class="color">Schedule</span></h1>
						<div class="border"></div>
	</div>
	
	
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-xs 12 col-md-2 container text-center "><a target="_blank"  href="img/index/events/oct21-infox.png"><img src="img/index/events/oct21-infox.png" class="square img-responsive"/></a></div>
		<div class=" col-xs 12 col-md-2 container text-center "><a target="_blank"  href="img/index/events/oct22-infox.png"><img src="img/index/events/oct22-infox.png" class="img-responsive square"/></a></div>
		<div class="col-xs 12 col-md-2 container text-center "><a target="_blank" href="img/index/events/oct23-infox.png"><img src="img/index/events/oct23-infox.png" class="img-responsive square"/></a></div>
		<div class="col-xs-2"></div>
	</div>	
	<br>
	<div class="row text-center"><h4>Download Schedule.</h4></div>			
<br>				


<table class="tbl-accordion-nested table-fill hover-cursor">
          <thead class="thead">
            <tr>
            <th class="text-center" colspan="2">October 21st 2016</th>
            </tr>
          </thead>
          <tbody class="table-hover">
<tr>
<td class="text-left"><a href="#">Inaugration</a></td>
<td class="text-left"><a href="#">1000 hours IST , E- Block Auditorium</a></td>
</tr>
<tr>
<td class="text-left"><a href="">Algoholics</a></td>
<td class="text-left"><a href="">1100 hours IST, ETL-312 & 313</a></td>
</tr>
<tr>
<td class="text-left"><a href="">Start Smart</a></td>
<td class="text-left"><a href="">1100 hours IST, C-Block Auditorium</a></td>
</tr>
<tr>
<td class="text-left"><a href="">Clash on LAN </a></td>
<td class="text-left"><a href="">1100 hours IST, D- Block Auditorium</a></td>
</tr>
<tr>
<td class="text-left"><a href="">Clash on LAN</a></td>
<td class="text-left"><a href="">1100 hours IST, D-216 & 217</a></td>
</tr>
<tr>
<td class="text-left"><a href="">IETE Orientation</a></td>
<td class="text-left"><a href="">1100 hours IST, E- Block Auditorium</a></td>
</tr>
<tr>
<td class="text-left"><a href="">U Hack - Hackathon</a></td>
<td class="text-left"><a href="">1100 hours IST, E-318 & 319 </a></td>
</tr>
<tr>
<td class="text-left"><a href="">Paper Presentation</a></td>
<td class="text-left"><a href="">1400 hours IST, E- Block Auditorium </a></td>
</tr>
<tr>
<td class="text-left"><a href="">Blind Codng</a></td>
<td class="text-left"><a href="">1400 hours IST, E-410 </a></td>
</tr>
<tr>
<td class="text-left"><a href="">Fast and Furious</a></td>
<td class="text-left"><a href="">1400 hours IST, Arena</a></td>
</tr>
<tr>
<td class="text-left"><a href="">Crusade - The Treasure Hunt</a></td>
<td class="text-left"><a href="">1600 hours IST, E- Block Auditorium</a></td>
</tr>
</tbody>
        </table> 




<table class="tbl-accordion-nested table-fill">
<thead class="thead">
<tr>
<th class="text-center" colspan="2">October 22nd 2016</th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left"><a href="">Java Jig</a></td>
<td class="text-left"><a href="">1000 hours IST, E- 410 and E- 505</a></td>
</tr>
<tr>
<td class="text-left"><a href="#">Mozilla Maker Party</a></td>
<td class="text-left"><a href="#">1000 hours IST , E-Block Auditorium</a></td>
</tr>
<tr>
<td class="text-left"><a href="">U Hack Hackathon</a></td>
<td class="text-left"><a href="">Till 1100 hours IST, ETL-318,319</a></td>
</tr>
<tr>
<td class="text-left"><a href="">JigSaw Code Mania</a></td>
<td class="text-left"><a href="">1100 hours IST, ETL-410</a></td>
</tr>
<tr>
<td class="text-left"><a href="">Start Smart</a></td>
<td class="text-left"><a href="">1000 hours IST, C-Block Auditorium</a></td>
</tr>
<tr>
<td class="text-left"><a href="">Clash on LAN</a></td>
<td class="text-left"><a href="">1000 hours IST, D- Block Auditorium</a></td>
</tr>
<tr>
<td class="text-left"><a href="">Clash on LAN</a></td>
<td class="text-left"><a href="">1000 hours IST, D-216 & 217</a></td>
</tr>
<tr>
<td class="text-left"><a href="">Codester Novice</a></td>
<td class="text-left"><a href="">1000 hours IST, ETL-312- 313</a></td>
</tr>
<tr>
<td class="text-left"><a href="">Mind The line</a></td>
<td class="text-left"><a href="">1000 hours IST, Arena</a></td>
</tr>
<tr>
<td class="text-left"><a href="">RoboHustle</a></td>
<td class="text-left"><a href="">1400 hours IST, Arena</a></td>
</tr>
<tr>
<td class="text-left"><a href="#">GSOC SIG Meet Up</a></td>
<td class="text-left"><a href="#">1500 hours IST , E-Block Auditorium</a></td>
</tr>
<tr>
<td class="text-left"><a href="">Kalam Dialect</a></td>
<td class="text-left"><a href="">1500 hours IST, D- Block Auditorium</a></td>
</tr>



</tbody>
</table>



<table class="tbl-accordion-nested table-fill">
<thead class="thead">
<tr>
<th class="text-center" colspan="2">October 23rd 2016</th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left"><a href="#">StartSmart</a></td>
<td class="text-left"><a href="#">1000 hours IST , C-Block Auditorum</a></td>
</tr>
<tr>
<td class="text-left"><a href="">Friends Quiz</a></td>
<td class="text-left"><a href="">1000 hours IST, D-Block Auditorum</a></td>
</tr>
<tr>
<td class="text-left"><a href="">Mozilla Maker Party</a></td>
<td class="text-left"><a href="">1000 hours IST, E-BlockAuditorium</a></td>
</tr>
<tr>
<td class="text-left"><a href="">Codester Veteran</a></td>
<td class="text-left"><a href="">1000 hours IST, ETL-312,313</a></td>
</tr>
<tr>
<td class="text-left"><a href="">Back Gear</a></td>
<td class="text-left"><a href="">1000 hours IST, ETL - 410</a></td>
</tr>
<tr>
<td class="text-left"><a href="">Quad Copter View</a></td>
<td class="text-left"><a href="">1000 hours IST, Arena</a></td>
</tr>
<tr>
<td class="text-left"><a href="">PY SIG Meet Up</a></td>
<td class="text-left"><a href="">1500 hours IST, E-BlockAuditorium</a></td>
</tr>
<tr>
<td class="text-left"><a href="">Jig Saw Code Mania</a></td>
<td class="text-left"><a href="">1300 hours IST, ETL - 410</a></td>
</tr>


<tr>
<td class="text-left"><a href="">Valedictory</a></td>
<td class="text-left"><a href="">1600 - 1700 hours IST, E-Block Auditorium</a></td>
</tr>
<tr>
<td class="text-left"><a href="">Tad Break</a></td>
<td class="text-left"><a href="">1700 hours IST</a></td>
</tr>
<tr>
<td class="text-left"><a href="">Ruhaniyat</a></td>
<td class="text-left"><a href="">1800 - 2000 hours IST, Stage</a></td>
</tr>

</tbody>
</table>
	<?php include'includes/general/footer.php'?>

	

	
	<script src="js/jquery.slitslider.js"></script>
	<script src="js/jquery.ba-cond.min.js"></script>
	<script src="js/jquery.parallax-1.1.3.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.mixitup.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/easyPieChart.js"></script>
	<script src="js/jquery.easing-1.3.pack.js"></script>
	<script src="js/tweetie.min.js"></script>
	
	<script src="js/jquery.nav.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.fitvids.js"></script>
	<script src="js/grid.js"></script>
	<script src="js/custom.js"></script>
</body>
<script>
	function searchitem(){
			
		var searchtext = $('#search').val().toLowerCase();
		$('.mix').each(function( index ) {
		{	var text = $(this).find('.backtext').html().toLowerCase();
			
			if( text.search(searchtext) != -1)
			    $(this).show();
			else
			    $(this).hide("100");
		}
		});
		
		
	}
</script>	
<script>
$('.tbl-accordion-nested').each(function(){
  var thead = $(this).find('thead');
  var tbody = $(this).find('tbody');
  
  tbody.hide(function(){
   
   });
  thead.click(function(){
    tbody. slideToggle();
    $("tbody").addClass("animated fadeIn");
  })
})
</script>
<script>
	function searchitem(){
			
		var searchtext = $('#search').val().toLowerCase();
		$('.mix').each(function( index ) {
		{	var text = $(this).find('.backtext').html().toLowerCase();
			
			if( text.search(searchtext) != -1)
			    $(this).show();
			else
			    $(this).hide("100");
		}
		});
		
		
	}
</script>	

</html>