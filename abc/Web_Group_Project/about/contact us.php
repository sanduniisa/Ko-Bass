<?php
	session_start();
    include '../dbconf/dbh.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Contact Us</title>
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
			<div class="content-inside">
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
								<button class="dropbtn"><a href="./">About Us</a> 
								</button>
								<div class="dropdown-content">
									<a href="company profile.php">Company Profile</a>
									<a href="our story.php">Our Story</a>
									<a href="leadership & management.php">Leadership & Management</a>
								</div>
							</div> 
							<div class="dropdown">
								<button class="dropbtn"><a class="active" href="./contact us.php">Contact Us</a> 
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
                    <div class="home4 clearfix">
                            <div class="home-col4">
                                <img src = "image/call.png" width="20%" alt="Image">
                                <h1>Talk to sale</h1>
                                <p>Interestered in Find Lanka's service?</p> 
                                <h3>Just pick up the phone to chat with a number of our sale team.</h3>
                                <h3>011 210 0000</h3>
                                <div class="number">
                                    <a href = "#contact">View Our Numbers &raquo;</a>
                                </div><!--number-->
                            </div><!--home-col4-->
                            <div class="home-col4">
                                <img src = "image/text.jpg"  width="20%" alt="Image">
                                <h1>Contact customer support</h1>
                                <p>Sometimes you need a little help.<br> Don't worry...... we're here for you.</p>
                                <form action = "contact support.php">
                                    <button>Contact Support</button>
                                </form>
                            </div><!--home-col4-->
                    </div><!--home4 clearfix-->
                    <div class = "contact">
					    <h1>Contact one of our staff at any day @ our office</h1>
				    </div><!--contact-->                
                    <div class = "table3">
                        <div class = "office-image">
                            <img src = "image/office.jpg" alt = "image" title = "Sri Lanka">
                        </div><!--office-image-->
                        
                        <div class = "office-text" style="width: 580px">
                            <h2>Address:</h2>
                            <p>20/3, First Street, Colombo 07, Sri Lanka.</p>
                            <h2>Phone:</h2>
                            <p>+11 210 0000<br> +11 220 0000</p>
                            <h2>Fax:</h2>
                            <p>+11 230 0000</p>
                        </div><!--office-text-->
                        
				    </div><!--table3-->                
                    <form action = "#office">
					    <button><b>How to find the Office</b></button>
				    </form>                
                    <div style="clear: both"></div>                
                    <div class = "office" id = "office">
                        <p><strong>Driving :</strong> Refer to directions provided by <a href="https://www.google.com/maps/search/?api=1&query=6.895045, 79.868571" target="_blank"> Google Maps</a>.</p><br>
                        <p><strong>Public Transportation :</strong>The closest option for public transportations are Colombo Fort station and 120/138 main bus road.</p><br>
                        <p><strong>Parking :</strong>We recommend parking in the First Street Garage, which is right next door to the office. Entrance is on Spring Street near First Street.</p>
				    </div><!--office-->            
                    <div class = "texting">
					    <h1 id = "contact">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Our Local Numbers</h1>
				    </div><!--texting-->                
                    <div class = "table4" style="width:1325px">
                        <div class = "table-txt">
                            <p><strong>Nimal</strong><br>+11 6001 6001<br></p>
                            <p><strong>Shani</strong><br>+11 4254 0001<br></p>
                        </div><!--table-txt-->
                        <div class = "table-txt">
                            <p><strong>Kamal</strong><br>+11 5630 1111<br></p>
                            <p><strong>Malki</strong><br>+11 2456 2475<br></p>
                        </div><!--table-txt-->
                        <div class = "table-txt">
                            <p><strong>Nishan</strong><br>+11 2101 2101<br></p>
                            <p><strong>Gihani</strong><br>+11 5656 5676<br></p>
                        </div><!--table-txt-->
                        <div class = "table-txt">
                            <p><strong>Pathum</strong><br>+11 6223 6424<br></p>
                            <p><strong>Akila</strong><br>+11 2401 3401<br></p>
                        </div><!--table-txt-->
				    </div><!--table4-->            
                </div><!--end of wrapper-->
				<div style="padding:250px">
				</div>
			</div>
		</div>
			
		<footer class="stickyfooter">
			<p class="footerleft" style="margin-top:0px;margin-bottom: 0px;color:white"> &copy; Find Lanka Incorporated. 2018 | All Rights Reserved.</p>
			<div class="footerright">
				<a href="https://www.facebook.com/"><img src="../homefiles/facebook.png" class="foot"></a>
				<a href="https://twitter.com/"><img src="../homefiles/twitter.png" class="foot"></a>
				<a href="https://www.linkedin.com"><img src="../homefiles/linkedin.png" class="foot"></a>
			</div>
			<div style="clear: both"></div>
		</footer>
	</body>
</html>
		
					
