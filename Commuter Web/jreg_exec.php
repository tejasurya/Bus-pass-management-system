<?php
	//Start session
	session_start();
 
	//Include database connection details
	include('jdbconnect.php');
 
	//Array to store validation errors
	
	//Validation error flag
	$errflag = false;
 
	$fullname=$_POST['fullname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
	$address = $_POST['address'];
	
   $qry1="SELECT * FROM `user details` WHERE User_Name='$username'";
	$result=mysql_query($qry1);
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 0 ) {
			mysql_query("INSERT into `user details` (User_Name,Password,Full_Name,Email,Phone_Number,Address) VALUES ('$username','$password','$fullname','$email','$phonenumber','$address')");
	        $errflag = true;	
		if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: jindexreg.php");
				exit();
			}
		}
		else {
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_FIRST_NAME'] = $member['username'];
			$_SESSION['SESS_LAST_NAME'] = $member['password'];
			session_write_close();
			header("location: jregister1.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>