<?php
    session_start();
    if (!isset($_SESSION['verify']))
        header("location: error.htm");
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Web development" />
	<meta name="keywords"    content="Registration Form" />
	<meta name="author"      content="DP1 Team" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
  	
	<title>ABS | Order</title>

	<script src="JavaScript/order.js"></script>
</head>
<body> <!--This is the Order page of Bruno Pizzeria from which the customers can order the pizza online-->
<header>
<h1>ORDER BURGER ONLINE</h1>
</header>
<nav>
  <ul>
    <li><a href="index.html">HOME</a></li>
	<li><a href="about.html">ABOUT US</a></li>
	<li><a href="registration.php">SIGN UP</a></li>
	<li><a class="active" href="order.php">ORDER BURGER</a></li>
      <li><a href="logout.php">LOG OUT</a></li>
  </ul>	 
</nav>
<main>
<h2>ORDER YOUR BURGER ONLINE</h2>
<p class="intro">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Now you can ORDER your burger online by filling out this simple form and we will be ready with your burger within 20 minutes. Please follow all the instructions provided by the page while you are filling out the form. <strong>THANK YOU!!!</strong>.</p>
<form id="order" method="post" action="getadd.php">
          <fieldset class="field1">
		  <legend class="info1">Contact Details:</legend>
		  <div class="name">
    <label>Customer Name:-</label>
<input id="v2" type="text" name="fname" />
 </div>
 <div class="mobile">
 <label>Mobile Number:-</label>
<input id="v1" type="text" name="Mobile_Number" maxlength="12" size="12" />
 </div>
 <div class="email"><label>Email Address for receipt:-</label>
<input type="email" name="emailContact" placeholder="email@domain.com" />
</div>

<fieldset class="field7">
  <legend class="info7">Choose the burger and the quantity you want to order :</legend>
  <label class="imp"><strong>Note:- If you will not assign any value to quantity, then the ORDER for that particular burger will not be considered. And once you are done selecting the pizzas with corresponding quantity, Press OK to see your total BILL.</strong></label> <br/><br/>
 <input type="checkbox" name="cbSunshine"
value="Sunshine Beef and Fries" id="sun" />Sunshine Beef and Fries   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="quantity1" size="10" maxlength="10" placeholder="QUANTITY" id="q1" /> <br/>
<input type="checkbox" name="cbHAwthorn"
value="Hawthorn Ultimate Chicken" id="haw" />Hawthorn Ultimate Chicken    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="quantity2" size="10" maxlength="10" placeholder="QUANTITY" id="q2"/><br/>
<input type="checkbox" name="cbRichmond"
value="Richmond Beef Double" id="rich" />Richmond Beef Double    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="quantity3" size="10" maxlength="10" placeholder="QUANTITY" id="q3"/><br/>
<input type="checkbox" name="cbCollingwood"
value="Collingwood Grilled Chicken" id="col" />Collingwood Grilled Chicken    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="quantity4" size="10" maxlength="10" placeholder="QUANTITY" id="q4"/><br/>
<input type="checkbox" name="cbParkdale"
value="Parkdale Crispy Chicken" id="park" />Parkdale Crispy Chicken    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="quantity5" size="10" maxlength="10" placeholder="QUANTITY" id="q5"/><br/>
<input type="checkbox" name="cbKew"
value="Parkdale Crispy Chicken" id="kew" />Kew Classic Angus       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="quantity6" size="10" maxlength="10" placeholder="QUANTITY" id="q6"/><br/>
<input type="checkbox" name="cbFootscray"
value="Footscray Fish Burger" id="foot" />Footscray Fish Burger     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="quantity7" size="10" maxlength="10" placeholder="QUANTITY" id="q7"/><br/>
<input type="checkbox" name="cbBruno"
value="ABS Special Burger" id="bruno" />ABS Special Burger    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="quantity8" size="10" maxlength="10" placeholder="QUANTITY" id="q8"/><br/><br/>

<div style="text-align:center;"><a href="#" id="showBill" class="button">OK</a></div>

<div class="bill" id="total">
<label><strong>Your total bill is:- </strong></label>  <input type="text" size="10" name="Total_Bill" maxlength="6" id="answer" />
</div>
 </fieldset>
	   
		  <!--Delivery Address-->
		  <fieldset class="field4">
		  <legend class="info4">Delivery Address:</legend>
			 
		  <div class="houseno2">
		  <label>Unit/House Number:-</label>
		  <input type="text" name="unithouse" maxlength="5" size="5" id="houseno2" /> <br/></div>
		  <div class="street2">
		  <label>Street Name:-</label>
		  <input type="text" name="streetname" maxlength="15" size="15" id="street2" /> <br/></div>
		  <div class="city2">
		   <label>City:-</label>
		  <input type="text" name="citydel" maxlength="12" size="12" id="city2" /> <br/></div>
		  <div class="state2">
          <label>State:-</label>
          
			<select name="statename" id="state2">
			<option value="">--Please Select--</option>
			<option value="ACT">ACT</option>
			<option value="NSW">NSW</option>
			<option value="NT">NT</option>
			<option value="QLD">QLD</option>
			<option value="SA">SA</option>
			<option value="TAS">TAS</option>
			<option value="VIC">VIC</option>
			<option value="WA">WA</option>
			</select>
		  </div>

		  <div class="postcode2">
		  <label>Postcode:-</label>
		  <input id="v3" type="text" name="postdel" maxlength="4" size="4"/> </div>
		  </div>
		  </fieldset>
		  <p class="final">
<input type="submit" value="Submit" name="submitbutton" />
<input type="reset" value="Reset" />
</p>
</form>
</main>
<footer>
<p>The contents of this website are protected by <strong>copyright&copy; law.</strong> Copyright in this material resides with the Commonwealth of Australia or various other rights holders, as indicated. Abhishek Mishra is the developer of this website as well the content provided in this website.</p>
</footer>
</body>
</html>

<?php include 'getadd.php';?>