<?php

/** 
 * @Autor Startsev Maxim
 * @Copyright 2019
 * @Description Скрипт выхода пользователя из личного кабинета
 */

  session_start();
  unset($_SESSION['UID']);
  unset($_SESSION['USERNAME']);
  header("location: index.php");
?>