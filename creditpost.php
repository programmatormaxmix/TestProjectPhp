<?php

/** 
 * @Autor Startsev Maxim
 * @Copyright 2019
 * @Description Credit post script
 */

  include("checked.php");

  $confirm = $_POST["confirm"];
  $amount = $_POST["amount"];

 if ($confirm=="YES") {

      $message = "Package sent to delivery service"; 
  
  } else {
      $message = "You rejected award"; 
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