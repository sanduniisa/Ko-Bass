<?php
	session_start();
    include '../dbconf/dbh.php';
?>
<!DOCTYPE html>
<html>
	<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Help</title>
    <link rel="icon" href="../homefiles/fav.png">
		<link rel="stylesheet" type="text/css" href="../main.css">
		<link rel="stylesheet" type="text/css" href="../style.css">
    <style>
      .container {
        border: 2px solid #ccc;
        background-color: #eee;
        border-radius: 5px;
        padding: 16px;
        margin: 16px;
      }
      .container li{
        text-align:left;
        font-weight:bold;
      }
      .img2{
        border: 1px 
        vertical-align:50%;
        left:50%;
        width:350px;
        height:300px;
        }
      .container::after {
        content: "";
        clear: both;
        display: table;
      }

      .container img {
        float: left;
        margin-right: 20px;
        border-radius: 50%;
      }

      .container span {
        font-size: 20px;
        margin-right: 15px;
      }

      @media (max-width: 500px) {
        .container {
            text-align: center;
        }
        .container img {
            margin: auto;
            float: none;
            display: block;
        }
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
      body{
        background-color:gainsboro;
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
									<button class="dropbtn"><a href="../about">About Us</a> 
									</button>
									<div class="dropdown-content">
										<a href="../about/company profile.php">Company Profile</a>
										<a href="../about/our story.php">Our Story</a>
										<a href="../about/leadership & management.php">Leadership & Management</a>
									</div>
								</div> 
								<div class="dropdown">
									<button class="dropbtn"><a href="../about/contact us.php">Contact Us</a> 
									</button>
									<div class="dropdown-content">
										<a href="../about/contact support.php">Contact Support</a>
									</div>
								</div> 
								<a href="../services">Services</a>
								<a class="active" href="../help">Help</a>
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


        <div class="container">
          <img src="./sup1.png" alt="Avatar" style="width:165px">
          <h1 style="text-align:left">How To Use Our Web Page.</h1><br><br>
          <ul>
            <li>Login to our site</li>
            <li>Sign up if you are not an existing user</li>
            <li>Go to Services Tab</li>
            <li>Click On the find the technician button</li>
            </ul>          
        </div>

        <div class="container">
          <img src="./sup3.png" alt="Find Lanka" style="width:165px">
          <h1 style="text-align:left">How To Find a Suitable Technician.</h1><br><br>
          <ul>
            <li>First select the technician type you want</li>
            <li>Then select the city you want the technician from</li>
            <li>Click Go</li>
            <li>Then select the suitable issue type</li>
            <li>Then Click Go</li>
            <li>Finally from the table find a suitable technician for your need</li>
          </ul>                    
        </div>
        <h2 align="center">Remember you need to be logged on to our site to use our services.</h2>
        <p align="center" style="font-weight:bold">If you have any questions please don't hesitate to contact us from the <a class="containera" href="../about/contact support.php" target="blank">contact support</a> page.</p>
        <p align="center"><img class="img2" src="./sup2.png" alt="Tech Help"></p>
      </div>
		</div>
		<footer class="stickyfooter">
			<p class="footerleft" style="margin-top:0px;margin-bottom:0px"> &copy; Find Lanka Incorporated. 2018 | All Rights Reserved.</p>
			<div class="footerright">
        <a href="https://www.facebook.com/"><img src="../homefiles/facebook.png" class="foot"></a>
				<a href="https://twitter.com/"><img src="../homefiles/twitter.png" class="foot"></a>
				<a href="https://www.linkedin.com"><img src="../homefiles/linkedin.png" class="foot"></a>
			</div>
			<div style="clear: both"></div>
		</footer>
  </body>
</html>
