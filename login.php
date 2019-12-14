<?php

/** 
 * @Autor Startsev Maxim
 * @Copyright 2019
 * @Description Скрипт входа пользователя в личный кабинет
 */
	    include("database.php");
	 
	    session_start();
	 
	    function Fix($str) {
	        $str = trim($str);
	        $str = stripslashes($str);
              /*  $str = mysqli_real_escape_string($str);  */
	        return $str;
	    }
	 
	    $errmsg = array();
	     
	    $errflag = false;
	 
	    $username = Fix($_POST['username']);
	    $password = Fix($_POST['password']);
            
	 
	    if($username == '') {
	        $errmsg[] = 'Username missing';
	        $errflag = true;
	    }
	 
	    if($password == '') {
	        $errmsg[] = 'Password missing';
	        $errflag = true;
	    }
	 
	 
	    if($errflag) {
	        $_SESSION['ERRMSG'] = $errmsg;
	        session_write_close();
	        header("location: index.php");
	        exit();
	    }
	 
	    $qry = "select * from users where login='$username' and password='$password'";
	    $result = mysqli_query($conn,$qry);
	     
	    if(mysqli_num_rows($result) == 1) {
	        while($row = mysqli_fetch_assoc($result)) {
	            $_SESSION['UID'] = $row['UID'];
	            $_SESSION['USERNAME'] = $username;
	            session_write_close();
	            header("location: member.php");
	        }

	    } else {
	        $_SESSION['ERRMSG'] = "Invalid username or password";
	        session_write_close();
	        header("location: index.php"); 
	        exit(); 
	    }
	?>