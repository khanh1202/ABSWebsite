<?php
  session_start();
  /**
  * Author: Guillaume Dinys Monvoisin 101190737
  * Target: register.php
  * Purpose: register customer and get customer details
  * Created: 29/03/2017
  * Last updated: 29/03/2017
  * Credits:
  */  
  
    // Open the Database connection
  $DBConnection = @mysqli_connect("feenix-mariadb.swin.edu.au", "s100864950","120897", "s100864950_db")
  Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ". 
  mysqli_connect_errno().": ". mysqli_connect_error()). "</p>"; 

  if (!$DBConnection) 
  {
    // Displays an error message
    echo "<p>Database connection failure</p>"; // not in production script
  } 
  else
  {
    //check if data is input from the form and not url use to get to the php site
    if (isset($_POST['submitbutton']))
    {
    if (isset($_POST['quantity1'])) $quantity1 = $_POST['quantity1'];
    if (isset($_POST['quantity1'])) $quantity2 = $_POST['quantity2'];
    if (isset($_POST['quantity1'])) $quantity3 = $_POST['quantity3'];
    if (isset($_POST['quantity1'])) $quantity4 = $_POST['quantity4'];
    if (isset($_POST['quantity1'])) $quantity5 = $_POST['quantity5'];
    if (isset($_POST['quantity1'])) $quantity6 = $_POST['quantity6'];
    if (isset($_POST['quantity1'])) $quantity7 = $_POST['quantity7'];
    if (isset($_POST['quantity1'])) $quantity8 = $_POST['quantity8'];
    if (isset($_POST['unithouse'])) $unithouse = $_POST['unithouse'];
    if (isset($_POST['streetname'])) $streetname = $_POST['streetname'];
    if (isset($_POST['citydel'])) $citydel = $_POST['citydel'];
    if (isset($_POST['statename'])) $state = $_POST['statename'];
    if (isset($_POST['postdel'])) $postdel = $_POST['postdel'];
    if (isset($_POST['method_of_payment'])) $paymenttype = $_POST['method_of_payment'];
    if (isset($_POST['cardtype'])) $cardtype = $_POST['cardtype'];
    if (isset($_POST['name_on_card'])) $name_card = $_POST['name_on_card'];
    if (isset($_POST['card_Number'])) $card_num = $_POST['card_Number'];
    if (isset($_POST['ValidTill'])) $validtill = $_POST['ValidTill'];
    if (isset($_POST['Total_Bill'])) $total_bill = $_POST['Total_Bill'];
    

        $arr = array($quantity1, $quantity2, $quantity3,$quantity4,$quantity5,$quantity6,$quantity7,$quantity8);
        checkQuantity($arr);
    $customerid = $_SESSION['custid'];
      
    $SQLstring1 = "select * from ABSOrder where cnumber = '".$customerid."'";
    $queryResult1 = @mysqli_query($DBConnection, $SQLstring1);
    $rowcount1 = mysqli_num_rows($queryResult1);
    
    $SQLstring = "select * from ABSOrder";
    $queryResult = @mysqli_query($DBConnection, $SQLstring);
    $rowcount = mysqli_num_rows($queryResult);
    
    if ($rowcount1 == 0)
    {
      $assignOrder = $rowcount + 5000;
      $total1 = calculateTotal($arr)*0.8;
      
      // Set up of SQL strings and Execution
      $Query = "insert into ABSOrder values ('$customerid', '$assignOrder', '$arr[0]', '$arr[1]', '$arr[2]', '$arr[3]', '$arr[4]', '$arr[5]', '$arr[6]', '$arr[7]', '$total1', '$unithouse', '$streetname', '$citydel', '$state', '$postdel', '$paymenttype', '$cardtype', '$name_card', '$card_num', '$validtill')";
      $Results = mysqli_query($DBConnection, $Query);
      
      $message = "Thank You!! Your order request has been successfully placed and your order number is $assignOrder";
      echo "<script type='text/javascript'>alert('$message');</script>";
    
      // Closing the Database Connection
      mysqli_close($DBConnection);
      include 'order.php';
    }
    else
    {
      $assignOrder = $rowcount + 5000;
      $total2 = calculateTotal($arr);
      
      // Set up of SQL strings and Execution
      $Query = "insert into ABSOrder values ('$customerid', '$assignOrder', '$arr[0]', '$arr[1]', '$arr[2]', '$arr[3]', '$arr[4]', '$arr[5]', '$arr[6]', '$arr[7]', '$total2', '$unithouse', '$streetname', '$citydel', '$state', '$postdel', '$paymenttype', '$cardtype', '$name_card', '$card_num', '$validtill')";
      $Results = mysqli_query($DBConnection, $Query);
      
      $message = "Thank You!! Your order request has been successfully placed and your order number is $assignOrder";
      echo "<script type='text/javascript'>alert('$message');</script>";
    
      // Closing the Database Connection
      mysqli_close($DBConnection);
      include 'order.php';
    }
    }
}

function checkQuantity($arr)
{
  for ($i=1; $i < 8; $i++)
  {
    if($arr[$i] == "")
        {
      $arr[$i] = 0;
        }
    }
}

function calculateTotal($arr)
{
  $a = 0.00;
  $price = [13.60,13.85,13.50,14.10,13.90,14.55,12.90,15.00];
  for ($i=0; $i<8; $i++)  /*This function calculates the total bill of the customer*/
  {             
    $a += $arr[$i]*$price[$i];
  }
  return $a;
}

?>