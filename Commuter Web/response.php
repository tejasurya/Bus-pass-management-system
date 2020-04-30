<html>
<head>
<title>Elavon Payment Gateway redirect sample php code</title>

<?


$timestamp = $_POST['TIMESTAMP'];
$result = $_POST['RESULT'];
$orderid = $_POST['ORDER_ID'];
$message = $_POST['MESSAGE'];
$authcode = $_POST['AUTHCODE'];
$pasref = $_POST['PASREF'];
$realexmd5 = $_POST['MD5HASH'];

// -------------------------------------------------------------
// Replace these with the values you receive from Elavon Payment Gateway support.If you have not yet received these values please contact us.
$merchantid = "yourMerchantId";
$secret = "yourSecret";

//---------------------------------------------------------------
//Below is the code for creating the digital signature using the md5 algorithm. 
//This digital siganture should correspond to the 
//one Elavon Payment Gateway POSTs back to this script and can therefore be used to verify the message Elavon Payment Gateway sends back.

$tmp = "$timestamp.$merchantid.$orderid.$result.$message.$pasref.$authcode";
$md5hash = md5($tmp);
$tmp = "$md5hash.$secret";
$md5hash = md5($tmp);

//Check to see if hashes match or not
if ($md5hash != $realexmd5) {
	echo "hashes don't match - response not authenticated!";
}

/* --------------------------------------------------------------
 send yourself an email or send the customer an email or update a database or whatever you want to do here.

 The next part is important to understand. The result field sent back to this
 response script will indicate whether the card transaction was successful or not.
 The result 00 indicates it was while anything else indicates it failed. 
 Refer to the Elavon Payment Gateway documentation to get a full list to response codes.


IMPORTANT: Whatever this response script prints is grabbed by Elavon Payment Gateway
and placed in the template again. It is placed wherever the comment "<!--E-PAGE TABLE HERE-->"
is in the template you provide. This is the case so that from a customer's perspective, they are not suddenly removed from 
a secure site to an unsecure site. This means that although we call this response script the 
customer is still on the Elavon Payment Gateway site and therefore it is recommended that a HTML link is
printed in order to redirect the customer back to the merchants site.
*/

?>

<body bgcolor="#FFFFFF">
<font face=verdana,helvetica,arial size=2>

<?
if ($result == "00") {
?>

Thank you
<br/><br/>
To continue browsing please <a href="http://yourdomain.com"><b><u>click here</u></b></a>
<br/><br/>

<?
} else {
?>

<br/><br/>
There was an error processing your subscription.  
To try again please <a href="http://yourdomain.com"><b><u>click here</u></b></a><br><BR>
Please contact our customer care department at <a href="mailto:custcare@yourdomain.com"><b><u>custcare@yourdomain.com</u></b></a>
or if you would prefer to subscribe by phone, call on 01 2839428349
NOTE: This link should bring the customer back to a place where an new orderid is
created so that they can try to use another card. It is important that a new orderid
is created because if the same orderid is sent in a second time Elavon Payment Gateway will
reject it as a duplicate order even if the first transaction was declined.


<?
}
?>


</font>

</body>
</html>
