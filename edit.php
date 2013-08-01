<html>
<body>
  <?php
	include('config.php');
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		if(isset($_POST['submit'])){
			$name=$_POST['name'];
			$date=$_POST['date'];
			$query3=mysql_query("UPDATE data_123 
				SET name='$name', date='$date' 
				WHERE id='$id'");
			if($query3){
				header('location:DisplayData.php');
			}
		}

		$query1=mysql_query("data");
		$query2=mysql_fetch_array($query1) or die($query1."<br/><br/>".mysql_error());
		?>
		<form method="post" action="">
			Name:<input type="varchar" name="name" value="<?php echo $query2['name']; ?>"/><br/>
			Date:<input type="date" name="date" value="<?php echo $query2['date']; ?>"/><br/><br/>
			<br/>
			<input type="submit" name="submit" value="update"/>
		</form>
		<?php
	}
	?>
</body>
</html>
