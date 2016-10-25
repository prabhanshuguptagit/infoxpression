<?php include'core/init.php';
error_reporting(0);

?>
<html>

<head>

<title>InfoX 2016 | Annual Tech fest of GGSIPU </title>
 <base href="http://www.infoxpression.in/">
  <meta name="keywords" content="Infoxpression 2016,USICT Technical fest,GGSIPU Technical fest,IP Technical fest,Indraprastha Technical fest,IPU TEchnical fest,INFOX,Infox,Infox technical fest,Infoxpression,INFOX USICT,USICT,IPU" />
  <meta name="description" content="InfoXpression is the annual techno-cultural fest of Guru Gobind Singh Indraprastha University organized by University school of Information and Communication Technology. It is the biggest technical extravaganza held at Guru Gobind Singh Indraprastha University, and involves an active participation of students from over 250 colleges of north India. An exhilarating voyage of technical know-how, InfoXpression focuses on the promotion of technology and innovation. It gives you a chance to stop, culminate new ideas and showcase your technical expertise. The fest is a three day grandeur which involves a series of competitions, workshops and guest lectures by some eminent personalities. InfoXpression is an amalgamation of creativity and imagination. It will be a perfect blend of entertainment and technology with the aim of transformation and empowerment of the society." />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="infox usict infoxpression technical fest ggsipu ipu march festival">
	<meta name="author" content="Cogitans [Prabhanshu Gupta][VSP][RJ]">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="rgb(62,57,53)"/>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
	<link rel="stylesheet" href="css/bootstrap.offcanvas.min.css">
	
	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.offcanvas.min.js"></script>
	<script src="js/jquery.nav.js"></script>
	<script src="js/three.min.js"></script>
	<script src="js/CanvasRenderer.js"></script>
	<script src="js/projector.js"></script>
	<script src="js/js2.js"></script>																
	
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Dosis:100,300,400,700,900,300italic,400italic,700italic,900italic" type="text/css" media="all">
	<script>
	function myFunction()
	{	
		$('.canvas-content').height(window.innerHeight);
		$('.canvas-content').width(window.innerWidth);
	
	}
	
	</script>
</head>


<body onresize="myFunction()" >
<script>
document.onload = setTimeout(function(){document.getElementById("load").remove();}, 2000);

</script>
<div id="load"></div>

<section class="canvas-wrap">
        
		<div id="canvas"></div>
		<div class="canvas-content">
		
		<header id="navigation" class="navbar navbar-inverse" style="background-color:rgba(0,0,0,0.3)">
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
					<li class="visible-xs"><br><a class="text-center" href="index.php"><img src="img/logo-infox trans-bg.jpg" alt="Infox 16" height="60" width="60"></a>		<?php 
					if(logged_in()===false)
					{
				?><a href="login.php">Login/Signup</a>		<?php } ?>		<br/></li>
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
				?><a href="login.php"><b>Login/Register</b></a>
				<?php
				}
					else {
						?><div class="usericon dropdown">
						<button class="btn btn-primary dropdown" type="button" data-toggle="dropdown">
						<i class="fa fa-user fa-2x" aria-hidden="true"></i>
						</button>
						  <ul class="dropdown-menu">
							<li><a href="profile.php">My DashBoard</a></li>
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
	
	<div class="headback container visible-xs hidden-md">
	<div class="title text-center">
	
	<div>
		<br>
		<h2><img class="animated fadeIn" src="http://www.innerve-igdtuw.com/a/images/logo.png" alt="Coding Ninja" height="50"> & USICT</h2>
		<h4 class="animated fadeIn">present</h4>
		
		<div class="animated fadeIn " data-wow-duration="1000ms">
		<div class="titleimage" ><img src="img/logo-infox trans-bg.jpg" alt="Infox 16" height="130" width="130">
		<h4>Infoxpression '16<br>21st - 23rd Oct</h4></div>
		<h3>TECHFEST | GGSIPU</h3>
		<h4>Celebrating The Sense of Belonging</h4>
		</div>
		
 	
		
		
	
	</div>
	</div>
	
	</div>
	<div class="row text-center ">
		
	</div>
	<div class="headback container wow fadeInDown hidden-xs" data-wow-duration="500ms">
		<div class="title row " >
		
			<div>
				<br>
				<div class="col-sm-2"></div>
				
				<div class="col-sm-4 animated fadeInLeft wow  rainbow1" data-wow-duration="1000ms">
					 <br>
					 <a href="http://www.codingninjas.in" target="_blank"><img class="animated fadeIn " src="http://www.innerve-igdtuw.com/a/images/logo.png" alt="Coding Ninja" height="80"></a>
					<br>
					<h3 class="titletext">&</h3>
					<br>
					<h1 class="titletext">USICT</h1>
					<h4>present</h4>
					<br><br><br>
  
				</div>
				
				<div class="col-sm-4 container rainbow2">
				
				<div class="animated fadeIn wow" data-wow-duration="1000ms">
				<img src="img/logo-infox trans-bg.jpg" class="titleimage" alt="Infox 16" height="130" width="130">
				<h4>Infoxpression, 2016</h4>
				<br>
				 <h3 class="titletext"> TECHFEST | GGSIPU</h3>
				<h3 class="titletext ">Oct 21st - 23trd 2016<br><br>Celebrating The Sense of Belonging<br></h3>
				

 
				
				</div>
				
			</div>
		</div>
	
	</div>

</section>

	
</body>





</html>