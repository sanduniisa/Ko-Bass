<?php
	include '../dbconf/dbh.php';
	session_start();
	
	
	if(isset($_POST['submit']))
	{
		if((isset($_POST['email']) && $_POST['email'] !='') && (isset($_POST['password']) && $_POST['password'] !=''))
		{
			$email = trim($_POST['email']);
			$password = trim($_POST['password']);
			
			$sqlEmail = "select * from customer where email = '".$email."'";
			$rs = mysqli_query($conn,$sqlEmail);
			$numRows = mysqli_num_rows($rs);
			
			if($numRows  == 1)
			{
				$row = mysqli_fetch_assoc($rs);
				
				if(password_verify($password,$row['Password']))
				{
					session_start();
					$_SESSION['cuid'] = $row['CuID'];
					$_SESSION['user_id'] = $row['CustID'];
					$_SESSION['first_name'] = $row['FirstName'];
					$_SESSION['last_name'] = $row['LastName'];
					$_SESSION['email'] = $row['Email'];
					$_SESSION['ContactNo'] = $row['ContactNo'];
					header('location: ../user');
					exit;
					
				}
				else
				{
					echo "<script>alert(\"Wrong Email Or Password!\");</script>";
				}
			}
			else
			{
				echo "<script>alert(\"No User Found!\");</script>"; 
			}
		}
	}
	if(isset($_POST['submit2']))
	{
		if((isset($_POST['email']) && $_POST['email'] !='') && (isset($_POST['password']) && $_POST['password'] !=''))
		{
			$email = trim($_POST['email']);
			$password = trim($_POST['password']);
			
			$sqlEmail = "select * from admin where email = '".$email."'";
			$rs = mysqli_query($conn,$sqlEmail);
			$numRows = mysqli_num_rows($rs);
			
			if($numRows  == 1)
			{
				$row = mysqli_fetch_assoc($rs);
				
				if(password_verify($password,$row['Password']))
				{
					$_SESSION['user_id'] = $row['AdminID'];
					$_SESSION['first_name'] = $row['FirstName'];
					$_SESSION['last_name'] = $row['LastName'];
					$_SESSION['email'] = $row['Email'];
					
					
					header('location: ../admin');
					exit;
					
				}
				else
				{
					echo "<script>alert(\"Wrong Email Or Password!\");</script>";
				}
			}
			else
			{
				echo "<script>alert(\"No User Found!\");</script>";
			}
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="icon" href="../homefiles/fav.png">
		<link rel="stylesheet" type="text/css" href="../about/style.css">
		<link rel="stylesheet" type="text/css" href="./stylelogin.css">
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
				color: black;
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
							<a class="active" href="../login">Log in</a>
							<a href="../signup">Sign Up</a>
						</div>
					</div>
				</header>
				
				<div class="tbox" style="margin-top: 15px">
					<img src="log1.png" class="paint" style="margin-top:0px">
					<h1>Login Here</h1>
					<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" style="margin:0px">
						<p>Email</p>
						<input type="text" name="email" placeholder="Enter Email" class="answers" required>
						<p>Password</p>
						<input type="password" name="password" placeholder="Enter Password" class="answers" required>
						<input type="submit" name="submit" style="cursor: pointer;" value="Customer Login" class="login"><br>
						<input type="submit" name="submit2" style="cursor: pointer;" value="Admin Login" class="login"><br>
						<a href="../signup" class="havent">Don't have an account?</a>
					</form>	
				</div>
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