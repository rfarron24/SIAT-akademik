<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title>saving module</title>
</head>
<body>
 <?php
include("connection.php");
$id=$_POST['alumniID'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$contact=$_POST['contact'];
$savequery="insert into personalinfo values('$id','$fname','$lname','$contact')";
if(!mysql_query($savequery))
{
    die("Error in saving the information!");
}
echo "You have succesfully save the information!";
header('location: register.php'); //if true you will be redirected to home.php
						exit();
mysql_close($con);
?>
</body>
</html>
