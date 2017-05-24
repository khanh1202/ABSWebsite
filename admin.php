<html lang="en">
<head>
	<meta charset="utf-8" />	
	<meta name="description" content="Development Project 1" />
	<meta name="keywords"    content="Registration Form" />
	<meta name="author"      content="Abhishek Mishra" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
			google.charts.load('current');   // Don't need to specify chart libraries!
			google.charts.setOnLoadCallback(drawVisualization);
		
	      function drawVisualization() {
	      	<?php
	      	$php_array = array(700, 920, 650, 677, 855, 789, 901, 690, 700);
	      	$js_array = json_encode($php_array);
	      	echo "var arr = ". $js_array . ";\n";
	      	?>
	        var wrapper = new google.visualization.ChartWrapper({
	          chartType: 'ColumnChart',
	          dataTable: [['', 'Sunshine Beef and Fries', 'Hawthorn Ultimate Chicken', 'Richmond Beef Double', 'Collingwood Grilled Chicken', 'Parkdale Crispy Chicken', 'Kew Classic Angus', 'Footscray Fish Burger', 'ABS Special Burger'],
	                      ['', arr[0], arr[1], arr[2], arr[3], arr[4], arr[5], arr[6], arr[7]]],
	          options: {'title': 'Burgers sold'},
	          containerId: 'vis_div'
	        });
	        wrapper.draw();
	      }
	    </script>
	<title>About</title>
</head>
<body>      <!--This is the about page of Bruno Pizzeria which tells the history of Bruno Pizzeria-->
	<header>
	<h1>Administration</h1>
	</header>
	<nav>
	  <ul>
		<li><a href="home.php">HOME</a></li>
		<li><a href="about.php">ABOUT US</a></li>
		<li><a href="registration.php">SIGN UP</a></li>
		<li><a href="login.php">CUSTOMER LOGIN</a></li>
		<li><a href="feedback.php">FEEDBACK</a></li>
		<li><a href="adminlogin.php">ADMIN LOGIN</a></li>
		<li><a class="active" href="admin.php">ADMIN</a></li>
		<li><a href="logout.php">LOGOUT</a></li>
	  </ul>	 
	</nav>
	<main>
		<p>This is the chart that shows the number of burgers sold in a calendar year. Different kinds of burgers are respresented with different colors.</p>
		<div id="vis_div" style="width: 600px; height: 400px;"></div>
	</main>
	<footer>
		<p>The contents of this website are protected by <strong>copyright&copy; law.</strong> Copyright in this material resides with the Commonwealth of Australia or various other rights holders, as indicated. DP1 - Group 1 is the developer of this website as well the content provided in this website.</p>
	</footer>
</body>
</html>