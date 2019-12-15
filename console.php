<?php

/** 
 * @Autor Startsev Maxim
 * @Copyright 2019
 * @Description Command execute script
 */

  $server = "176.119.159.191:3306";
  //$server = "localhost:3306";
  $user = "root";
  $pass = "root";
  $database = "slotsengine";

   if ($argc==1) {

    echo "\n\n";
    echo "------------------------------------\n";
    echo "| TestProjectHttp Commander (v1.0) |\n";
    echo "------------------------------------\n\n";
    echo "Usage: console.php [parameters...]\n\n";
    echo "The following commands are avalible:\n";
    echo "- money [login] [sum] [count] - Example: php.exe console.php money ivan 100 5\n";
    echo "\n\n";

   } else {

     $conn = mysqli_connect($server, $user, $pass);

     if (!$conn) {
         echo "Connection failed: " . mysqli_connect_error();
         exit();
        }

     $db = mysqli_select_db($conn,$database);
     if(!$db) {
            echo "Database not found";
            exit();
           } else {
               
               if ($argc==5 && $argv[1]=="money")  { 

                    $sql = "select * from users where login='$argv[2]'";
	            $result = mysqli_query($conn,$sql);

	            if(mysqli_num_rows($result) == 1) {

                    $row = mysqli_fetch_assoc($result);
                    $uid = $row["uid"];
                    
                    for ($x = 0; $x < $argv[4]; $x++) {
                         $sql = "INSERT INTO `award` (`uid`, `type`, `count`, `desc`) VALUES ('$uid','creditmoney','$argv[3]','$argv[3] EUR')";
                                             
                         if (mysqli_query($conn,$sql)) {
                           echo "[ OK ] ";
                         }  else {
                           echo "[ ER ] "; 
                         }
                         echo $sql;
                         echo "\n";


                        }

	          } else {
	            echo "Error: User not found\n";
                  }

         }

      }
   }
?>