<html>
<body>  	
	<?php
	include('config.php');
	$con = mysql_connect ($host,$user,$pw);
	if(isset($_GET['id'])){
		$id=$_GET['id'];
	}

	$sql = ("UPDATE  FROM data_123 WHERE id=$id");
	$results = mysql_query($sql);
	if($results){
		location.redirect("Display.Data.php");
	}
	$mydata = mysql_query($sql,$con);
    while($record = mysql_fetch_array($mydata)){
	?>
	<form action = "edit_2.php" method = "POST">
	<input type ="varchar" name ="name" value" =<?php echo $record['id']; ?>"/><br/>
	<input type="date" name="date" value="<?php echo $record['id']; ?>"/><br/><br/>
	<br/>
		<input type="submit" name="update" value="update"/>
		</form>
	<?php
	}
	?>
</body>
</html>
