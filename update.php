<html>
<body>
  <?php
		include('config.php');
		$con = mysql_connect ($host,$user,$pw);
        if (!$con){
            die ("Can't connect:" . mysql_error());
        }

        mysql_select_db("data",$con);

		if(isset($_POST['update'])){
			$query="UPDATE data_123
			SET Name='$_POST[name]', Date='$_POST[date]'
			WHERE ID='$_POST[hidden]'";
			mysql_query($query,$con);
		}
        
        $sql ="SELECT * FROM data_123";
        $mydata = mysql_query($sql,$con);
        echo "<table border='1' cellpadding='5'>";
        echo "<tr><th>User ID:</th><th>User Name:</th><th>Date:</th><th></th><th></th></tr>";

        while($record = mysql_fetch_array($mydata)){
            // Print out the contents of each row into a table
            echo "<form action=update.php method=post>";
            echo " <tr><td>";
            echo $record['ID'];
            echo "<td>" . "<input type = varchar name = name value = " . $record['Name'] . " </td>";
            echo "<td>" . "<input type = date name = date value = " . $record['Date'] . " </td>";
            echo "<td>" . "<input type = hidden name = hidden value = " .$record['ID'] . " </td>";
            echo "<td>" . "<input type = submit id = update name = update value = update" . " </td>";
            echo " </form>";
        }

        echo "</table>";
        mysql_close($con);
        ?>
        <a href="DisplayData.php">Display Data</a><br>
        <a href="memberform.php">Add New Record</a><br>
	<?php
	?>
</body>
</html>
