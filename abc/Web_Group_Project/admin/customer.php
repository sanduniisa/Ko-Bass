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

			.button1 {
				background-color: #acb4c1; 
				border: none;
				color: black;
				padding: 15px 0px;
				text-decoration: none;
				font-weight: bold;
				display: inline-block;
				font-size: 16px;
				margin: 10px 10px 10px 10px;
				border-radius: 12px;
				width: 140px;
				height: 140px;
			}
			.button1:hover {
					background-color: #d9dde2;
					color: black;
				}
			.cen {
				margin: auto ;
				margin-top: 15px;
				width: 50%;
				padding: 10px;
				text-align: center;	
			}
			img {
				height: 50px;
				width: 50px;
				display: block;
				margin-left: auto;
				margin-right: auto;
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
							<a class="active" href="./customer.php">Customers</a>
							<a href="./technician.php">Technicians</a>
							<a href="./reports.php">Reports</a>
							<a href="../logout">Log out</a>
						</div>
					</div>
				</header>

				<!--the page views the customer database-->
				<h1 style="text-align:center;">Customer Database</h1>
				<div class ="cen" style="padding-right:0px">
					<form method="post" action="customer.php">
						<button type="submit" name="sub" class="button1"><img src="../homefiles/search.png">View Customers</button>
						<button type="submit" name="sub2" class="button1"><img src="../homefiles/msg.png">View Messages</button><br>
					</form>
				</div>
				<br><br>
				<?php
					if (null !==(filter_input(INPUT_POST, 'sub'))){
						$sql = "SELECT CustID, FirstName, LastName, Email, ContactNo FROM Customer;";
						$result=mysqli_query($conn,$sql);
						$queryResult=mysqli_num_rows($result);
						if ($queryResult > 0){
							echo "<table>";
							echo "<tr><th>Username</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Contact No</th></tr>";
							while ($row=mysqli_fetch_assoc($result)){
								$uname = $row['CustID'];
								$first = $row['FirstName'];
								$last = $row['LastName'];
								$email = $row['Email'];
								$cont = $row['ContactNo'];
								echo "<tr><td>".$uname."</td><td>".$first."</td><td>".$last."</td><td>".$email."</td><td>".$cont."</td></tr>";    
								}
						echo "</table><br><br>";}
					}

					if (null !==(filter_input(INPUT_POST, 'sub2'))){
						$sql = "SELECT name, subject, email, note FROM custcontact;";
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
						echo "</table><br><br>";}				
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
