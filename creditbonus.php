<?php

/** 
 * @Autor Startsev Maxim
 * @Copyright 2019
 * @Description Creditor bonus script
 */

  include("checked.php");

  $amount = $_POST["amount"];
  $bonus += $amount;
  $sql = "update users set points='$bonus' where uid='$id'";   
  if (mysqli_query($conn, $sql))  {
         $message = "Your winnings are credited to your account"; 
  } else {
         $message = "Error database connect";
  }

?>

<html>
  <head>
  <title>Award</title>
  </head>
  <body>
    <hr>
    <h1><?php echo $message ?></h1>
    <a href="desktop.php">Back</a>
    <hr>
  </body>
</html>