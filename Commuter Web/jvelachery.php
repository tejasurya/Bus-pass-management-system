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
<title>Beach-Velachery</title>
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
			<option value="Chepak">Chepak</option>
			<option value="Beach">Beach</option>
			<option value="Chintadripet">Chintadripet</option>
			<option value="Fort">Fort</option>
			<option value="Indira Nagar">Indira</option>
			<option value="Kotturpuram">Kotturpuram</option>
			<option value="Mandaveli">Mandaveli</option>
			<option value="Perungudi">Perungudi</option>
			<option value="Thiruvanmaiyur">Thiruvanmaiyur</option>
			<option value="Thiruvallikeni">Thiruvallikeni</option>
			<option value="Velachery">Velachery</option>
  </select>
</p>
			<p>DESTINATION:<select name="destination">
			<option value="Chepauk">Chepauk</option>
			<option value="Beach">Beach</option>
			<option value="Chintadripet">Chintadripet</option>
			<option value="Fort">Fort</option>
			<option value="Indira Nagar">Indira</option>
			<option value="Kotturpuram">Kotturpuram</option>
			<option value="Mandaveli">Mandaveli</option>
			<option value="Perungudi">Perungudi</option>
			<option value="Thiruvanmaiyur">Thiruvanmaiyur</option>
			<option value="Thiruvallikeni">Thiruvallikeni</option>
			<option value="Velachery">Velachery</option>
  </select>
</p>
 <p class="submit"><input type="submit" name="commit" value="Register"></p>
      </form>
    </div>
  </div>
</body>
</html>';
}
else echo '<h1><font color="red">ACCESS DENIED</font></h1>';
?>
