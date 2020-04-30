<html>
<head>
<title>Elavon Payment Gateway PHP redirect sample code</title>

<?

//Replace these with the values you receive from Elavon Payment Gateway
$merchantid = "yourMerchantId";
$secret = "yourSecret";

//The code below is used to create the timestamp format required by Elavon Payment Gateway
$timestamp = strftime("%Y%m%d%H%M%S");
mt_srand((double)microtime()*1000000);

/*

 orderid:Replace this with the order id you want to use.The order id must be unique.
 In the example below a combination of the timestamp and a random number is used.

*/

$orderid = $timestamp."-".mt_rand(1, 999);


/*
In this example these values are hardcoded. In reality you may pass 
these values from another script or take it from a database. 
*/
$curr = "EUR";
$amount = "3000";

/*-----------------------------------------------
Below is the code for creating the digital signature using the MD5 algorithm provided
by PHP. you can use the SHA1 algorithm alternatively. 
*/
$tmp = "$timestamp.$merchantid.$orderid.$amount.$curr";
$md5hash = md5($tmp);
$tmp = "$md5hash.$secret";
$md5hash = md5($tmp);

?>

</head>

<body bgcolor="#FFFFFF">

<!--
https://redirect.elavonpaymentgateway.com/epage.cgi is the script where the hidden fields
are POSTed to.

The values are sent to Elavon Payment Gateway via hidden fields in a HTML form POST.
Please look at the documentation to show all the possible hidden fields you
can send to Elavon Payment Gateway.

Note:> 
The more data you send to Elavon Payment Gateway the more details will be available
on our reporting tool, Reporting, for the merchant to view and pull reports 
down from.

Note:>
If you POST data in hidden fields that are not a Elavon Payment Gateway hidden field that data 
will be POSTed back directly to your response script. This way you can maintain
data even when you are redirected away from your site

-->
<form action="https://redirect.elavonpaymentgateway.com/epage.cgi" method=post>

<input type=hidden name="MERCHANT_ID" value="<?=$merchantid?>">
<input type=hidden name="ORDER_ID" value="<?=$orderid?>">
<input type=hidden name="CURRENCY" value="<?=$curr?>">
<input type=hidden name="AMOUNT" value="<?=$amount?>">
<input type=hidden name="TIMESTAMP" value="<?=$timestamp?>">
<input type=hidden name="MD5HASH" value="<?=$md5hash?>">
<input type=hidden name="AUTO_SETTLE_FLAG" value="1">

<input type=submit value="Proceed to secure server">
</form>

<font face=verdana>
<font size=3><b>php Sample - Elavon Payment Gateway redirect</b></font>
<p>
<font size=2>Select View/Source to see the output
<ul>
<li>PHP Sample - Elavon Payment Gateway Sample PHP redirect code
<li>You can add the text here which you would like the customer to view before redirecting to
the Elavon Payment Gateway payment card entry page.
</ul>
</font>

</body>
</html>
