<?php
	session_start();
    include '../dbconf/dbh.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Leadership & Management</title>
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
							<a class="active" href="leadership & management.php">Leadership & Management</a>
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

		<div class = "wrapper">
			<div class="head-bar">
				<div class="left-text">
					<p>Leadership of our company's management to set and achieve challenging goals take swift and decisive action, out perform the competiton and inspire others to perform well.</p>
				</div><!--left-text-->
				<div class="right-banner-image">
					<img src="image/images (6).jpg" alt="leadership">
				</div><!--right-banner-image-->
			</div><!--head-bar-->

			<div class="home2 clearfix">
				<div class="home-col2">
					<h1>Our Organization Chat</h1>
					<img src="image/organization chart.jpg" width="100%" alt="organization">
				</div><!--home-col2-->
				<div class="home-col2">
					<h1>1.Increase Customer Satisfaction</h1>
					<br>
					<p>Provide online self-service options with integrated Knowledge Management and Communities.</p>
					<br>

					<h1>2.Reduce Service Cost</h1>
					<br>
					<p>Drive efficiencies by automating tasks for common customer issues with the servics catalog.</p>
					<br>

					<h1>3.Improve agent and Field Tech Productivity</h1>
					<br>
					<p>Deliver service as a "team sport" by connecting customer service with field service.</p>
					<br>

					<h1>4.Moniter Service Patterns</h1>
					<br>
					<p>Identify trends and proactively to issues.</p>

					<h1>5.Improve Product or Service Quality</h1>
					<br>
					<p>Utilize the internet of Things to identify service and product issues before they affect customers.</p>

				</div><!--home-col2-->
			</div><!--home2 clearfix-->
		</div><!--wrapper-->
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
		
					
