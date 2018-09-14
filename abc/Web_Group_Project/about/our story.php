<?php
	session_start();
    include '../dbconf/dbh.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Our Story</title>
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
		<div class="content">
			<div class="content-inside" style="text-align:center">
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
								<button class="dropbtn">
									<a class="active" href="./">About Us</a> 
								</button>
								<div class="dropdown-content">
									<a href="company profile.php">Company Profile</a>
									<a class="active" href="our story.php">Our Story</a>
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
				<div class = "wrapper">
					<div class="head-bar">
						<div class="left-text">
							<h1>Our customers' success is our success.</h1>
							<p>Find Lanka has scaled similar heights with their services. Approach 1 million users spread out in Sri Lanka. Find Lanka has been in the forefront to tech support for last three years.</p>
						</div><!--left-text-->
						<div class="right-banner-image">
							<img src="image/our_story_mid.png" width="46%" alt="story">
						</div><!--right-banner-image-->
					</div><!--head-bar-->

					<div class="home3 clearfix">
						<div class="home-col3">
							<h1>Trust</h1>
							<p>We communicate openly with our customers, and do what it takes to keep their data secure.</p>
							<img src="image/download (2).jpg" alt="Trust">
						</div><!--home-col3-->
						<div class="home-col3">
							<h1>Growth</h1>
							<p>We're obsessed with our customers' success and take pride in their achievements.</p>
							<img src="image/download (3).jpg" alt="Growth">
						</div><!--home-col3-->
						<div class="home-col3">
							<h1>Innovation</h1>
							<p>We pursue ideas that could change our company, our country - and maybe even the world.</p>
							<img src="image/images (5).jpg" alt="Innovation">
						</div><!--home-col3-->
						<div class="home-col3">
							<h1>Equality</h1>
							<p>We respect and value employees from every background, and we thrive as a result.</p>
							<img src="image/download (4).jpg" alt="Equality">
						</div><!--home-col3-->
					</div><!--home3 clearfix-->
				</div><!--wrapper-->
				<br>
			</div>
		</div>	
			
		<footer class="stickyfooter">
			<p class="footerleft" style="margin-top:0;margin-bottom:0px;color:white"> &copy; Find Lanka Incorporated. 2018 | All Rights Reserved.</p>
			<div class="footerright">
				<a href="https://www.facebook.com/"><img src="../homefiles/facebook.png" class="foot"></a>
				<a href="https://twitter.com/"><img src="../homefiles/twitter.png" class="foot"></a>
				<a href="https://www.linkedin.com"><img src="../homefiles/linkedin.png" class="foot"></a>
			</div>
			<div style="clear: both"></div>
		</footer>
	</body>
</html>
		
					
