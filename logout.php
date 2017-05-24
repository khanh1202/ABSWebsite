<head>
	<meta charset="utf-8" />	
	<meta name="description" content="Development Project 1" />
	<meta name="keywords"    content="Registration Form" />
	<meta name="author"      content="Abhishek Mishra" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">
		function redirect()
		{
			window.location.href = 'home.php';
		}
	</script>

	<title>Customer Login</title>
</head>
<body>       <!--This is the about page of Bruno Pizzeria which tells the history of Bruno Pizzeria-->
	<header>
	<h1>LOGOUT</h1>
	</header>
	<nav>
	  <ul>
		<li><a href="home.php">HOME</a></li>
		<li><a href="about.php">ABOUT US</a></li>
		<li><a href="registration.php">SIGN UP</a></li>
		<li><a href="login.php">CUSTOMER LOGIN</a></li>
		<li><a href="feedback.php">FEEDBACK</a></li>
		<li><a href="adminlogin.php">ADMIN LOGIN</a></li>
		<li><a class="active" href="logout.php">LOGOUT</a></li>
	  </ul>	 
	</nav>
	
	<main>
		
		<h1 style="text-align:center; color:#00cc00;">Thank You!!! You have successfully logged out of the system.</h1>
		<h2>IMPORTANT INFORMATION</h2>
		<h3 style="text-align:center;">It is a good thing to log yourself out of the system. Always remember to log yourself out once you are done using the website to save your identity from the cyber hackers. Thank you for using this website and See you again!!!</h3>
		<div style="text-align:center; margin-bottom:30px;">
			<button onclick="redirect()">Back to Home Page</button>
		</div>
	</main>
	
	<footer>
		<p>The contents of this website are protected by <strong>copyright&copy; law.</strong> Copyright in this material resides with the Commonwealth of Australia or various other rights holders, as indicated. DP1 - Group 1 is the developer of this website as well the content provided in this website.</p>
	</footer>
</body>
</html>

<?php
	session_start();
	session_destroy();
?>