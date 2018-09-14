<?php
	session_start();
	include '../dbconf/dbh.php';
	include './adhead.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Administration</title>
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
							<a href="./">Home</a>
							<a href="./users.php">User Administration</a>
							<a href="./customer.php">Customers</a>
							<a class="active" href="./technician.php">Technicians</a>
							<a href="./reports.php">Reports</a>
							<a href="../logout">Log out</a>
						</div>
					</div>
				</header>

				<!--the page views the technician database-->

				<h1 style="text-align:center;">Technician Database</h1>
				<form action="technician.php" method="post" class="center">
				<?php /*
					$result = $conn->query("select typeid, typename from techtype");	
					//echo "<select name=\"skid\" style=\"margin-left:100px\">";
					//echo '<option value="">Leave empty for a customer</option>';
					while ($row = $result->fetch_assoc()) {
						unset($id, $name);
						$id = $row['typeid'];
						$name = $row['typename']; 
						//echo '<option value="'.$id.'">'.$name.'</option>'; 
						echo '<input type="radio" name="radio" value='.$name.'>'.$name.'';
						if (isset($_POST['radio']) && ($_POST['radio'])==".$name.") {echo "checked";}
					}
					echo "</select><br><br>";*/
				?>

				Select Technician Type:
				<?php 
					$result = $conn->query("select typeid, typename from techtype");	
					echo "<select name=\"ocp\" style=\"margin-left:100px\">";
					echo '<option value="all">Select all Technician Types</option>';
					while ($row = $result->fetch_assoc()) {
						unset($id, $name);
						//$id = $row['typeid'];
						$name = $row['typename']; 
						echo '<option value="'.$name.'">'.$name.'</option>'; 
					}
					echo "</select><br><br>";
				?>
				
				<input type="submit" name="Search" value="Search" style="width:80px;height:30px;margin-left:262px;">
				<input type="submit" name="messages" value="View Messages" style="width:110px;height:30px"><br>
				<!--<input type="radio" name="radio" <?php //if (isset($_POST['radio']) && ($_POST['radio'])=="Carpenter") {echo "checked";}?> value="Carpenter" >Carpenter
					<input type="radio" name="radio" <?php //if (isset($_POST['radio']) && ($_POST['radio'])=="Electrician") {echo "checked";}?> value="Electrician">Electrician
					<input type="radio" name="radio" <?php //if (isset($_POST['radio']) && ($_POST['radio'])=="IT technician") {echo "checked";}?> value="IT technician">IT Technician
					<input type="radio" name="radio" <?php //if (isset($_POST['radio']) && ($_POST['radio'])=="all") {echo "checked";}?> value="all">All
					<input type="submit" name="Search" value="Search" style="width:80px;height:30px;margin-left:150px;"><br>-->
				</form>

				<?php
					if (isset($_POST['Search'])) {
						$occupation=$_POST['ocp'];
						if ($occupation == "all") {
							$sql = "SELECT TechID, FirstName, LastName, Email, ContactNo, Occupation FROM technician;";
							$result=mysqli_query($conn,$sql);
							$queryResult=mysqli_num_rows($result);
							if ($queryResult > 0){
								echo "<table>";
								echo "<tr><th>TechID</th><th>FirstName</th><th>LastName</th><th>Email</th><th>ContactNo</th><th>Occupation</th></tr>";
								while ($row=mysqli_fetch_assoc($result)){
									$uname = $row['TechID'];
									$first = $row['FirstName'];
									$last = $row['LastName'];
									$email = $row['Email'];
									$cont = $row['ContactNo'];
									$occ = $row['Occupation'];
									echo "<tr><td>".$uname."</td><td>".$first."</td><td>".$last."</td><td>".$email."</td><td>".$cont."</td><td>".$occ."</td></tr>";    
								}
								echo "</table>";
								echo "<br>";
							}
						}
						
						else{
							$sql = "SELECT TechID, FirstName, LastName, Email, ContactNo, City FROM technician WHERE Occupation='$occupation';";
							$result=mysqli_query($conn,$sql);
							$queryResult=mysqli_num_rows($result);
							if ($queryResult > 0){
								echo "<table>";
								echo "<tr><th>TechID</th><th>FirstName</th><th>LastName</th><th>Email</th><th>ContactNo</th><th>City</th></tr>";
								while ($row=mysqli_fetch_assoc($result)){
									$uname = $row['TechID'];
									$first = $row['FirstName'];
									$last = $row['LastName'];
									$email = $row['Email'];
									$cont = $row['ContactNo'];
									$city = $row['City'];
									echo "<tr><td>".$uname."</td><td>".$first."</td><td>".$last."</td><td>".$email."</td><td>".$cont."</td><td>".$city."</td></tr>";    
								}
								echo "</table>"; 
								echo "<br>";
							}
						}
					}

					if (null !==(filter_input(INPUT_POST, 'messages'))){
						$sql = "SELECT name, subject, email, note FROM techcontact;";
						$result=mysqli_query($conn,$sql);
						$queryResult=mysqli_num_rows($result);
						if ($queryResult > 0){
							echo "<table>";
							echo "<tr><th>Name</th><th>Subject</th><th>Email</th><th>Note</th></tr>";
							while ($row=mysqli_fetch_assoc($result)){
								$name = $row['name'];
								$subject = $row['subject'];
								$email = $row['email'];
								$note = $row['note'];
								echo "<tr><td>".$name."</td><td>".$subject."</td><td>".$email."</td><td>".$note."</td></tr>";    
								}
						echo "</table>";}				
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
