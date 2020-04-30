<?php
	//Start session
	session_start();
 
	//Include database connection details
	include('jdbconnect.php');
 
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
 
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
 
	//Sanitize the POST values
	$username = clean($_POST['username']);
	$password = clean($_POST['password']);
 
    $_SESSION['myvalue'] = $username;	
 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location:jlogin.php");
		exit();
	}
 
	//Create query
	$qry="SELECT * FROM `user details` WHERE User_Name='$username' AND Password='$password';";
	$result=mysql_query($qry);
 
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_FIRST_NAME'] = $member['username'];
			$_SESSION['SESS_LAST_NAME'] = $member['password'];
			
			header("location: jrrd.php");
			session_write_close();
			exit();
		}else {
			//Login failed
			//$errmsg_arr[] = '<font size=5 color ="black">Invalid Username or Password </font>';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: jindex1.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>