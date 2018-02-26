<?php
include("connection.php");
session_start();

	function wash($var) //function used for checking data
		{
			if (get_magic_quotes_gpc())
				{
					$var=stripslashes($var);
				}
			return mysql_real_escape_string ($var);
		}
$username=$_POST['username'];
$password=$_POST['password'];




$sql="Select * from account where username='$username' and password='$password'";
$result=mysql_query($sql);
if ($result) //fetching  results
			{
				if (mysql_num_rows($result) > 0)
					{
						session_regenerate_id();
						$sample=mysql_fetch_assoc($result);
						$_SESSION['user']=$username=$_POST['username'];
						session_write_close();
						header('location: home.php'); //if true you will be redirected to home.php
						exit();
					}
				else
					{
//						echo '<b>'.'Incorrect Login Preferences!'.'</b>';
						header('location: login.php'); //if not you will be redirected to index.php
						exit();
					}
				}
		else
			{
				echo 'Error/s Detected: '.mysql_error(); //used for error purposes
			}
?>
?>
