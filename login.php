<HTML XMLns="http://www.w3.org/1999/xHTML"> 
  <head> 
    <title>ABS | Login</title> 
  </head> 
  <body>
  <h1>Login to our system</h1>
  <nav>
  <ul>
      <li><a href="index.html">HOME</a></li>
    <li><a href="about.html">ABOUT US</a></li>
    <li><a href="registration.html">SIGN UP</a></li>
    <li><a class="active" href="login.php">ORDER BURGER</a></li>
  </ul>  
  </nav>
  	<h1>Bruno Pizerria Login Page</h1>
    <!--Form to check get the login details-->
  	<form>
  		<fieldset>
  			<legend>Member Login</legend>
  			<p><label for="email">Email <input type="text" name="email" id="email"></label></p>
  			<p><label for="pass">Password: <input type="Password" name="pass" id="pass"></label></p>
  			<input type="submit" value="Log in" name="submit"/>
        <p>Not a member? <a href="registration.html"> Sign up</a></p>
  		</fieldset>
  	</form>
  </body>
<?php
  if (session_id())
    session_destroy();
  if (isset($_GET['submit']))
  {
    if (empty($_GET["email"]) || empty($_GET["pass"]))
      echo "<p>Please fill all the fields</p>";
    else
    {
      //get the information and connect to database
      session_start();
      if (!isset($_SESSION["verify"]))
        $_SESSION["verify"] = false;
      $email = $_GET["email"];
      $pass = $_GET["pass"];
      $user = "s101339475";
      $pwd = "120297";
      $database = "s101339475_db";
      $dbConnect = @mysqli_connect("feenix-mariadb.swin.edu.au", $user, $pwd, $database) or die("<p>Unable to connect to the database server. </p>". "<p>Error code ". mysqli_connect_errno($dbConnect). ": ". mysqli_connect_error($dbConnect). "</p>");
            //implement the query to check identity
      $querystring1 = "select * from ABSCustomer where email='$email' and password='$pass'";
      $query1 = @mysqli_query($dbConnect, $querystring1) or die ("<p>Unable to do the query 4</p>");
      if ($rowquery1 = mysqli_fetch_assoc($query1))
      {
        $_SESSION["verify"] = true;
        header("Location: order.php");
      }
      else
        echo "<p>Invalid email address or password</p>";
      mysqli_free_result($query1);
      mysqli_close($dbConnect);
    }
  }

?>
</HTML>