 <?php
session_start();
	
if($_SESSION['myvalue']){
	include('jdbconnect.php');
	$username=$_SESSION['myvalue'];
	$source=$_POST['source'];
	$destin=$_POST['destination'];
	$fare=$_SESSION['sourc'];
	mysql_query("UPDATE `user details` SET `Source`='$source' WHERE User_Name='$username'");
	mysql_query("UPDATE `user details` SET `Destination`='$destin' WHERE User_Name='$username'");
		echo '<!DOCTYPE html>
<html>
<head>
<title>DETAILS</title>
<link rel="stylesheet" href="jstyle.css" type="text/css" />
</head>
<body>
  <div class="container">
    <div class="login">
      <h2>Fare Details:</h2>
	    <br>
    <h1>Source: '.$source.' </h1>
	<br>
	  <h1>Destination: '.$destin.' </h1>
	  <br>
	    <h1>Fare: '.$fare.' </h1>
    </div>
  </div>
</body>
</html>';
}
else echo '<h1><font color="red">ACCESS DENIED</font></h1>';
?>
