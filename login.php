<head>
	<meta charset="utf-8" />	
	<meta name="description" content="Development Project 1" />
	<meta name="keywords"    content="Registration Form" />
	<meta name="author"      content="Abhishek Mishra" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />

	<title>Customer Login</title>
</head>
<body>       <!--This is the about page of Bruno Pizzeria which tells the history of Bruno Pizzeria-->
	<header>
	<h1>CUSTOMER LOGIN</h1>
	</header>
	<nav>
	  <ul>
		<li><a href="home.php">HOME</a></li>
		<li><a href="about.php">ABOUT US</a></li>
		<li><a href="registration.php">SIGN UP</a></li>
		<li><a class="active" href="login.php">CUSTOMER LOGIN</a></li>
		<li><a href="feedback.php">FEEDBACK</a></li>
		<li><a href="adminlogin.php">ADMIN LOGIN</a></li>
	  </ul>	 
	</nav>
	
	<main>
	<h2>LOGIN TO THE AUSTRALIAN BURGER STAR</h2>
	<p class="intro">You can log into the system by entering your generated customer ID and password.</p>
	<form method="post">
	 <fieldset class="field1">
	   <legend class="info1">Login Information:</legend>
	 <div class="name">
		<label>Customer Number:-</label>
	<input id="r1" type="text" name="cnum" />
	 </div>
	 <div class="name">
		<label>Password:-</label>
		<input id="r2" type="password" name="pass" />
	 </div>
	 </fieldset>
	
	<p class="final">
	<input type="submit" value="Login" />
	<input type="reset" value="Reset" />
	</p>
	</form>
	</main>
	
	<footer>
		<p>The contents of this website are protected by <strong>copyright&copy; law.</strong> Copyright in this material resides with the Commonwealth of Australia or various other rights holders, as indicated. DP1 - Group 1 is the developer of this website as well the content provided in this website.</p>
	</footer>
</body>
</html>

<?php
	session_start();
	
	if(isset($_POST['cnum']) && isset($_POST['pass']))
	{
		$cnum = $_POST['cnum'];
		$pass = $_POST['pass'];
		
		if ($cnum == "" || $pass == "")
		{
			$errMsg = "Please make sure that none of the input fields are empty";
			echo "<script type='text/javascript'>alert('$errMsg');</script>";
		}
		
		else
		{
			// Open the Database connection
			$DBConnection = @mysqli_connect("feenix-mariadb.swin.edu.au", "s100864950","120897", "s100864950_db")
			Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ". 
			mysqli_connect_errno().": ". mysqli_connect_error()). "</p>"; 
			
			$SQLstring = "select * from ABSCustomer where cno = '".$_POST['cnum']."' and cpassword = '".$_POST['pass']."'";
			$queryResult = @mysqli_query($DBConnection, $SQLstring);
			$rowcount = mysqli_num_rows($queryResult);
			
			if ($rowcount == 1)
			{
				$_SESSION['custid'] = $_POST['cnum'];
				header('Location: order.php');
			}
			
			else
			{
				$errMsg1 = "Please enter a valid Customer Number and Password";
				echo "<script type='text/javascript'>alert('$errMsg1');</script>";
			}
		}
	}
?>