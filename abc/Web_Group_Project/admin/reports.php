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
            table {
				border-collapse: collapse;
				border-spacing: 0;
				width: 90%;
				border: 1px solid #ddd;
				margin-left: 50px;
				margin-right: 50px;
			}

			th, td {
				text-align: left;
				padding: 16px;
			}

			tr:nth-child(even) {
				background-color: #caccce;
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
				margin: 10px 10px 10px 10px;
				border-radius:5px;
				width: 180px;
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
							<a href="./technician.php">Technicians</a>
							<a class="active" href="./reports.php">Reports</a>
							<a href="../logout">Log out</a>
						</div>
					</div>
				</header>
				
				<h1 style="margin-top:10px">View Reports</h1>
				<div class ="center" style="padding-right:0px">
					<form method="post" action="reports.php">
						<button type="submit" name="sub">View most searched Technicians</button>
						<button type="submit" name="sub2">View most searched Technical Issues</button><br>
					</form>
				</div>
		
				<?php 
					if (null !==(filter_input(INPUT_POST, 'sub2'))){ 
						
						$sql = "SELECT skill.SkillName, COUNT(skillcount.skid) AS count FROM skillcount INNER JOIN skill ON (skillcount.skid = skill.SkID) GROUP BY skillcount.skid ORDER BY count DESC;";
						$result=mysqli_query($conn,$sql);
						$queryResult=mysqli_num_rows($result);
						if ($queryResult > 0){
							echo "<br/><p style=\"font-size:18px;text-align:center\">Here are the searched technical issues with their count.</p>";					
							echo "<table>";
							echo "<tr><th>Name of the issue</th><th>Searched count</th></tr>";
							while ($row=mysqli_fetch_assoc($result)){
								$sname = $row['SkillName'];
								$count = $row['count'];
								
								echo "<tr><td>".$sname."</td><td>".$count."</td></tr>";    
								}
							echo "</table><br><br>";
							
						}else {
							echo "<p style=\"text-align:center\">No reports available right now, please check back later!</p>";
						}
					}
				
					if (null !==(filter_input(INPUT_POST, 'sub'))){
						$sql = "SELECT techtype.typename, COUNT(techcount.techid) AS count FROM techcount INNER JOIN techtype ON (techcount.techid = techtype.typeid) GROUP BY techcount.techid ORDER BY count DESC;";
						$result=mysqli_query($conn,$sql);
						$queryResult=mysqli_num_rows($result);
						if ($queryResult > 0){
							echo "<br/><p style=\"font-size:18px;text-align:center\">Here are the searched technician types with their count.</p>";					
							echo "<table>";
							echo "<tr><th>Technician Type</th><th>Searched count</th></tr>";
							while ($row=mysqli_fetch_assoc($result)){
								$sname = $row['typename'];
								$count = $row['count'];
								
								echo "<tr><td>".$sname."</td><td>".$count."</td></tr>";    
								}
							echo "</table><br><br>";
							
						}else {
							echo "<p style=\"text-align:center\">No reports available right now, please check back later!</p>";
						}
					}
				?>

				
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



		
