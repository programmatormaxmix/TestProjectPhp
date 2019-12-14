<?php

/** 
 * @Autor Startsev Maxim
 * @Copyright 2019
 * @Description Script money to bonus converter
 */

  include("checked.php");

  $order = $_POST["order"];

  if ($money >= $order) {
     $money -= $order;
     $bonus += ($order * $loyalty);
     $sql = "update users set money='$money', points='$bonus' where uid='$id'";
     if (mysqli_query($conn, $sql))  {
         $withdrawal = "Money was convered to bonus"; 
     } else {
         $withdrawal = "Error database connect";
     }
  } else {
      $withdrawal = "Not enough money to convert";
  }

?>

<html>
  <head>
  <title>Convertation</title>
  </head>
  <body>
    <hr>
    <h1><?php echo $withdrawal ?></h1>
    <a href="desktop.php">Back</a>
    <hr>
  </body>
</html>