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

    <h1>User: <?php echo $name ?></h1>
    <h2>Balance: <?php echo $money ?></h2> 
    <h2>Bonus: <?php echo $bonus ?></h2> 
    <h2>Loyalty: <?php echo $loyalty ?></h2> 

    <a href="logout.php">Logout</a>
    <br><br>

    <form action="gamble.php" method="post">
      <input type="submit" value="GAMBLE !!!!">	            
    </form>

  </body>

</html>