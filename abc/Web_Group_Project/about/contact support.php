<?php
	session_start();
    include '../dbconf/dbh.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Contact Support</title>
		<link rel="icon" href="../homefiles/fav.png">
		<link rel="stylesheet" type="text/css" href="./main.css">
		<link rel="stylesheet" type="text/css" href="./style.css">
		<style>
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
		<header>
			<div class="navbar">
				<a href="../" class="logo">FIND LANKA</a>
				<div class="rightnav">
					<?php
						if(!isset($_SESSION['user_id'])){
							echo '<a href="../">Home</a>';
						}else{
							echo '<a href="../user">Home</a>';
						}			
					?>
					<div class="dropdown">
						<button class="dropbtn"><a href="./">About Us</a> 
						</button>
						<div class="dropdown-content">
							<a href="company profile.php">Company Profile</a>
							<a href="our story.php">Our Story</a>
							<a href="leadership & management.php">Leadership & Management</a>
						</div>
					</div> 
					<div class="dropdown">
						<button class="dropbtn"><a class="active" href="./contact us.php">Contact Us</a> 
						</button>
						<div class="dropdown-content">
							<a  class="active" href="contact support.php">Contact Support</a>
						</div>
					</div> 
					<a href="../services">Services</a>
					<a href="../help">Help</a>
					<?php
						if(!isset($_SESSION['user_id'])){
							echo '<a href="../login">Log in</a>';
							echo '<a href="../signup">Sign Up</a>';
						}else{
							echo '<a href="../logout">Log out</a>';
						}			
					?>
				</div>
			</div>
		</header>
		<div class = "wrapper">
			<!--edit from here-->
			<form action = "contact support.php" method = "post">
				<div class = "table-design">
					<table align=center border= 1>
						<tr>
							<body font color="black">
							<th colspan=2>Send Us a Message</th>
						</tr>
						<tr>
							<td>Your Name  *</td>
							<td><input type="text" name="name" size="100" maxlength="40" placeholder = "Name" required></td>
						</tr>
						<tr>
							<td>Email Address *</td>
							<td><input type="email" name = "email" placeholder = "Email" required></td>
						</tr>
						<tr>
							<td>Select Type *</td>
							<td>
								<select name="type">								
									<option value="customer">Customer</option>
									<option value="technician">Technician</option>
								</select>
							</td>
						<tr>
							<td>Subject  *</td>
							<td><input type="subject" name = "subject" placeholder = "Subject" required></td>
						</tr>						
						<tr>
							<td>Note *</td>
							<td>
								<textarea name="note" rows="10" cols="100" required>
								</textarea>
							</td>
						</tr>
						<tr>
							<td colspan=2 align="center">							
							<div class = "button">
								<input type=submit value=Submit name="submit"> 
								<input type=reset value=Cancel>
							</div><!--button-->							
							</td>
						</tr>
					</table>
				</div><!--table-design-->
			</form>
			<!--end edit from here-->
		</div><!--wrapper-->
		<footer>
			<div class="footer" style="position:fixed">
			<p class="footerleft" style="padding-top:4px;color:white"> &copy; Find Lanka Incorporated. 2018 | All Rights Reserved.</p>
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
		

<?php
	if (null !==(filter_input(INPUT_POST, 'submit'))){
        $name = filter_input(INPUT_POST,'name');
        $email = filter_input(INPUT_POST,'email');
		$type = filter_input(INPUT_POST,'type');
		$subject = filter_input(INPUT_POST,'subject');
		$note = filter_input(INPUT_POST,'note');
		if ($type=="customer"){
			$sql = "INSERT INTO custcontact (name,subject,note,email) VALUES ('$name','$subject','$note','$email');";

        	$mysqli_query = mysqli_query($conn, $sql);
       
			if (!$mysqli_query){
						echo "<script>alert(\"Error Occured!\");</script>";
					}else {
						$tvidr = mysqli_insert_id($conn); 
						echo "<script>alert(\"We received your message!\");</script>";
					}


		}else{
			$sql = "INSERT INTO techcontact (name,subject,note,email) VALUES ('$name','$subject','$note','$email');";

        	$mysqli_query = mysqli_query($conn, $sql);
       
			if (!$mysqli_query){
						echo "<script>alert(\"Error Occured!\");</script>";
					}else {
						$tvidr = mysqli_insert_id($conn); 
						echo "<script>alert(\"We received your message!\");</script>";
					}

		}
        
        
    }			
?>