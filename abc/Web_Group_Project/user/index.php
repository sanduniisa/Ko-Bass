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
		<title>Welcome <?php echo $_SESSION['user_id'];?></title>
		<link rel="icon" href="../homefiles/fav.png">
		<link rel="stylesheet" type="text/css" href="./main.css">
		<link rel="stylesheet" type="text/css" href="./style.css">
		<style>
			.container {
				border: 2px solid #ccc;
				background-color: #eee;
				border-radius: 5px;
				padding: 16px;
				margin: 16px;
			}
			.container img {
				float: left;
				margin-right: 20px;
				border-radius: 10%;
			}
			.container::after {
				content: "";
				clear: both;
				display: table;
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
            .form_content{
				text-align: center;
				margin: auto;
				margin-top: 15px;
				margin-bottom: 15px;
				width: 50%;
				padding: 10px;
				text-align: center;
				border: 2px solid grey;
				background-color: #c6cbd3;
				
			}
			.form_content input{
				width: 95%;
				padding: 7px 20px;
				margin: 8px 12px;
				box-sizing: border-box;
				border: 2px solid #8c8585;
				border-radius: 4px;
			}

			.form_content button {
				height:45px;
				width:150px;
				float: right;
				color: #fff;
				background-color: #333333;
				border-color: #ffffff;
				margin-right: 25px;
				padding: 10px 24px;
			}
			.containera:link {
				color: white;
				text-decoration: none;
				background-color: #7f858e;
				display: inline-block;
				padding: 5px 5px;
				border-radius:4px;
			}
			.containera:visited {
				color: white;
				text-decoration: none;
				background-color: #7f858e;
				display: inline-block;
				padding: 5px 5px;
				border-radius:4px;
			}
			.containera:hover {
				color: black;
				text-decoration: none;
				background-color: red;
			}
			.containera:active {
				color: black;
				text-decoration: none;
				background-color: red;
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
		<script>
      function startTime() {
          var today = new Date();
          var h = today.getHours();
          var m = today.getMinutes();
          var s = today.getSeconds();
          m = checkTime(m);
          s = checkTime(s);
          M = checkAMPM(h);
					h = checkHour(h);
          document.getElementById('time').innerHTML = h + ":" + m + ":" + s + " " + M;
          var t = setTimeout(startTime, 500);
      }
      function checkTime(i) {
          if (i < 10) {
            i = "0" + i
          };  
          return i;
      }
      function checkAMPM(j){
        if (j>=12){
          M = "PM"
        }else{
          M = "AM"
        };
        return M;
      }
			function checkHour(k){
				if (k>12){
					k = k - 12
				}else{
					k = k
				};
				if (k < 10) {
						k = "0" + k
				};
				return k;
			}
    </script>
	</head>
	<body onload="startTime()">
		<div class="content">
			<div class="content-inside" style="text-align:center">
				<header>
					<div class="navbar">
						<a href="../" class="logo">FIND LANKA</a>
						<div class="rightnav">
							<a class="active" href="../user">Home</a>
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
							<a href="../services">Services</a>
							<a href="../help">Help</a>
							<a href="../logout">Log Out</a>
						</div>
					</div>
				</header>

				<!--this is the landing page of the customer-->
				<div class="container">
					<img src="../homefiles/user.svg" style="width:500px;height:500px" alt="Workers"/>
					<p style="font-size:45px;font-wight:bold;margin-bottom:50px;margin-top:0px">Welcome, <?php echo $_SESSION['first_name']." ".$_SESSION['last_name']; ?>.</p>
					<p style="font-size:32px;margin:0px">You can search for technicians by clicking <a class="containera" style="margin-left: 5px" href="../user/user.php">here</a>!</p>
          			<p style="font-size:32px;margin-top:20px;margin-bottom:10px">Today is:</p>
					<?php 
						date_default_timezone_set("Asia/Colombo");
						echo "<p style=\"font-size:32px;margin:0px\">".date("l").","." ".date("d/m/Y")." "."<span id=\"time\" style=\"font-size:32px;margin-left:5px\"></span></p>";
						echo "<br><br>";
					?>
          			
					<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
						<label for="submit" style="font-size:35px"><b>To View your profile or to edit:</b></label>
						<button type="submit" name="view" style="font-size:35px;padding: 15px 10px">Click Here</button>
					</form>
				</div>
				<div style="clear: both"></div>
				

				<?php
					if (isset($_POST['view'])){
						$cuid = $_SESSION['cuid'];
						$sql = "SELECT CustID, FirstName, LastName, ContactNo, Email FROM Customer WHERE CuID='$cuid';";
						$result=mysqli_query($conn,$sql);
						$queryResult=mysqli_num_rows($result);
						if ($queryResult == 1){
							while ($row=mysqli_fetch_assoc($result)){
								$uname = $row['CustID'];
								$fname = $row['FirstName'];
								$lname = $row['LastName'];
								$cont = $row['ContactNo'];
								$email = $row['Email'];
							}
						}	
						echo '<div class="form_content">';
						echo '<form action="./index.php" method="post">';
                        echo '<input type="number" value="'.$_SESSION['cuid'].'" name="custID" hidden>';
                        echo '<table align="center">';
                        echo '<tr>';
                        echo '<td width=20%>';
                        echo '<label for="first_name"><b>First Name:</b></label>';
                        echo '</td><td width=60%>';
                        echo '<input type="text" id="chn" readonly="readonly"  name="fname" value="'.$fname.'"><br>';
                        echo '</td>';
                        echo '</tr>';
                    	echo '<tr>';
                        echo '<td>';
                    	echo '<label for="last_name"><b>Last Name:</b></label>';
                        echo '</td><td>';
                    	echo '<input type="text" id="change" readonly="readonly"  name="lname" value="'.$lname.'"><br>';
                        echo '</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>';
                        echo '<label for="email"><b>Email Address:</b></label>';
                        echo '</td><td>';
                        echo '<input type="text" id="change1" readonly="readonly"  name="email" value="'.$email.'" ><br>';
                        echo "</td>";
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>';
                        echo '<label for="contact_no"><b>Contact No:</b></label><br>';
                        echo '</td><td>';
                        echo '<input type="number" id="chng" readonly="readonly"  name="contact" value="'.$cont.'"><br>';
                        echo '</td>';
                        echo '</tr>';
						echo '<tr>';
						echo '<td align="center">';
						echo "<button class=\"e1\" type=\"button\" onclick=\"myFunction()\" style=\"cursor: pointer;\" >Edit</button>";	
						echo '</td>';
						echo '<td align="center">';
						echo '<button class="s1 save" type="submit" name="submit" style="cursor: pointer;">Save</button>';
						echo '</td>';
						echo '</tr>';
						echo '</table>';
                    	echo '</form>';
						echo '</div>';
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
        <script>
        document.getElementsByClassName('save')[0].style.visibility = 'hidden';
        function myFunction(){
            document.getElementsByClassName('save')[0].style.visibility = 'visible';
            document.getElementById('change').readOnly =false;
           // document.getElementById('change1').readOnly =false;
            document.getElementById('chng').readOnly =false;
            document.getElementById('chn').readOnly =false;
        }
        </script>
	</body>
</html>

<?php
	if (isset($_POST['submit'])){
		$id = $_POST['custID'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$contactNumber = $_POST['contact'];
	
		$sql = "UPDATE customer SET FirstName='$fname', LastName='$lname', ContactNo=$contactNumber WHERE CuID=$id";
		if (mysqli_query($conn, $sql)) {
			echo "<script>alert(\"Successfully Updated!\");</script>";
		} else {
			echo "<script>alert(\"Error Occured!\");</script>";
			
		}
	}	
?>

