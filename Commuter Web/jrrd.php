<?php
session_start();
if($_SESSION['myvalue']){
	echo '<!DOCTYPE html>
<html>
<head>
<title>RECEPTION FORUM</title>
<link rel="stylesheet" href="jstyle.css" type="text/css" />
</head>
<body>
  <div class="container">
    <div class="login">
      <h1>Register</h1>
	  <br>
	
	  <a href=jsource.php class="myButton">
<p>Register </p></a>

<br><br>
<a href=jpay.php class="myButton"><p>Renewal</p></a>
<br><br>
<a href=jdetail.php class="myButton"><p>Details</p></a>
<br>
<br>

    </div>
  </div>
</body>
</html>';
}
else {
$dts = date('d-m-Y',strtotime("3 months")); 
	echo '<h1><font color="red">ACCESS DENIED'.$dts.'</font></h1>'; 

}
?>
