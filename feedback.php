<html lang="en">
<head>
	<meta charset="utf-8" />	
	<meta name="description" content="Development Project 1" />
	<meta name="keywords"    content="Registration Form" />
	<meta name="author"      content="Abhishek Mishra" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />

	<title>Feedback</title>
</head>
<body>       <!--This is the about page of Bruno Pizzeria which tells the history of Bruno Pizzeria-->
	<header>
	<h1>FEEDBACK SURVEY</h1>
	</header>
	<nav>
	  <ul>
		<li><a href="home.php">HOME</a></li>
		<li><a href="about.php">ABOUT US</a></li>
		<li><a href="registration.php">SIGN UP</a></li>
		<li><a href="login.php">CUSTOMER LOGIN</a></li>
		<li><a class="active" href="feedback.php">FEEDBACK</a></li>
		<li><a href="adminlogin.php">ADMIN LOGIN</a></li>
	  </ul>	 
	</nav>
	<main>
	<p class="intro">We always appreciate honest feedbacks. We always find it encouraging to get feedbacks from our customers so that we could make things better here at the Australian Burger Star and respond to their feedbacks with implemented actions. Please provide your feedback here by filling out this simple form. <strong>Thank You!!!</strong></p>
	<form id="regform" method="post">
	 <fieldset class="field1">
	   <legend class="info1">Provide Feedback:</legend>

	  <label>Your Feedback is regarding:</label>
	 <div class="gender">
	<input type="radio" name="regarding" value="food" id="r5" />Food
	<input type="radio" name="regarding" value="cs" id="r6" />Customer Service
	<input type="radio" name="regarding" value="environment" id="r7" />Environment
	</div>
	
	<label>Detailed Feedback:</label>
	<div>
          <textarea id="myTextArea" name="feedback" rows = "8" cols = "80">Your text here</textarea>
	</div>
	
	 </fieldset>
	<p class="final">
	<input type="submit" value="Submit" />
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

if(isset($_POST['regarding']) && isset($_POST['feedback']))
{
	$regarding = $_POST['regarding'];
	$feedback = $_POST['feedback'];
	
	if($regarding == "" || $feedback == "")
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
		
		// Set up of SQL strings and Execution
		$Query = "insert into ABSFeedback values ('$regarding', '$feedback')";
		$Results = mysqli_query($DBConnection, $Query);
		
		$message = "Thank You!!! Your feedback has been successfully submitted";
		echo "<script type='text/javascript'>alert('$message');</script>";
	
		// Closing the Database Connection
		mysqli_close($DBConnection);
	}
}
?>