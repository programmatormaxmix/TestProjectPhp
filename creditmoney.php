<?php

/** 
 * @Autor Startsev Maxim
 * @Copyright 2019
 * @Description Credit money script
 */

  include("checked.php");

  $confirm = $_POST["confirm"];
  $amount = $_POST["amount"];
  if ($confirm=="YES") {

    $money += $amount;
    $sql = "update users set money='$money' where uid='$id'";   
    if (mysqli_query($conn, $sql))  {
           $message = "We sent money on you account"; 
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