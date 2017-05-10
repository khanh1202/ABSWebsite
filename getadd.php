<?php
  
  /**
  * Author: Guillaume Dinys Monvoisin 101190737
  * Target: register.php
  * Purpose: register customer and get customer details
  * Created: 29/03/2017
  * Last updated: 29/03/2017
  * Credits:
  */  

  require_once("settings.php"); // connection info
  
  $conn = @mysqli_connect($host,
    $user,
    $pwd,
    $sql_db
  );

  if (!$conn) 
  {
    // Displays an error message
    echo "<p>Database connection failure</p>"; // not in production script
  } 
  else
  {
    //check if data is input from the form and not url use to get to the php site
    if (isset($_POST['submitbutton']) && isset($_POST['fname']))
    {
      if (isset($_POST['fname'])) $fname = $_POST['fname'];
      if (isset($_POST['Mobile_Number'])) $Mobile_Number = $_POST['Mobile_Number'];
      if (isset($_POST['emailContact'])) $emailContact = $_POST['emailContact'];
      if (isset($_POST['cbSunshine'])) $cbSunshine = $_POST['cbSunshine'];
      if (isset($_POST['cbHAwthorn'])) $cbHAwthorn = $_POST['cbHAwthorn'];
      if (isset($_POST['cbRichmond'])) $cbRichmond = $_POST['cbRichmond'];
      if (isset($_POST['cbCollingwood'])) $cbCollingwood = $_POST['cbCollingwood'];
      if (isset($_POST['cbParkdale'])) $cbParkdale = $_POST['cbParkdale'];
      if (isset($_POST['cbKew'])) $cbKew = $_POST['cbKew'];
      if (isset($_POST['cbFootscray'])) $cbFootscray = $_POST['cbFootscray'];
      if (isset($_POST['cbBruno'])) $cbBruno = $_POST['cbBruno'];
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
    

      $arr = array($quantity1, $quantity2, $quantity3,$quantity4,$quantity5,$quantity6,$quantity7,$quantity8);
      
      checkQuantity($arr);
      //insert the inputs entered by customer and generated number
      $queryInsert = "INSERT INTO `ABSOrder` VALUES ('$fname','$Mobile_Number','$emailContact',$quantity1,$quantity2,$quantity3,$quantity4,$quantity5,$quantity6,$quantity7,$quantity8,'$unithouse','$streetname','$citydel','$state', $postdel, 0)";

      $resultInsert = mysqli_query($conn, $queryInsert);

      //checks if the execution was successful
      if (!$resultInsert)
      {
        echo "<p>Something is wrong with ", $queryInsert, "</p>";
      }
      else
      {
          echo "<p>Dear {$fname}, you have successfully ordered.<p>";
      }
    }
  }

function checkQuantity($arr)
{
  for ($i=1; $i < 8; $i++) {
      if($arr[$i] == "")
      {
        $arr[$i] = 0;
      }
    }
}

?>