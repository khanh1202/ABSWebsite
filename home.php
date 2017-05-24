<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />	
	<meta name="description" content="Development Project 1" />
	<meta name="keywords"    content="Registration Form" />
	<meta name="author"      content="Abhishek Mishra" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />

	<title>Home</title>
</head>
<body>     <!--This is the Index/Home page which emphasizes on the pizzas of Bruno Pizzeria.-->
<header>
<h1>WELCOME TO AUSTRALIAN BURGER STAR&reg;</h1>
</header>
<nav>
  <ul>
    <li><a class="active" href="home.php">HOME</a></li>
	<li><a href="about.php">ABOUT US</a></li>
	<li><a href="registration.php">SIGN UP</a></li>
	<li><a href="login.php">CUSTOMER LOGIN</a></li>
	<li><a href="feedback.php">FEEDBACK</a></li>
	<li><a href="adminlogin.php">ADMIN LOGIN</a></li>
  </ul>	 
</nav>
<main>
<article id="PizzaDetail">
<h2>PIZZAS SERVED AT AUSTRALIAN BURGER STAR</h2>
<p>There are so many different kinds of BURGERS we prepare at Australian Burger Star(ABS). You can either come to our place and give our burgers a shot or you can register yourself with us and order burgers of your choice online with this <strong>Official Website of AUSTRALIAN BURGER STAR &copy;</strong> only.</p>

<div id="part1">
	<div class="sunshine">
		<h3>Sunshine Beef and Fries</h3>
		<p>The Sunshine Beef and Fries Burger is one of a kind in which cheese and toppings are placed on top of the sauce, in the truffle sauce, the cheese and fries are placed under the tomato sauce.</p>
		<img alt="sunshine" src="Images/sunshine.jpg" height="200" width="200"/>
	</div>
	<div class="hawthorn">
		<h3>Hawthorn Ultimate Chicken</h3>
		<p>The Hawthorn Ultimate Chicken Burger is a awesome burger, with a lettuce and chicken sauce served on top with tosted quarter bun.</p>
		<img alt="hawthorn" src="Images/hawthorn.png" height="200" width="200"/>
	</div>
		<div class="richmond">
		<h3>Richmond Beef Double</h3>
		<p>The Richmond Beef Double is made with double angus beef patties and cheese inside them with some tomatoes and ketchup on the top.</p>
		<img alt="richmond" src="Images/richmond.jpg" height="200" width="200"/>
	</div>
		<div class="collingwood">
		<h3>Collingwood Grilled Chicken</h3>
		<p>Collingwood Grilled Chicken burger is made with the gilled chicken patty and some onions, tomatoes and lettuce is covered in the chicken sauce.</p>
		<img alt="collingwood" src="Images/collingwood.jpg" height="200" width="200"/>
	</div>
	<div class="parkdale">
		<h3>Parkdale Crispy Chicken</h3>
		<p>The Parkdale Crispy Chicken consists of crispy chicken patty with tomatoes and cheese and some red onions with the ABS special sauce. </p>
		<img alt="parkdale" src="Images/parkdale.jpg" height="200" width="200"/>
	</div>
	<div class="kew">
		<h3>Kew Classic Angus</h3>
		<p>This easy Kew Classic Angus uses barbecue sauce rather than the traditional tomato sauce. I think the chicken goes best with capsicum and a bit of onion but you can change as desired. </p>
		<img alt="kew" src="Images/kew.jpg" height="200" width="200"/>
	</div>
	<div class="footscray">
		<h3>Footscray Fish Burger</h3>
		<p>This Footscray Fish Burger uses fish filet patty with half cheese and fish sauce on top of it with the steam bun.</p>
		<img alt="footscary" src="Images/footscray.jpg" height="200" width="200"/>
	</div>
	<div class="bruno">
		<h3>ABS Special Burger</h3>
		<p>The ABS special burger as a amazing grilled angus patty, made without yeast, and is topped with Provel cheese, rather than mozzarella. It's the Chef's favourite Burger.</p>
		<img alt="bruno" src="Images/abs.jpg" height="200" width="200"/>
	</div>
</div>
</article>
</main>
<aside>
<h2>MENU</h2>
<table>    <!--This is a table-->
	<tr>
		<th>Pizza Type</th>
		<th>Price</th>
	</tr>
	<tr>
		<td>Sunshine Beef and Fries</td>
		<td>$13.60</td>
	</tr>
	<tr>
		<td>Hawthorn Ultimate Chicken</td>
		<td>$13.85</td>
	</tr>
	<tr>
		<td>Richmond Beef Double</td>
		<td>$13.50</td>
	</tr>
	<tr>
		<td>Collingwood Grilled Chicken</td>
		<td>$14.10</td>
	</tr>
	<tr>
		<td>Parkdale Crispy Chicken</td>
		<td>$13.90</td>
	</tr>
	<tr>
		<td>Kew Classic Angus</td>
		<td>$14.55</td>
	</tr>
	<tr>
		<td>Footscray Fish Burger</td>
		<td>$12.90</td>
	</tr>
	<tr>
		<td>ABS Special Burger</td>
		<td>$15.00</td>
	</tr>
</table>
</aside>
<footer>
<p>The contents of this website are protected by <strong>copyright&copy; law.</strong> Copyright in this material resides with the Commonwealth of Australia or various other rights holders, as indicated. DP1 - Group 1 is the developer of this website as well the content provided in this website.</p>
</footer>
</body>
</html>
<?php
session_start();
?>