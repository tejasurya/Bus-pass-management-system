<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
	$_SESSION['myvalue'] = "";
?>
<!DOCTYPE html>
<head>
  <title>Login Form</title>
<LINK REL=StyleSheet HREF="jstyle.css" TYPE="text/css" MEDIA=screen>
<script>
alert("Registered Successfully")
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
	
}
</script>

</head>
<body background="jbgimg.jpg">
  <div class="container">
    <div class="login">
      <h1>Login </h1>
      <form name="myForm" action="jlogin_exec.php"
	onsubmit="return validateForm()" method="post">
        <p><input type="text" name="username" value="" placeholder="Username" required></p>
        <p><input type="password" name="password" value="" placeholder="Password" required></p>
        <p class="submit"><input type="submit" name="commit" value="Login" required></p>
      </form>
    </div>
  </div>
  <center>
  <form method="post" action="jregister.php">
	   <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
        <p class="submit"><input type="submit" name="commit" value="Register?"></p>
      </form>
    </body>
	</center>
</html>
