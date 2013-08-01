<?php
 // Database Variables
 $host = 'localhost';
 $user = 'root';
 $pw = '';
 $db = 'data';
 
 // Connect to Database
 $connection = mysql_connect($host, $user, $pw)
 or die ("Could not connect to server ... \n" . mysql_error ());
 mysql_select_db($db) 
 or die ("Could not connect to database ... \n" . mysql_error ());
?>
