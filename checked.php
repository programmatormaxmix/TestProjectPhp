<?php

/** 
 * @Autor Startsev Maxim
 * @Copyright 2019
 * @Description Checker authentication users script
 */

	    include("database.php");
	    session_start();
	 
	    function Destroy() {
	        unset($_SESSION['UID']);
	        unset($_SESSION['USERNAME']);
	        header("location: index.php");
	    }
	 
	    if( isset($_SESSION['USERNAME'])) {
	        $uid = $_SESSION['UID'];
	        $username = $_SESSION['USERNAME'];
                $qry = "select * from users where login='$username'";
	        $result = mysqli_query($conn,$qry);
	        if(mysqli_num_rows($result) != 1) { 
                  Destroy(); 
                  } else {
                     $disco = "hello";
                     $row = mysqli_fetch_assoc($result);
                     $id= $row["uid"];   
                     $surname = $row["lastname"];
                     $name = $row["firstname"];
                     $money = $row["money"];
                     $bonus = $row["points"];
                     $loyalty = $row["loyalty"];
                     $card  = $row["cardnumber"];
                     $post = $row["state"] . ", ";
                     $post .= $row["street"];
                   }

	    } else { 
              Destroy(); 
              }
?>