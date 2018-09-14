<?php
    session_start();
    include '../dbconf/dbh.php';   
    include './adhead.php';
    
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
			.one{
				margin-left: 20px;
				margin-top: 10px
			}
			.size{
				width: 400px;
				//height: 1000px;
			}
			.btn {
			padding: 10px;
			font-size: 15px;
			color: white;
			background: #5F9EA0;
			border: none;
			border-radius: 5px;
			}	
			.form{
				border-style: solid;
				border-width: 25px;
				border-color: 	#008B8B;
			}
			.p{

				font-family: Times New Roman;
				font-size: 30px;
				color: grey;
			}
			.stickyfooter {
				background: #333333;
				color: white;
				line-height: 50px;
				padding: 0 20px;
				height: 50px;
				margin-top: -50px;
			}
			.content {
				min-height: 100%;
			}
			.content-inside {
				padding: 0px;
				padding-bottom: 50px;
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
                <a class="active" href="./">Home</a>
                <a href="./users.php">User Administration</a>
                <a href="./customer.php">Customers</a>
                <a href="./technician.php">Technicians</a>
                <a href="./reports.php">Reports</a>
                <a href="../logout">Log out</a>
              </div>
          </div>
        </header>
        <!--this is the admin's homepage this homepage should contain details of admin-->
        <div class="container">
					<img src="../homefiles/admin.svg" style="width:500px;height:500px" alt="Workers"/>
					<p style="font-size:45px;font-wight:bold;margin-bottom:10px;margin-top:100px">Welcome, <?php echo $_SESSION['first_name']." ".$_SESSION['last_name']; ?>.</p>
          <p style="font-size:38px;margin:0px">What would you like to do today?</p>
          <p style="font-size:38px;margin-top:50px;margin-bottom:10px">Today is:</p>
					<?php 
						date_default_timezone_set("Asia/Colombo");
						echo "<p style=\"font-size:38px;margin:0px\">" .date("l").","." ".date("d/m/Y")."</p>";
					?>
          <p id="time" style="font-size:38px;margin-top:10px"></p>
				</div>
				<div style="clear: both"></div>
        <div class="container" style="background-color:#7f858e;color:white">
					<p style="font-size:42px;margin:0px">To go to the Customer Homepage<a class="containera" style="margin-left: 5px" href="../user">Click Here</a>!</p>
				</div>
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
