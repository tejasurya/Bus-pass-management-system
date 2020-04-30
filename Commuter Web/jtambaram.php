<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
	$_SESSION['sourc']=0;
	$skr=5;
if($_SESSION['myvalue']){
	echo '	
<!DOCTYPE html>
<html>
<head>
<title>Beach-Tambaram</title>
<link rel="stylesheet" href="jstyle.css" type="text/css" />
<script>
function validateForm()
 {
	 
	var x2 = document.forms["myForm"]["source"].value;
	var x4 = document.forms["myForm"]["destination"].value;
    if (x2==x4)
	{
        alert("SOURCE and DESTINATION cannot be the same!");
        return false;
	}
	else{
		var s=0;
		var x="Chengalpattu";
		var n = x2.localeCompare(x4);
	if(n!=0) $skr=1;
	
	}
}
</script>
</head>
<body>
  <div class="container">
    <div class="login">
      <h1>Register </h1>

<form name="myForm" action="jpay.php"
onsubmit="return validateForm()" method="post">

		<p>SOURCE:<select name="source">
			<option value="Chengalpattu">Chengalpattu</option>
			<option value="Beach">Beach</option>
			<option value="Egmore">Egmore</option>
			<option value="Fort">Fort</option>
			<option value="Park">Park</option>
			<option value="Chetpet">Chetpet</option>
			<option value="Chrompet">Chrompet</option>
			<option value="Mambalam">Mambalam</option>
			<option value="Guindy">Guindy</option>
			<option value="Tambaram">Tambaram</option>
  </select>
</p>
	<p>DESTINATION:<select name="destination">
			<option value="Chengalpattu">Chengalpattu</option>
			<option value="Beach">Beach</option>
			<option value="Egmore">Egmore</option>
			<option value="Fort">Fort</option>
			<option value="Park">Park</option>
			<option value="Chetpet">Chetpet</option>
			<option value="Chrompet">Chrompet</option>
			<option value="Mambalam">Mambalam</option>
			<option value="Guindy">Guindy</option>
			<option value="Tambaram">Tambaram</option>
  </select>
</p>
 <p class="submit"><input type="submit" name="commit" value="Register"></p>
      </form>
    </div>
  </div>
</body>
</html>';
$_SESSION['sourc']=$skr;
}
else echo '<h1><font color="red">ACCESS DENIED</font></h1>';
?>
