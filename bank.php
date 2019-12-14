<?php

/** 
 * @Autor Startsev Maxim
 * @Copyright 2019
 * @Description Script money transaction
 */

  include("checked.php");
  
  //Bank transaction function
  function HttpBankOrder($Account,$Num) {
    return true;
  }

  $order = $_POST["order"];
  if ($money >= $order) {
     $money -= $order;
     $sql = "update users set money='$money' where uid='$id'";
     if (mysqli_query($conn, $sql)) {
        if (HttpBankOrder($card,$order)==true) {
           $withdrawal = "Money order was sent on " . $card;    
        } else {
           $withdrawal = "Money order was decline";
        } 
     } else {
         $withdrawal = "Error database connect";
     }
  } else {
      $withdrawal = "Not enough money to send";
  }

?>

<html>
  <head>
  <title>Withdrawal</title>
  </head>
  <body>
    <hr>
    <h1><?php echo $withdrawal ?></h1>
    <a href="desktop.php">Back</a>
    <hr>
  </body>
</html>