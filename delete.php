<?php

 // connect to the database
 include('config.php');
 
 if (isset($_GET['id']) && is_numeric($_GET['id'])){
   $id = $_GET['id'];
 	// delete the entry
 	$result = mysql_query("DELETE FROM data_123 WHERE id=$id")
 	or die(mysql_error());
 	header("Location: displaydata.php");
 }else{
 	header("Location: displaydata.php");
 }
 ?>
