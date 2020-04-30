<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
if($_SESSION['myvalue']){
	echo '	

<!DOCTYPE html>
<html>
<head>
<title>JOURNEY</title>
<link rel="icon" type="image/png" href="jbgimg1f.png"/>
<link rel="stylesheet" href="jstyle.css" type="text/css" />
</head>
<body>
  <div class="container">
    <div class="login">
      <h1>Register </h1>
	  <a href=jtambaram.php class="myButton">
<p>Beach-Chengalpet</p></a><br><br>
<a href=jcentral.php class="myButton"><p>Beach-Central Thiruttani</p></a><br><br>
<a href=jvelachery.php class="myButton"><p>Beach-Velachery</p></a><br><br>
    </div>
  </div>
</body>
</html>';
}
else echo '<h1><font color="red">ACCESS DENIED</font></h1>';
?>