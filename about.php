<html lang="en">
<head>
	<meta charset="utf-8" />	
	<meta name="description" content="Development Project 1" />
	<meta name="keywords"    content="Registration Form" />
	<meta name="author"      content="Abhishek Mishra" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />

	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script>
	var map;
	function initialize() {
	var mapOptions = {
	zoom: 13,
	center: new google.maps.LatLng(-37.817041, 144.962679)
	};
	map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

	var marker = new google.maps.Marker({
          position: new google.maps.LatLng(-37.817041, 144.962679),
          map: map,
          title: 'Australian burger star'
        });
	}
	</script>
	
	<title>About</title>
</head>
<body onload="initialize()">       <!--This is the about page of Bruno Pizzeria which tells the history of Bruno Pizzeria-->
	<header>
	<h1>ABOUT AUSTRALIAN BURGER STAR</h1>
	</header>
	<nav>
	  <ul>
		<li><a href="home.php">HOME</a></li>
		<li><a class="active" href="about.php">ABOUT US</a></li>
		<li><a href="registration.php">SIGN UP</a></li>
		<li><a href="login.php">CUSTOMER LOGIN</a></li>
		<li><a href="feedback.php">FEEDBACK</a></li>
		<li><a href="adminlogin.php">ADMIN LOGIN</a></li>
	  </ul>	 
	</nav>
	<main>
	<article id="intro">
		<h2>ABOUT US</h2>
		<p id="a1">Australian Burger Star(ABS), is one of the best BURGER making place which is spread all over Melbourne. We specialise in different kinds of Pizza making and that's why we have named most of our burgers based on the Suburb names in Melbourne. ABS was first started in 2004 in Kew, Melbourne. Mr. Dinys, who was a student of Bachelor of Food Technology at Swinburne University of Technology came up with the idea of selling different kinds of burgers.</p>
		<p id="a2">Today, there are almost 20 stores of Australian Burger Star all around Melbourne and is still growing rapidly. Home delivery is a fast growing segment of the burger market worldwide, and ABS Delivery was developed in 2009 to compete aggressively in this highly competitive market. If you are inerested in working at one of our stores, do not forget to apply online on this official website of ABS.</p>
		<div id="map-canvas" style="width: 500px; height: 300px;"></div>
		<h2>CONTACT DETAILS</h2>
		<p>Please feel free to contact us if anything is bothering you and we will get back to you within 1 business hour atleast. You can also book the restaurant for birthdays parties, marriage anniversaries, funeral caterings, etc. Thank you for your cooperation.</p>
		<p><strong>Contact Number:</strong> +61 426746809</p>
		<p><strong>Email Address:</strong> abs@restaurant.com.au</p>
		<p><strong>Address:</strong> 67 Harley Street, Bentley, VIC 3008</p>
	</article>
	</main>
	<footer>
		<p>The contents of this website are protected by <strong>copyright&copy; law.</strong> Copyright in this material resides with the Commonwealth of Australia or various other rights holders, as indicated. DP1 - Group 1 is the developer of this website as well the content provided in this website.</p>
	</footer>
</body>
</html>
<?php
session_start();
?>