<?php
  $server = "localhost:3306";
  $user = "root";
  $pass = "root";
  $conn = mysqli_connect($server, $user, $pass);
  $db = mysqli_select_db($conn,"slotsengine");
  if(!$db) {
            echo "Database not found";
            exit();
           }
?>