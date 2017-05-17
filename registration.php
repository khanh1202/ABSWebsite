<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />	
	<meta name="description" content="Web development" />
	<meta name="keywords"    content="Registration Form" />
	<meta name="author"      content="Abhishek Mishra" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />

	<title>ABS | Registration</title>
</head>
<body>  <!--This is the registration page which allows the customers to sign up with Bruno Pizzeria-->
<?php
	$host = "ictstu-db1.cc.swin.edu.au";
	$user = "s101339475";
	$password = "120297";
	$database = "s101339475_db";
	$connect = @mysqli_connect($host, $user, $password, $database);
?>
<header>
<h1>REGISTER YOURSELF</h1>
</header>
<nav>
  <ul>
    <li><a href="index.html">HOME</a></li>
	<li><a href="about.html">ABOUT US</a></li>
	<li><a class="active" href="registration.php">SIGN UP</a></li>
	<li><a href="order.php">ORDER PIZZA</a></li>
      <li><a href="logout.php">LOG OUT</a></li>
  </ul>	 
</nav>
<main>
<h2>SIGN UP WITH BRUNO PIZZERIA</h2>
<p class="intro">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Now you can easily sign up with Bruno Pizzeria by filling out this very simple form. Please follow all the instructions provided by the page while you are filling out the form. <strong>THANK YOU FOR YOUR TIME!!!</strong></p>
<form id="regform" method="post">
 <fieldset class="field1">
   <legend class="info1">Personal Information:</legend>
 <div class="name">
    <label>Full Name:-</label>
<input id="r1" type="text" name="fname" />
 </div>
 <fieldset>
  <legend>Gender:</legend>
 <div class="gender">
<input type="radio" name="gender" value="Male" id="r5" checked="checked"/>Male
<input type="radio" name="gender" value="Female" id="r6" />Female
</div>
</fieldset>
 <div class="age">
 <label>Date of Birth:-</label>
<input type="date" name="DOB" />
 </div>
 <div class="mobile">
 <label>Mobile Number:-</label>
<input id="mob" type="text" name="Mobile_Number" maxlength="12" size="12" />
 </div>
 <div class="favourites">
 <fieldset>
  <legend>Tick off the pizzas you like eating the most in Bruno Pizzeria:</legend>
 <input type="checkbox" name="cbSunshine"
value="Sunshine Tomato Pie" />Sunshine Tomato Pie <br/>
<input type="checkbox" name="cbHAwthorn"
value="Hawthorn Detroit Style" />Hawthorn Detroit Style <br/>
<input type="checkbox" name="cbRichmond"
value="Richmond Thin Crust" />Richmond Thin Crust <br/>
<input type="checkbox" name="cbCollingwood"
value="Collingwood Deep Dish" />Collingwood Deep Dish <br/>
<input type="checkbox" name="cbParkdale"
value="Parkdale Crunchy Style" />Parkdale Crunchy Style <br/>
<input type="checkbox" name="cbKew"
value="Kew Chicken Pizza" />Kew Chicken Pizza <br/>
<input type="checkbox" name="cbFootscray"
value="Footscray Lamb Pizza" />Footscray Lamb Pizza <br/>
<input type="checkbox" name="cbBruno"
value="Bruno Special Pizza" />Bruno Special Pizza
 
 </fieldset>
 </div>
 <div class="rank">
 <label>Rank the Pizza and Service of Bruno Pizzeria Out of 5:-</label>
<select name="rank">
<option value="5" selected="selected">5</option>
<option value="4">4</option>
<option value="3">3</option>
<option value="2">2</option>
<option value="1">1</option>
</select>
 </div>
 </fieldset>
 <fieldset class="field2">
 <legend class="info2">Choose Your Email and Password:</legend>
 <div class="email"><label>Email:-</label>
<input id="r3" type="email" name="emailContact" />
</div>
 <div class="Password">
 <label>Password:-</label>
<input type="password" name="Password" id="r2" />
 </div>
 <div class="Con_Password">
 <label>Confirm Password:-</label>    <!--the confirm password input field is provided to check whether the user remembers the password that is provided by them, It has to be as same as the Password-->
<input type="password" name="Con_Password" id="r4" />
 </div>
 
 </fieldset>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (isset($_POST["fname"]) || isset($_POST["emailContact"]) || isset($_POST["Password"]) || isset($_POST["gender"]) || isset($_POST["DOB"]) || isset($_POST["Mobile_Number"]) || isset($_POST["rank"]) || isset($_POST["Con_Password"]))
        {
            $fullname = $_POST["fname"];
            $email = $_POST["emailContact"];
            $userPass = $_POST["Password"];
            $gender = $_POST["gender"];
            $dob = $_POST["DOB"];
            $mobile = $_POST["Mobile_Number"];
            $rank = $_POST["rank"];
            $conpassword = $_POST["Con_Password"];
        }

        if (empty($fullname) || empty($email) || empty($userPass) || empty($conpassword))
        {
            echo "<p>Please fill all required fields</p>";
        }
        else
        {
            $query_verify = "select * from ABSCustomer WHERE email='$email'";
            $query_insert = "INSERT INTO ABSCustomer (name, email, password, gender, dob) VALUES ('$fullname', '$email', '$userPass', '$gender', '$dob')";
            $do_verify = @mysqli_query($connect, $query_verify);
            if ($rowquery = mysqli_fetch_assoc($do_verify))
                echo "Your email has been used before";
            else
            {
                mysqli_query($connect, $query_insert);
                mysqli_close($connect);
                echo "<p>Your registration is successful</p>";
            }

        }
    }
    ?>
<p class="final">
<input type="submit" value="Submit" />
<input type="reset" value="Reset" />
</p>
</form>
</main>

<footer>
<p>The contents of this website are protected by <strong>copyright&copy; law.</strong> Copyright in this material resides with the Commonwealth of Australia or various other rights holders, as indicated. Abhishek Mishra is the developer of this website as well the content provided in this website.</p>
</footer>
</body>
</html>