<?php

/** 
 * @Autor Startsev Maxim
 * @Copyright 2019
 * @Description Script awards implementation
 */

  include("checked.php");

  $description = "100 EUR";
  $award = "creditmoney";
  $amount = 100;

?>

<html>
  <head>
  <title>Awards</title>
  </head>
  <body>
    <hr>
    <h1>!!!CONGRATILATIONS!!!</h1>
    <h1>YOU WIN</h1>
    <h1><?php echo $description ?></h1>
    <hr>
    <form action="<?php echo $award?>.php" method="post">
      TAKE A WIN????
      <input type="submit" name="confirm" value="YES">
      <input type="submit" name="confirm" value="NO">
      <input type="hidden" name="amount" value="<?php echo $amount?>">
    </form>
  </body>
</html>