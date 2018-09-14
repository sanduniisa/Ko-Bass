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
				padding: 10px 90px 10px 10px;
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
		<div class="content">
			<div class="content-inside" style="text-align:center">
				<?php
					include 'userheader.php';
				?>
				
				<h1 style="margin-top:10px">Search & Delete</h1>
				<div class ="center" style="padding-right:0px">
					<form method="post" action="delete.php">
						Enter username: <input type="text" name="uname"><br><br>
						<button type="submit" name="sub">Search Customer</button>
						<button type="submit" name="sub2">Search Technician</button><br>
					</form>
				</div>
		
				<?php 
					if (null !==(filter_input(INPUT_POST, 'sub'))){
						$uname=mysqli_real_escape_string($conn,filter_input(INPUT_POST, 'uname'));
						$sql = "SELECT CustID, ContactNo, Email FROM Customer WHERE CustID='$uname';";
						$result=mysqli_query($conn,$sql);
						$queryResult=mysqli_num_rows($result);
						if ($queryResult > 0){
							echo "<br/><p style=\"font-size:18px;text-align:center\">User is available</p>";
							echo "<div class = \"rest\">";
							echo "<table style=\"width:100%\">";
							echo "<tr><th>Username</th><th>Contact No</th><th>Email</th></tr>";
							while ($row=mysqli_fetch_assoc($result)){
								$uname = $row['CustID'];
								$cont = $row['ContactNo'];
								$email = $row['Email'];
								echo "<tr><td>".$uname."</td><td>".$cont."</td><td>".$email."</td></tr>";    
								}
							echo "</table>";
							echo "</div>";
						}else {
							echo "<p style=\"text-align:center\">User not available</p>";
						}
					}
				
					if (null !==(filter_input(INPUT_POST, 'sub2'))){
						$uname=mysqli_real_escape_string($conn,filter_input(INPUT_POST, 'uname'));
						$sql = "SELECT TechID, FirstName, LastName, ContactNo, Email, Occupation, City FROM Technician WHERE TechID='$uname';";
						$result=mysqli_query($conn,$sql);
						$queryResult=mysqli_num_rows($result);
						if ($queryResult > 0){
							echo "<br/><p style=\"font-size:18px;text-align:center\">User is available</p><br/><br/>";
							echo "<div class = \"rest\">";
							echo "<table style=\"width:50%\">";
							echo "<tr><th>Username</th><th>First Name</th><th>Last Name</th><th>Contact No</th><th>Email</th><th>Occupation</th><th>City</th></tr>";
							while ($row=mysqli_fetch_assoc($result)){
								$uname = $row['TechID'];
								$fname = $row['FirstName'];
								$lname = $row['LastName'];
								$cont = $row['ContactNo'];
								$email = $row['Email'];
								$ocp = $row['Occupation'];
								$city = $row['City'];
								echo "<tr><td>".$uname."</td><td>".$fname."</td><td>".$lname."</td><td>".$cont."</td><td>".$email."</td><td>".$ocp."</td><td>".$city."</td></tr>";    
							}
							echo "</table>";
							echo "</div>";
							
						}else {
							echo "<p style=\"text-align:center\">User not available</p>";
						}
					}
				?>

				<hr><br>

				<div class="center" style="padding-right:0px">
				<form action="delete.php" method="post">
					<p style="font-size:18px;display: inline">Enter username to delete: </p>
					<input type="text" name="dname"><br><br>
					<button type="submit" name="del">Delete Customer</button>
					<button type="submit" name="del2" onclick=myfunction()>Delete Technician</button>
				</form>
				</div>
			</div>
		</div>
		<!--sticky footer is a kind of footer to expand when needed otherwise it is a fixed footer-->
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
	if (null !==(filter_input(INPUT_POST, 'del'))){
        $dname=mysqli_real_escape_string($conn,filter_input(INPUT_POST, 'dname'));
        $sql1 = "DELETE FROM Customer WHERE CustID='$dname';";
        $result2 = mysqli_query($conn,$sql1);
        if (!$result2){
            echo "<script>alert(\"Error Occured!\");</script>";
        }else {
            echo "<script>alert(\"Successfully deleted!\");</script>";
        }
    }

    if (null !==(filter_input(INPUT_POST, 'del2'))){
        $dname=mysqli_real_escape_string($conn,filter_input(INPUT_POST, 'dname'));
        $sql1 = "DELETE FROM Technician WHERE TechID='$dname';";
        $result2 = mysqli_query($conn,$sql1);
        if (!$result2){
            echo "<script>alert(\"Error Occured!\");</script>";
        }else {
            echo "<script>alert(\"Successfully deleted!\");</script>";
        }
    }
	$mysqli_close = mysqli_close($conn);
?>

		
