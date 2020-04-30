<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<!DOCTYPE html>
<html>
<head>
<title>Login & Registration System</title>
<link rel="stylesheet" href="jstyle.css" type="text/css" />
<script>
alert("Username already exists");
function validateForm()
 {
    var x = document.forms["myForm"]["username"].value;
    if (x == null || x == "") 
	{
        alert("Userame must be filled out");
        return false;
    }
    var x1 = document.forms["myForm"]["password"].value;
    if (x1 == null || x1 == "")
	{
        alert("Password must be filled out");
        return false;
    }
	var x2 = document.forms["myForm"]["email"].value;
    if (x2 == null || x2 == "") 
	{
        alert("Email must be filled out");
        return false;
    }
	var x3 = document.forms["myForm"]["phonenumber"].value;
    if (x3 == null || x3 == "") 
	{
        alert("Phonenumber can't be empty");
        return false;
	}
	var x4 = document.forms["myForm"]["confirmpassword"].value;
    if (x1!=x4)
	{
        alert("Passwords must match,Re-enter your password");
        return false;
	}
	if (x3.length<10 || x3.length>10) 
	{
        alert("Phone Number should be of length 10");
        return false;
    }
}
</script>
</head>
<body>
  <div class="container">
    <div class="login">
      <h1>Register </h1>

<form name="myForm" action="jreg_exec.php"
onsubmit="return validateForm()" method="post">

<p><input type="text" name="username" value="" placeholder="Username"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p><input type="password" name="confirmpassword" value="" placeholder="Confirm Password"></p>
        <p><input type="text" name="email" value="" placeholder="Email"></p>
        <p><input type="text" name="phonenumber" value="" placeholder="Phone Number"></p>
		<p><input type="text" name="address" value="" placeholder="Address"></p>
        <p class="submit"><input type="submit" name="commit" value="Register"></p>
      </form>
    </div>
  </div>
</body>
</html>
