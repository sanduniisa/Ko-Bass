<?php
	session_start();
    include '../dbconf/dbh.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>About Us</title>
		<link rel="icon" href="../homefiles/fav.png">
		<link rel="stylesheet" type="text/css" href="./main.css">
		<link rel="stylesheet" type="text/css" href="./style.css">
		<style>
			img.foot {
				width: 38px;
				height: 38px;
				display : inline;
				margin-top: -5px;
				margin-right: 5px;
			}
			.footerright a {
				float: left;
				color: white;
				text-align: center;
				padding-bottom: 0px;
				padding-top: 10px;
				padding-left: 10px;
				padding-right: 10px;
				text-decoration: none;
				font-size: 15px;
				line-height: 25px;
				border-radius: 4px;
			}
		</style>
	</head>
	<body>
		<header>
			<div class="navbar">
				<a href="../" class="logo">FIND LANKA</a>
				<div class="rightnav">
					<?php
						if(!isset($_SESSION['user_id'])){
							echo '<a href="../">Home</a>';
						}else{
							echo '<a href="../user">Home</a>';
						}			
					?>
					<div class="dropdown">
						<button class="dropbtn"><a class="active" href="./">About Us</a> 
						</button>
						<div class="dropdown-content">
							<a href="company profile.php">Company Profile</a>
							<a href="our story.php">Our Story</a>
							<a href="leadership & management.php">Leadership & Management</a>
						</div>
					</div> 
					<div class="dropdown">
						<button class="dropbtn"><a href="./contact us.php">Contact Us</a> 
						</button>
						<div class="dropdown-content">
							<a href="contact support.php">Contact Support</a>
						</div>
					</div> 
					<a href="../services">Services</a>
					<a href="../help">Help</a>
					<?php
						if(!isset($_SESSION['user_id'])){
							echo '<a href="../login">Log in</a>';
							echo '<a href="../signup">Sign Up</a>';
						}else{
							echo '<a href="../logout">Log out</a>';
						}			
					?>
					
				</div>
			</div>
		</header>

		<!--edit from here-->
		<div class = "wrapper">
			<div class="head-bar">
				<div class="left-text">
					<h1>Standard Service and Support Plans</h1>
					<p>Find Lanka Global services offer a number of Advanced Services that allow you to customize your support and integration plan to achieve just the right amount of coverage</p>
				</div><!--left-text-->
				<div class="right-banner-image">
					<img src="image/download.png" alt="about-us">
				</div><!--right-banner-image-->
			</div><!--head-bar-->

			<div class="home1 clearfix">
				<div class="home-col">
					<h2>Our Service plans are designed to keep your data safe, protecting it even before issues arise</h2>
					<div class="imge1">
						<img src="image/images.jpg" alt="bout-us">
					</div><!--img1-->
					<p>With growing volumes of information, increased security restrictions, and the huge impact that inaccessible or lost data can have on your resources, it's important to have a comprehensive solution in place to manage it all.</p>
					<p>Find Lanka offers plans designed to fit your unique needs in 24/7 online and multilingual phone support, and proactive monitoring. You'll also get access to online self-service, which allows you to log and track your service calls in real time.
					</p>
				</div><!--home-col-->
				<div class="home-col">
					<h2>Some Our services</h2>
					<div class="Services">
						<img src="image/images.png" alt="service">
						<h3>ICT Technicians</h3>
						<p>Support the design, development, installation, opertion, testing and problem solving of the hardware and software.</p>
					</div><!--Services-->
					<div class="Services">
						<img src="image/ARCHITECTURAL-SERVICES-_icon.png" alt="service">
						<h3>Architectural Designers</h3>
						<p>The building technologist, provides technical building design services and solutions.</p>
					</div><!--Services-->
					<div class="Services">
						<img src="image/el_icon_12.png" alt="service">
						<h3>Electricians</h3>
						<p>The trademan specializing in electrical wiring of buildings, stationary machines and related equipment.</p>
					</div><!--Services-->
					<div class="Services">
						<img src="image/2351821.png" alt="service">
						<h3>Plumbers</h3>
						<p>A complex arrangement of rigid steel piping and stop valves regulate flow to various parts of the building.</p>
					</div><!--Services-->
					<a href="../services">View All Of Our Services &raquo;</a>
				</div><!--home-col-->
				<div class="home-col">
					<div class="about">
						<h2>Cost-Effective Essential Support</h2>
						<p>Delivers support essentials during business hours, including access to skilled technical support, next business day delivery of replacement parts, and installation of non-customer replaceable components to ensure trouble-free problem resolution.</p>
					</div><!--about-->
					<div class="about">
						<h2>Mission-Critical Premium Support</h2>
						<p>This support plan provides mission-critical support for fastest resolution, including 24x7 technical assistance, proactive remote monitoring and resolution, priority onsite critical issue response, 24x7 delivery and installation of all replacement parts.</p>
					</div><!--about-->
				</div><!--home-col-->
			</div><!--home1 clearfix-->
		</div><!--wrapper-->
		<!--end edit from here-->

		<footer>
			<div class="footer" style="position:relative">
			<p class="footerleft" style="padding-top: 4px;color:white"> &copy; Find Lanka Incorporated. 2018 | All Rights Reserved.</p>
			<div class="footerright">
				<a href="https://www.facebook.com/"><img src="../homefiles/facebook.png" class="foot"></a>
				<a href="https://twitter.com/"><img src="../homefiles/twitter.png" class="foot"></a>
				<a href="https://www.linkedin.com"><img src="../homefiles/linkedin.png" class="foot"></a>
			</div>
			<div style="clear: both;"></div>
			</div>
		</footer>
	</body>
</html>
		
					
