<?php

/** 
 * @Autor Startsev Maxim
 * @Copyright 2019
 * @Description Credit bonus script
 */

  include("checked.php");

  $confirm = $_POST["confirm"];
  $amount = $_POST["amount"];

 if ($confirm=="YES") {

    $bonus += $amount;
    $sql = "update users set points='$bonus' where uid='$id'";   
    if (mysqli_query($conn, $sql))  {
           $message = "We sent bonus on you account"; 
    } else {
           $message = "Error database connect";
    }

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