<?php
session_start();
//include_once 'connect.php';

if (isset($_SESSION['issuerSession'])) 
{
	header("Location: issuerhome.php");
}



?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Issuer Register page</title>
		<meta charset="utf-8" />
		
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" a href="assets\css\font-awesome.min.css">		
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/demo.css">-->
		<link rel="stylesheet" href="assets/css/footer-distributed-with-address-and-phones.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	</head>
	<body>
	<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
body {
  font-family: Arial;
  margin: 0;
}

.header {
  padding: 30px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 30px;
}

.button {
  background-color: #1ABC9C; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<div class="header">
  <h1>Issuer Registration</h1>
</div>

		<!-- Header -->
			<header id="header">
				<div class="topnav">
					<a href="index.html" class="logo">LiSuN</a>
					<nav id="nav">
						<a href="index.html">Home</a>
						<a href="adminhome.php">Admin</a>
						<a href="librarianhome.php">Librarian</a>
						<a href="issuerhome.php">Issuer</a>
						<a href="aboutus.html">About Us</a>
						<a href="contactus.php">Contact Us</a>
						
					</nav>
				</div>
			</header>
	<div class="container">
	
	
		<form method="POST" action="action_issuerregister.php">
		
		<div class="input-group">
		<input type="text" name="firstname" placeholder="Enter your First Name"/>	
		</div>
		<div class="input-group">
		<input type="text" name="lastname" placeholder="Enter your Last Name"/>	
		</div>
		<div class="input-group">
		<input type="text" name="age" placeholder="Enter your Age"/>	
		</div>
		<div class="input-group">
		<select name="gender">
			<option value="Male">Male</option>
			<option value="Female">Female</option>
			<option value="Others">Others</option>
		</select>	
		</div>
		<div class="input-group">
		<input type="text" name="contact" placeholder="Enter the phone number e.g. 8073577201"/>	
		</div>
		<div class="input-group">
		<input type="text" name="email" placeholder="Enter the Email-ID"/>	
		</div>
		<div class="input-group">
		<input type="password" name="password" placeholder="Enter the Password"/>
		</div>
		<input type="submit" value="Register" class="btn-login" />
		</form>
	</div>
	<!-- Footer -->
			<footer class="footer-distributed">

			<div class="footer-left">

				<h3>LiSuN</h3>

				

				<p class="footer-company-name">LiSuN &copy; 2019</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>955 Oliver Rd</span>Thunder Bay, ON P7B 5E1</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1 (807) 343-8110</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">cloudcomputinglu@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					LiSuN is Library Supervising Network which is a server-less, AWS cloud-based Library Supervising Network where user can easily
find the intended book across all the libraries in the city.
				</p>

				

			</div>

		</footer>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
</body>
</html>