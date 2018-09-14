<?php
	session_start();
    include '../dbconf/dbh.php';
?>

<!DOCTYPE html>
<html>
	<head>
	<title>Services</title>
	<link rel="icon" href="../homefiles/fav.png">
	<link rel="stylesheet" type="text/css" href="./main.css">
	<link rel="stylesheet" type="text/css" href="./style.css">
	<style>
		.one{
			margin-left: 20px;
			margin-right: 20px;
		}	

		.size{
			height:400px;
			width: 600px;
		}
		.two{
			margin-top: -400px;
			margin-left:720px;	
			margin-right: 20px;
		}
		h1{color: blue;
			text-align: center; }
		.pms{
		color: brown; 
		font-size:20px;
		text-align: justify;
		}
		.p2{
			font-family: arial;
			font-size: 22px;
			color: black;
			text-align: justify;
		}
		.anchor a{
			background-color: #333333; 
			border: none;
			color: white;
			padding: 15px 0px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 10px 20px 10px 10px;
			border-radius:5px;
			width: 270px;
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
		img.foot {
			width: 38px;
			height: 38px;
			display: inline;
			margin-top: -5px;
			margin-right: 5px;
			margin-bottom: 0px;
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
						<?php
							if(!isset($_SESSION['user_id'])){
								echo '<a href="../">Home</a>';
							}else{
								echo '<a href="../user">Home</a>';
							}			
						?>
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
						<a class="active" href="./services">Services</a>
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
				<h1 style="margin-top:20px;color:black">Your need, our solution</h1>
				<?php
					if(isset($_SESSION['user_id'])){
						echo '<div class="anchor">';
						echo '<a href="../user/user.php">Click here to find your technician!</a>';	
						echo '</div>';					
					}		
				?>
				<h1 style="margin-top:20px">ICT Technicians</h1>
				<div class="one size " >
					<img src="./img/ict.jpg" alt ="image" height="250px" width="500px">  
				</div>

				<div class="two  size"> 
					<p class="pms">
					Information and Communications Technicians (ICT technicians) support the design, development, installation, operation, testing, and problem-solving of hardware and software. They comprise a wide set of sub-occupations that range from network system technicians to telecommunications engineering technicians. </p> <hr>
					<p class="p2">
					Here we provide you contact details of well experienced ICT technicians for your support.<br>
					Login first & get more details. <br>
					Experience our best collection of service providers in need.</p>
				</div>

				<h1>Architectural Designers</h1>
				<div class="one size" style="margin-top:10px"> 
					<p class="pms"> The Architectural Technologist, also known as a Building Technologist, provides technical building design services and solutions and is trained in architectural technology, building technical design and construction. Architectural Technologists apply the science of architecture and typically concentrate on the technology of building, design technology and construction.
					</p> <hr>
					<p class="p2"> Here we provide you contact details of  graduated & well experienced Architectural Designers for your support.<br>
						Login first & get more details. <br>
						Experience our best collection of service providers in need.</p>
				</div>

				<div class="two  size">
					<img src="./img/archi.jpg" alt ="image" height="250px" width="500px">
				</div>

				<h1>Electricians</h1>
				<div class="one size " >
					<img src="./img/electric.jpg" alt ="image" height="250px" width="500px">  
				</div>

				<div class="two  size"> 
					<p class="pms"> An electrician is a tradesman specializing in electrical wiring of buildings, stationary machines, and related equipment. Electricians may be employed in the installation of new electrical components or the maintenance and repair of existing electrical infrastructure.[1] Electricians may also specialize in wiring ships, airplanes, and other mobile platforms, as well as data and cable.</p>
					<hr>
					<p class="p2"> Here we provide you contact details of experts in Electricians for your support.<br>
					Login first & get more details. <br>
					Experience our best collection of service providers in need.</p>
				</div>

				<h1>Dentists</h1>
				<div class="one size" style="margin-top:10px"> 
				<p class="pms">
				Dentistry is a branch of medicine that consists of the study, diagnosis, prevention, and treatment of diseases, disorders, and conditions of the oral cavity, commonly in the dentition but also the oral mucosa, and of adjacent and related structures and tissues, particularly in the maxillofacial (jaw and facial) area.<hr> </p>
				<p class="p2"> Here we provide you contact details of experts in Dental service for your support.<br>
					Login first & get more details. <br>
					Experience our best collection of service providers in need.</p>
				</div>

				<div class="two  size">
					<img src="./img/dent.jpg" alt ="image" height="250px" width="500px">
				</div>

				<h1>Plumbers</h1>
				<div class="one size " >
					<img src="./img/plumb.jpg" alt ="image" height="250px" width="500px">  
				</div>

				<div class="two  size"> 
					<p class="pms"> A complex arrangement of rigid steel piping and stop valves regulate flow to various parts of the building
					Plumbing is any system that conveys fluids for a wide range of applications. Plumbing uses pipes, valves, plumbing fixtures, tanks, and other apparatuses to convey fluids.Heating and cooling (HVAC), waste removal, and potable water delivery are among the most common uses for plumbing, but it is not limited to these applications. <hr>
					<p class="p2"> Here we provide you contact details of experts in Pipe line services for your need, indeed.<br>
					Login first & get more details. <br>
					Experience our best collection of service providers in need.</p>
				</div>

				<h1>Pharmacist</h1>
				<div class="one size" style="margin-top:10px"> 
						<p class="pms"> Pharmacists, also known as chemists or druggists, are health professionals who practice in pharmacy, the field of health sciences focusing on safe and effective medication use.A pharmacist is a member of the health care team directly involved with patient care. Pharmacists undergo university-level education to understand the biochemical mechanisms and actions of drugs, drug uses, therapeutic roles, side effects, potential drug interactions, and monitoring parameters.</p>
						<hr>
						<p class="p2"> Here we provide you contact details of experts of Pharmacists for your need, indeed.<br>
						Login first & get more details. <br>
						Experience our best collection of service providers in need.</p>
				</div>

				<div class="two  size">
				<img src="./img/phr.jpg" alt ="image" height="250px" width="500px">
				</div>

				<h1>Air Condtioning Technicians</h1>
				<div class="one size " >
					<img src="./img/ac.jpg" alt ="image" height="250px" width="500px">  
				</div>

				<div class="two  size"> 
					<p class="pms">
					Air conditioning technicians may sometimes be referred to as HVACR technicians and are responsible for installing, maintaining and repairing heating, ventilation, air-conditioning and refrigeration systems. These professionals work in industrial, residential and commercial settings.
						<hr>
					<p class="p2">  We are capable of providing you contact details of experts of  Air Conditioning Technicians for your need, indeed.<br>
					Login first & get more details. <br>
					Experience our best collection of service providers in need.</p>
				</div>

				<h1>Veterinarians</h1>
				<div class="one size" style="margin-top:10px"> 
						<p class="pms"> 
						A veterinary physician, usually called a vet, which is shortened from veterinarian or veterinary surgeon, is a professional who practices veterinary medicine by treating diseases, disorders, and injuries in animals.Most veterinary physicians work in clinical settings, treating animals directly. These veterinarians may be involved in a general practice, treating animals of all types; they may be specialized in a specific group of animals such as companion animals, livestocks.</p>
						<hr>
						<p class="p2">  Here we provide you contact details of well experienced Veterarians for your need, indeed.<br>
					Login first & get more details. <br>
					Experience our best collection of service providers in need.</p>
				</div>

				<div class="two  size">
				<img src="./img/vet.jpg" alt ="image" height="250px" width="500px">
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