<html>
    <head>
        <title>Member ID</title>
    </head>
    <body>
    <?php

    $db = "data";// holds the database name
    $host = "localhost";//the server name, just type localhost
    $user = "root"; //root is default
    $pw = ""; //no password

        $con = mysql_connect ($host,$user,$pw);
        if (!$con){
            die ("Can't connect:" . mysql_error());
        }
        mysql_select_db("data",$con);
        $sql ="SELECT * FROM data_123";
        $mydata = mysql_query($sql,$con);
        while($record = mysql_fetch_array($mydata)){
            echo "<table border='1' cellpadding='8'>";
            echo "<tr> <th>User ID</th><th>User Name</th><th>Date</th><th></th><th></th></tr>";
            // Print out the contents of each row into a table
            echo "<tr><td>"; 
            echo $record['ID'];
            echo "</td><td>"; 
            echo $record['Name'];
            echo "</td><td>"; 
            echo $record['Date'];
            echo '<td><b><font color="#663300"><a href="edit_2.php?id=' . $record['ID'] . '">Edit</a></font></b></td>';
            echo '<td><b><font color="#663300"><a href="delete.php?id=' . $record['ID'] . '">Delete</a></font></b></td>';
            echo "</td></tr>";
            echo "</tr>";
        }
        echo "</table>";
        mysql_close($con);
        ?>
        <a href="memberform.php">Add New Record</a>
    </body>
</html>
