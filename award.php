<?php

/** 
 * @Autor Startsev Maxim
 * @Copyright 2019
 * @Description Script awards implementation
 */

  include("checked.php");

  $sql = "select * from award where uid='$id'";
  $result = mysqli_query($conn,$sql);


  if(mysqli_num_rows($result) > 0) {	       

           $row = mysqli_fetch_assoc($result);
           $awardid =$row['id'];
	   $award = $row['type'];
           $amount = $row['count'];
           $desc = $row['desc'];

           $sql = "delete from award where id='$awardid'";
           $result = mysqli_query($conn,$sql);   
	         	   
  } else {
   
      $award = "creditbonus";
      $amount = 1; 
      $desc = "1 BON";
 
  }


?>

<html>
  <head>
  <title>Awards</title>
  </head>
  <body>
    <hr>
    <h1>!!!CONGRATILATIONS!!!</h1>
    <h1>YOU WIN</h1>
    <h1><?php echo $desc ?></h1>
    <hr>
    <form action="<?php echo $award?>.php" method="post">
      TAKE A WIN????
      <input type="submit" name="confirm" value="YES">
      <input type="submit" name="confirm" value="NO">
      <input type="hidden" name="amount" value="<?php echo $amount?>">
    </form>
  </body>
</html>