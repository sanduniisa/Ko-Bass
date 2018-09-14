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

				<h1 style="text-align:center;">Find Your Technician</h1>
				<form action="user.php" method="post" class="center">				

				Select the technician type:
				<?php 
					$result = $conn->query("select typeid, typename from techtype");	
					echo "<select name=\"ocp\" style=\"margin-left:100px\">";
					echo '<option value="">Select technician type</option>';
					while ($row = $result->fetch_assoc()) {
						unset($id, $name);
						$id = $row['typeid'];
						$name = $row['typename'];
						echo '<option value="'.$id.'">'.$name.'</option>'; 
					}
					echo "</select><br><br>";
				?>

				Select your city:
				<?php
					$result = $conn->query("select cityname from city");	
					echo "<select name=\"city\" style=\"margin-left:175px\">";
					echo '<option value="">Select your city</option>';
					while ($row = $result->fetch_assoc()) {
						unset($cname);
						$cname = $row['cityname']; 
						echo '<option value="'.$cname.'">'.$cname.'</option>'; 
					}
					echo "</select><br><br>";
				?>
				
				<input type="submit" name="Search" value="Go" style="width:80px;height:30px;margin-left:262px;"><br>
				</form>

				<?php
					if (isset($_POST['Search'])) {
						
						$ocp=$_POST['ocp'];
						$city=$_POST['city'];
						
						if ($ocp != "" && $city != ""){

							echo '<form action="user2.php" method="post" class="center">';
							echo 'Select your issue:';
							$result = $conn->query("select SkID, SkillName from skill where SkID like '%$ocp%'");	
							echo "<select name=\"skill\" style=\"margin-left:168px\">";
							while ($row = $result->fetch_assoc()) {
								unset($skid, $skname);
								$skid = $row['SkID'];
								$skname = $row['SkillName']; 
								echo '<option value="'.$skid.'">'.$skname.'</option>'; 
							}
							echo "</select><br><br>";
							echo '<input type="hidden" name="ocu" value="'.$ocp.'">';
							echo '<input type="hidden" name="cityname" value="'.$city.'">';
							echo '<input type="submit" name="Search2" value="Find Technician" style="width:110px;height:30px;margin-left:262px;"><br>';
						}else{
							echo "Please select both technician and the city!";
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
