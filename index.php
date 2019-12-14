<?php
	$err = "";
	    session_start(); 
	    if(isset($_SESSION['ERRMSG']) &&is_array($_SESSION['ERRMSG']) &&count($_SESSION['ERRMSG']) >0 ) { 

	        $err = "<table>";
	        foreach($_SESSION['ERRMSG'] as $msg) {
	            $err .= "<tr><td>" . $msg . "</td></tr>";
	        }
	        $err .= "</table>";
	        unset($_SESSION['ERRMSG']);
	    }
?>
<html>
  <head>
    <title>Enter data</title>
	    </head>
	    <body>
	        <form action="login.php" method="post">
	            <table align="center">
	                <tr>
	                    <td><?php echo $err; ?></td>
	                </tr>
	                <tr>
	                    <td>Login</td>
	                    <td><input type="text" name="username"></td>
	                </tr>
	                <tr>
	                    <td>Password</td>
	                    <td><input type="password" name="password"></td>
	                </tr>
	                <tr>
	                    <td><input type="submit" value="Enter"></td>
	                </tr>
	            </table>
	        </form>
	    </body>
	</html>