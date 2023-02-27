<html>
	<head>
		<title>Home Page</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="bootstrap-styles.css" > 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 	
	
	</head>
	
	<!-- Navbar -->
	<nav class="navbar navbar-default">
		  <div class="container">
			<div class="navbar-header">
		   	<a class="navbar-brand" href="#myPage"></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="LogIn.php">LOG-IN</a></li>
				<li><a href="Browsing.php">BROWSE</a></li>
				<li><a href="Reviews.php">REVIEWS</a></li>
				<li><a href="MyRatings.php">MY RATINGS</a></li>
				<li><a href="HomePage.php">HOME</a></li>
			  </ul>
			</div>
	 	 </div>
		</nav>
	
	<!-- Header -->
		<div class="jumbotron text-center">
		<h1 style='color:crimson;'>Rate a Restaurant</h1> 
		<p>Find your next great meal</p> 
		</div>
	
	
	<!-- Pictures -->
	<div class="text-center">
	<h2> <img src='spaghetti.jpeg'></img> <img src='pancakes.jpeg'></img> <img src='salad.jpeg'></img> <img src='chicken.jpeg'></img>
	<br> <br> <br>
	
	
	<!-- Log In Button -->
	<button onclick="window.location.href='LogIn.php'">Log-In</button> <br> <br>
	
	<!-- New User Button -->
	<button onclick="window.location.href='LogIn.php'">Register</button>
    
	