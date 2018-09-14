<?php
	session_start();
    include './dbconf/dbh.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Find Lanka</title>
		<link rel="icon" href="./homefiles/fav.png">
		<link rel="stylesheet" type="text/css" href="./main.css">
		<link rel="stylesheet" type="text/css" href="./style.css">
		<style>
			.container {
				border: 2px solid #ccc;
				background-color: #eee;
				border-radius: 5px;
				padding: 16px;
				margin: 16px;
			}
			.one{
				margin-left: 20px;
				margin-top: 10px
			}
			.size{
				width: 400px;
				//height: 1000px;
			}
			.btn {
			padding: 10px;
			font-size: 15px;
			color: white;
			background: #5F9EA0;
			border: none;
			border-radius: 5px;
			}	
			.form{
				border-style: solid;
				border-width: 25px;
				border-color: 	#008B8B;
			}
			.p{

				font-family: Times New Roman;
				font-size: 30px;
				color: grey;
			}
			.stickyfooter {
				background: #333333;
				color: white;
				line-height: 50px;
				padding: 0 20px;
				height: 50px;
				margin-top: -50px;
			}
			.content {
				min-height: 100%;
			}
			.content-inside {
				padding: 0px;
				padding-bottom: 50px;
			}
			.container img {
				float: left;
				margin-right: 20px;
				border-radius: 10%;
			}
			.container::after {
				content: "";
				clear: both;
				display: table;
			}
			.containera:link {
				color: white;
				text-decoration: none;
				background-color: #7f858e;
				display: inline-block;
				padding: 5px 5px;
				border-radius:4px;
			}
			.containera:visited {
				color: white;
				text-decoration: none;
				background-color: #7f858e;
				display: inline-block;
				padding: 5px 5px;
				border-radius:4px;
			}
			.containera:hover {
				color: black;
				text-decoration: none;
				background-color: red;
			}
			.containera:active {
				color: black;
				text-decoration: none;
				background-color: red;
			}
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
							<a href="./" class="logo">FIND LANKA</a>
							<div class="rightnav">
								<?php
									if(!isset($_SESSION['user_id'])){
										echo '<a class="active" href="./">Home</a>';
									}else{
										$admin = $_SESSION['user_id'];
										$sql = "SELECT AdminID FROM admin WHERE AdminID='$admin';";
										$result=mysqli_query($conn,$sql);
										$queryResult=mysqli_num_rows($result);
										if ($queryResult == 1){
											echo '<a href="./admin">Admin Home</a>';	 	
										}
										echo '<a href="./user">Customer Home</a>';
									}			
								?>
								<div class="dropdown">
									<button class="dropbtn"><a href="./about">About Us</a> 
									</button>
									<div class="dropdown-content">
										<a href="./about/company profile.php">Company Profile</a>
										<a href="./about/our story.php">Our Story</a>
										<a href="./about/leadership & management.php">Leadership & Management</a>
									</div>
								</div> 
								<div class="dropdown">
									<button class="dropbtn"><a href="./about/contact us.php">Contact Us</a> 
									</button>
									<div class="dropdown-content">
										<a href="./about/contact support.php">Contact Support</a>
									</div>
								</div> 
								<a href="./services">Services</a>
								<a href="./help">Help</a>
								<?php
									if(!isset($_SESSION['user_id'])){
										echo '<a href="./login">Log in</a>';
										echo '<a href="./signup">Sign Up</a>';
									}else{
										echo '<a href="./logout">Log out</a>';
									}			
								?>
							</div>
						</div>
				</header>
				<!--this page will include company details of the Find Lanka-->
				<div class="container">
					<img src="./homefiles/workers.jpg" alt="Workers"/>
					<p style="font-size:38px">Looking for technicians?<br> In a rush, but nowhere to find them?<br> You came to THE RIGHT PLACE!<br>Register with us to receive our full services.</p>
				</div>
				<div class="container">
					<img style="float:right;margin-right:0px;margin-left:15px;width:500px;height:500px" src="./homefiles/w9.jpg" alt="OneMinute"/>
					<p style="font-size:38px;text-align:center">Our one minute registration process is easy and fast,<br> We only collect your email address,<br> And we guarantee that we do not share it with any other parties without your consent.</p>
				</div>
				<div class="container">
					<img src="./homefiles/w8.jpg" style="width:700px;height:400px" alt="Trust"/>
					<p style="font-size:23px;text-align:justify;margin-top: 40px">&nbsp &nbsp This is a web platform as a solution for day to day domestic issues, which we all come across in our busy lives. In the city of Colombo and other suburban areas, finding a technician to fix an issue in your house is difficult as finding a needle in a haystack.<br>&nbsp &nbsp This scarcity extends to all types of skilled workers such as carpenters, electricians, plumbers, etc. People who look for services of skilled workers can not find them easily and skilled workers who provide these services can not find work.<br>&nbsp &nbsp Therefore, we are here to build up a bridge to satisfy the requirements of the both parties.</p>
				</div>
				<div class="container">
					<img style="float:right;margin-right:0px;margin-left:15px;width:600px;height:400px" src="./homefiles/w3.jpg" alt="OneMinute"/>
					<p style="font-size:38px;text-align:center">For technicians,<br> please contact our office for listing your services in our web site.<br> Within one day you can be listed on our website and start getting job orders...<br><a class="containera" style="margin-top: 20px;" href="./about/contact support.php" target="blank">Contact Us</a></p>
				</div>
				<div style="clear: both"></div>
				<?php
					if(!isset($_SESSION['user_id'])){
						echo '<div class="container" style="background-color:#7f858e;color:white">';
						echo '<p style="font-size:42px;margin:0px"><a class="containera" href="./signup">Register</a>, <a class="containera" href="./login">Login</a>, <a class="containera" href="./services">Go to Servies</a>, Voila...!</p>';
						echo '</div>';
					}else{
						echo '<div class="container" style="background-color:#7f858e;color:white">';
						echo '<p style="font-size:42px;margin:0px">To go to the Customer Homepage<a class="containera" style="margin-left: 5px" href="./user">Click Here</a>!</p>';
						echo '</div>';
					}			
				?>
			</div>
		</div>
		<footer class="stickyfooter">
			<p class="footerleft" style="margin-top:0px;margin-bottom:0px"> &copy; Find Lanka Incorporated. 2018 | All Rights Reserved.</p>
			<div class="footerright">
				<a href="https://www.facebook.com/"><img src="./homefiles/facebook.png" class="foot"></a>
				<a href="https://twitter.com/"><img src="./homefiles/twitter.png" class="foot"></a>
				<a href="https://www.linkedin.com"><img src="./homefiles/linkedin.png" class="foot"></a>
			</div>
			<div style="clear: both"></div>
		</footer>

	</body>
</html>
