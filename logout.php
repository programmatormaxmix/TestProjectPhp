<?php

/** 
 * @Autor Startsev Maxim
 * @Copyright 2019
 * @Description Unlogin user script checking
 */

  session_start();
  unset($_SESSION['UID']);
  unset($_SESSION['USERNAME']);
  header("location: index.php");
?>