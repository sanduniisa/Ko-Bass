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
				width: 50%;
				padding: 10px;
				text-align: center;
				border: 2px solid grey;
				background-color: #c6cbd3;
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
				<?php
					include 'userheader.php';
				?>
				<h1 style="text-align:center">Change User Details</h1>
				<div class ="center">
				<form method="post" action="edit.php">
					Enter username: <input type="text" name="uname"><br><br>
					<button type="submit" name="sub">Search Admin</button>
					<button type="submit" name="sub2">Search Technician</button><br>
				</form>
				</div>
				<?php
					if (null !==(filter_input(INPUT_POST, 'sub'))){
							$uname=mysqli_real_escape_string($conn,filter_input(INPUT_POST, 'uname'));
							$sql = "SELECT AdminID, FirstName, LastName, ContactNo, Email FROM admin WHERE AdminID='$uname';";
							$result=mysqli_query($conn,$sql);
							$queryResult=mysqli_num_rows($result);
							if ($queryResult > 0){
								echo "<p style=\"font-size:18px;text-align:center\">User is available</p>";
								echo "<div class=\"rest\">";
								echo "<table style=\"width:100%\">";
								echo "<tr><th>Username</th><th>First Name</th><th>Last Name</th><th>Contact No</th><th>Email</th></tr>";
								while ($row=mysqli_fetch_assoc($result)){
									$uname = $row['AdminID'];
									$fname = $row['FirstName'];
									$lname = $row['LastName'];
									$cont = $row['ContactNo'];
									$email = $row['Email'];
									echo "<tr><td>".$uname."</td><td>".$fname."</td><td>".$lname."</td><td>".$cont."</td><td>".$email."</td></tr>";    
									}
								echo "</table>";
								echo "</div>";
							}else {
								echo "<p style=\"text-align:center\">User not available</p>";
							}
						}

					if (null !==(filter_input(INPUT_POST, 'sub2'))){
						$uname=mysqli_real_escape_string($conn,filter_input(INPUT_POST, 'uname'));
						$sql = "SELECT TechID, FirstName, LastName, ContactNo, Email, Occupation, City, Rate FROM Technician WHERE TechID='$uname';";
						$result=mysqli_query($conn,$sql);
						$queryResult=mysqli_num_rows($result);
						if ($queryResult > 0){
							echo "<p style=\"font-size:18px;text-align:center\">User is available</p>";
							echo "<div class=\"rest\">";
							echo "<table style=\"width:100%\">";
							echo "<tr><th>Username</th><th>First Name</th><th>Last Name</th><th>Contact No</th><th>Email</th><th>Occupation</th><th>City</th><th>Rate</th></tr>";
							while ($row=mysqli_fetch_assoc($result)){
								$uname = $row['TechID'];
								$fname = $row['FirstName'];
								$lname = $row['LastName'];
								$cont = $row['ContactNo'];
								$email = $row['Email'];
								$ocp = $row['Occupation'];
								$city = $row['City'];
								$rate = $row['Rate'];
								echo "<tr><td>".$uname."</td><td>".$fname."</td><td>".$lname."</td><td>".$cont."</td><td>".$email."</td><td>".$ocp."</td><td>".$city."</td><td>".$rate."</td></tr>";    
							}
							echo "</table>";
							echo "</div>";
							
						}else {
							echo "<p style=\"text-align:center\">User not available</p>";
						}
					}
				?>

				<hr>
					
				<form action="edit.php" method="post">
					<div class="center" style="text-align:center">
						<h3 style="text-align:center;">Enter Details to change</h3>
						User Name: <input type="text" name="uname" value="" style="margin-left:50px" required/><br><br>
						First Name: <input type="text" name="fname" value="" style="margin-left:50px" required/><br><br>
						Last Name: <input type="text" name="lname" value="" style="margin-left:50px" required/><br><br>
						Contact Number: <input type="text" name="cont" value="" required/><br><br>
						Email: <input type="text" name="email" value="" style="margin-left:90px" required/><br><br>
						Password: <input type="password" placeholder="Leave empty for technician" id="password" name="pw" value="" style="margin-left:60px" onkeyup='check();'/><br><br>
						Confirm Password:<input type="password" placeholder="Leave empty for technician" name="confirm_password" id="confirm_password"  onkeyup='check();' style="margin-left:5px"/><br> 
  						<span id='message' style="margin-left:120px"></span><br>
						City: 
						<!--these kinds of select statements should be changed into php to auto populate-->
						<?php 
							$result = $conn->query("select cityname from city");	
							echo "<select name=\"city\" style=\"margin-left:102px\">";
							echo '<option value="">Leave empty for admin</option>';
							while ($row = $result->fetch_assoc()) {
								unset($id, $name);
								$name = $row['cityname']; 
								echo '<option value="'.$name.'">'.$name.'</option>'; 
							}
							echo "</select><br><br>";
						?>
						Occupation:
						<?php 
							$result = $conn->query("select typename from techtype");	
							echo "<select name=\"ocp\" style=\"margin-left:48px\">";
							echo '<option value="">Leave empty for admin</option>';
							while ($row = $result->fetch_assoc()) {
								unset($id, $name);
								$name = $row['typename']; 
								echo '<option value="'.$name.'">'.$name.'</option>'; 
							}
							echo "</select><br><br>";
						?>
						Skill:
						<?php 
							$result = $conn->query("select SkID, SkillName from skill");	
							echo "<select name=\"skid\" style=\"margin-left:100px\">";
							echo '<option value="">Leave empty for admin</option>';
							while ($row = $result->fetch_assoc()) {
								unset($id, $name);
								$id = $row['SkID'];
								$name = $row['SkillName']; 
								echo '<option value="'.$id.'">'.$name.'</option>'; 
							}
							echo "</select><br><br>";
						?>
						Rate: <input type="text" name="rate" placeholder="Leave empty for admin" value="" style="margin-left:98px"/><br><br>
						<button type="submit" name="edit" style="width:210px">Change Admin Details</button>
						<button type="submit" name="edit2" style="width:210px">Change Technician Details</button>
						
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
	if (null !==(filter_input(INPUT_POST, 'edit'))){
		$uname = filter_input(INPUT_POST,'uname');
		$fname = filter_input(INPUT_POST,'fname');
		$lname = filter_input(INPUT_POST,'lname');
		$cont = filter_input(INPUT_POST,'cont');
		$email = filter_input(INPUT_POST,'email');
		$pw = filter_input(INPUT_POST,'pw');
		$pwh = password_hash($pw, PASSWORD_DEFAULT);
		
		$sql = "UPDATE admin SET FirstName='$fname', LastName='$lname',Email='$email',ContactNo='$cont', Password='$pwh' WHERE AdminID='$uname';";

		$mysqli_query = mysqli_query($conn, $sql);
	
		if (!$mysqli_query){
					echo "<script>alert(\"Error Occured!\");</script>";
				}else {
					$tvidr = mysqli_insert_id($conn); 
					echo "<script>alert(\"Successfully updated!\");</script>";
				}
	}

	if (null !==(filter_input(INPUT_POST, 'edit2'))){
		$uname = filter_input(INPUT_POST,'uname');
		$fname = filter_input(INPUT_POST,'fname');
		$lname = filter_input(INPUT_POST,'lname');
		$cont = filter_input(INPUT_POST,'cont');
		$email = filter_input(INPUT_POST,'email');
		$ocp = filter_input(INPUT_POST,'ocp');
        $city = filter_input(INPUT_POST,'city');
		$skill = filter_input(INPUT_POST,'skid');
		$rate = filter_input(INPUT_POST,'rate');

		
		$sql = "UPDATE Technician SET FirstName='$fname', LastName='$lname', Email='$email', ContactNo='$cont',Occupation='$ocp', City='$city', Rate='$rate'  WHERE TechID='$uname';";
		$sql .= "INSERT INTO techskill (TechID,SkID) VALUES ('$uname','$skill');";
		
		$mysqli_query = mysqli_multi_query($conn, $sql);
	
		if (!$mysqli_query){
					echo "<script>alert(\"Error Occured!\");</script>";
				}else {
					$tvidr = mysqli_insert_id($conn); 
					echo "<script>alert(\"Successfully updated!\");</script>";
				}
	}

	$mysqli_close = mysqli_close($conn);
?>
