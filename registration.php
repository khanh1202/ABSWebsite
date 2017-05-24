<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8" />    
    <meta name="description" content="Development Project 1" />
    <meta name="keywords"    content="Registration Form" />
    <meta name="author"      content="Abhishek Mishra" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />

    <title>Registration</title>
</head>
<body>  <!--This is the registration page which allows the customers to sign up with Bruno Pizzeria-->
    <header>
    <h1>REGISTER YOURSELF</h1>
    </header>
    <nav>
      <ul>
        <li><a href="home.php">HOME</a></li>
        <li><a href="about.php">ABOUT US</a></li>
        <li><a class="active" href="registration.php">SIGN UP</a></li>
        <li><a href="login.php">CUSTOMER LOGIN</a></li>
        <li><a href="feedback.php">FEEDBACK</a></li>
        <li><a href="adminlogin.php">ADMIN LOGIN</a></li>
      </ul>  
    </nav>
    <main>
    <h2>SIGN UP WITH AUSTRALIAN BURGER STAR</h2>
    <p class="intro">Now you can easily sign up with Bruno Pizzeria by filling out this very simple form. Please follow all the instructions provided by the page while you are filling out the form. <strong>THANK YOU FOR YOUR TIME!!!</strong></p>
    <form id="regform" method="post">
     <fieldset class="field1">
       <legend class="info1">Personal Information:</legend>
     <div class="name">
        <label>Full Name:-</label>
    <input id="r1" type="text" name="name" />
     </div>
     <fieldset>
      <legend>Gender:</legend>
     <div class="gender">
    <input type="radio" name="gender" value="Male" id="r5" />Male
    <input type="radio" name="gender" value="Female" id="r6" />Female
    </div>
    </fieldset>
     <div class="age">
     <label>Date of Birth:-</label>
    <input type="date" name="DOB" />
     </div>
     <div class="mobile">
     <label>Mobile Number:-</label>
    <input type="text" name="mobile" maxlength="12" size="12" id="mob" />
     </div>
     <div class="favourites">
     <fieldset>
      <legend>Tick off the burgers you like eating the most in Australian Burger Star:</legend>
         <input type="checkbox" name="cbSunshine"
        value="Sunshine Tomato Pie" />Sunshine Beef and Fries <br/>
        <input type="checkbox" name="cbHAwthorn"
        value="Hawthorn Detroit Style" />Hawthorn Ultimate Chicken <br/>
        <input type="checkbox" name="cbRichmond"
        value="Richmond Thin Crust" />Richmond Beef Double <br/>
        <input type="checkbox" name="cbCollingwood"
        value="Collingwood Deep Dish" />Collingwood Grilled Chicken <br/>
        <input type="checkbox" name="cbParkdale"
        value="Parkdale Crunchy Style" />Parkdale Crispy Chicken <br/>
        <input type="checkbox" name="cbKew"
        value="Kew Chicken Pizza" />Kew Classic Angus <br/>
        <input type="checkbox" name="cbFootscray"
        value="Footscray Lamb Pizza" />Footscray Fish Burger <br/>
        <input type="checkbox" name="cbBruno"
        value="Bruno Special Pizza" />ABS Special Burger
     
     </fieldset>
     </div>
     <div class="rank">
     <label>Rank the Pizza and Service of Australian Burger Star Out of 5:-</label>
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
    <input id="r3" type="email" name="email" />
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
    <p class="final">
    <input type="submit" value="Register" />
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
if(isset($_POST['name']) && isset($_POST['mobile']) && isset($_POST['email']) && isset($_POST['Password']) && isset($_POST['Con_Password']))
{
    // Assignment of different inputs provided by the User
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['Password'];
    $cpassword = $_POST['Con_Password'];
        
    // To check if all the fields have been filled out or not
    if($name == "" || $mobile == "" || $email == "" || $password == "" || $cpassword == "")
    {
        $errMsg = "Please make sure that none of the input fields are empty";
        echo "<script type='text/javascript'>alert('$errMsg');</script>";
    }
    
    else
    {
        if($password == $cpassword)
        {
            // Open the Database connection
            $DBConnection = @mysqli_connect("feenix-mariadb.swin.edu.au", "s100864950","120897", "s100864950_db")
            Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ". 
            mysqli_connect_errno().": ". mysqli_connect_error()). "</p>"; 
            
            $SQLstring = "select * from ABSCustomer where cemail = '".$_POST['email']."'";
            $queryResult = @mysqli_query($DBConnection, $SQLstring);
            $rowcount = mysqli_num_rows($queryResult);
            
            //Unique Email Address Check
            if ($rowcount == 1)
            {
                $message3 = "Please enter a valid Email Address";
                echo "<script type='text/javascript'>alert('$message3');</script>";
            }
            
            else
            {
                $sqlString = "SELECT * FROM ABSCustomer";
                $queryResult = @mysqli_query($DBConnection, $sqlString);
                $numRows = mysqli_num_rows($queryResult);
                
                $assign_cno = $numRows + 1001;
                        
                // Set up of SQL strings and Execution
                $Query = "insert into ABSCustomer values ('$assign_cno', '$name', '$password', '$email', '$mobile')";
                $Results = mysqli_query($DBConnection, $Query);
                
                $message = "Dear $name, your are successfully registered into ShipOnline and your customer number is $assign_cno, which will be used to get into the system";
                echo "<script type='text/javascript'>alert('$message');</script>";
                
                $to = $email;
                $subject = "Welcome to the Official Website of Australian Burger Star!";
                $message = "Dear ".$name.", welcome to use ABS official website! Your customer ID is ".$assign_cno." and the password is ".$password." which you can use to log into the system.";
                $headers = "From registration@abs.com.au";
                
                mail($to, $subject, $message, $headers);
                
                // Closing the Database Connection
                mysqli_close($DBConnection);
            }
        }
        
        else 
        {
            $message2 = "Please make sure that your passwords match";
            echo "<script type='text/javascript'>alert('$message2');</script>";
        }
    }
}
        
?>