<?php $mysql_hostname = "localhost";
 $mysql_user = "root"; 
 $mysql_password = "mharish2797"; 
 $mysql_database ="Commuter";
 $prefix = ""; 
 $bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
 mysql_select_db($mysql_database, $bd) or die("Could not select database"); 
 if(!$bd) echo "fail"; 
 else { 
 echo "Connected"; } ?>