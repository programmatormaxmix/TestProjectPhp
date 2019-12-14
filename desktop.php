<?php

/** 
 * @Autor Startsev Maxim
 * @Copyright 2019
 * @Description User account desktop
 */

  include("checked.php");

?>

<html>
  <head>
  <title>Welcome to user desktop</title>
  </head>

  <body>
    <hr>
    <h1>User: <?php echo $name ?></h1>
    <h1>Address: <?php echo $post?><h1> 
    <h2>Money: <?php echo $money ?> EUR</h2> 
    <h2>Bonus: <?php echo $bonus ?> BON</h2> 
    <h2>Loyalty: <?php echo $loyalty ?> LOY</h2> 
    <h2>VISA-Card: <?php echo $card ?></h2>
    <a href="logout.php">Logout</a>
    <br><br>
    <hr>
    <form action="bank.php" method="post">
      <p>Enter amount money</p><input type="number" name="order" min="1" max="100" value="0"> 
      <input type="submit" value="Send money to bank">	            
    </form>
    <form action="bonus.php" method="post">
      <p>Enter amount money</p><input type="number" name="order" min="1" max="100" value="0"> 
      <input type="submit" value="Convert money to bonus">	            
    </form>
    <hr>
    <form action="gamble.php" method="post">
      <input type="submit" value=">---GAMBLE<---">	            
    </form>
    <hr>
  </body>

</html>