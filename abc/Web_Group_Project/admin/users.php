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

		<?php
			include 'userheader.php';
		?>  

		<!--the page contain the links to other admin functions Create, Update and Delete-->
      	<div class ="cen">
			<h1>User Authentication</h1>
			<a href="create.php"><button type="button" class="button1"><img src="../homefiles/create.png">Create profile</button></a>
			<a href="delete.php"><button type="button" class="button1"><img src="../homefiles/delete-user-512.png">Delete profile</button></a>
			<a href="edit.php"><button type="button" class="button1"><img src="../homefiles/edit.png">Edit profile</button></a>
		</div>
		<footer>
			<div class="footer" style="position:fixed">
				<p class="footerleft"> &copy; Find Lanka Incorporated. 2018 | All Rights Reserved.</p>
				<div class="footerright">
					<a href="https://www.facebook.com/"><img src="../homefiles/facebook.png" class="foot"></a>
					<a href="https://twitter.com/"><img src="../homefiles/twitter.png" class="foot"></a>
					<a href="https://www.linkedin.com"><img src="../homefiles/linkedin.png" class="foot"></a>
				</div>
				<div style="clear: both;"></div>
			</div>
		</footer>
	</body>
</html>
