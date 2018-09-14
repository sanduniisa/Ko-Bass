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
				padding: 10px 10px 10px 10px;
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
				<!--this form should be broken into two forms, since it is bad practice to add two kinds of users in one form-->
				<form action="create.php" method="post">
					<div class="center" style="text-align:center">
						<h1 style="text-align:center;">Registration Details</h1>
						User Name: <input type="text" name="uname" value="" style="margin-left:50px" required/><br><br>
						First Name: <input type="text" name="fname" value="" style="margin-left:50px" required/><br><br>
						Last Name: <input type="text" name="lname" value="" style="margin-left:50px" required/><br><br>
						Contact Number: <input type="text" name="cont" value="" required/><br><br>
						Email: <input type="text" name="email" value="" style="margin-left:90px" required/><br><br>
						Password: <input type="password" placeholder="Leave empty for technician" id="password" name="pw" value="" style="margin-left:60px" onkeyup='check();'/><br><br>
						Confirm Password:<input type="password" placeholder="Leave empty for technician" name="confirm_password" id="confirm_password"  onkeyup='check();' style="margin-left:5px"/><br> 
  						<span id='message' style="margin-left:120px"></span><br>
						City: 
						<!--added php support to add infinite no of select options-->
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
						
						Skill 1:
						<?php 
							$result = $conn->query("select SkID, SkillName from skill");	
							echo "<select name=\"skid1\" style=\"margin-left:85px\">";
							echo '<option value="">Select Skill 1</option>';
							
							while ($row = $result->fetch_assoc()) {
								unset($id, $name);
								$id = $row['SkID'];
								$name = $row['SkillName']; 
								echo '<option value="'.$id.'">'.$name.'</option>'; 
							}
							echo "</select><br><br>";
						?>

						Skill 2:
						<?php 
							$result = $conn->query("select SkID, SkillName from skill");	
							echo "<select name=\"skid2\" style=\"margin-left:85px\">";
							echo '<option value="">Select Skill 2 (if any)</option>';
							
							while ($row = $result->fetch_assoc()) {
								unset($id, $name);
								$id = $row['SkID'];
								$name = $row['SkillName']; 
								echo '<option value="'.$id.'">'.$name.'</option>'; 
							}
							echo "</select><br><br>";
						?>

						Skill 3:
						<?php 
							$result = $conn->query("select SkID, SkillName from skill");	
							echo "<select name=\"skid3\" style=\"margin-left:85px\">";
							echo '<option value="">Select Skill 3 (if any)</option>';
							
							while ($row = $result->fetch_assoc()) {
								unset($id, $name);
								$id = $row['SkID'];
								$name = $row['SkillName']; 
								echo '<option value="'.$id.'">'.$name.'</option>'; 
							}
							echo "</select><br><br>";
						?>
						
						Rate: <input type="text" name="rate" placeholder="Leave empty for admin" value="" style="margin-left:98px"/><br><br>
						<button type="submit" name="submit" style="width:210px">Create Admin Account</button>
						<button type="submit" name="submit2" style="width:210px">Create Technician Account</button>
						
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
	if (null !==(filter_input(INPUT_POST, 'submit'))){
        $uname = filter_input(INPUT_POST,'uname');
        $fname = filter_input(INPUT_POST,'fname');
        $lname = filter_input(INPUT_POST,'lname');
        $cont = filter_input(INPUT_POST,'cont');
        $email = filter_input(INPUT_POST,'email');
        $password = filter_input(INPUT_POST,'pw');
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO admin (AdminID,FirstName,LastName,Email,ContactNo,Password) VALUES ('$uname','$fname','$lname','$email','$cont','$hashed_password');";

        $mysqli_query = mysqli_query($conn, $sql);
       
        if (!$mysqli_query){
                    echo "<script>alert(\"Error Occured!\");</script>";
                }else {
                    $tvidr = mysqli_insert_id($conn); 
                    echo "<script>alert(\"Successfully registered!\");</script>";
                }
    }
    
    if (null !==(filter_input(INPUT_POST, 'submit2'))){
        $uname = filter_input(INPUT_POST,'uname');
        $fname = filter_input(INPUT_POST,'fname');
        $lname = filter_input(INPUT_POST,'lname');
        $cont = filter_input(INPUT_POST,'cont');
        $email = filter_input(INPUT_POST,'email');
        $password = filter_input(INPUT_POST,'pw');
        $ocp = filter_input(INPUT_POST,'ocp');
        $city = filter_input(INPUT_POST,'city');
		$skill1 = filter_input(INPUT_POST,'skid1');
		$skill2 = filter_input(INPUT_POST,'skid2');
		$skill3 = filter_input(INPUT_POST,'skid3');
		$rate = filter_input(INPUT_POST,'rate');
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
		
		
		$sql2 = "INSERT INTO Technician (TechID,FirstName,LastName,Email,ContactNo,Password,Occupation,City,Rate) VALUES ('$uname','$fname','$lname','$email','$cont','$hashed_password','$ocp','$city','$rate');";
		
		if ($skill1 != "" && $skill2 != "" && $skill3 != ""){	
			$sql2 .= "INSERT INTO techskill (TechID,SkID) VALUES ('$uname','$skill1');";
			$sql2 .= "INSERT INTO techskill (TechID,SkID) VALUES ('$uname','$skill2');";
			$sql2 .= "INSERT INTO techskill (TechID,SkID) VALUES ('$uname','$skill3');";
			$mysqli_query = mysqli_multi_query($conn, $sql2);
     
			if (!$mysqli_query){
					echo "<script>alert(\"Error Occured!\");</script>";
				}else {
					echo "<script>alert(\"Successfully registered!\");</script>";
				}	
		}elseif ($skill1 != "" && $skill2 != "" && $skill3 == ""){	
			$sql2 .= "INSERT INTO techskill (TechID,SkID) VALUES ('$uname','$skill1');";
			$sql2 .= "INSERT INTO techskill (TechID,SkID) VALUES ('$uname','$skill2');";
			$mysqli_query = mysqli_multi_query($conn, $sql2);
     
			if (!$mysqli_query){
					echo "<script>alert(\"Error Occured!\");</script>";
				}else {
					echo "<script>alert(\"Successfully registered!\");</script>";
				}
		}elseif ($skill1 != "" && $skill2 == "" && $skill3 == ""){	
			$sql2 .= "INSERT INTO techskill (TechID,SkID) VALUES ('$uname','$skill1');";
			$mysqli_query = mysqli_multi_query($conn, $sql2);
     
			if (!$mysqli_query){
					echo "<script>alert(\"Error Occured!\");</script>";
				}else {
					echo "<script>alert(\"Successfully registered!\");</script>";
				}	
		}
  	}
    $mysqli_close = mysqli_close($conn);
?>   
