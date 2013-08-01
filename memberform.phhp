<html>
    <head>
        <title>Member ID</title>
    </head>
    <body>
        <h1>Please Enter User Information:</h1>
        <form method="post" action="memberform.php">
            Name:<input type="varchar" name="name"><br>
            Date:<input type="date" name ="date"><br>
            <input type="submit" name="submit" value="Confirm">
        </form>
    <?php

    $db = "data";// holds the database name
    $host = "localhost";//the server name, just type localhost
    $user = "root"; //root is default
    $pw = ""; //no password

        if(isset($_POST['submit'])){
            $con = mysql_connect ($host,$user,$pw);
        if (!$con){
            die ("Can't connect:" . mysql_error());
        }
        mysql_select_db("data",$con);
        $sql = "INSERT INTO data_123 (ID,Name,Date) VALUES('$_POST[ID]','$_POST[name]','$_POST[date]')";
        $results = mysql_query($sql,$con);

        if($results){
            print "<script language='Javascript'>document.location.href='DisplayData.php'
            </script>";
        }mysql_close($con);
        }
    ?>
    </body>
</html>
