<?php
	    include("database.php");
	    session_start();
	 
	    function Destroy() {
	        unset($_SESSION['UID']);
	        unset($_SESSION['USERNAME']);
	        header("location: index.php");
	    }
	 
	    if( isset($_SESSION['USERNAME'])) {
	        $UID = $_SESSION['UID'];
	        $username = $_SESSION['USERNAME'];
                $qry = "select * from users where login='$username'";
	        $result = mysqli_query($conn,$qry);
	        if(mysqli_num_rows($result) != 1) { Destroy(); }
	    } else { Destroy(); }
?>