 <?php
session_start();
	
if($_SESSION['myvalue']){
	include('jdbconnect.php');
	$username=$_SESSION['myvalue'];
	$qry="SELECT * FROM `user details` WHERE User_Name='$username';";
	$result=mysql_query($qry);
	$member = mysql_fetch_array($result, MYSQL_ASSOC);
	$email=$member['Email'];
	$fname=$member['Full_Name'];
	$phone=$member['Phone_Number'];
	$address=$member['Address'];
	$source=$member['Source'];
	$destin=$member['Destination'];
	$fare=$member['Fare'];
	echo '<!DOCTYPE html>
<html>
<head>
<title>DETAILS</title>
<link rel="stylesheet" href="jstyle.css" type="text/css" />
</head>
<body>
  <div class="container">
    <div class="login">
      <h2>User Details:</h2>
	  <br>
	    <h1>Full_name: '.$fname.' </h1>
	  <br>
	
	  <h1>User_Name: '.$username.' </h1>
<br>
	  <h1>Email ID: '.$email.' </h1>
<br>
  <h1>Phone_Number: '.$phone.' </h1>
<br>
  <h1>Address: '.$address.' </h1>
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
