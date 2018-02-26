<!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<html>
<head>
       <title>Connection</title>
</head>
<body>
           <?php
           $db_name="alumni";
           $con = mysql_connect("localhost","root","") or die ("Connection Failed!");
           $db=mysql_select_db($db_name,$con)   or die ("Connection Failed!");
           ?>
</body>
</html>
