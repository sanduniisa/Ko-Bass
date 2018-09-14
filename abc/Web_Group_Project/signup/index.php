<?php
    include '../dbconf/dbh.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sign Up</title>
		<link rel="icon" href="../homefiles/fav.png">
		<link rel="stylesheet" type="text/css" href="../about/style.css">
		<style>
			footer {
				background: #42A5F5;
				color: white;
				line-height: 50px;
				padding: 0 20px;
			}
			.center {
				margin: auto ;
				margin-top: 15px;
				margin-bottom: 15px;
				width: 55%;
				padding: 10px 50px 10px 50px;
				text-align: center;
				border: 2px solid grey;
				background-color: #c6cbd3;
				border-radius: 20px;
				font-size: 20px;
			}
			button:hover {
				background-color: #111111;
				color: white; }

			input[type=text], input[type=email], input[type=password], select {
				border-radius: 5px;
				width:95%;
				height: 25px;
				margin-bottom: 12px;
				margin-top: 9px;
				background-color: #F8F9F9;
			}
			input{
				margin-bottom: 9px;
			}

			.rest {
				margin: auto ;
				margin-top: 15px;
				width: 60%;
				padding: 10px 10px 10px 50px;
				text-align: center;
				background-color: #cbd1db;
			}
			button {
				background-color: #333333; 
				border: none;
				color: white;
				padding: 15px 0px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				margin: 10px 20px 10px 10px;
				border-radius:5px;
				width: 200px;
			}
			.signup{
				float: right;
				color: #fff;
				background-color: #333333;
				border-color: #ffffff;
				margin-right: 44px;
				padding: 10px 24px;
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
		<script>
			var check = function() {
				if (document.getElementById('password').value == document.getElementById('confirm_password').value) {
					document.getElementById('message').style.color = 'green';
					document.getElementById('message').innerHTML = 'Password confirmed!';
				} else {
					document.getElementById('message').style.color = 'red';
					document.getElementById('message').innerHTML = 'Not matching';
				}
			}
		</script>
		<div class="content">
			<div class="content-inside" style="text-align:center">
				<header>
					<div class="navbar">
						<a href="../" class="logo">FIND LANKA</a>
						<div class="rightnav">
							<a  href="../">Home</a>
							<div class="dropdown">
								<button class="dropbtn" style="width:99px"><a href="../about">About Us</a> 
								</button>
								<div class="dropdown-content">
									<a href="../about/company profile.php">Company Profile</a>
									<a href="../about/our story.php">Our Story</a>
									<a href="../about/leadership & management.php">Leadership & Management</a>
								</div>
							</div> 
							<div class="dropdown">
								<button class="dropbtn" style="width:114px"><a href="../about/contact us.php">Contact Us</a> 
								</button>
								<div class="dropdown-content">
									<a href="../about/contact support.php">Contact Support</a>
								</div>
							</div> 
							<a href="../services">Services</a>
							<a href="../help">Help</a>
							<a  href="../login">Log in</a>
							<a class="active" href="../signup">Sign Up</a>
						</div>
					</div>
				</header>
				<!--this form should be broken into two forms, since it is bad practice to add two kinds of users in one form-->
				<form action="./index.php" method="post">
					<div class="center" style="text-align:center">
						<h1 style="text-align: center">Sign Up</h1><hr>
						<label for="user_name"><b>User Name</b></label><br>
						<input type="text" name="custid" placeholder="Enter User Name.." required autofocus><br>
						<label for="first_name"><b>First Name</b></label><br>
						<input type="text" name="fname" placeholder="Enter First Name.." required><br>
						<label for="last_name"><b>Last Name</b></label><br>
						<input type="text" name="lname" placeholder="Enter Last Name.." required><br>
						<label for="email"><b>Email Address</b></label><br>
						<input type="email" name="email" placeholder="Enter your email address.." required><br>
						<label for="contact_no"><b>Contact No</b></label><br>
						<input type="text" name="contact" placeholder="Enter your contact number.." required><br>
						<label for="password"><b>Password</b></label><br>
						<input type="password" id="password" onkeyup='check();' name="password" placeholder="Enter password.." required><br>
						<label for="confirm"><b>Confirm Password</b></label><br>
						<input type="password" name="confirm" id="confirm_password"  onkeyup='check();' placeholder="Confirm your password.." required><br>
						<span id='message'></span><br>
						<button type="submit" name="submit" class="signup">Sign Up</button>
						<div style="clear: both"></div>
					</div>
				</form>
			</div>
		</div>
		<footer class="stickyfooter">
			<p class="footerleft" style="margin-top:0"> &copy; Find Lanka Incorporated. 2018 | All Rights Reserved.</p>
			<div class="footerright">
				<a href="https://www.facebook.com/"><img src="../homefiles/facebook.png" class="foot"></a>
				<a href="https://twitter.com/"><img src="../homefiles/twitter.png" class="foot"></a>
				<a href="https://www.linkedin.com"><img src="../homefiles/linkedin.png" class="foot"></a>
			</div>
			<div style="clear: both"></div>
		</footer>	
	</body>
</html>

<?php
	if (null !==(filter_input(INPUT_POST, 'submit'))){
        $uname = filter_input(INPUT_POST,'custid');
        $fname = filter_input(INPUT_POST,'fname');
        $lname = filter_input(INPUT_POST,'lname');
        $cont = filter_input(INPUT_POST,'contact');
        $email = filter_input(INPUT_POST,'email');
        $password = filter_input(INPUT_POST,'password');
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO Customer (CustID,FirstName,LastName,Email,ContactNo,Password) VALUES ('$uname','$fname','$lname','$email','$cont','$hashed_password');";

        $mysqli_query = mysqli_query($conn, $sql);
       
        if (!$mysqli_query){
                    echo "<script>alert(\"Error Occured!\");</script>";
                }else {
                    $tvidr = mysqli_insert_id($conn); 
					echo "<script>alert(\"Successfully registered!\");</script>";
                }
    }
    $mysqli_close = mysqli_close($conn);
?>   
