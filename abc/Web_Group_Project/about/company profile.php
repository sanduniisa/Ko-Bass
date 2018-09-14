<?php
	session_start();
    include '../dbconf/dbh.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Company Profile</title>
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
							<button class="dropbtn"><a class="active" href="./">About Us</a> 
							</button>
							<div class="dropdown-content">
								<a class="active" href="company profile.php">Company Profile</a>
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

				<div class = "wrapper">
					<div class="head-bar">
						<div class="left-text">
							<h1>We inspire each other and the industry through our values - trust, growth, innovation and equality.</h1>
						</div><!--left-text-->
						<div class="right-banner-image">
							<img src="image/company-profile-620x302.jpg" width="40%" alt="about-us">
						</div><!--right-banner-image-->
					</div><!--head-bar-->
				
					<div class = "text">
						<table width="90%" border="0" cellspacing="1" cellpadding="3" style="margin:55px">
							<tbody>
								<tr class="purpose">
									<td valign="top" width="100%">
										<div class="qir-blue-2 qir-h5">Our Purpose</div>
										<br>
										<p style="text-align:justify">Find Lanka offers incident based services for Home Solution, Business Solution and Enterprise Solution.
										Our delivery has remote teach support. It offers a comprehensive suite of service offering including optimization, diagnosis and repair, setup & install, virus removal, usability training, networking and managed services.
										Customers can choose from various channels to contact us, including web based support, real time phone, chat and e-mail or ground technicions.
										The customer satisfaction scores of Find Lanka are amongest highest in the technical support industry.</p>
									</td>
								</tr><!--purpose-->
							</tbody>
						</table>
						<div class="home2 clearfix">
							<div class="home-col2">
								<img src="image/valuepurpose.png" width="100%" alt="purpose">
							</div><!--home-col2-->
							<div class="home-col2">
								<h1>Our Goal</h1>
								<br>
								<p>To build good reputation in the field of real estate and property management and become a key player in the industry.</p>
								<br>

								<h1>Our Vision</h1>
								<br>
								<p>To provide quality services that exceeds the expectations of our esteemed customers.</p>
								<br>

								<h1>Our Mission</h1>
								<br>
								<p>To built long term relationship with our customers and provide exceptional customer services by innovation and advance technology.</p>
								<br>

								<h1>Core Value</h1>
								<br>
								<p>We believe in treating our customers with respect and faith. We grow through creativity invention and innovation.</p>

							</div><!--home-col2-->
						</div><!--home2 clearfix-->
					</div><!--text-->
				</div><!--wrapper-->
				<!--end edit from here--><!--methanin nathara karanna-->
			</div>
		</div>	

		<footer class="stickyfooter">
			<p class="footerleft" style="margin-top:0;margin-bottom: 0px;color: white"> &copy; Find Lanka Incorporated. 2018 | All Rights Reserved.</p>
			<div class="footerright">
				<a href="https://www.facebook.com/"><img src="../homefiles/facebook.png" class="foot"></a>
				<a href="https://twitter.com/"><img src="../homefiles/twitter.png" class="foot"></a>
				<a href="https://www.linkedin.com"><img src="../homefiles/linkedin.png" class="foot"></a>
			</div>
			<div style="clear: both"></div>
		</footer>
	</body>
</html>
