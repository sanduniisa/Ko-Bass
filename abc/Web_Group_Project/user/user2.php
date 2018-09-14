<?php
	session_start();
        
    if(!isset($_SESSION['user_id']))
    {
      header('location: ../login');
      exit;
    }
	include '../dbconf/dbh.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Find Technician</title>
		<link rel="icon" href="../homefiles/fav.png">
		<link rel="stylesheet" type="text/css" href="./main.css">
		<link rel="stylesheet" type="text/css" href="./style.css">
		<style>
			table {
				border-collapse: collapse;
				border-spacing: 0;
				width: 90%;
				border: 1px solid #ddd;
				margin-left: 50px;
			}

			th, td {
				text-align: left;
				padding: 16px;
			}

			tr:nth-child(even) {
				background-color: #caccce;
			}
			.center {
				margin: auto ;
				margin-top: 15px;
				margin-bottom: 15px;
				width: 50%;
				padding: auto;
				padding-top: 15px;
				padding-bottom: 15px;
				padding-right: 0;
				border: 1px solid grey;
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
							<a href="../user">Home</a>
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
							<a class="active" href="../services">Services</a>
							<a href="../help">Help</a>
							<a href="../logout">Log Out</a>
						</div>
					</div>
				</header>

				<!--the page views the technician database-->

				<h1 style="text-align:center;">Find Your Technicians Here</h1>

				<?php
					if (null !==(filter_input(INPUT_POST, 'Search2'))){
						if (isset($_POST['Search2'])) {
							//$ocp=$_POST['ocp'];
							//$city=$_POST['city'];
							$skill=$_POST['skill'];
							$var_value1 = $_POST['ocu'];
							$var_value2 = $_POST['cityname'];
							//echo $var_value1;
							//echo $var_value2;
							//echo $skill;
							$sql = "SELECT FirstName, LastName, Email, ContactNo, Rate FROM technician WHERE TechID IN (SELECT TechID FROM techskill WHERE SkID ='$skill') AND City='$var_value2'";
							$sql2 = "INSERT INTO techcount (techid) VALUES ('$var_value1');";
							$sql3 = "INSERT INTO skillcount (skid) VALUES ('$skill');";
							$result2 = mysqli_query($conn, $sql2);
							$result3 = mysqli_query($conn, $sql3);
							$result=mysqli_query($conn,$sql);
							$queryResult=mysqli_num_rows($result);
							if ($queryResult > 0){
								echo "<table>";
								echo "<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Contact No</th><th>Rate (Rs.)</th></tr>";
								while ($row=mysqli_fetch_assoc($result)){
									//$uname = $row['TechID'];
									$first = $row['FirstName'];
									$last = $row['LastName'];
									$email = $row['Email'];
									$cont = $row['ContactNo'];
									$rate = $row['Rate'];
									echo "<tr><td>".$first."</td><td>".$last."</td><td>".$email."</td><td>".$cont."</td><td>".$rate."</td></tr>";    									
									}							
							echo "</table>";
							echo '<br><br><a href="./user.php">Go Back</a>';
							}else{
								echo "Sorry no results found!<br><br>";
								echo '<a href="./user.php">Go Back</a>';
							}
						}
					}

				

				?>
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
